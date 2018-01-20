<?php

namespace App\Http\Controllers;

use App\Project;
use App\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasksByDate = Task::all()->groupBy(function($item) {
            return Carbon::parse($item->scheduled_for)->format('d-M-y');
        });
        return view('home', compact('tasksByDate'));

        /* $tasks = Task::orderBy('scheduled_for', 'asc')->get(); */
        /* return view('home', compact('tasks')); */
    }
}
