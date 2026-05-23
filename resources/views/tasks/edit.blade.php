<x-app-layout>
    <div class="min-h-screen bg-[#20283a] px-6 py-5">
        <div class="max-w-[1120px] mx-auto">
            <div class="flex items-center justify-between mb-7">
                <h1 class="text-white text-4xl font-bold tracking-tight">
                    Edit Task
                </h1>

                <a href="{{ route('tasks.index') }}"
                    class="bg-blue-500 text-white text-sm font-semibold px-5 py-2 rounded-md shadow">
                    Back to Tasks
                </a>
            </div>

            <div class="grid grid-cols-12 gap-7">
                <main class="col-span-12 lg:col-span-9">
                    <x-tasks.filters />

                    <form method="POST" action="{{ route('tasks.update', $task->id) }}">
                        @csrf
                        @method('PUT')

                        <x-tasks.form :task="$task" :users="$users" />

                        <div class="text-center mt-6">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-semibold px-7 py-2 rounded-full shadow">
                                Save Changes
                            </button>
                        </div>
                    </form>
                </main>

                <aside class="col-span-12 lg:col-span-3">
                    <x-tasks.sidebar />
                </aside>
            </div>
        </div>
    </div>
</x-app-layout>