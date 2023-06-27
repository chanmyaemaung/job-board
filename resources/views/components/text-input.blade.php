<div class="relative">
    @if ($formId)
        <button type="button" class="absolute top-0 right-0 flex h-full items-center pr-2"
            onclick="document.getElementById('{{ $name }}').value = ''; document.getElementById('{{ $formId }}').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4 text-slate-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </button>
    @endif
    <input type="text" name="{{ $name }}" value="{{ $value }}" placeholder="{{ $placeholder }}"
        id="{{ $name }}"
        class="w-full rounded-md border-0 py-1.5 px-2.5 pr-8 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2" />
</div>
