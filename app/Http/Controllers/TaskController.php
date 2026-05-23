<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = [
            (object)[
                'title' => 'Launch New Marketing',
                'status' => 'In Progress',
                'priority' => 'Priority High',
                'assigned' => 'Ane and Smith',
                'due_date' => '2024-12-01',
                'ai_priority' => 'High',
                'description' => 'Plan and run multi-channel campaigns for the new product launch.',
            ],
            (object)[
                'title' => 'Develop API Mapping',
                'status' => 'In Progress',
                'priority' => 'Priority High',
                'assigned' => 'John Doe',
                'due_date' => '2024-12-31',
                'ai_priority' => 'Low',
                'description' => 'Develop API integration and mapping flow.',
            ],
            (object)[
                'title' => 'Refactor API Endpoints',
                'status' => 'In Progress',
                'priority' => 'Risk Low',
                'assigned' => 'June Doe',
                'due_date' => '2024-12-01',
                'ai_priority' => 'Low',
                'description' => 'Clean and refactor existing endpoint logic.',
            ],
        ];

        return view('tasks.index', compact('tasks'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = [
            (object) ['id' => 1, 'name' => 'Admin User'],
            (object) ['id' => 2, 'name' => 'Sany Leton'],
        ];

        return view('tasks.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = (object) [
            'id' => $id,
            'title' => 'Launch New Marketing Campaign',
            'description' => 'The task is related to a marketing campaign. Need detailed planning and execution.',
            'priority' => 'low',
            'status' => 'in_progress',
            'due_date' => '2024-12-31',
            'assigned_to' => 2,
        ];

        $users = [
            (object) ['id' => 1, 'name' => 'Admin User'],
            (object) ['id' => 2, 'name' => 'Sany Leton'],
        ];

        return view('tasks.edit', compact('task', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
