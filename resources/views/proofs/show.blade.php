<x-layout>
    <header>
        <x-navbar />
    </header>

    <main class="relative grid grid-cols-4 my-12 md:my-6">
        <div>&nbsp;</div>

        <x-container class="w-full col-span-2">
            <h1 class="mb-6 text-4xl font-medium">{{ $proof->title }}</h1>

            @if ($proof->category)
                <p class="flex items-center mb-10 space-x-2 text-stone-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                    </svg>

                    <a class="hover:underline" href="{{ route('proofs.index', ['category' => $proof->category->value]) }}">
                        {{ $proof->category->name() }}
                    </a>
                </p>
            @endif

            <article>
                <div class="mt-10 prose prose-stone max-w-none prose-h2:font-medium prose-h2:text-3xl prose-h3:font-medium prose-h3:text-2xl prose-h4:font-medium prose-h4:text-xl">
                    {!! $proof->body !!}
                </div>
            </article>
        </x-container>

        <div>
            <aside class="sticky max-w-xs space-y-8 top-16">
                <!-- Description -->
                @if($proof->description)
                    <section>
                        <h2 class="mb-4 text-2xl font-medium">About this proof</h2>

                        <p class="text-stone-700">{{ $proof->description }}</p>
                    </section>
                @endif

                <!-- Foundations -->
                @if($proof->foundations()->count() > 0)
                    <section>
                        <h2 class="mb-4 text-2xl font-medium">Foundations for this proof</h2>

                        <ul>
                            @foreach ($proof->foundations as $foundation)
                                <li class="mb-2">
                                    <a href="{{ route('proofs.show', $foundation) }}" class="text-stone-700 hover:underline">{{ $foundation->title }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </section>
                @endif
            </aside>
        </div>
    </main>

    <x-footer />
</x-layout>
