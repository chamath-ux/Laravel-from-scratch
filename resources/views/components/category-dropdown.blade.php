<x-dropdown>

    <x-slot name='trigger'>
        <button  class='py-2 pl-3 pr-9 text-sm font-semibold'>{{isset($CategorySet) ?  $CategorySet->name  : 'Category'}}</button>
    </x-slot>

            <x-dropdown-item href='/' :active="request()->routeIs('home')">All</x-dropdown-item>

            @foreach ($categories as $category )
                        <x-dropdown-item href='/?category={{$category->slug}}' :active="isset($CategorySet) && $CategorySet->id === $category->id"> {{$category->name}}</x-dropdown-item>
            @endforeach
</x-dropdown>
