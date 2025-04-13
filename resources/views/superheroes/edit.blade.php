<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Superhero') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('superheroes.update', $superhero) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-6">
                            <x-input-label for="name" :value="__('Superhero name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $superhero->name)" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="real_name" :value="__('Real name')" />
                            <x-text-input id="real_name" name="real_name" type="text" class="mt-1 block w-full" :value="old('real_name', $superhero->real_name)" required />
                            <x-input-error :messages="$errors->get('real_name')" class="mt-2" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3" required>{{ old('description', $superhero->description) }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="universo_id" :value="__('Universe')" />
                            <select id="universo_id" name="universo_id" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                <option value="">Select a universe</option>
                                @foreach ($universes as $universe)
                                    <option value="{{ $universe->id }}" {{ old('universo_id', $superhero->universo_id) == $universe->id ? 'selected' : '' }}>
                                        {{ $universe->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('universo_id')" class="mt-2" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="superhero_type_id" :value="__('Type')" />
                            <select id="superhero_type_id" name="superhero_type_id" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                <option value="">Select a type</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}" {{ old('superhero_type_id', $superhero->superhero_type_id) == $type->id ? 'selected' : '' }}>
                                        {{ $type->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('superhero_type_id')" class="mt-2" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="gender_id" :value="__('Gender')" />
                            <select id="gender_id" name="gender_id" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" required>
                                <option value="">Select a gender</option>
                                @foreach ($genders as $gender)
                                    <option value="{{ $gender->id }}" {{ old('gender_id', $superhero->gender_id) == $gender->id ? 'selected' : '' }}>
                                        {{ $gender->name }}
                                    </option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('gender_id')" class="mt-2" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="powers" :value="__('Powers')" />
                            <textarea id="powers" name="powers" class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" rows="3" required>{{ old('powers', $superhero->powers) }}</textarea>
                            <x-input-error :messages="$errors->get('powers')" class="mt-2" />
                        </div>

                        <div class="mb-6">
                            <x-input-label for="affiliation" :value="__('Affiliation')" />
                            <x-text-input id="affiliation" name="affiliation" type="text" class="mt-1 block w-full" :value="old('affiliation', $superhero->affiliation)" />
                            <x-input-error :messages="$errors->get('affiliation')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update Superhero') }}</x-primary-button>
                            <a href="{{ route('superheroes.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>