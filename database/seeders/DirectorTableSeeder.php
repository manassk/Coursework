<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $d1 = new Director;
        $d1->name = "Maxwell James";
        $d1->phone = "7821345634";
        $d1->email = "maxi@gmail.com";
        $d1->course_id = 1;
        $d1->save();
    }
}
