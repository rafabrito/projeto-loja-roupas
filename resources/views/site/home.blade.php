<!DOCTYPE htlm>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-dark d-flex flex-column" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand ms-3" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex m-auto" role="search">
                            <div style="display: flex; background-color: white;padding: 3px;border-radius: 0.375rem; width: 600px">
                                <input class="form-control me-2 bg-white" type="search" style ="border: none;" placeholder="Search" aria-label="Search"/>
                                <button class="btn btn-dark" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </div>
                        </form>
                        <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container-fluid justify-content-center mt-2">
                    <ul class="nav ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                        </ul>
                </div>
            </nav>           
        </header>

        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item h-100 active" style="background-image: url({{ asset('img/carrossel1.avif') }}); background-size: contain; background-repeat: no-repeat; background-position: center;">
                        {{-- <img src="{{ asset('img/carrossel1.avif') }}" class="d-block w-100" alt="..."> --}}
                    </div>
                    <div class="carousel-item h-100" style="background: url({{ asset('img/carrossel2.avif') }}) center/contain no-repeat">
                        {{-- <img src="{{ asset('img/carrossel2.avif') }}" class="d-block w-100" alt="..."> --}}
                    </div>
                    <div class="carousel-item h-100" style="background: url({{ asset('img/carrossel3.avif') }}) center/contain no-repeat">
                        {{-- <img src="{{ asset('img/carrossel3.avif') }}" class="d-block w-100" alt="..."> --}}
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="container"> 
            <footer class="py-5"> 
                <div class="row"> 
                    <div class="col-6 col-md-2 mb-3"> 
                        <h5>Section</h5> 
                        <ul class="nav flex-column"> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                            </li>
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                            </li> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">About</a>
                            </li> 
                        </ul> 
                    </div>

                    <div class="col-6 col-md-2 mb-3"> 
                        <h5>Section</h5> 
                        <ul class="nav flex-column"> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                            </li> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                            </li> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                            </li> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                            </li> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">About</a>
                            </li> 
                        </ul> 
                    </div> 
                    <div class="col-6 col-md-2 mb-3"> 
                        <h5>Section</h5> 
                        <ul class="nav flex-column"> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                            </li> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
                            </li> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
                            </li> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                            </li> 
                            <li class="nav-item mb-2">
                                <a href="#" class="nav-link p-0 text-body-secondary">About</a>
                            </li> 
                        </ul> 
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3"> 
                        <div class="row">
                            <form> 
                                <h5>Subscribe to our newsletter</h5>
                                <p>Monthly digest of what's new and exciting from us.</p> 
                                <div class="d-flex flex-column flex-sm-row w-100 gap-2"> 
                                    <label for="newsletter1" class="visually-hidden">Email address</label> 
                                    <input id="newsletter1" type="email" class="form-control" placeholder="Email address"> 
                                    <button class="btn btn-primary" type="button">Subscribe</button> 
                                </div> 
                            </form>
                        </div>
                        <div class="row mt-4">
                            <p style="font-weight: 500;"><small>PAGAMENTO</small></p>
                            <div class="method-pay">
                                <i class="fa-brands fa-cc-mastercard" style="font-size:15pt;"></i>
                                <i class="fa-brands fa-pix" style="font-size:15pt;"></i>
                                <i class="fa-brands fa-cc-visa" style="font-size:15pt;"></i>
                                <i class="fa-brands fa-cc-paypal" style="font-size:15pt;"></i>
                            </div>
                        </div>
                    </div> 
                </div> 

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top"> 
                    <p>&copy; 2026 Company, Inc. All rights reserved.</p> 
                    <ul class="list-unstyled d-flex"> 
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="#" aria-label="Instagram"><i class="fa-brands fa-instagram" style="font-size:20pt;"></i></a>
                        </li> 
                        <li class="ms-3">
                            <a class="link-body-emphasis" href="#" aria-label="Facebook"><i class="fa-brands fa-facebook" style="font-size:20pt;"></i></a>
                        </li> 
                    </ul> 
                </div> 
            </footer> 
        </div>
    </body>
    
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>