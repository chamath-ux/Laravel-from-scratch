<x-layout>
    <section class="px-6 py-8">
        <main class='max-w-lg mx-auto mt-10 bg-gray-300 p-6 rounded-md outline'>

            @if (session('status'))  <x-alert /> @endif
            
                <x-register-form />

        </main>
    </section>
</x-layout>
