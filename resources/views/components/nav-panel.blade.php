<div class="nav-panel">
    <div class="container">
        <div class="nav-panel__content">
            <div class="nav-panel__logo">
                <img src="/images/components/nav-panel/logo.svg" alt="" class="nav-panel__logo-img">
                <span class="nav-panel__logo-text">Money Check</span>
                <a href="{{ route('index') }}" class="nav-panel__logo-link"></a>
            </div>
            <div class="nav-panel__right-row">
                <div class="nav-panel__authorize">
                @auth
                    <a href="{{ route('logout') }}" class="btn btn-outline-light nav-panel__authorize-btn">Выйти</a>
                @endauth
                @guest
                    <button type="button" class="btn btn-outline-light nav-panel__authorize-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Войти</button>
                    <button type="button" class="btn btn-outline-light nav-panel__authorize-btn" data-bs-toggle="modal" data-bs-target="#registerModal">Зарегистрироваться</button>
                @endguest
                </div>
            </div>
        </div>
    </div>
</div>