<?php

namespace Database\Seeders;

use App\Models\Evenement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Evenement::factory()
                ->count(5)
                ->create();
    }
}