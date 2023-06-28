<x-layout>
    <x-breadcrumbs :links="['My Jobs' => route('my-jobs.index'), 'Create' => '#']" class="mb-4" />

    <x-card class="p-4 mb-8">
        <form action="{{ route('my-jobs.store') }}" method="POST">
            @csrf

            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <x-label for="title" :required="true" aria-required="true">Job Title</x-label>
                    <x-text-input name="title" id="title" :value="old('title')" />
                </div>

                <div>
                    <x-label for="location" :required="true" aria-required="true">Job Location</x-label>
                    <x-text-input name="location" id="location" :value="old('location')" />
                </div>

                <div class="col-span-2">
                    <x-label for="salary" :required="true" aria-required="true">Salary</x-label>
                    <x-text-input name="salary" id="salary" type="number" :value="old('salary')" />
                </div>

                <div class="col-span-2">
                    <x-label for="description" :required="true" aria-required="true">Description</x-label>
                    <x-text-input name="description" id="description" type="textarea" :value="old('description')" />
                </div>

                <div>
                    <x-label for="experience" :required="true" aria-required="true">Experience</x-label>
                    <x-radio-group name="experience" id="experience" :all-option="false" :value="old('experience')" :options="array_combine(
                        array_map('ucfirst', \App\Models\Job::$experience),
                        \App\Models\Job::$experience,
                    )" />
                </div>

                <div>
                    <x-label for="category" :required="true" aria-required="true">Category</x-label>
                    <x-radio-group name="category" id="category" :all-option="false" :value="old('category')" :options="\App\Models\Job::$category" />
                </div>
            </div>

            <x-button class="w-full">Create Job</x-button>
        </form>
    </x-card>
</x-layout>
