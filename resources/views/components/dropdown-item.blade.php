@props(['active'=>false])

@php
    $classes ='block text-left px-3 hover:bg-blue-600 hover:text-white focus:bg-gray-300 bg-white-500';
    if($active) $classes .=' bg-blue-500 text-white';

@endphp
<a {{$attributes(['class'=>$classes])}} >
    {{$slot}}
</a>
