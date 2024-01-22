<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::firstOrCreate([
            'email' => 'john@wms.io',
        ], [
            'name' => 'John Doe',
            'password' => Hash::make('password'),
        ]);
    }
}
