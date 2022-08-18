<x-layout title="{{ $title }} - {{ config('app.name') }}">
    <x-navbar />

    <x-container class="my-12">
        <h1 class="mb-8 text-4xl font-medium">{{ $title }}</h1>

        <div class="flex items-center w-full mb-12 space-x-4">
            @foreach (\App\Models\Category::cases() as $category)
                @php
                    $proofCount = request()->has('search')
                        ? \App\Models\Proof::search(request('search'))->get()->filter(fn ($proof) => $proof->category->value == $category->value)->count()
                        : \App\Models\Proof::where('category', $category->value)->count();
                @endphp

                @if($proofCount > 0)
                    <a
                        class="px-4 py-3 font-medium text-center border rounded-md shadow-sm box {{ request('category') == $category->value ? 'border-yellow-500 ring-1 ring-yellow-500 font-bold' : 'border-gray-200' }}"
                        href="{{ route('proofs.index', ['category' => request('category') == $category->value ? null : $category->value, 'search' => request('search')]) }}"
                    >
                        {{ $category->name() }} <span class="text-stone-500">({{ $proofCount }})</span>
                    </a>
                @endif
            @endforeach
        </div>

        <ul>
            @foreach ($proofs as $proof)
                <li><a href="{{ route('proofs.show', $proof) }}">{{ $proof->title }}</a></li>
            @endforeach
        </ul>
    </x-container>

    <x-footer />
</x-layout>
