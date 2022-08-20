<x-layout>
    <!-- Navbar -->
    <x-container class="my-8">
        <a href="{{ route('home') }}" class="text-stone-700">
            <x-logo />
        </a>
    </x-container>

    <!-- Hero section -->
    <x-container class="my-48 md:my-32">
        <h1 class="mb-4 text-6xl font-medium md:mb-2 md:text-4xl">Mathematical proofs,</h1>
        <h2 class="mb-20 text-5xl font-medium text-yellow-600 md:mb-10 md:text-3xl">Easily explained</h2>

        <div class="relative">
            <form method="get" action="{{ route('proofs.index') }}">
                <input
                    type="text"
                    name="search"
                    id="search"
                    class="w-full py-4 pl-16 pr-6 text-lg transition border rounded-md shadow-sm md:pl-11 md:py-3 md:pr-4 md:text-base placeholder-stone-500 border-stone-300 peer focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none"
                    placeholder="Search Proofs..."
                    autofocus
                />

                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-6 h-6 transition -translate-y-1/2 md:w-5 md:h-5 text-stone-500 peer-focus:text-yellow-500 top-1/2 left-6 md:left-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </form>
        </div>
    </x-container>

    <!-- Categories section -->
    <div class="py-32 md:pt-16 md:pb-8 bg-stone-100">
        <x-container>
            <h3 class="mb-16 text-4xl font-medium md:text-3xl">Proofs By Category</h3>

            <div class="grid grid-cols-2 md:grid-cols-1 gap-x-6 gap-y-8">
                @foreach ($categories as [$category, $proofs])
                    @if($proofs->count() > 0)
                        <div class="p-10 bg-white rounded-lg shadow">
                            <h4 class="mb-4 text-2xl font-medium text-yellow-700">
                                <a class="hover:underline" href="{{ route('proofs.index', ['category' => $category->value]) }}">
                                    {{ $category->name() }}
                                </a>
                            </h4>

                            <ul class="space-y-3">
                                @foreach ($proofs->slice(0, 3) as $proof)
                                    <li><a class="hover:underline text-stone-600" href="{{ route('proofs.show', $proof) }}">{{ $proof->title }}</a></li>
                                @endforeach
                            </ul>

                            @if($proofs->count() - 3 > 0)
                                <p class="mt-4">
                                    <a href="{{ route('proofs.index', ['category' => $category->value]) }}" class="font-light text-yellow-800 hover:underline">
                                        {{ $proofs->count() - 3 }} more proofs
                                    </a>
                                </p>
                            @endif
                        </div>
                    @endif
                @endforeach
            </div>
        </x-container>
    </div>

    <!-- Featured proof -->
    @if($featured)
    <x-container class="my-32 md:my-24">
        <p class="text-lg font-light tracking-widest text-yellow-600 uppercase">Featured Proof</p>

        <h3 class="max-w-xl mt-4 mb-12 text-3xl font-medium">{{ $featured->title }}</h3>

        @if($proof->description) <p class="max-w-xl mb-12 -mt-6 text-xl font-light text-stone-700">{{ $featured->description }}</p> @endif

        <a class="inline-block px-5 py-3 text-lg transition border rounded-md shadow-sm border-stone-300 hover:bg-stone-100" href="{{ route('proofs.show', $featured) }}">Read This Proof</a>
    </x-container>
    @endif

    <!-- Footer -->
    <x-footer />
</x-layout>
