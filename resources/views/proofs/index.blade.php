<x-layout title="{{ $title }} - {{ config('app.name') }}">
    <x-navbar />

    <x-container class="my-12">
        <h1 class="mb-8 text-4xl font-medium">{{ $title }}</h1>

        <div class="flex items-center w-full mb-12 space-x-4">
            @foreach ($categories as [$category, $categoryProofs])
                <a
                    class="px-4 py-3 font-medium text-center border rounded-md shadow-sm box {{ request('category') == $category->value ? 'border-yellow-500 ring-1 ring-yellow-500 font-bold' : 'border-stone-200' }}"
                    href="{{ route('proofs.index', ['category' => request('category') == $category->value ? null : $category->value, 'search' => request('search')]) }}"
                >
                    {{ $category->name() }} <span class="text-stone-500">({{ $categoryProofs->count() }})</span>
                </a>
            @endforeach
        </div>

        <ul>
            @foreach ($proofs as $proof)
                <a href="{{ route('proofs.show', $proof) }}">
                    <li class="mb-10">
                        @unless(request()->has('category')) @if($proof->category) <p class="mb-1 font-light text-yellow-600">{{ $proof->category->name() }}</p> @endif @endunless

                        <h3 class="mb-1 text-xl font-medium" href="{{ route('proofs.show', $proof) }}">{{ $proof->title }}</h3>

                        @if($proof->description) <p class="text-stone-600">{{ $proof->description }}</p> @endif
                    </li>
                </a>
            @endforeach
        </ul>
    </x-container>

    <x-footer />
</x-layout>
