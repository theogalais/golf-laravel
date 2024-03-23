<x-app-layout>
  <x-slot name="header">
    <h1 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Modifier') }}
    </h1>
  </x-slot>

  <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <form method="POST" action="{{ route('users.update', $user) }}">
      @csrf
      @method('patch')

      <div class="mb-4">
        <label for="phone" class="block text-sm font-medium text-gray-700">Téléphone :</label>
        <input type="text" name="phone" id="phone" value="{{ old('phone', $user->phone) }}" class="mt-1 p-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
      </div>

      <div class="mb-4">
        <label for="licence_number" class="block text-sm font-medium text-gray-700">N° de licence :</label>
        <input type="text" name="licence_number" id="licence_number" value="{{ old('licence_number', $user->licence_number) }}" class="mt-1 p-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        <x-input-error :messages="$errors->get('licence_number')" class="mt-2" />
      </div>

      <div class="mb-4">
        <label for="golf_index" class="block text-sm font-medium text-gray-700">Index :</label>
        <input type="text" name="golf_index" id="golf_index" value="{{ old('golf_index', $user->golf_index) }}" class="mt-1 p-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
        <x-input-error :messages="$errors->get('golf_index')" class="mt-2" />
      </div>


      <div class="mt-4 space-x-2">
        <x-primary-button>{{ __('Save') }}</x-primary-button>
        <a href="{{ route('users.index') }}">{{ __('Cancel') }}</a>
      </div>
    </form>
  </div>


</x-app-layout>
