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
        $query->when(
            $filters['search'] ?? null,
            fn($query, $search) => $query->search($search)
        );

        $query->when(
            $filters['status'] ?? null,
            fn($query, $status) => $query->status($status)
        );

        $query->when(
            $filters['priority'] ?? null,
            fn($query, $priority) => $query->priority($priority)
        );

        return $query
            ->paginate(10)
            ->appends(request()->query());
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
