<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Gog',
            'email' => 'gog@abv.bg',
            'password' => '$2y$10$BmuhgT6nb2KRx3KryXDKH.G69/jXSX/3eelYLqcXQ5RzVF5Nv.PTG',
        ]);
    }
}
