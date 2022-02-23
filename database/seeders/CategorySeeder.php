<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $personal=Category::create([
            'name'=>'Personal',
            'slug'=>'personal',
        ]);
        $work =Category::create([
            'name'=>'Work',
            'slug'=>'work',
        ]);
        $family =Category::create([
            'name'=>'Family',
            'slug'=>'family',
        ]);
    }
}
