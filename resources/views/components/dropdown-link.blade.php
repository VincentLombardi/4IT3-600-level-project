@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-right block px-4 py-2 text-sm leading-5 text-gray-700 bg-indigo-100 hover:bg-indigo-100 focus:outline-none focus:bg-indigo-100 transition duration-150 ease-in-out'
                : 'text-right block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-indigo-100 focus:outline-none focus:bg-indigo-100 transition duration-150 ease-in-out'
@endphp
<a {{ $attributes->merge(['class' => $classes ]) }}>
    {{ $slot }}
</a>
