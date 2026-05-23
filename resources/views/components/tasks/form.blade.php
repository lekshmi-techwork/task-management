@props(['task' => null, 'users' => []])

<div class="bg-white rounded-xl shadow-xl p-8">
    <div class="flex justify-between items-start mb-7">
        <h2 class="text-2xl font-bold text-slate-800 leading-snug">
            {{ $task ? 'Edit Task' : 'Create New Task' }}
        </h2>

        <span class="text-slate-400 tracking-widest">••••</span>
    </div>

    <div class="bg-slate-50 rounded-lg p-5 space-y-4">
        <div class="relative">
            <input
                name="title"
                value="{{ old('title', $task->title ?? '') }}"
                placeholder="e.g. Launch New Campaign"
                class="w-full rounded-md border border-slate-200 bg-white text-sm px-4 py-3 pr-12 text-slate-700 shadow-sm focus:border-blue-500 focus:ring-blue-500">

            <div class="absolute right-3 top-2.5 w-7 h-7 rounded-full bg-slate-200 flex items-center justify-center text-xs">
                👨‍💼
            </div>
        </div>

        <textarea
            name="description"
            rows="5"
            placeholder="The task description goes here..."
            class="w-full rounded-md border border-slate-200 bg-white text-sm px-4 py-3 text-slate-700 shadow-sm focus:border-blue-500 focus:ring-blue-500">{{ old('description', $task->description ?? '') }}</textarea>

        <div>
            <label class="block text-sm font-bold text-slate-800 mb-3">
                Priority
            </label>

            <div class="flex flex-wrap gap-3">
                @foreach(['low' => 'Low', 'medium' => 'Medium', 'high' => 'High'] as $value => $label)
                <label class="cursor-pointer">
                    <input
                        type="radio"
                        name="priority"
                        value="{{ $value }}"
                        class="sr-only peer"
                        @checked(old('priority', $task->priority ?? 'medium') === $value)
                    >

                    <span class="block min-w-[80px] text-center bg-white border border-slate-300 text-slate-600 px-4 py-2 rounded-md text-sm shadow-sm peer-checked:bg-blue-500 peer-checked:border-blue-500 peer-checked:text-white">
                        {{ $label }}
                    </span>
                </label>
                @endforeach
            </div>

            <div class="flex flex-wrap gap-3 mt-3">
                <span class="bg-slate-200 text-slate-700 px-5 py-2 rounded-full text-sm font-medium">
                    Low
                </span>

                <span class="bg-slate-200 text-slate-700 px-5 py-2 rounded-full text-sm font-medium">
                    Medium
                </span>

                <span class="bg-red-100 text-red-500 px-5 py-2 rounded-full text-sm font-medium">
                    + Medium
                </span>

                <span class="bg-slate-200 text-slate-700 px-5 py-2 rounded-full text-sm font-medium">
                    + High
                </span>
            </div>
        </div>

        <div class="relative max-w-sm">
            <input
                type="date"
                name="due_date"
                value="{{ old('due_date', $task->due_date ?? '') }}"
                class="w-full rounded-md border border-slate-200 bg-white text-sm px-4 py-3 pr-10 text-slate-700 shadow-sm focus:border-blue-500 focus:ring-blue-500">
        </div>

        <div class="max-w-sm">
            <label class="block text-sm font-bold text-slate-800 mb-2">
                Assign To
            </label>

            <select
                name="assigned_to"
                class="w-full rounded-md border border-slate-200 bg-white text-sm px-4 py-3 text-slate-700 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                <option value="">Select User</option>

                @foreach($users as $user)
                <option
                    value="{{ $user->id }}"
                    @selected(old('assigned_to', $task->assigned_to ?? '') == $user->id)
                    >
                    {{ $user->name }}
                </option>
                @endforeach
            </select>
        </div>
    </div>
</div>