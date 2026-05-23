<?php

namespace App\Repositories\Eloquent;

use App\Models\Task;
use App\Repositories\Contracts\TaskRepositoryInterface;

class TaskRepository implements TaskRepositoryInterface
{
    public function all(array $filters = [])
    {
        $query = Task::with('user')->latest();

        if (auth()->user()->role !== 'admin') {
            $query->where('assigned_to', auth()->id());
        }

        return $query->paginate(10);
    }

    public function find(int $id)
    {
        return Task::with('user')->findOrFail($id);
    }

    public function create(array $data)
    {
        return Task::create($data);
    }

    public function update(int $id, array $data)
    {
        $task = $this->find($id);
        $task->update($data);

        return $task;
    }

    public function delete(int $id)
    {
        return $this->find($id)->delete();
    }
}
