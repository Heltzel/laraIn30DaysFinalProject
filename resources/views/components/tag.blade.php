@props(['size' => 'base'])
@php
    $classes = ' bg-white/10 hover:bg-white/35 rounded-xl  font-bold transition-colors duration-300';
    // dd($size);
    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-md ';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-2xs ';
    }

@endphp
<a href="#" class="{{ $classes }}">{{ $slot }}</a>
