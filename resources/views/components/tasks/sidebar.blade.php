@props([
'showRefreshAi' => false,
'stats' => [
'total' => 0,
'completed' => 0,
'pending' => 0,
],
'task' => null,
])

<div class="space-y-6">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="flex items-center gap-3 p-5">
            <img
                width="20"
                height="20"
                src="{{ asset('images/avatar.png') }}"
                alt="User Avatar
                />
            <p class=" font-semibold text-slate-800">{{ auth()->user()->name }}</p>
        </div>

        <div class="px-5 py-3 text-sm text-slate-700 border-t flex justify-between items-center">
            <span>Tasks</span>
            <span class="text-slate-400">⌃</span>
        </div>

        <div class="bg-blue-500 text-white px-5 py-3 text-sm font-medium">
            Tasks
        </div>

        <div class="px-5 py-3 text-sm text-slate-700 border-b">
            Users <span class="text-[11px] text-slate-400 ml-1">Only visible to Admin</span>
        </div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="text-left w-full text-left px-5 py-3 text-sm text-slate-700 border-b">
                Logout
            </button>
        </form>

        <div class="p-5">
            <div class="flex justify-between mb-4">
                <div class="w-14 h-14 rounded-full border-4 border-blue-500 flex flex-col items-center justify-center">
                    <span class="text-[9px] text-slate-400">Total Tasks</span>
                    <span class="text-sm font-bold">{{ $stats['total'] }}</span>
                </div>

                <div class="w-14 h-14 rounded-full border-4 border-slate-200 flex flex-col items-center justify-center">
                    <span class="text-[9px] text-slate-400">Completed</span>
                    <span class="text-sm font-bold">{{ $stats['completed'] }}</span>
                </div>

                <div class="w-14 h-14 rounded-full border-4 border-blue-500 flex flex-col items-center justify-center">
                    <span class="text-[9px] text-slate-400">Pending</span>
                    <span class="text-sm font-bold">{{ $stats['pending'] }}</span>
                </div>
            </div>

            <p class="text-sm font-semibold text-center text-slate-800 mb-3">
                Monthly Task Completion
            </p>

            <div class="flex justify-between items-end h-20">
                <div class="w-5 bg-blue-300 h-4 rounded"></div>
                <div class="w-5 bg-blue-400 h-10 rounded"></div>
                <div class="w-5 bg-blue-500 h-14 rounded"></div>
                <div class="w-5 bg-blue-400 h-16 rounded"></div>
                <div class="w-5 bg-blue-300 h-3 rounded"></div>
            </div>

            <div class="flex justify-between text-[10px] text-slate-500 mt-2">
                <span>Jan</span>
                <span>Feb</span>
                <span>Mar</span>
                <span>Apr</span>
                <span>May</span>
            </div>
        </div>
    </div>

    @if($showRefreshAi)
    <form method="POST"
        action="{{ route('tasks.refresh-ai', $task->id) }}">

        @csrf

        <button
            type="submit"
            class="w-full bg-white text-blue-500 text-xs font-semibold px-4 py-2 rounded-md shadow">
            Refresh AI Summary
        </button>
    </form>
    @endif

    <div class="bg-[#182234] rounded-xl shadow-lg p-5 text-white">
        <p class="text-sm font-semibold mb-5">
            Monthly Task Completion
        </p>

        <div class="flex gap-3 items-end h-28">
            <div class="flex flex-col justify-end items-center gap-2">
                <div class="w-6 bg-blue-400 h-10 rounded"></div>
                <span class="text-[10px] text-slate-300">Jan</span>
            </div>

            <div class="flex flex-col justify-end items-center gap-2">
                <div class="w-6 bg-blue-500 h-20 rounded"></div>
                <span class="text-[10px] text-slate-300">Feb</span>
            </div>

            <div class="flex flex-col justify-end items-center gap-2">
                <div class="w-6 bg-blue-400 h-8 rounded"></div>
                <span class="text-[10px] text-slate-300">Apr</span>
            </div>

            <div class="flex flex-col justify-end items-center gap-2">
                <div class="w-6 bg-blue-500 h-16 rounded"></div>
                <span class="text-[10px] text-slate-300">May</span>
            </div>
        </div>
    </div>
</div>