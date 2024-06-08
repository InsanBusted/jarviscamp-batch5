<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $task = new Tasks();
        $tasks = $task->getAll();

        return view('task.index', ['tasks' => $tasks]);

    }
}
