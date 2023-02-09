<ul class="text-danger form-errors" @if (! $errors->any()) style="display: none;" @endif>
@if ($errors->any())
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
@endif
</ul>
