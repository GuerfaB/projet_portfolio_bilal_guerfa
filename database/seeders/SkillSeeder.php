<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("skills")->insert([
            "language" => "Python",
            "pourcentage" => 85,
        ]);
        DB::table("skills")->insert([
            "language" => "Java",
            "pourcentage" => 65,
        ]);
        DB::table("skills")->insert([
            "language" => "Angular",
            "pourcentage" => 45,
        ]);
        DB::table("skills")->insert([
            "language" => "C++",
            "pourcentage" => 50,
        ]);
    }
}
