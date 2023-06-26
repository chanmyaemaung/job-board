 <!-- Breadcrumbs Navigation -->
 <nav {{ $attributes }}>
    <ul class="flex space-x-3 items-center text-slate-500">
        <li>
            <a href="/">Home</a>
        </li>

        @foreach ($links as $label => $link)
            <li> &#8594; </li>
            <li>
                <a href="{{ $link }}">{{ $label }}</a>
            </li>
        @endforeach
    </ul>
</nav>
