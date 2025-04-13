<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Superheroes -->
                <a href="{{ route('superheroes.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="h-8 w-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <h3 class="ml-3 text-xl font-semibold text-gray-900">Superheroes</h3>
                            </div>
                            <span class="text-2xl font-bold text-indigo-600">{{ \App\Models\Superhero::count() }}</span>
                        </div>
                        <p class="mt-4 text-gray-600">Manage the list of superheroes and their characteristics.</p>
                    </div>
                </a>

                <!-- Universes -->
                <a href="{{ route('universes.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="h-8 w-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                                <h3 class="ml-3 text-xl font-semibold text-gray-900">Universes</h3>
                            </div>
                            <span class="text-2xl font-bold text-purple-600">{{ \App\Models\Universe::count() }}</span>
                        </div>
                        <p class="mt-4 text-gray-600">Manage different superhero universes.</p>
                    </div>
                </a>

                <!-- Genders -->
                <a href="{{ route('genders.index') }}" class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                </svg>
                                <h3 class="ml-3 text-xl font-semibold text-gray-900">Genders</h3>
                            </div>
                            <span class="text-2xl font-bold text-green-600">{{ \App\Models\Gender::count() }}</span>
                        </div>
                        <p class="mt-4 text-gray-600">Manage character genders.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
