<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        \App\Models\Marque::create(["marque"=>'mark1']);
        \App\Models\Unite::create(["unite"=>'kg']);
        \App\Models\Famille::create(['libelle'=>'famille1',"image"=>'test']);
        \App\Models\SousFamille::create(['libelle'=>'famille1',"image"=>'test',"famille_id"=>1]);
        \App\Models\Produit::factory(20)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
