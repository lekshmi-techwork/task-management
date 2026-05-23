<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Support\Facades\DB;
use App\Repositories\Contracts\TaskRepositoryInterface;

class TaskService
{
    public function __construct(
        private TaskRepositoryInterface $taskRepository,
        private AIService $aiService
    ) {}

    public function getAll(array $filters = [])
    {
        return $this->taskRepository->all($filters);
    }

    public function find(int $id)
    {
        return $this->taskRepository->find($id);
    }

    public function store(array $data): Task
    {
        return DB::transaction(function () use ($data) {

            $task = $this->taskRepository->create($data);

            $aiData = $this->aiService
                ->generateSummary($task);

            return $this->taskRepository
                ->update($task->id, $aiData);
        });
    }

    public function update(int $id, array $data): Task
    {
        return $this->taskRepository
            ->update($id, $data);
    }

    public function delete(int $id): bool
    {
        return $this->taskRepository
            ->delete($id);
    }
}
