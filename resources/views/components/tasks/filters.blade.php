<form method="GET" action="{{ route('tasks.index') }}" class="flex flex-wrap gap-4 mb-3 items-center">
    <div class="relative w-full sm:w-60">

        <svg xmlns="http://www.w3.org/2000/svg"
            class="absolute left-4 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor">

            <path stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>

        <input
            type="text"
            name="search"
            value="{{ request('search') }}"
            placeholder="Search Filter Task"
            class="w-full h-10 rounded-md border-0 bg-white text-sm text-gray-700 shadow-sm pl-11 pr-4 focus:ring-2 focus:ring-blue-500">
    </div>

    <select
        name="status"
        onchange="this.form.submit()"
        class="h-10 min-w-[120px] rounded-md border-0 bg-white text-sm pl-4 pr-10 text-gray-600 shadow-sm focus:ring-2 focus:ring-blue-500">
        <option value="">Status</option>
        <option value="pending" @selected(request('status')==='pending' )>Pending</option>
        <option value="in_progress" @selected(request('status')==='in_progress' )>In Progress</option>
        <option value="completed" @selected(request('status')==='completed' )>Completed</option>
    </select>

    <select
        name="priority"
        onchange="this.form.submit()"
        class="h-10 min-w-[130px] rounded-md border-0 bg-white text-sm pl-4 pr-10 text-gray-600 shadow-sm focus:ring-2 focus:ring-blue-500">
        <option value="">Priority</option>
        <option value="low" @selected(request('priority')==='low' )>Low</option>
        <option value="medium" @selected(request('priority')==='medium' )>Medium</option>
        <option value="high" @selected(request('priority')==='high' )>High</option>
    </select>

</form>