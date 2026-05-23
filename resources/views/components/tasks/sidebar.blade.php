@props(['showRefreshAi' => false])

<div class="space-y-6">
    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
        <div class="flex items-center gap-3 p-5">
            <div class="w-12 h-12 rounded-full bg-slate-200 flex items-center justify-center">
                👨‍💼
            </div>
            <p class="font-semibold text-slate-800">Admin User</p>
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

        <div class="px-5 py-3 text-sm text-slate-700 border-b">
            Logout
        </div>

        <div class="p-5">
            <div class="flex justify-between mb-4">
                <div class="w-14 h-14 rounded-full border-4 border-blue-500 flex flex-col items-center justify-center">
                    <span class="text-[9px] text-slate-400">TOTAL</span>
                    <span class="text-sm font-bold">150</span>
                </div>

                <div class="w-14 h-14 rounded-full border-4 border-slate-200 flex flex-col items-center justify-center">
                    <span class="text-[9px] text-slate-400">OVERDUE</span>
                    <span class="text-sm font-bold">90</span>
                </div>

                <div class="w-14 h-14 rounded-full border-4 border-blue-500 flex flex-col items-center justify-center">
                    <span class="text-[9px] text-slate-400">PENDING</span>
                    <span class="text-sm font-bold">60</span>
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
    <div class="bg-white rounded-xl shadow-lg p-3">
        <button
            type="button"
            class="w-full flex items-center justify-between text-blue-600 text-sm font-semibold px-3 py-2 rounded-lg">
            <span>Refresh AI Summary</span>
            <span class="text-lg">↻</span>
        </button>
    </div>
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