<x-layout>
    <header>
        <x-navbar />
    </header>

    <main>
        <x-container class="my-12 md:my-6">
            <h1 class="mb-8 text-4xl font-medium md:mb-4">{{ $title }}</h1>

            <ul class="flex items-center w-full py-px pl-px mb-12 space-x-4 overflow-x-auto md:mb-8">
                @foreach ($categories as [$category, $categoryProofs])
                    <a
                        class="px-4 shrink-0 py-3 font-medium text-center border rounded-md shadow-sm box {{ request('category') == $category->value ? 'border-yellow-500 ring-1 ring-yellow-500 font-bold' : 'border-stone-200' }}"
                        href="{{ route('proofs.index', ['category' => request('category') == $category->value ? null : $category->value, 'search' => request('search')]) }}"
                    >
                        <li>
                                {{ $category->name() }} <span class="text-stone-500">({{ $categoryProofs->count() }})</span>
                        </li>
                    </a>
                @endforeach
            </div>

            @forelse ($proofs as $proof)
                <article>
                    <a href="{{ route('proofs.show', $proof) }}">
                        <li class="mb-10">
                            <header>
                                @if($proof->category && !request()->has('category'))
                                    <p class="mb-1 font-light text-yellow-600 md:mb-2">{{ $proof->category->name() }}</p>
                                @endif
                            </header>

                            <main>
                                <h3 class="mb-1 text-xl font-medium md:mb-2">{{ $proof->title }}</h3>

                                @if($proof->description)
                                    <p class="text-stone-600">{{ $proof->description }}</p>
                                @endif
                            </main>
                        </li>
                    </a>
                </article>
            @empty
                <li class="-mt-12">No results found.</li>
            @endforelse
        </x-container>
    </main>

    <x-footer />
</x-layout>
