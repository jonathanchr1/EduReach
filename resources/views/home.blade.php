<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduReach</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container-fluid text-center">
        <!-- <div class="row">
            <div class="col-2">
                <img src="{{ asset('img/logo-edureach.jpg') }}" alt="EduReach" width="86.75" height="41.5">
            </div>
            <div class="col-10"></div>
        </div> -->
        <div class="row" style="background-color: white">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: white">
                    <div class="container-fluid">
                        <img src="{{ asset('img/logo-edureach.jpg') }}" alt="EduReach" width="86.75" height="41.5" >
                        <a class="navbar-brand" href="#"> </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAccount">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: #000035; border: 1px solid">Log in</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: #000035; border: 1px solid">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row" style="background-color: #000035">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #000035">
                    <div class="container-fluid">
                        <!-- <a class="navbar-brand" href="#">EduReach</a> -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#" style="color: white">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: white">Class</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: white">Donate</a>
                                </li>
                                <!-- <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Dropdown link
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="home-container" style="position: relative">
        <img src=" {{ asset('img/write-bg.jpg') }} " style="width: 100%; height=700">
        <div class="container-text" style="position: absolute; top:25%; left:30% ; align-items: center">
            <h1 style="font-size: 100px; color: white; text-align: center; -webkit-text-stroke: 2px #000035">EduReach</h1>
            <p style="font-size: 25px; color: white; text-align: center">Making Education More Accessible to All Children</p>
        </div>
    </div>
    <br>
    <div style="padding-left: 35px">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur mollitia sapiente est nesciunt corrupti quidem nemo dolor aut quasi maxime inventore doloremque autem, quo iure officia obcaecati dolore. Ipsa, ad!</p>
    </div>
</body>
</html>