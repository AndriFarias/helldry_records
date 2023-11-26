<nav class="navbar navbar-expand-lg {{(Route::currentRouteName() != 'artistas') ? 'mb-3' : ''}}" style="background-color: #701a75;" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Helldry Records</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{(Route::currentRouteName() == 'artistas')?'active':''}}" aria-current="page" href="{{ route('artistas') }}">Artistas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(Route::currentRouteName() == 'grupos')?'active':''}}" href="{{ route('grupos') }}">Grupos</a>
                </li>
        </div>
        <ul class="navbar-nav">
                    <li><a class="btn btn-danger" href="{{ route('logout') }}">Logout</a></li>
            </li>
        </ul>
    </div>
</nav>