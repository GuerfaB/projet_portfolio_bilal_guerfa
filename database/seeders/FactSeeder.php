<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("facts")->insert([
            "chiffre" => 3058,
            "titre" => "Nombre de client",
            "text" => "bla bla bla",
        ]);
        DB::table("facts")->insert([
            "chiffre" => 100,
            "titre" => " Nombre de pourcent",
            "text" => "bla bla bla",
        ]);
        DB::table("facts")->insert([
            "chiffre" => 1000000,
            "titre" => " Nombre de bénéfice",
            "text" => "bla bla bla",
        ]);
    }
}
