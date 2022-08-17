<x-layout :title="$proof->title">
    <x-container class="my-12">
        <div class="space-y-4 prose prose-stone prose-h1:text-black">
            <h1>{{ $proof->title }}</h1>
            {!! $proof->body !!}
        </div>
    </x-container>
</x-layout>
