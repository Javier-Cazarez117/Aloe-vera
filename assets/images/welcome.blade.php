<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="css/style.css">
        <style>
            body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../image/wp2330320.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/nosotros">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="hero-image">
            <div class="hero-text">
                <h1 style="font-size:50px">Lorem ipsum dolor sit amet</h1>
                <p>Lorem ipsum dolor sit ametr</p>
            </div>
        </div>
        <div class="container">
            <main class="row mb-4">
                <div class="col-md-6 text-center">
                    <img src="./image/aloe2.jpg" alt="travelers" id="main-image">
                </div>
                <div class="col-md-6 text-center my-auto">
                    <h1 class="font-weight-bolder">Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mattis elit diam, eget molestie dui aliquet a</p>
                    
                </div>
            </main>
            <div class="row flex-row-reverse" id="nosotros">
                <div class="col-md-6 text-center">
                    <img src="./image/aloe3.jpg" alt="travelers">
                </div>
                <div class="col-md-6 text-center my-auto">
                    <h1 class="font-weight-bolder">Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mattis elit diam, eget molestie dui aliquet a</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-center" id="destino">
                    <img src="./image/aloe4.jpg" alt="travelers">
                </div>
                <div class="col-md-6 text-center my-auto">
                    <h1 class="font-weight-bolder">Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mattis elit diam, eget molestie dui aliquet a</p>
                </div>
            </div>
            <div class="row flex-row-reverse" id="contactanos">
                <div class="col-md-6 text-center">
                    <img src="./image/aloe5.jpg" alt="travelers">
                </div>
                <div class="col-md-6 text-center my-auto">
                    <h1 class="font-weight-bolder">Lorem ipsum dolor sit amet</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In mattis elit diam, eget molestie dui aliquet a</p>
                </div>
            </div>
        </div>
    </body>
</html>
