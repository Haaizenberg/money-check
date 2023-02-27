<div class="nav-panel">
    <div class="container">
        <div class="nav-panel__content">
            <div class="nav-panel__logo">
                <img src="/images/components/nav-panel/logo.svg" alt="" class="nav-panel__logo-img">
                <span class="nav-panel__logo-text">Money Check</span>
                <a href="{{ route('index') }}" class="nav-panel__logo-link"></a>
            </div>

            <div class="nav-panel__middle-row">
                <a 
                    href="{{ route('start-point') }}" 
                    @class([
                        'link',
                        'link_active' => request()->route()->named('start-point'),
                    ])
                >
                    Точки отсчета
                </a>
            </div>

            <div class="nav-panel__right-row">
                <div class="nav-panel__authorize d-flex align-items-center">
                @auth
                    <p class="mb-0 me-3">{{ Auth::user()->name }}</p>
                    <a href="{{ route('logout') }}" class="btn btn-outline-light nav-panel__authorize-btn">Выйти</a>
                @endauth
                @guest
                    <button type="button" class="btn btn-outline-light me-3 nav-panel__authorize-btn" data-bs-toggle="modal" data-bs-target="#loginModal">Войти</button>
                    <button type="button" class="btn btn-outline-light nav-panel__authorize-btn" data-bs-toggle="modal" data-bs-target="#registerModal">Зарегистрироваться</button>
                @endguest
                </div>
            </div>
        </div>
    </div>
</div>