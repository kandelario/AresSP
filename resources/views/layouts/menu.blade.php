
<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('inventarios.index') }}" class="nav-link {{ Request::is('inventarios*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inventarios</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('inventariosSchedules.index') }}" class="nav-link {{ Request::is('inventariosSchedules*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inventarios Schedules</p>
    </a>
</li>
