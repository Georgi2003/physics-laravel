<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Magnitude;

class MagnitudesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Magnitude::create([
            'name' => 'Температура',
            'symbol' => 't°'
        ]);

        Magnitude::create([
            'name' => 'Път',
            'symbol' => 's'
        ]);

        Magnitude::create([
            'name' => 'Напрежение',
            'symbol' => 'U'
        ]);
    }
}
 //https://riptutorial.com/laravel/example/17358/creating-a-seeder