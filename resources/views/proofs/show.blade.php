<x-layout :title="$proof->title">
    <div class="max-w-screen-md mx-auto my-12">
        <div class="space-y-4 prose">
            <h1>{{ $proof->title }}</h1>
            {!! $proof->body !!}
        </div>
    </div>
</x-layout>
