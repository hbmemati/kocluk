<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muhammet',
            'surname' => 'Balkırkan',
            'email' => 'hbmemati@gmail.com',
            'password' => bcrypt('123456'),
            'type_id' => 1,
        ]);
    }
}
