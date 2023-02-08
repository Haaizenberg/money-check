<div class="error-block">
    <div class="container">
    @if(Session::has('auth-error'))
        <p class="error-block__auth-error">{{ Session::get('auth-error') }}</p>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    </div>
</div>