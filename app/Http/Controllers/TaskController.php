<?php

namespace App\Http\Controllers;

use App\Services\TaskService;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    protected TaskService $taskService;

    public function __construct(
        TaskService $taskService
    ) {
        $this->taskService = $taskService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tasks = $this->taskService->getAll(
            $request->only(['search', 'status', 'priority'])
        );

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('create', Task::class);
        $users = $this->taskService->getAssignableUsers();

        return view('tasks.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        $this->authorize('create', Task::class);
        $this->taskService->store(
            $request->validated()
        );

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = $this->taskService->find($id);
        $this->authorize('view', $task);
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $task = $this->taskService->find($id);
        $this->authorize('update', $task);
        $users = $this->taskService->getAssignableUsers();

        return view('tasks.edit', compact('task', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateTaskRequest $request,
        string $id
    ) {
        $task = $this->taskService->find($id);
        $this->authorize('update', $task);
        $this->taskService->update(
            $id,
            $request->validated()
        );

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Task updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
