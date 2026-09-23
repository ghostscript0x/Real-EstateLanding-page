@props(['name', 'class' => 'w-6 h-6'])

@php
    $path = resource_path("svg/icons/{$name}.svg");
@endphp

@if(file_exists($path))
    <span {{ $attributes->merge(['class' => 'inline-block ' . $class]) }}>
        {!! file_get_contents($path) !!}
    </span>
@else
    <!-- Icon not found: {{ $name }} -->
    <span class="w-6 h-6 inline-block bg-red-100 text-red-500 text-xs border border-red-500 rounded">?</span>
@endif
