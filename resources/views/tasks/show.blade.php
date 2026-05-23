<x-app-layout>
    <div class="min-h-screen bg-[#20283a] px-6 py-5">
        <div class="max-w-[1120px] mx-auto">

            <div class="flex items-center justify-between mb-7">
                <h1 class="text-white text-4xl font-bold tracking-tight">
                    Task Detail + AI Summary
                </h1>

                <a href="{{ route('tasks.create') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-5 py-2 rounded-md shadow">
                    + New Task
                </a>
            </div>

            <div class="grid grid-cols-12 gap-7">
                <main class="col-span-12 lg:col-span-9">
                    <x-tasks.filters />

                    <p class="text-slate-300 text-sm mb-4">
                        Filter Aser Task
                    </p>

                    <div class="bg-white rounded-xl shadow-xl p-6">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h2 class="text-3xl font-bold text-slate-800 mb-4">
                                    {{ $task->title }}
                                </h2>

                                <div class="flex flex-wrap gap-3 text-sm">
                                    <span class="bg-slate-100 text-slate-700 px-4 py-2 rounded-full font-semibold">
                                        Status
                                    </span>

                                    <span class="text-slate-500 py-2">
                                        {{ ucfirst(str_replace('_', ' ', $task->status)) }}
                                    </span>

                                    <span class="bg-slate-100 text-slate-700 px-4 py-2 rounded-full font-semibold">
                                        Priority
                                    </span>

                                    <span class="text-slate-500 py-2">
                                        {{ ucfirst($task->priority) }}
                                    </span>
                                </div>
                            </div>

                            <span class="text-slate-400 tracking-widest">
                                ••••
                            </span>
                        </div>

                        <div class="bg-slate-50 rounded-xl p-5 mb-5">
                            <p class="text-lg font-bold text-slate-800 mb-4">
                                Description
                            </p>

                            <p class="text-sm text-slate-700 mb-3">
                                <span class="font-semibold">Assigned to:</span>
                                {{ $task->user->name ?? '-' }}
                            </p>

                            <div class="max-w-sm mb-4">
                                <input
                                    type="text"
                                    readonly
                                    value="Due Date: {{ $task->due_date ?? '-' }}"
                                    class="w-full rounded-md border border-slate-200 bg-white text-sm px-4 py-2 text-slate-600">
                            </div>

                            <p class="text-sm text-slate-600 leading-6">
                                {{ $task->description ?? 'No description provided.' }}
                            </p>
                        </div>

                        <div class="bg-slate-50 rounded-xl p-5 mb-6">
                            <p class="text-lg font-bold text-slate-800 mb-4">
                                AI-Generated Summary
                            </p>

                            <div class="bg-white rounded-lg border border-slate-200 p-4 text-sm text-slate-600 leading-6">
                                {{ $task->ai_summary ?? 'AI summary is not generated yet.' }}

                                <p class="mt-4">
                                    <span class="font-semibold text-slate-700">
                                        AI Priority:
                                    </span>

                                    <span class="ml-2 bg-pink-100 text-pink-600 text-xs font-semibold px-3 py-1 rounded-full">
                                        {{ ucfirst($task->ai_priority ?? '-') }}
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="text-center">
                            <a href="{{ route('tasks.edit', $task->id) }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-7 py-2 rounded-full shadow">
                                Edit Task
                            </a>
                        </div>
                    </div>
                </main>

                <aside class="col-span-12 lg:col-span-3">
                    <div class="space-y-6">
                        <x-tasks.sidebar />

                        <div class="bg-white rounded-xl shadow-lg p-4">
                            <button class="w-full bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-4 py-3 rounded-lg">
                                Refresh AI Summary
                            </button>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</x-app-layout>