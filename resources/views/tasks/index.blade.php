<x-app-layout>
    <div class="min-h-screen bg-[#20283a] px-6 py-5">
        <div class="max-w-[1120px] mx-auto">

            <div class="flex items-center justify-between mb-7">
                <h1 class="text-white text-4xl font-bold tracking-tight">
                    Task List
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

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($tasks as $task)
                        <x-tasks.card :task="$task" />
                        @endforeach

                        @foreach($tasks as $task)
                        <x-tasks.card :task="$task" />
                        @endforeach
                    </div>
                </main>

                <aside class="col-span-12 lg:col-span-3">
                    <x-tasks.sidebar />
                </aside>
            </div>
        </div>
    </div>
</x-app-layout>