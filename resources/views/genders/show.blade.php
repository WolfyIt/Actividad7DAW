<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gender Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Information</h3>
                        <div class="space-y-4">
                            <div>
                                <span class="font-semibold">ID:</span>
                                <span>{{ $gender->id }}</span>
                            </div>
                            <div>
                                <span class="font-semibold">Name:</span>
                                <span>{{ $gender->name }}</span>
                            </div>
                            <div>
                                <span class="font-semibold">Associated Superheroes:</span>
                                <span>
                                    @php
                                        try {
                                            echo $gender->superheroes ? $gender->superheroes->count() : '0';
                                        } catch (\Exception $e) {
                                            echo '0 (Error loading relationship)';
                                        }
                                    @endphp
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <a href="{{ route('genders.edit', $gender->id) }}" class="inline-flex items-center px-4 py-2 bg-yellow-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-yellow-700 focus:bg-yellow-700 active:bg-yellow-900 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 transition ease-in-out duration-150">Edit</a>
                        <a href="{{ route('genders.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>