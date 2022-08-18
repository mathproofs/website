<nav class="border-b shadow-sm border-stone-200">
    <x-container class="flex items-center justify-between py-6">
        <a href="{{ route('home') }}">
            <x-logo />
        </a>

        <div class="relative flex justify-end">
            <form method="get" action="{{ route('proofs.search') }}">
                <input
                    type="text"
                    name="query"
                    value="{{ request('query') }}"
                    id="query"
                    class="w-full py-2 pr-4 transition border rounded-md shadow-sm placeholder-stone-500 border-stone-200 peer focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none pl-11"
                    placeholder="Search Proofs..."
                />

                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 transition -translate-y-1/2 text-stone-500 peer-focus:text-yellow-500 top-1/2 left-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </form>
        </div>
    </x-container>
</nav>
