<x-layout>
    <x-card class="p-4">
        <form action="{{ route('employer.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <x-label for="company_name" :required="true">Company Name</x-label>
                <x-text-input name="company_name" id="company_name" />
            </div>

            <x-button class="w-full">Create</x-button>
        </form>
    </x-card>
</x-layout>
