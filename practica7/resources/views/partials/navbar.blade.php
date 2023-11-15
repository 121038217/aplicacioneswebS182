
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('Principal')?'text-success':''}}" aria-current="page" href="/">PRINCIPAL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ request()->routeIs('RegistroLibro')?'text-success':''}}" href="/RegistroLibro">Registro de Libros</a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand {{ request()->routeIs('recuerdo.create')}}" href="/recuerdo/create"></a>
    </li>
  </ul>