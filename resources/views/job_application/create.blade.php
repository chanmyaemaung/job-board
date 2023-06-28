<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => route('jobs.show', $job), 'Apply' => '#']" />

    <x-job-card :$job />

    <x-card class="p-4">
        <h2 class="mb-4 text-lg font-medium">
            Your Job Applicatoin
        </h2>

        <form action="{{ route('jobs.applications.store', $job) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <x-label for="expected_salary" :required="true" aria-required="true">Expected Salary</x-label>
                <x-text-input type="number" name="expected_salary" id="expected_salary" />
            </div>

            <div class="mb-4">
                <x-label for="uploadCV" :required="true" aria-required="true">Upload CV</x-label>
                <x-text-input type="file" name="cv" id="uploadCV" />
            </div>

            <x-button class="w-full">Apply</x-button>
        </form>
    </x-card>
</x-layout>
