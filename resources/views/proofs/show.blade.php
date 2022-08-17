<x-layout :title="$proof->title">
    <h1 class="text-4xl font-bold">{{ $proof->title }}</h1>

    <div class="space-y-4">
        {!! $proof->body !!}
    </div>
</x-layout>
