<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        @foreach ($chirps as $chirp)
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <div>
                    <h1 class="font-semibold">{{ $chirp['author'] }}</h1>
                    <p class="mt-1">{{ $chirp['message'] }}</p>
                    <p class="text-ms text-gray-400 mt-2">{{ $chirp['time'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>
