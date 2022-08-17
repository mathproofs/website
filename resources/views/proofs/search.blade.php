<x-layout title="Search results for '{{ request('query') }}'">
    <x-container class="my-12">
        <h1 class="mb-4 text-4xl font-bold">Search results for '{{ request('query') }}'</h1>

        <ul>
            @foreach ($proofs as $proof)
                <li><a href="{{ route('proofs.show', $proof) }}">{{ $proof->title }}</a></li>
            @endforeach
        </ul>
    </x-container>
</x-layout>
