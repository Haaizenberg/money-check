<div class="error-block">
    <div class="container">
    @if(Session::has('auth-error'))
        <p class="error-block__auth-error">{{ Session::get('auth-error') }}</p>
    @endif

        <x-form-errors></x-form-errors>
    </div>
</div>