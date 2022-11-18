<footer class="py-12 border-t border-stone-200 md:py-6">
    <x-container class="flex items-center justify-between">
        <p class="print:hidden">
            &copy; {{ date('Y') }} by
            <a class="hover:underline" href="https://jeroenvanrensen.nl/">Jeroen van Rensen</a>
        </p>

        <p class="print:hidden">
            <a class="underline" href="{{ route('tree') }}">Tree of Proofs</a>
        </p>

        <p class="hidden print:block">{{ url()->current() }}</p>
        <p class="hidden print:block">Printed on {{ today()->format('F d, Y') }}</p>
    </x-container>
</footer>
