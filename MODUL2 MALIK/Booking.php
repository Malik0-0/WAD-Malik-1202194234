<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Malik</title>
    <link rel="stylesheet" href="CSS.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ESD Venue</title>
    
    <?php 
    if (!empty($_GET['building'])){
      $building = $_GET ['building'];
    }
    ?>

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
              <a class="nav-link" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Booking.php">Booking</a>
            </li>
        </div>
      </div>
    </nav>
    <section class ="d-flex flex-column align-items-center justify-content-center" id="home" style="background-color: white;padding-top: 4rem;">
    <form action="My_Booking.php" method="POST" style="width: 75%;">
            <p class="lead" style="background-color: black;color: white;width: 100%;text-align: center;font-size:x-large;">Reserve your venue now!</p>
            <hr class="my-4">
        <div class="row justify-content-center">
            <div class="col d-flex flex-column align-items-center justify-content-center">
            <?php
                if (isset($building)) {
                ?>
                    <img src="img/<?php echo $building ?>.jpg" alt="" width="600px" height="450px">
                <?php } else {
                ?>
                    <img src="img/Gedung Serbaguna.jpg" alt="" width="400px" height="250px">
                <?php } ?>
            </div>
            <fieldset class="col">
                <div class="col-10">
                <label>Name:</label>
                <input class="form-control" type="name" id="myname" name="myname" readonly value="Malik_1202194234">
                </div>
                <div class="col-10">
                    <label for="event_date">Event Date:</label>
                    <input class="form-control" type="date" id="event_date" name="event_date">
                </div>
                <div class="col-10">
                    <label>Start Time:</label>
                    <input class="form-control" type="time" id="start_time" name="start_time">
                </div>
                <div class="col-10">
                    <label>Duration (Hours):</label>
                    <input class="form-control" type="number" id="duration" name="duration">
                </div>
                <div class="col-10">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Building Type</label>
                    <select class="custom-select my-1 mr-sm-2 form-control" name="building">
                        <?php
                        if (isset($building)) {
                        ?>
                            <option selected value="<?php echo $building ?>"><?php echo $building ?></option>
                            <option value="Nusantara Hall" disabled>Nusantara Hall</option>
                            <option value="Garuda Hall" disabled>Garuda Hall</option>
                            <option value="Gedung Serbaguna" disabled>Gedung Serbaguna</option>
                        <?php } else {
                        ?>
                            <option selected disabled>Choose..</option>
                            <option value="Nusantara Hall">Nusantara Hall</option>
                            <option value="Garuda Hall">Garuda Hall</option>
                            <option value="Gedung Serbaguna">Gedung Serbaguna</option>
                        <?php } ?>                          
                    </select>
                </div>
                <div class="col-10">
                    <label>Phone Number:</label>
                    <input class="form-control" type="number" id="phone_number" name="phone_number">
                </div>
                <label>Add Service(s):</label><br>
                    <input type="checkbox" id="Catering" value="Catering" name="service[]"><label class="light" for="Catering">Catering / $700</label><br>
                    <input type="checkbox" id="Decoration" value="Decoration" name="service[]"><label class="light" for="Decoration">Decoration / $450</label><br>
                    <input type="checkbox" id="Sound_System" value="Sound_System" name="service[]"><label class="light" for="Sound_System">Sound System / $250</label><br>
                <div class="card-body">
                  <button type="submit" class="btn btn-primary mt-2 col-12">Book</button>
                </div>
            </fieldset>
        </div>
    </form>
    <footer class="footer py-4" style="background-color: rgb(221, 221, 221);margin-top: 30px;width: 100%;">
        <p style="color: rgb(99, 98, 98);text-align: center;width: 100%;">Malik_1202194234</p>
    </footer>
  </body>