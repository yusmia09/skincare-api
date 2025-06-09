<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Sensitive Skin Care BiomeRepair Barrier Revive Cream ',
            'merk' => 'Labore',
            'size' => '100ml',
            'price' => 250000,
            'description' => 'LABORÉ Barrier Revive Cream adalah skin barrier moisturizer dengan tekstur krim yang telah dilengkapi teknologi khusus sehingga mampu meredakan kemerahan dalam 15 menit saja. Moisturizer satu ini akan menyerap ke dalam kulit terkering dan meningkatkan kelembapan kulit kamu hingga 50%.',
            'ingredients' => 'Aqua, Butylene Glycol, Dicaprylyl Carbonate, Butyrospermum Parkii Butter, Cetearyl Alcohol, Glycerin, Dimethicone, Squalane, Propanediol, Bifida Ferment Lysate, Hydroxyethyl Acrylate/​Sodium Acryloyldimethyl Taurate Copolymer, Saccharide Isomerate, Allantoin, Bisabolol, 1,2-Hexanediol, Cetearyl Glucoside, Glyceryl Stearate, Xanthan Gum, Polysilicone-11, Chlorphenesin, PEG-100 Stearate, Tocopheryl Acetate, Disodium EDTA, Caprylhydroxamic Acid, Sodium Hyaluronate, Sodium Citrate, Citric Acid, Phragmites Karka Extract, Poria Cocos Extract, Mirabilis Jalapa Extract, Sodium Benzoate, Glucose',
            'image' => 'product/Labore-BarierCream.jpg'
        ]);

        Product::create([
            'name' => 'Cherry Blossom Betaine Micellar Water',
            'merk' => 'Glad2Glow',
            'size' => '130ml',
            'price' => 30000,
            'description' => 'Micellar water dengan kandungan Cherry Blossom dan Betaine, terasa menyegarkan kulit dan seringan toner. Membersihkan makeup waterproof dan kotoran dengan sekali usapan, lembut di mata, serta memberikan rasa segar dan lembab, tanpa rasa lengket setelah membersihkan wajah.',
            'ingredients' => 'air, PEG-6 Kaprilat/​Kaprat Gliserida, Propilen GlikolBetain​, Butilen Glikol, Ekstrak Bunga Prunus Speciosa, Sorbitol, Dinatrium EDTA, KlorfenesinPoliaminopropil Biguanida',
            'image' => 'product/G2G-MicellarWater.jpg'
        ]);

        Product::create([
            'name' => 'Lightening Face Toner', 
            'merk' => 'Wardah',
            'size' => '125ml',
            'price' => 27500,
            'description' => 'Wardah Lightening Face Toner, toner dengan formula pH balance yang menyegarkan sekaligus mempersiapkan dan menjaga keseimbangan pH kulit alami kulit untuk membantu penyerapan produk selanjutnya. Dikombinasikan dengan Advanced Niacinamide yang bantu kulit tampak lebih cerah bercahaya dengan pemakaian teratur. Cocok untuk semua jenis kulit.',
            'ingredients' => 'DOUBLE LIGHTENING ACTIVES, PH BALANCE, ALOE VERA + PRO VITAMIN B5. Aqua, Triethanolamine, Glycolic Acid, Phenoxyethanol, Niacinamide, Trideceth-9, PEG-40 Hydrogenated Castor Oil, Ethylhexylglycerin, Propylene Glycol, Tocopheryl Acetate, Ulva Lactuca Extract, Polysorbate 20, Glycerin, Fragrance, Glycyrrhiza Glabra Root Extract, Potassium Sorbate, Sodium Benzoate.',
            'image' => 'product/WardahLightening.jpg'
        ]);

        Product::create([
            'name' => 'Brightening Sun Lotion Body Serum Sunscreen SPF 30 PA+++',
            'merk' => 'Grace and Glow',
            'size' => '100ml',
            'price' => 38000,
            'description' => 'Merupakan body sunscreen pertama dengan wangi parfum branded/high end. Diformulasi dengan ingredients utama Alpha Arbutin memiliki fungsi untuk mencerahkan warna kulit tidak merata dan membuat kulit tampak bercahaya.',
            'ingredients' => 'Water, glycerin, fragrance, cetearyl alcohol, dimethicone, titanium dioxide, glyceryl stearate, PEG-100 stearate, phenoxyethanol, ammonium acryloyldimethyltaurate/vp copolymer, polysorbate 80, carbomer, triethanolamine, chlorphenesin, silica, ethylhexyl salicylate, octocrylene, cetearyl glucoside, zinc oxide, ethylhexylglycerin, disodium edta, sodium hyaluronate, tocopherol, butyrospermum parkii (shea) butter, simmondsia chinensis (jojoba) seed oil, squalane, alpha-arbutin, arctostaphylos uva-ursi extract, ascorbic acid', 
            'image'=> 'product/GraceandGlowBodySunscreen.jpg',   
        ]);

        Product::create([
            'name' => 'Glycolic Melasyl Bright Instant Glowing Face Serum',
            'merk' => 'LOréal Paris',
            'size' => '15ml',
            'price' => 124100,
            'description' => 'Glycolic Bright Instant Glowing Face Serum dengan konsentrasi optimal 1% Brightening Glycolic Acid, menyamarkan -57% noda hitam, dan mencerahkan untuk kulit tampak glowing lebih merata. Diuji oleh ahli kulit dan terbukti pada kulit Asia.Diformulasikan dengan 1% Brightening Glycolic, terbukti secara klinis mencerahkan kulit seketika dan menyamarkan 57% noda hitam. Diuji oleh ahli kulit dan terbukti pada kulit Asia.',
            'ingredients' => 'Aqua / Water, Caprylyl Methicone, Niacinamide, Alcohol Denat., Butylene Glycol, Glycerin, Hydroxyethylpiperazine Ethane Sulfonic Acid, Caffeine, Potassium Hydroxide, Linalool, Glycolic Acid, 2-Mercaptonicotinoyl Glycine, Sodium Thiosulfate, Sodium Hyaluronate, Phenoxyethanol, Ammonium Acryloyldimethyltaurate/Vp Copolymer, Chlorphenesin, Tocopheryl Acetate, Poloxamer 338, Limonene, Tocopherol, Hydroxyacetophenone, Capryloyl Salicylic Acid, Citronellol, Trisodium Ethylenediamine Disuccinate, Biosaccharide Gum-1, Xanthan Gum, Menthoxypropanediol, Benzyl Alcohol, Benzyl Salicylate, Peg-12 Dimethicone/Ppg-20 Crosspolymer, Ci 17200 / Red 33, Ci 42090 / Blue 1, Parfum / Fragrance.', 
            'image'=> 'product/LorealBrightSerum.jpg',
        ]);

        Product::create([
            'name' => 'New Perfect Uv Sunscreen Skincare Milk',
            'merk' => 'Anessa',
            'size' => '20ml',
            'price' => 203000,
            'description' => 'Anessa Perfect UV Sunscreen Skincare Milk SPF 50+ PA++++.Perlindungan UV terbaik dari Jepang dengan Teknologi Double Protective Veil',
            'ingredients' => 'DIMETHICONE･WATER (AQUA)･ZINC OXIDE･ALCOHOL･DIISOPROPYL SEBACATE･ISODODECANE･OCTOCRYLENE･ETHYLHEXYL SALICYLATE･C12-15 ALKYL BENZOATE･PEG/PPG-9/2 DIMETHYL ETHER･ZEA MAYS (CORN) STARCH･TALC･SILICA･ISOPROPYL MYRISTATE･DIETHYLAMINO HYDROXYBENZOYL HEXYL BENZOATE･TITANIUM DIOXIDE･PEG-9 POLYDIMETHYLSILOXYETHYL DIMETHICONE･DEXTRIN PALMITATE･GLYCERIN･HOMOSALATE･BIS-ETHYLHEXYLOXYPHENOL METHOXYPHENYL TRIAZINE･SODIUM CHLORIDE･PEG/PPG-14/7 DIMETHYL ETHER･TRIMETHYLSILOXYSILICATE･DIPOTASSIUM GLYCYRRHIZATE･CAMELLIA SINENSIS LEAF EXTRACT･POTENTILLA ERECTA ROOT EXTRACT･CITRUS UNSHIU PEEL EXTRACT･SODIUM ACETYLATED HYALURONATE･LAURYL BETAINE･SOLUBLE COLLAGEN･ETHYLHEXYL TRIAZONE･DISTEARDIMONIUM HECTORITE･PEG-10 DIMETHICONE･ISOSTEARIC ACID･TRIETHOXYCAPRYLYLSILANE･POLYGLYCERYL-6 POLYRICINOLEATE･ALUMINUM HYDROXIDE･STEARIC ACID･TRISODIUM EDTA･PEG-6･TOCOPHEROL･BHT･BUTYLENE GLYCOL･BIS-BUTYLDIMETHICONE POLYGLYCERYL-3･SODIUM METABISULFITE･SYNTHETIC FLUORPHLOGOPITE･PHENOXYETHANOL･SODIUM BENZOATE･FRAGRANCE (PARFUM)', 
            'image'=> 'product/Anesa-Sunscreen.jpg',
        ]);

        Product::create([
            'name' => 'Retinol Intense Reactivating Serum',
            'merk' => 'Some By Mi',
            'size' => '30ml',
            'price' => 284000,
            'description' => 'Serum yang mengandung retinol, retinal, dan bakuchiol untuk meningkatkan elastisitas kulit dan mengurangi tanda-tanda penuaan. Serum ini dibuat dengan teknologi liposom elastis yang dipatenkan untuk menghantarkan bahan aktif jauh ke dalam kulit.',
            'ingredients' => 'Water, Cyclohexasiloxane, Dicaprylyl Carbonate, Glycerin, Methylpropanediol, 1,2-Hexanediol, Niacinamide, Hydrogenated Poly(C6-14 Olefin), Panthenol, Tocopheryl Acetate, Piper Methysticum Leaf/Root/Stem Extract, Centella Asiatica Extract, Panax Ginseng Berry Extract, Glycyrrhiza Glabra (Licorice) Root Extract, Ficus Carica (Fig) Fruit Extract, Centella Asiatica Leaf Extract, Centella Asiatica Root Extract, Melaleuca Alternifolia (Tea Tree) Leaf Extract, Artemisia Capillaris Extract, Eclipta Prostrata Extract, Melia Azadirachta Leaf Extract, Elaeis Guineensis (Palm) Oil, Hydrogenated Lecithin, Glyceryl Stearate, Bakuchiol, Palmitic Acid, Sodium Polyacrylate, Stearic Acid, Xanthan Gum, Retinol(0.1 %), Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Butylene Glycol, Dipotassium Glycyrrhizate, Adenosine, Tromethamine, Polyquaternium-51, Beta-Glucan, Cetyl Alcohol, BHT, Collagen, Myristic Acid, BHA, Leuconostoc/Radish Root Ferment Filtrate, Tocopherol, Bifida Ferment Lysate, Ceramide NP, Saccharomyces Ferment, Retinal, Asiaticoside, Glyceryl Polymethacrylate, Madecassoside, Propylene Glycol, Polyglyceryl-10 Oleate, Glycolipids, Glycine Soja (Soybean) Peptide, Resveratrol, Sucrose Distearate, Asiatic Acid, Madecassic Acid, Palmitoyl Tripeptide-1, Moringa Oleifera Seed Oil, PEG-100 Stearate, Polysorbate 20, Fragrance, Ethylhexylglycerin', 
            'image'=> 'product/Somebymi-RetinolSerum.jpg',
        ]);

        Product::create([
            'name' => 'Triple Care sunscreen SPF 40 PA+++',
            'merk' => 'Facetology',
            'size' => '40ml',
            'price' => 99000,
            'description' => 'acetology Triple Care Sunscreen merupakan Era baru Impian Sunscreen kamu, SS facetology dapat digunakan untuk semua type kulit,berbahan dasar air,Mudah meyerap dan tanpa white cast.Spf Sunscreen benar adanya tanpa mengada-ada dan Telah Di Uji nilai SPF nya melalui Invivo test dengan HASIL 51.5 bahkan lebih besar.Hasil dari Uji Invivo telah diserahkan oleh Team Facetology ke Pihak BPOM untuk dilakukan Validasi sehingga penamaan sunscreen Facetology Tercantum Nilai SPF nya pada BPOM',
            'ingredients' => 'Aqua, Sodium Benzoate, Ethylhexylglycerin, Citric Acid, Paraffinum Liquidum, Ethylhexyl Methoxycinnamate, Niacinamide, Butylene Glycol, Tranexamic Acid, Glycerin, Zinc Oxide, Centella Asiatica Extract, Sativa Germ Extract, Titanium Dioxide, Ethylhexyl, Phenoxyethanol, Salicylate, Caprylhydroxamic Acid, Methylene,Bis-benzotriazolyl Tetramethylbutylphenol, Artemisia Vulgaris Extract, Morus Alba Bark Extract, Camellia Japonica Flower Extract, Oryza Sativa Extract, Camellia Sinensis Flower Extract, Broussonetia Papyrifera Bark Extract, Tricholoma Matsutake Extract, Poria Cocos Extract, Semialata Extract, Phragmites Kharka Extract, Pyrus Malus Fruit Extract, Glycine Soja Oil, C13-14 Isoparaffin, Polyglyceryl-3 Diisostearate, Laureth-7, Aluminum Hydroxide, Oryza Madecassoside, Rhus, Polyacrylamide, Potassium Sorbate, Triethoxycaprylylsilane, Propylene Glycol, Decyl Glucoside, Xanthan Gum, Acetyl,Glucosamine.', 
            'image'=> 'product/Facetology-sunscreen.jpg',
        ]);

        Product::create([
            'name' => 'Peach 77% Niacin Essence Toner',
            'merk' => 'Anua',
            'size' => '250ml',
            'price' => 449000,
            'description' => 'Hydrating Toner ini diformulasikan dengan 77% ekstrak buah persik untuk membuat kulit tampak sempurna dengan hasil akhir yang bercahaya. Produk ini dapat membantu mengangkat sel kulit mati dan membersihkan pori-pori menjadikan kulit halus dan berseri. Formulanya yang lembut mengandung niacinamide, panthenol, dan ceramide untuk melembapkan dan mencerahkan kulit.',
            'ingredients' => 'Prunus Persica (Peach) Fruit Extract (77%), 2,3-Butanediol, Water, Glycerin, Dipropylene Glycol, Niacinamide, Butylene Glycol, 1,2-Hexanediol, Lactobacillus Ferment, Methylpropanediol, Streptococcus Thermophilus Ferment, Pyrus Malus (Apple) Juice, Bifida Ferment Lysate, Bacillus Ferment, Phellinus Linteus Extract, Xylose, Galactomyces Ferment Filtrate, Alpha-Arbutin, Prunus Persica (Peach) Flower Extract, Sodium Hyaluronate, Hydrolyzed Vegetable Protein, Polyglyceryl-10 Laurate, Propanediol, Squalane, Acrylates/C10-30 Alkyl Acrylate Crosspolymer, Caprylic/Capric Triglyceride, Diphenyl Dimethicone, Triethylhexanoin, Ethylhexylglycerin, Polyglyceryl-10 Stearate, Adenosine, Hydrogenated Lecithin, Dipotassium Glycyrrhizate, Tromethamine, Sodium Polyacrylate, Panthenol, Sodium Hyaluronate Crosspolymer, Ceramide NP, Allantoin, Cyanocobalamin, Polyglutamic Acid, Sodium Stearoyl Glutamate, Tocopherol, Ascorbyl Glucoside, Betaine Salicylate, Ascorbic Acid, Maltodextrin, Glycine, Serine, Glutamic Acid, Aspartic Acid, Leucine, Alanine, Lysine, Arginine, Tyrosine, Phenylalanine, Proline, Threonine, Valine, Isoleucine, Histidine, Cysteine, Methionine, Xanthan Gum, Fragrance', 
            'image'=> 'product/Anua-PeachToner.jpg',
        ]);

        Product::create([
            'name' => 'Oatmilk Gentle Facial Wash',
            'merk' => 'Harleete',
            'size' => '100gram',
            'price' => 115000,
            'description' => 'Sabun cuci muka yang lembut pada kulit, diformulasikan dengan oat dan susu asli sehingga mampu membersihkan debu dan kotoran pada wajah serta menjaga kelembapan alami kulit. Tidak menyebabkan kulit terasa ‘ketarik’ dan aman digunakan untuk kulit sensitif.',
            'ingredients' => 'Aqua, Glycerin, Polysorbate 20, Cetyl Alcohol, Cetearyl Alcohol, Disodium Cocoyl Glutamate, Butylene Glycol, PEG-40 Hydrogenated Castor Oil, Polyacrylamide, Cocamidopropyl Betaine, C13-14 Isoparaffin, C9-11 Pareth-6, Avena Sativa (Oat) Kernel Extract, Avena Sativa (Oat) Kernel Flour, Oryza Sativa (Rice) Bran Extract, Inositol, Chamomilla Recucita (Matricaria) Extract, Hydroxypropyl Methylcellulose, DMDM Hydantoin, Sodium Hyaluronate, Sodium Lactate, Parfum, Citric Acid, Bisabolol', 
            'image'=> 'product/Harleete-OatFacialWash.jpg',
        ]);
    }

}
