  <div class="accordion accordion-flush bg-dark" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Usuarios
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <li class="nav-item bg-dark">
                <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                    <i class="fas fa-fw fa-search ml-3"></i>
                    <p>Users</p>
                </a>
            </li>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          Accordion Item #2
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          Accordion Item #3
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
      </div>
    </div>
  </div>




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
    <a href="{{ route('tipos_pagos.index') }}" class="nav-link {{ Request::is('paymentTypes*') ? 'active' : '' }}">
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

{{-- <li class="nav-item">
    <a href="{{ route('operations.index') }}" class="nav-link {{ Request::is('operations*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Operations</p>
    </a>
</li> --}}

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
    <a href="{{ route('razon-socials.index') }}" class="nav-link {{ Request::is('razonSocials*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Razon Socials</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('sigla-asistencias-personals.index') }}" class="nav-link {{ Request::is('siglaAsistenciasPersonals*') ? 'active' : '' }}">
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
