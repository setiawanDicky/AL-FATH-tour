    <div class="container">
            <nav class="row navbar navbar-expand-lg navbar-light  px-3">
                <a href="{{route('home')}}" class="navbar-brand">
                    <img src="{{url('frontend/images/alfath.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navb"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navb">
                    <ul class="navbar-nav  ml-auto mr-1">
                        <li class="nav-item mx-md-2">
                            <a href="" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item  mx-md-2">
                            <a href="" class="nav-link">Paket Travel</a>
                        </li>
                        <li class="nav-item dropdown  mx-md-2">
                            <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Service
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">link</a>
                                <a class="dropdown-item" href="#">link</a>
                                <a class="dropdown-item" href="#">link</a>
                                <!-- <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a> -->
                            </div>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a href="" class="nav-link">Testimoni</a>
                        </li>
                    </ul>

                    <!-- button for mobile -->
                    <form class="form-inline d-sm-block  d-md-none">
                        <button class="btn btn-login my-1 my-sm-0">
                            Masuk
                        </button>
                    </form>

                    <!-- button for desktop -->
                    <form class="form-inline my-2  my-lg-0 d-none d-md-block">
                        <button class="btn btn-login btn-navbar-right px-4">
                            Masuk
                        </button>
                    </form>
                </div>
            </nav>
        </div>