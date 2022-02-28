<x-layout>

    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

     <div class='flex'>  @if (session('status')) <x-alert />    @endif</div>

        @if ($posts->count())

          <x-post-grid :post='$posts' />

          {{$posts->links()}}

        @else
            <p>No Post Yet.Please Checkback later</p>

        @endif
    </main>
</x-layout>
