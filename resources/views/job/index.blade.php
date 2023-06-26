<x-layout>
    @foreach ($jobs as $job)
        <div>
            <h1>{{ $job->title }}</h1>
        </div>
    @endforeach
</x-layout>
