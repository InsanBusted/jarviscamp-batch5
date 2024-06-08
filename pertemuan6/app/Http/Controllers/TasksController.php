<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index(){
        $tasks = Tasks::all();

        return view('task.index', compact('tasks'));

    }
}
