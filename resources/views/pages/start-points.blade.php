<x-layout>
    <x-slot name="css">
        <link rel="stylesheet" href="/css/app.css">
    </x-slot>

    <main>
        <x-nav-panel></x-nav-panel>
        <x-start-points></x-start-points>
    </main>

    <x-slot name="js">
        <script src="/js/app.js"></script>
    </x-slot>
</x-layout>