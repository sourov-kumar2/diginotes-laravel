<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background: linear-gradient(45deg, #4caf50, #1976d2);">
    <a class="navbar-brand" href="#" style="color: #ffeb3b;">
        <strong>DigiNotes</strong>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#" style="color: #ffffff; margin-right: 10px;">
                    Home <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff; margin-right: 10px;">Browse Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff; margin-right: 10px;">My Notes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff; margin-right: 10px;">Upload Note</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" style="color: #ffffff; margin-right: 10px;">Contact</a>
            </li>
        </ul>
        <div class="nav-item dropdown">
            @if (Auth::check())
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ffeb3b;">
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-right animate__animated animate__fadeIn" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a>
                    <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </div>
            @else
                <a class="nav-link" href="{{ route('login') }}" style="color: #ffeb3b;">Login</a>
            @endif
        </div>
    </div>
</nav>

<style>
    .navbar {
        font-family: 'Roboto', sans-serif;
    }

    .navbar-brand {
        font-weight: bold;
        font-size: 1.8rem;
        transition: transform 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .navbar-brand:hover {
        transform: scale(1.2);
        color: #ff5722;
    }

    .navbar-nav .nav-link {
        font-size: 1.1rem;
        transition: color 0.3s ease-in-out, transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .navbar-nav .nav-link:hover {
        color: #ffeb3b;
        transform: translateY(-3px);
        box-shadow: 0px 4px 10px rgba(255, 235, 59, 0.5);
    }

    .dropdown-menu {
        background: linear-gradient(45deg, #1976d2, #4caf50);
        border: none;
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        transform: translateY(10px);
        opacity: 0;
    }

    .dropdown-menu.show {
        transform: translateY(0);
        opacity: 1;
    }

    .dropdown-item {
        color: #ffffff;
        transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
    }

    .dropdown-item:hover {
        background-color: #ffeb3b;
        color: #000;
    }

    .navbar-toggler {
        border: none;
    }

    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%28155, 155, 155, 0.7%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }
</style>
