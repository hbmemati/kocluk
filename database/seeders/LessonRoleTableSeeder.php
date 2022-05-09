<?php

namespace Database\Seeders;

use App\Models\Education\Role;
use Illuminate\Database\Seeder;

class LessonRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [['name' => 'Yönetici'], ['name' => 'Öğretmen'], ['name' => 'Öğrenci']];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
