@props(['task'])

<div class="bg-white rounded-xl p-5 shadow-lg min-h-[190px]">
    <div class="flex justify-between items-start mb-5">
        <div class="flex items-center gap-2">
            <span class="w-4 h-4 bg-blue-500 rounded-full flex items-center justify-center text-white text-[10px]">
                ✓
            </span>
            <span class="text-[11px] bg-slate-100 text-slate-700 px-2 py-1 rounded">
                {{ $task->status }}
            </span>
        </div>

        <span class="text-slate-400 tracking-widest">••••</span>
    </div>

    <h3 class="text-[15px] font-bold text-slate-900 mb-3">
        {{ $task->title }}
    </h3>

    <div class="flex gap-2 mb-3">
        <span class="text-[10px] bg-slate-100 text-slate-500 px-2 py-1 rounded">
            Status
        </span>
        <span class="text-[10px] bg-pink-500 text-white px-2 py-1 rounded-full">
            {{ $task->priority }}
        </span>
    </div>

    <p class="text-[11px] text-slate-500 leading-4 mb-3">
        Description: {{ $task->description }}
    </p>

    <div class="flex justify-between items-end">
        <div class="text-[11px] text-slate-500 leading-4">
            <p>Assigned: {{ $task->assigned }}</p>
            <p>Due: {{ $task->due_date }}</p>
            <p class="text-blue-600 font-semibold">{{ $task->ai_priority }}</p>
        </div>

        <div class="flex gap-2">
            <a href="#" class="bg-slate-100 text-slate-700 text-[11px] px-3 py-1 rounded-full">
                Edit
            </a>
            <a href="#" class="bg-blue-500 text-white text-[11px] px-3 py-1 rounded-full">
                View
            </a>
        </div>
    </div>
</div>