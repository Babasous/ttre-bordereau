<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MaterielsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materiels')->insert([
            [
                'code_materiel' => 'L',
                'nom_materiel' => 'Laptop',
            ],
            [
                'code_materiel' => 'C',
                'nom_materiel' => 'Câbles',
            ],
            [
                'code_materiel' => 'O',
                'nom_materiel' => 'Ordinateurs',
            ],
            [
                'code_materiel' => 'Pr',
                'nom_materiel' => 'Projecteurs',
            ],
            [
                'code_materiel' => 'I',
                'nom_materiel' => 'Imprimantes',
            ],
            [
                'code_materiel' => 'V',
                'nom_materiel' => 'Variés',
            ],
        ]);
    }
}
