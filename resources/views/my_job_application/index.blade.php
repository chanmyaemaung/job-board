<x-layout>
    <x-breadcrumbs class="mb-4" :links="['My Job Application' => '#']" />

    @forelse ($applications as $application)
        <x-job-card :job="$application->job" />
    @empty
    @endforelse
</x-layout>
