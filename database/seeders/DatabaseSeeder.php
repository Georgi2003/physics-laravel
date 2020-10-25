<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MagnitudesTableSeeder;
use Database\Seeders\MeasuringUnitsTableSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FormulaSeeder;

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
        	MagnitudesTableSeeder::class,
        	MeasuringUnitsTableSeeder::class,
        	UserSeeder::class,
            FormulaSeeder::class
        ]);
    }
}
