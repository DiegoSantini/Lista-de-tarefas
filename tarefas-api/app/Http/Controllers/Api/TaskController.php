<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use App\Http\Controllers\Controller; 

class TaskController extends Controller
{
    public function index()
    {
        return Task::orderBy('scheduled_to')->get();
    }
}
