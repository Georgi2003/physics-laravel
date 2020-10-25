<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class MeasuringUnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::create([
            'unit' => '°C',
            'magnitude_id' => 1
        ]);

        Unit::create([
            'unit' => 'km',
            'magnitude_id' => 2
        ]);

        Unit::create([
            'unit' => 'V',
            'magnitude_id' => 3
        ]);
    }
}
