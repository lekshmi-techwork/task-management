<?php

namespace App\Services;

use App\Models\Task;
use Illuminate\Support\Str;

class AIService
{
    public function generateSummary(Task $task): array
    {
        return [
            'ai_summary' => Str::limit(
                $task->description,
                120
            ),

            'ai_priority' => $this->detectPriority($task),
        ];
    }

    private function detectPriority(Task $task): string
    {
        $text = strtolower(
            $task->title . ' ' . $task->description
        );

        if (
            str_contains($text, 'urgent') ||
            str_contains($text, 'critical')
        ) {
            return 'high';
        }

        return 'medium';
    }
}
