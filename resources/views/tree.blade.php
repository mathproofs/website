<x-layout>
    <div id="mynetwork" class="w-full h-screen"></div>

    <div
        class="absolute top-8 right-8 w-72 space-y-3 rounded-md border border-gray-300 bg-white p-4 shadow-sm sm:w-[calc(100%-64px)]"
    >
        <h3 class="text-lg font-semibold">Categories</h3>
        @foreach($categories as $category)
        <div class="flex items-center space-x-3">
            <div class="w-6 h-6 rounded" style="background: {{ $category->color() }}"></div>
            <span>{{ $category->name() }}</span>
        </div>
        @endforeach
        <p class="text-sm">Double click a proof to open it.</p>
    </div>

    <x-slot name="head">
        <script
            type="text/javascript"
            src="https://unpkg.com/vis-network/standalone/umd/vis-network.min.js"
        ></script>
    </x-slot>

    <script type="text/javascript" defer>
        var nodes = new vis.DataSet([
            @foreach($proofs as $proof)
                { id: '{{ $proof->slug }}', label: '{{ $proof->title }}', color: '{{ $proof->category->color() }}', shape: 'box' },
            @endforeach
        ])

        var edges = new vis.DataSet([
            @foreach($proofs as $proof)
                @foreach($proof->implications as $implication)
                    { from: '{{ $proof->slug }}', to: '{{ $implication->slug }}', arrows: 'to' },
                @endforeach
            @endforeach
        ])

        var container = document.getElementById('mynetwork')

        var data = {
            nodes: nodes,
            edges: edges
        }
        var options = {}

        var network = new vis.Network(container, data, options)

        network.on("doubleClick", function (params) {
            slug = params.nodes[0]
            window.open('/proofs/' + slug)
        });
    </script>
</x-layout>
