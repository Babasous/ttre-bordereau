<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FournisseursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fournisseurs')->insert([
            [
                'code_pays' => 'BE',
                'pays_fournisseur' => 'Belgique',
                'nom_fournisseur' => '115 Bld Waterloo 1000 Bruxelles',
                'adresse_fournisseur' => '',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'BE',
                'pays_fournisseur' => 'Belgique',
                'nom_fournisseur' => 'SPF Finance',
                'adresse_fournisseur' => 'Nord Galaxy',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'BE',
                'pays_fournisseur' => 'Belgique',
                'nom_fournisseur' => 'SPF Sante',
                'adresse_fournisseur' => '5 Avenue Galilée 1210 Bruxelles',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'FR',
                'pays_fournisseur' => 'France',
                'nom_fournisseur' => 'Capgemini',
                'adresse_fournisseur' => '15 Avenue Charles De Gaule 7500 Paris',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'LU',
                'pays_fournisseur' => 'Luxembourg',
                'nom_fournisseur' => 'KBC Banque',
                'adresse_fournisseur' => '89b Parc d\'Activités Capellen 8308 Mamer',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code_pays' => 'DE',
                'pays_fournisseur' => 'Allemegne',
                'nom_fournisseur' => 'RICOH',
                'adresse_fournisseur' => 'Vahrenwalder Strasse 315, 30179 Hanovre',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
