<?php

namespace Database\Seeders;

use App\Models\User\Type;
use Illuminate\Database\Seeder;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Yönetici'],
            ['name' => 'Öğretmen'],
            ['name' => 'Öğrenci'],
        ];

        foreach ($types as $type) {
            Type::create($type);
        }

    }
}
