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
                <label for="expected_salary" class="mb-2 block text-sm font-medium text-slate-900">Expected Salary</label>
                <x-text-input type="number" name="expected_salary" />
            </div>

            <div class="mb-4">
                <label for="uploadCV" class="mb-2 block text-sm font-medium text-slate-900">Upload CV</label>
                <x-text-input type="file" name="cv" id="uploadCV" />
            </div>

            <x-button class="w-full">Apply</x-button>
        </form>
    </x-card>
</x-layout>
