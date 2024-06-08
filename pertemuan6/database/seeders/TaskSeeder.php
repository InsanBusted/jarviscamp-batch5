<?php

namespace Database\Seeders;

use App\Models\Tasks;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tasks::create([
            'name' => 'Tugas MTK',
            'deadline' => '2024-05-05',
            'status' => 'Belum Dikerjakan',
            'description' => 'Ini tugas MTK',
        ]);

        Tasks::factory(5)->create();
    }
}
