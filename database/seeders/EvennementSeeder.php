<?php

namespace Database\Seeders;

use App\Models\Evennement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EvennementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Evennement::factory()
                ->count(5)
                ->create();
    }
}