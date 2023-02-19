<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="registerModalLabel">Зарегистрироваться</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('sign-up') }}">
          @csrf
          <div class="mb-3">
            <label for="name" class="form-label">Как Вас величать?</label>
            <input type="name" name="name" class="form-control" id="name" aria-describedby="nameHelp">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Адрес электронной почты</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-light">Зарегистрироваться</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
