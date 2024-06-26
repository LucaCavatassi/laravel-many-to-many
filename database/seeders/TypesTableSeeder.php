<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = ["Front-End", "Back-End", "Full-Stack"];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            // if ($type === "HTML" or $type === "CSS" or $type === "JS" or $type === "VUE") {
            //     $newType->field = "Front-End";
            // } elseif ($type === "PHP" or $type === "MySQL") {
            //     $newType->field = "Back-End";
            // } else {
            //     $newType->field = "Full-Stack";
            // }
            $newType->save();
        }

    }
}
