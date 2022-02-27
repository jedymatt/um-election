<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['name' => 'Department of Arts and Sciences'],
            ['name' => 'Department of Accounting Education'],
            ['name' => 'Department of Business Administration Education'],
            ['name' => 'Department of Teachers Education'],
            ['name' => 'Department of Engineering Education'],
            ['name' => 'Department of Criminal Justice Education'],
            ['name' => 'Hospitality Management and Tourism Management'],
        ];

        Department::insert($departments);
    }
}
