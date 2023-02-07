<x-layout>
    <x-slot name="css">
        <link rel="stylesheet" href="css/app.css">
    </x-slot>

    <main>
        <x-nav-panel></x-nav-panel>
    </main>

    @include('includes.modals.modal-sign-in')
    @include('includes.modals.modal-sign-up')
    <x-slot name="js">
        <script src="js/app.js"></script>
    </x-slot>
</x-layout>