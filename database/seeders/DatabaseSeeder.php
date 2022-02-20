<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\FournisseursSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FournisseursSeeder::class,
            MaterielsSeeder::class,
            BordereauxSeeder::class,
        ]);
        
        // \App\Models\User::factory(10)->create();
    }
}
