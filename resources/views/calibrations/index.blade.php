<x-app-layout>
  <x-slot name="header">

    <div class="mt-10 flex items-center justify-between gap-x-6">
      <h1 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Étalonnage') }}
      </h1>

      <a href="{{ route('calibrations.create', ['user' => Auth::user()]) }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajouter un étalonnage</a>
    </div>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <table class="border-collapse table-auto w-full text-sm text-left">
            <thead>
              <tr>
                <th>Club</th>
                <th>Distance</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($calibrations as $calibration)
              <tr>
                <td>{{ $calibration->name }}</td>
                <td>{{ $calibration->distance }}</td>
                <td></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
