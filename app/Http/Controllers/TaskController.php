<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $task_id): view
    {
        //SELECT * FROM tasks
        //dd(Task::all());

        //SELECT * FROM tasks WHERE id = 1
        $task = Task::find($task_id);

        //dd($task);

        return view('welcome',['task' => $task]);
        //return '<h1>Hola mundo desde el controlador:'.$task_id.'</h1>';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() //client
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) /*server */
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
