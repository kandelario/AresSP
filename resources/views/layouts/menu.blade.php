
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
