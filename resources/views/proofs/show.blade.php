<x-layout :title="$proof->title">
    <div class="max-w-screen-md mx-auto my-12">
        <h1 class="text-4xl font-bold">{{ $proof->title }}</h1>

        <div class="space-y-4">
            {!! $proof->body !!}
        </div>
    </div>
</x-layout>
