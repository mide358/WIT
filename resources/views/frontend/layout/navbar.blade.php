<nav class="navbar navbar-expand-lg navbar-landing fixed-top job-navbar" id="navbar">
    <div class="container-fluid custom-container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="/assets/images/logo-light.png" class="card-logo card-logo-dark" alt="logo dark" >
            <img src="/assets/images/logo-light.png" class="card-logo card-logo-light" alt="logo light">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0" id="navbar-example">
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.forum.index') }}">Forum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.mentors.index') }}">Browse all Mentors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.faqs') }}">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.contact') }}">Contact Us</a>
                </li>
            </ul>

            @guest
                <div class="">
                    <a href="{{ route('login.get') }}" class="btn btn-soft-primary"><i class="ri-user-3-line align-bottom me-1"></i> Login & Register</a>
                </div>
            @endguest
            @auth
                <div class="">
                    <span class="btn btn-default"><i class=" ri-user-line align-bottom me-1"></i> Hello! {{ auth()->user()->full_name }}</span>
                    <a href="{{ route('dashboard') }}" class="btn btn-default"><i class=" ri-dashboard-line align-bottom me-1"></i> Dashboard</a>
                    <a href="{{ route('logout') }}" class="btn btn-primary"><i class="ri-logout-box-line align-bottom me-1"></i> Logout</a>
                </div>
            @endauth
        </div>

    </div>
</nav>


