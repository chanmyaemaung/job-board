<x-layout>
    @foreach ($jobs as $job)
        <x-card class="mb-4 last:mb-0 p-4">
            {{ $job->title }}
        </x-card>
    @endforeach
</x-layout>
