<x-layout>
    <x-slot name="css">
        <link rel="stylesheet" href="css/app.css">
    </x-slot>

    <main>
        <x-nav-panel></x-nav-panel>
        <x-error-block></x-error-block>

        <x-money-check-link></x-money-check-link>
    </main>



    <x-modals.modal-sign-in></x-modals.modal-sign-in>
    <x-modals.modal-sign-up></x-modals.modal-sign-up>
    <x-slot name="js">
        <script src="js/app.js"></script>
    </x-slot>
</x-layout>