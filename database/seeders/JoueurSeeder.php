<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            [
                "nom"=>"roni",
                "prenom"=>"ro",
                "age"=>"30",
                "telephone"=>"0453454343",
                "email"=>"roni@hotmail.com",
                "genre"=>"homme",
                "pays"=>"bresil",
                "role_id"=>2,
                "equipe_id"=>1
            ]
        ]);
    }
}
