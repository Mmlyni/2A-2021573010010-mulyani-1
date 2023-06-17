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
        <!-- Navigation-->
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
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Pilihla Desain Sesuai Selera anda</span></h1>
            </div>

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <section>
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <img class="logo-img" src="assets/ss3.png" alt="..." />
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>Desain baju bridesmaid</div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <button class="btn btn-dusty-pink-kemerahan rounded-pill" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Order</button>
                                        </div>
                                    </div>

                                    <!-- Modal Tambah menu baru-->
                                    <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sesuaikan Orderan Anda</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" id="selectMenu" name="pilihan_menu" required>
                                                                    <option value="">Ukuran</option>
                                                                    <option value="menu1">x</option>
                                                                    <option value="menu2">xl</option>
                                                                    <option value="menu3">xxl</option>
                                                                </select>
                                                                <label for="selectMenu">Pilih Ukuran</label>
                                                                <div class="invalid-feedback">
                                                                    Pilih salah satu
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" id="selectMenu" name="pilihan_menu" required>
                                                                    <option value="">Warna</option>
                                                                    <option value="menu1">Peach</option>
                                                                    <option value="menu2">Pink</option>
                                                                    <option value="menu3">Dusty Pink</option>
                                                                </select>
                                                                <label for="selectMenu">Pilih Warna</label>
                                                                <div class="invalid-feedback">
                                                                    Pilih salah satu
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-dusty-pink-kemerahan rounded-pill" name="input_menu_validate" value="12345"><a class="nav-link" href="Bayar.blade.php">Bayar</a></button>
                                                </div>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <section>
                        <div class="card shadow border-0 rounded-4 mb-5">
                            <div class="card-body p-5">
                                <div class="row align-items-center gx-5">
                                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                        <div class="bg-light p-4 rounded-4">
                                            <img class="logo-img" src="assets/ss1.png" alt="..." />
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div>Desain Gaun Pesta</div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <button class="btn btn-dusty-pink-kemerahan rounded-pill" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">Order</button>
                                        </div>
                                    </div>

                                    <!-- Modal Tambah menu baru-->
                                    <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sesuaikan Orderan Anda</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="row">
                                                        <div class="col-4">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" id="selectMenu" name="pilihan_menu" required>
                                                                    <option value="">Ukuran</option>
                                                                    <option value="menu1">x</option>
                                                                    <option value="menu2">xl</option>
                                                                    <option value="menu3">xxl</option>
                                                                </select>
                                                                <label for="selectMenu">Pilih Ukuran</label>
                                                                <div class="invalid-feedback">
                                                                    Pilih salah satu
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="form-floating mb-3">
                                                                <select class="form-select" id="selectMenu" name="pilihan_menu" required>
                                                                    <option value="">Warna</option>
                                                                    <option value="menu1">Peach</option>
                                                                    <option value="menu2">Pink</option>
                                                                    <option value="menu3">Dusty Pink</option>
                                                                </select>
                                                                <label for="selectMenu">Pilih Warna</label>
                                                                <div class="invalid-feedback">
                                                                    Pilih salah satu
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-dusty-pink-kemerahan rounded-pill" name="input_menu_validate" value="12345">Save changes</button>
                                                </div>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </div>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto">
                        <div class="small m-0">Copyright &copy; Pesta Pora 2023</div>
                    </div>
                    <div class="col-auto">
                        <a class="small" href="#!">Privacy</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Terms</a>
                        <span class="mx-1">&middot;</span>
                        <a class="small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        </div>>
    </main>
</body>

</html>