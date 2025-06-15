<header class="d-flex flex-wrap justify-content-center container">
    <!-- Navbar Brand -->
    <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="{{asset('images/vista.png')}}" class="bi mt-2" width="60px" height="42px">
        <span class="header-name mx-auto text-black">Kristinos Kontrimienės paukščių ūkis</span>
    </a>

    <!-- Navbar Collapse Content -->
    <div class="collapse  d-md-flex d-lg-flex d-xl-flex" id="navbarToggleExternalContent">
        <div class="navigation d-flex">
            <ul class="nav nav-pills ms-5">
                <!-- Navbar Links -->
                <li class="nav-item"><a class="nav-link" href="/#list"><img src="{{asset('favicons/home.png')}}" width="40px" height="40px"></a></li>
                <li class="nav-item"><a class="nav-link" href="/#about-us"><img src="{{asset('favicons/info.png')}}" width="40px" height="40px"></a></li>
                <li class="nav-item"><a class="nav-link" href="/#Contacts"><img src="{{asset('favicons/contact.png')}}" width="40px" height="40px"></a></li>
                @auth
                <li class="nav-item"><a class="nav-link text-black" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                        <img src="{{asset('favicons/logout.png')}}" width="40px" height="40px">Atsijungti</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @endauth

            </ul>
        </div>
    </div>

    <!-- Navbar Toggler (Not Visible on MD, LG, XL Screens) -->
    <nav class="navbar navbar-dark bg-transparent border-0 d-md-none d-lg-none d-xl-none">
        <div class="container-fluid border-0">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon custom-toggler-icon border-0"></span>
            </button>
        </div>
    </nav>
</header>
