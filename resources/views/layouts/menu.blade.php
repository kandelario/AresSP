
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

{{-- <li class="nav-item">
    <a href="{{ route('inventariosSchedules.index') }}" class="nav-link {{ Request::is('inventariosSchedules*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inventarios Schedules</p>
    </a>
</li> --}}

<li class="nav-item">
    <a href="{{ route('paymentTypes.index') }}" class="nav-link {{ Request::is('paymentTypes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Payment Types</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('clientes.index') }}" class="nav-link {{ Request::is('clientes*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Clientes</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('personals.index') }}" class="nav-link {{ Request::is('personals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Personals</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('operations.index') }}" class="nav-link {{ Request::is('operations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Operations</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('assignments.index') }}" class="nav-link {{ Request::is('assignments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Assignments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('asistencias.index') }}" class="nav-link {{ Request::is('asistencias*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Asistencias</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('movimientos.index') }}" class="nav-link {{ Request::is('movimientos*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Movimientos</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('razonSocials.index') }}" class="nav-link {{ Request::is('razonSocials*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Razon Socials</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('siglaAsistenciasPersonals.index') }}" class="nav-link {{ Request::is('siglaAsistenciasPersonals*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Sigla Asistencias Personals</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Permissions</p>
    </a>
</li>
