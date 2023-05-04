<x-app-layout>
  <section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-12 mx-auto">
      <div class="mb-12 relative">
        <h2 class="text-2xl font-medium text-gray-900 title-font px-4">Your calendar</h2>
        {{-- <a href="{{ route('listings.create') }}" class="font-sm text-gray-400 hover:text-gray-600 absolute top-1 right-0">Create new listing</a> --}}
      </div>
      <div class="-my-6 grid grid-cols-4 gap-3">
        @foreach ($events as $event)
          <div class="p-4 border rounded shadow bg-white">{{ $event }}</div>
        @endforeach
      </div>
    </div>
  </section>
</x-app-layout>
