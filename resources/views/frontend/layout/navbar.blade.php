<nav class="navbar navbar-expand-lg navbar-landing fixed-top job-navbar" id="navbar">
    <div class="container-fluid custom-container">
        <a class="navbar-brand" href="index.html">
            <img src="assets/images/logo-light.jpeg" class="card-logo card-logo-dark" alt="logo dark" height="17">
            <img src="assets/images/logo-light.jpeg" class="card-logo card-logo-light" alt="logo light" height="17">
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
                    <a class="nav-link" href="{{ route('frontend.mentors.index') }}">Find a Mentor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('frontend.mentors.index') }}">Browse all Mentors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faqs">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us</a>
                </li>
            </ul>

            <div class="">
                <a href="{{ route('login.get') }}" class="btn btn-soft-primary"><i class="ri-user-3-line align-bottom me-1"></i> Login & Register</a>
            </div>
        </div>

    </div>
</nav>


