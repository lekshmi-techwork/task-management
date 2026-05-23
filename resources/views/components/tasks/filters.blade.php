<form method="GET" action="{{ route('tasks.index') }}" class="flex flex-wrap gap-4 mb-3">
    <div class="relative w-full sm:w-60">
        <input type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Search Filter Task"
            class="w-full rounded-md border-0 text-sm px-4 py-2 pl-9 text-gray-700 shadow-sm">
        <span class="absolute left-3 top-2.5 text-gray-400 text-sm">⌕</span>
    </div>

    <select name="status" onchange="this.form.submit()" class="rounded-md border-0 text-sm px-4 py-2 text-gray-600 shadow-sm">
        <option value="">Status</option>
        <option value="pending" @selected(request('status')==='pending' )>Pending</option>
        <option value="in_progress" @selected(request('status')==='in_progress' )>In Progress</option>
        <option value="completed" @selected(request('status')==='completed' )>Completed</option>
    </select>

    <select name="priority" onchange="this.form.submit()" class="rounded-md border-0 text-sm px-4 py-2 text-gray-600 shadow-sm">
        <option value="">Priority</option>
        <option value="low" @selected(request('priority')==='low' )>Low</option>
        <option value="medium" @selected(request('priority')==='medium' )>Medium</option>
        <option value="high" @selected(request('priority')==='high' )>High</option>
    </select>
</form>