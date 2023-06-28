<label for="{{ $for }}" class="mb-2 block text-sm font-medium text-slate-900">
    {{ $slot }} @if ($required)
        <span class="text-red-500">*</span>
    @endif
</label>
