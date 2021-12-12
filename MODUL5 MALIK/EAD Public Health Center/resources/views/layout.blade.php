<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>ESD Vaccine</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('/') ? 'active fw-bold' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('vaccine*') ? 'active fw-bold' : '' }}" href="/vaccine">Vaccine</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('patient*') ? 'active fw-bold' : '' }}" href="/patient">Patient</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="d-flex flex-column align-items-center justify-content-center" id="home" style="background-color: white;padding-top: 4rem;">
        @yield("Isi")
        <footer class="footer py-4 fixed-bottom" style="width: 100%;">
            <p style="color: rgb(99, 98, 98);text-align: center;width: 100%;" data-bs-toggle="modal" data-bs-target="#exampleModal">Made with <span>&#128153;</span> Malik Alrasyid Basori - 1202194234</p>
        </footer>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Kesan : [Sangat menantang kehidupan]<br>
                        Pesan : [DAH MANTEP BANG LANJUTKAN]
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>