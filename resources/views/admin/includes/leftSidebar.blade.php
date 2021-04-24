

<div class="d-flex flex-column text-white bg-dark col-lg-2 p-0" style="min-height: 100vh;">

    <a href="{{ route('main') }}" class="d-flex align-items-center mt-3 mb-3 mb-md-2 me-md-2 text-white text-decoration-none">
        <h2>Админ-панель</h2>
    </a>
    <div class="dropdown ml-3 mb-3">

        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

            <small>{{ Auth::user()->name }}</small>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">

            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <hr>
    <ul class="nav nav-pills flex-column mb-0" style="width: auto;">
        <li class="nav-item">
            <a href="{{ route('main') }}" class="nav-link {{ Request::path()=='admin' ? 'active' : 'text-white'}}">
               Главная
            </a>
        </li>
        <li>
            <a href="{{ route('users.index') }}" class="nav-link {{ Request::path()=='admin/users' ? 'active' : 'text-white'}}">
                Пользователи
            </a>
        </li>
    </ul>

</div>
