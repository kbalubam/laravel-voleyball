<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Photo;
use App\Models\Role;
use Illuminate\Database\Seeder;

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
            RoleSeeder::class,
            EquipeSeeder::class,
            ContinentSeeder::class,
            JoueurSeeder::class,
            PhotoSeeder::class
        ]);
    }
}
