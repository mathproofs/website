<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ $title }} - Mathproofs</title>

    @vite('resources/css/app.css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.0/dist/katex.min.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.0/dist/katex.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.0/dist/contrib/auto-render.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            renderMathInElement(document.body, {
                delimiters: [
                    {left: '$$', right: '$$', display: true},
                    {left: '$', right: '$', display: false},
                ]
            });
        });
    </script>
</head>
<body>
    <nav class="border-b shadow-sm border-stone-200">
        <div class="flex items-center justify-between max-w-screen-md py-6 mx-auto">
            <a href="#" class="flex items-center space-x-2 text-lg font-semibold">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.871 4A17.926 17.926 0 003 12c0 2.874.673 5.59 1.871 8m14.13 0a17.926 17.926 0 001.87-8c0-2.874-.673-5.59-1.87-8M9 9h1.246a1 1 0 01.961.725l1.586 5.55a1 1 0 00.961.725H15m1-7h-.08a2 2 0 00-1.519.698L9.6 15.302A2 2 0 018.08 16H8" />
                </svg>

                <span>Mathproofs</span>
            </a>

            <div class="relative flex justify-end">
                <input type="text" name="search" id="search" class="w-full py-2 pr-4 transition border rounded-md shadow-sm placeholder-stone-500 border-stone-200 focus:placeholder-stone-400 peer focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500 focus:outline-none pl-11" placeholder="Search Proofs" />

                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 transition -translate-y-1/2 text-stone-500 peer-focus:text-yellow-500 top-1/2 left-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </nav>

    {{ $slot }}
</body>
</html>
