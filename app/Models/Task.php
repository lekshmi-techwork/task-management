<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'priority',
        'status',
        'due_date',
        'assigned_to',
        'ai_summary',
        'ai_priority',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where(function ($query) use ($search) {
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        });
    }

    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopePriority($query, $priority)
    {
        return $query->where('priority', $priority);
    }
}
