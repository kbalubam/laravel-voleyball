<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            [
                'nom'=>'barca',
                'ville'=>'barcelone',
                'pays'=>'espagne',
                'maxjoueur'=>12,
                'continent_id'=>1

            ]
        ]);
    }
}
