<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    public function index()
    {
    	// return view for index in task
    	// file located at resources/views/task/index.blade.php
    	$title = 'Task List';
    	return view('task.index',['title' => $title]);
    }

    public function show($id)
    {
    	// Pass data to the view
    	// Load resources/views/task/show.blade.php
    	$title = 'Show Task';
    	return view('task.show',['title' => $title,'id' => $id]);
    }
}
