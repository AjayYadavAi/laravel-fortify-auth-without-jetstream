<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/">WebPage</a>
        </li>
        @if (Route::has('login'))
            @auth
            <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link">Home</a>
            </li>

            <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}" role="button">
                    @csrf
                    <a :href="route('logout')" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
                </form>
            </li>

            @else
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Log in</a>
            </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="ml-4 nav-link">Register</a>
                </li>
                @endif
            @endauth
        @endif
      </ul>
    </nav>

    @yield('main')

</body>
</html>
