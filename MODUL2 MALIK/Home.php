  <!DOCTYPE html>
  <html lang="en">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <title>ESD Venue</title>

    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container d-flex flex-column align-items-center justify-content-center">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Booking.php">Booking</a>
              </li>
          </div>
        </div>
      </nav>
      <section class ="d-flex flex-column align-items-center justify-content-center" id="home" style="padding-top: 5rem;background-color: white;">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="display-4">WELCOME TO ESD VENUE RESERVATION</h1>
            <p class="lead" style="background-color: black;color: white;width: 100%;text-align: center;font-size:x-large;">Find your best deal for your event, here!</p>
            <hr class="my-4">
        </div>
        <div class="row justify-content-center col-7">
            <div class="col">
              <div class="card">
                <img src="img/Nusantara Hall.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Nusantara Hall</h5>
                  <p class="mb-0" style="color: grey;">$2000 / Hour</p>
                  <p class="mb-0" style="color: grey;">5000 Capacity</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item fw-bold" style="color: rgb(6, 218, 6); text-align: center;">Free Parking</li>
                  <li class="list-group-item fw-bold" style="color: rgb(6, 218, 6); text-align: center;">Full Ac</li>
                  <li class="list-group-item fw-bold" style="color: rgb(6, 218, 6); text-align: center;">Cleaning Service</li>
                  <li class="list-group-item fw-bold" style="color: rgb(6, 218, 6); text-align: center;">Covid-19 Health Protocol</li>
                </ul>
                <div class="card-body text-center">
                  <a href="Booking.php?building=Nusantara Hall" class="btn btn-primary">Book Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/Garuda Hall.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Garuda Hall</h5>
                  <p class="mb-0" style="color: grey;">$1000 / Hour</p>
                  <p class="mb-0" style="color: grey;">2000 Capacity</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item fw-bold" style="color: rgb(6, 218, 6); text-align: center;">Free Parking</li>
                  <li class="list-group-item fw-bold" style="color: rgb(6, 218, 6); text-align: center;">Full Ac</li>
                  <li class="list-group-item fw-bold" style="color: rgb(218, 6, 6); text-align: center;">No Cleaning Service</li>
                  <li class="list-group-item fw-bold" style="color: rgb(6, 218, 6); text-align: center;">Covid-19 Health Protocol</li>
                </ul>
                <div class="card-body text-center">
                  <a href="Booking.php/building=Garuda Hall" class="btn btn-primary">Book Now</a>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card">
                <img src="img/Gedung Serbaguna.jpg" class="card-img-top" alt="..." height="230px">
                <div class="card-body">
                  <h5 class="card-title">Gedung Serba Guna</h5>
                  <p class="mb-0" style="color: grey;">$500 / Hour</p>
                  <p class="mb-0" style="color: grey;">500 Capacity</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item fw-bold" style="color: rgb(218, 6, 6); text-align: center;">No Free Parking</li>
                  <li class="list-group-item fw-bold" style="color: rgb(218, 6, 6); text-align: center;">No Full Ac</li>
                  <li class="list-group-item fw-bold" style="color: rgb(218, 6, 6); text-align: center;">No Cleaning Service</li>
                  <li class="list-group-item fw-bold" style="color: rgb(6, 218, 6); text-align: center;">Covid-19 Health Protocol</li>
                </ul>
                <div class="card-body text-center">
                  <a href="Booking.php?building=Gedung Serbaguna" class="btn btn-primary">Book Now</a>
                </div>
              </div>
            </div>
          </div>
      </section>
      <footer class="footer py-4" style="background-color: rgb(221, 221, 221);margin-top: 30px;width: 100%;">
          <p style="color: rgb(99, 98, 98);text-align: center;width: 100%;">Malik_1202194234</p>
      </footer>
    </body>
    
  </html>
