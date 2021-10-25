    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulir Malik</title>
        <link rel="stylesheet" href="CSS.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>ESD Venue</title>
        <?php
        $myname = isset($_POST['nama']) ? $_POST['myname'] : '';
        $event_date = isset($_POST['event_date']) ? $_POST['event_date'] : '';
        $start_time = isset($_POST['start_time']) ? $_POST['start_time'] : '';
        $duration = isset($_POST['duration']) ? $_POST['duration'] : '';
        $building = isset($_POST['building']) ? $_POST['building'] : '';
        $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
        $service = isset($_POST['service[]']) ? $_POST['service[]'] : '';
        $check_in = date('m-d-Y H:i:s', strtotime("$event_date $start_time"));
        $check_out = date("H:i", strtotime("+$duration hours", strtotime($start_time)));
        $check_out_final = date('m-d-Y H:i:s', strtotime("$event_date $check_out"));
        $harga = 0;
        if ($building == 'Nusantara Hall') {
            $harga = 2000;
        }
        if ($building == 'Garuda Hall') {
            $harga = 1000;
        }
        if ($building == 'Gedung Serbaguna') {
            $harga = 500;
        }

        if (!empty($_POST['service'])) {
            foreach ($_POST['service'] as $data) {
                if ($data == "Catering") {
                    $harga += 700;
                }
                if ($data == "Decoration") {
                    $harga += 450;
                }
                if ($data == "Sound_System") {
                    $harga += 250;
                }
            }
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
        <section class ="d-flex flex-column align-items-center justify-content-center" id="table" style="background-color: white;padding-top: 4rem;width: 80%;"></section>
            <h2 style="text-align: center;">Thank you Malik_1202194234 for Reserving</h2>
            <h3 style="text-align: center;">Please double check your reservation details</h3>
            <table class="table" style="width: 80%;" align="center">
                <thead>
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Check-in</th>
                    <th scope="col">Check-out</th>
                    <th scope="col">Building Type</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Service</th>
                    <th scope="col">Total Price</th>
                </tr>
                </thead>
                <tbody style="background-color: lavender;">
                <tr>
                    <th scope="row"><?php echo (rand()) ?></th>
                    <td><?php echo $myname ?></td>
                    <td><?php echo $check_in ?></td>
                    <td><?php echo $check_out_final ?></td>
                    <td><?php echo $building ?></td>
                    <td><?php echo $phone_number ?></td>
                    <td><?php
                            if (!empty($_POST['service'])) {
                                echo '<ul>';
                                foreach ($_POST['service'] as $data) {
                                    echo '<li>' . $data . '</li>';
                                }
                                echo '</ul>';
                            } else {
                                echo '<p>no service</p>';
                            } ?></td>
                    <td><?php echo $harga ?></td>
                </tbody>
            </table>
        </section>
        <footer class="footer py-4" style="background-color: rgb(221, 221, 221);margin-top: 27rem;width: 100%;">
            <p style="color: rgb(99, 98, 98);text-align: center;width: 100%;">Malik_1202194234</p>
        </footer>
    </body>
