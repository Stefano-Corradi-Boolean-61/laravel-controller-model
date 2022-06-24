<header>

    <ul class="nav">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}" href="{{ route('about') }}">Chi siamo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'students' ? 'active' : '' }}" href="{{ route('students') }}">Lista studenti</a>
        </li>
      </ul>

</header>
