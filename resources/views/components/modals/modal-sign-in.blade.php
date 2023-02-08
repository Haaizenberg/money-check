<div class="modal fade modal_auth" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Войти</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('sign-in') }}">
          @csrf
          <div class="mb-3">
            <label for="email" class="form-label">Адрес электронной почты</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-light">Войти</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
