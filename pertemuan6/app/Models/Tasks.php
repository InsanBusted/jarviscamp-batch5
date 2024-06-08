<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    use HasFactory;

    protected  $table = 'task';
    protected  $fillable = ['name', 'deadline', 'status', 'description'];


    // protected static $tasks = [
    //     [
    //         'id' => 1,
    //         'name' => 'Bahasa Inggris',
    //         'deadline' => '2024-09-06',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan tugas bahasa inggris',
    //     ],
    //     [
    //         'id' => 2,
    //         'name' => 'Bahasa Indonesia',
    //         'deadline' => '2024-09-06',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan tugas bahasa inggris',
    //     ],
    //     [
    //         'id' => 3,
    //         'name' => 'Bahasa France',
    //         'deadline' => '2024-09-06',
    //         'status' => 'Belum Selesai',
    //         'description' => 'Mengerjakan tugas bahasa inggris',
    //     ]
    // ];

    // public function getAll(){
    //     return self::$tasks;
    // }
}
