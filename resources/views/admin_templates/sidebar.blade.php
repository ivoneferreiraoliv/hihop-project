<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4">
    <div class="sidenav-header">
        <a class="navbar-brand m-0" href="#">
            <img src="{{ asset('admin/assets/img/logo-hiphop-project-black.png') }}" alt="Logo" class="navbar-logo ">
            <span class="ms-1 font-weight-bold">Painel Administrativo</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('eventos') ? 'active' : '' }}" href="/eventos">
                    <i class="fas fa-calendar-alt"></i>
                    <span class="nav-link-text ms-1">Eventos</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('posts') ? 'active' : '' }}" href="/posts">
                    <i class="fas fa-file-alt"></i>
                    <span class="nav-link-text ms-1">Posts</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('comentarios') ? 'active' : '' }}" href="/comentarios">
                    <i class="fas fa-comments"></i>
                    <span class="nav-link-text ms-1">Comentários</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('usuarios') ? 'active' : '' }}" href="/usuarios">
                    <i class="fas fa-users"></i>
                    <span class="nav-link-text ms-1">Usuários</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
