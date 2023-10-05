<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/home"> <!-- Redireccion Dashboard  a home principal creado por larabel resources\home.blade.php-->
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="/usuarios">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="/roles">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    <!-- <a class="nav-link" href="/blogs">
        <i class=" fas fa-blog"></i><span>Blogs</span>
    </a> -->
    <a class="nav-link" href="/usuariotitulados">
        <i class=" fas fa-graduation-cap"></i><span>Registrar Titulados</span>
    </a>
    <a class="nav-link" href="/nombreinstitucions">
        <i class="fas fa-school"></i><span>Instituciónes</span>
    </a>
    <a class="nav-link" href="/nivelformacions">
        <i class="fas fa-layer-group"></i><span>Nivel formacion</span>
    </a>
    <a class="nav-link" href="/usuarioadministrativos">
        <i class="fas fa-user-tie"></i><span>Administrativos</span>
    </a>
    <a class="nav-link" href="/cargos">
        <i class="fas fa-book-reader"></i><span>Cargos Administrtivos</span>
    </a>
</li>
