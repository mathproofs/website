<x-layout>
    <header>
        <x-navbar />
    </header>

    <main class="relative my-12 md:my-6">
        <x-container>
            <h1 class="mb-6 text-4xl font-medium">{{ $proof->title }}</h1>

            <p class="flex items-center mb-10 space-x-2 text-stone-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                </svg>

                <a class="hover:underline" href="{{ route('proofs.index', ['category' => $proof->category->value]) }}">
                    {{ $proof->category->name() }}
                </a>
            </p>

            <article>
                <div class="mt-10 prose prose-lg md:prose-base prose-stone max-w-none prose-h2:font-medium prose-h2:text-3xl prose-h3:font-medium prose-h3:text-2xl prose-h4:font-medium prose-h4:text-xl">
                    {!! $proof->body !!}
                </div>
            </article>

            <!-- Implications -->
            @if($proof->implications()->count() > 0)
                <hr class="my-12 border-stone-200 md:my-6" />

                <h2 class="mb-10 text-3xl font-medium md:text-2xl">Proofs building upon this proof</h2>

                @foreach ($proof->implications as $implication)
                    <a href="{{ route('proofs.show', $implication) }}" class="block mb-8">
                        <h3 class="mb-1 text-xl font-medium md:text-lg">{{ $implication->title }}</h3>
                        <p class="text-stone-600 line-clamp-2">{{ $implication->description }}</p>
                    </a>
                @endforeach
            @endif
        </x-container>
    </main>

    <x-footer />
</x-layout>
