<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Formula;

class FormulaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formula::create([            
            'parameters_count' => 2,
            'formula' => 'v*t',
            'magnitude_id' => 2
        ]);

        Formula::create([            
            'parameters_count' => 2,
            'formula' => 'I*R',
            'magnitude_id' => 3
        ]);
    }
}
