<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Nouveau') }}
    </h2>
  </x-slot>

  <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
    <form method="POST" action="{{ route('calibrations.store', Auth::id()) }}">
      @csrf

      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name :</label>
        <input type="text" name="name" id="name" value="" class="mt-1 p-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
      </div>

      <div class="mb-4">
        <label for="distance" class="block text-sm font-medium text-gray-700">Distance :</label>
        <input type="text" name="distance" id="distance" value="" class="mt-1 p-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
      </div>

      <div class="mt-4 space-x-2">
        <x-primary-button>{{ __('Save') }}</x-primary-button>
        <a href="{{ route('users.index') }}">{{ __('Cancel') }}</a>
      </div>
    </form>
  </div>




</x-app-layout>
