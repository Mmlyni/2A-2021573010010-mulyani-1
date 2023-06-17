<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<style>
    .btn-dusty-pink-kemerahan {
        color: #fff;
        background-color: #a85b70;
        border-color: #a85b70;
    }

    .btn-dusty-pink-kemerahan:hover {
        background-color: #9d525d;
        border-color: #9d525d;
    }

    .btn-dusty-pink-kemerahan:focus,
    .btn-dusty-pink-kemerahan.focus {
        box-shadow: 0 0 0 0.2rem rgba(168, 91, 112, 0.5);
    }

    .btn-dusty-pink-kemerahan.disabled,
    .btn-dusty-pink-kemerahan:disabled {
        color: #fff;
        background-color: #a85b70;
        border-color: #a85b70;
    }

    .btn-dusty-pink-kemerahan:not(:disabled):not(.disabled):active,
    .btn-dusty-pink-kemerahan:not(:disabled):not(.disabled).active,
    .show>.btn-dusty-pink-kemerahan.dropdown-toggle {
        color: #fff;
        background-color: #944a5c;
        border-color: #944a5c;
    }

    .btn-dusty-pink-kemerahan:not(:disabled):not(.disabled):active:focus,
    .btn-dusty-pink-kemerahan:not(:disabled):not(.disabled).active:focus,
    .show>.btn-dusty-pink-kemerahan.dropdown-toggle:focus {
        box-shadow: 0 0 0 0.2rem rgba(148, 74, 92, 0.5);
    }
</style>

<body class="d-flex flex-column h-100 bg-light">
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html"><span class=""><img class="logo-img" src="assets/logo.png" alt="..." /></span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item"><a class="nav-link" href="index.blade.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="Toko.blade.php">Toko</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.blade.php">Product</a></li>
                        <li class="nav-item"><a class="nav-link" href="Bayar.blade.php">Bayar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Pilihan Toko</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-15 col-xxl-8">
                    <div class=" rounded-6 mb-7">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="Toko-img" src="assets/img1.jpg" alt="..." /><br>
                                    <button class="btn btn-dusty-pink-kemerahan rounded-pill"><a class="nav-link" href="projects.blade.php">Wah Desainer</a></button>
                                </div>
                                <div class="col-md-4">
                                    <img class="Toko-img" src="assets/img2.jpg" alt="..." />
                                    <br>
                                    <button class="btn btn-dusty-pink-kemerahan rounded-pill">Igun Desainer</button>
                                </div>
                                <div class="col-md-4">
                                    <img class="Toko-img" src="assets/img1.jpg" alt="..." /><br>
                                    <button class="btn btn-dusty-pink-kemerahan rounded-pill">Kak Ti Desainer</button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <img class="Toko-img" src="assets/img1.jpg" alt="..." /><br>
                                    <button class="btn btn-dusty-pink-kemerahan rounded-pill">Kiw Kiw Desainer</button>
                                </div>
                                <div class="col-md-4">
                                    <img class="Toko-img" src="assets/img2.jpg" alt="..." />
                                    <br>
                                    <button class="btn btn-dusty-pink-kemerahan rounded-pill">Cyntia Desainer</button>
                                </div>
                                <div class="col-md-4">
                                    <img class="Toko-img" src="assets/img1.jpg" alt="..." />
                                    <br>
                                    <button class="btn btn-dusty-pink-kemerahan rounded-pill">Run Desainer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; Pesta Pora 2023</div>
                </div>
            </div>
            <div class="col-auto">
                            <a class="small" href="#!">Privacy</a>
                            <span class="mx-1">&middot;</span>
                            <a class="small" href="#!">Terms</a>
                            <span class="mx-1">&middot;</span>
                            <a class="small" href="#!">Contact</a>
                        </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>