<header class="header">
  <nav class="flexky" id="flexky">
      <div class="flexky__button" id="btn-menu"><span></span><span></span><span></span></div>
      <ul class="flexky__container" id="flexky-menu">
          <li class="flexky__item">
            <a class="flexky__link" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              LOGOUT
            </a>
          </li>
          
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>


          <li class="flexky__item"><a class="flexky__link" href="#">Item #2</a></li>
          <li class="flexky__item"><a class="flexky__link" href="#">Item #3</a></li>
          <li class="flexky__item"><a class="flexky__link" href="#"><img class="flexky__img"
                      src="https://s5.postimg.cc/5kpg9usvb/logo.png" alt="Logo" /></a></li>
          <li class="flexky__item"><a class="flexky__link" href="#">Item #4</a></li>
          <li class="flexky__item"><a class="flexky__link" href="#">Item #5</a></li>
          <li class="flexky__item"><a class="flexky__link" href="#">Item #6</a></li>
      </ul>
  </nav>
</header>



@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
    @endauth
</div>
@endif