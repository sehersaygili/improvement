<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Seher's Ecom Site</title>
        <link rel="icon" type="image/x-icon" href="{{asset('assets/assets/favicon.ico')}}" />
        <link href="{{asset('assets/css/styles.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        @livewireStyles
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-3"> 
                <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
                    <ul class="navbar-nav me-auto mb-0 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Featured products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">WishList</a>
                        </li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-0 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#!">Order Tracking</a></li>
                    </ul>  
                </div>
            </div>
        </nav>
        {{ $slot }}
        <footer class="bg-light text-center text-white">
            <div class="container p-4 pb-4">
                <!-- Twitter -->
                <a
                    class="btn text-white rounded-circle m-1"
                    style="background-color: #ccc;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-twitter"></i
                ></a>

                <!-- Google -->
                <a
                    class="btn text-white rounded-circle m-1"
                    style="background-color: #ccc;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-google"></i
                ></a>

                <!-- Instagram -->
                <a
                    class="btn text-white rounded-circle m-1"
                    style="background-color: #ccc;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-instagram"></i
                ></a>

                <!-- Linkedin -->
                <a
                    class="btn text-white rounded-circle m-1"
                    style="background-color: #ccc;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-linkedin-in"></i
                ></a>
                <!-- Github -->
                <a
                    class="btn text-white rounded-circle m-1"
                    style="background-color: #ccc;"
                    href="#!"
                    role="button"
                    ><i class="fab fa-github"></i
                ></a>
            </div>
        </footer>
        <script src="https://kit.fontawesome.com/32eb9ba2f5.js" crossorigin="anonymous"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('assets/js/scripts.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
