<x-layout title="Math Proof: {{ $proof->title }}">
    <x-navbar />

    <x-container class="my-12">
        <h1 class="mb-6 text-4xl font-bold">{{ $proof->title }}</h1>

        @if ($proof->category)
            <p class="flex items-center mb-10 space-x-2 text-stone-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                </svg>

                <span>{{ $proof->category->name() }}</span>
            </p>
        @endif

        <div class="mt-10 prose prose-stone max-w-none">
            {!! $proof->body !!}
        </div>
    </x-container>

    <x-footer />
</x-layout>
