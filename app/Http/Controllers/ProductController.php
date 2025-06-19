<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::orderBy('id','asc')->get();
        return response()->json([
            'status'=>true,
            'message'=>'Data ditemukan',
            'data'=>$data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $dataProduct = new Product;
    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'merk' => 'required|string',
        'size' => 'nullable|string',
        'price' => 'required|numeric',
        'description' => 'required',
        'ingredients' => 'nullable',
        'image' => 'nullable|image|max:2048',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status' => false,
            'message' => 'Validasi gagal',
            'errors' => $validator->errors()
        ], 422);
    }

    $dataProduct->name = $request->name;
    $dataProduct->merk = $request->merk;
    $dataProduct->size = $request->size;
    $dataProduct->price = $request->price;
    $dataProduct->description = $request->description;
    $dataProduct->ingredients = $request->ingredients;

    if ($request->hasFile('image')) {
        $dataProduct->image = $request->file('image')->store('product', 'public');
    }

    $dataProduct->save();

    return response()->json([
        'status' => true,
        'message' => 'Sukses menambahkan data',
    ], 201);
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::find($id);
        if($data){
            return response()->json([
                'status'=>true,
                'message'=>'Product ditemukan',
                'data'=>$data
                ], 200);
        } else{
            return response()->json([
                'status'=>false,
                'message'=>'Product Tidak Ditemukan'
                ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dataProduct = Product::find($id);

        if (!$dataProduct) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ], 404);
        }

        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string',
            'merk' => 'sometimes|required|string',
            'size' => 'sometimes|nullable|string',
            'price' => 'sometimes|required|numeric',
            'description' => 'sometimes|required|string',
            'ingredients' => 'sometimes|nullable|string',
            'image' => 'sometimes|nullable|image|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validasi gagal',
                'errors' => $validator->errors()
            ], 422);
        }

        // Ambil data validasi
        $validated = $validator->validated();

        // Update field biasa
        $dataProduct->fill($validated);

        // Tangani file gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($dataProduct->image && Storage::disk('public')->exists($dataProduct->image)) {
                Storage::disk('public')->delete($dataProduct->image);
            }

            // Simpan gambar baru
            $dataProduct->image = $request->file('image')->store('product', 'public');
        }

        // Simpan perubahan
        $dataProduct->save();

        return response()->json([
            'status' => true,
            'message' => 'Sukses mengupdate data',
            'data' => $dataProduct
        ], 200);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dataProduct = Product::find($id);

    if (empty($dataProduct)){
        return response()->json([
            'status' => false,
            'message' => 'Data tidak ditemukan',
        ], 404);
    }
    $dataProduct->delete();

    return response()->json([
        'status' => true,
        'message' => 'Sukses menghapus data',
    ], 200);

    }
}
