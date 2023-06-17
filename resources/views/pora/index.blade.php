<?php
session_start();
if (isset($_GET['x']) && $_GET['x'] == 'home') {
    $page = "Home.blade.php";
    include "main.blade.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'menu') {
    $page = "toko.blade.php";
    include "main.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'order') {
    $page = "model.blade.php";
    include "main.blade.php";
} else if (isset($_GET['x']) && $_GET['x'] == 'Bayar') {
    $page = "Pembayaran.blade.php";
    include "main.blade.php";
} /**else if (isset($_GET['x']) && $_GET['x'] == 'user') {
    if ($_SESSION['level_cafe'] == 1) {
        $page = "user.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }

} /**else if (isset($_GET['x']) && $_GET['x'] == 'menu') {

    $page = "menu.php";
    include "main.php";

} else if (isset($_GET['x']) && $_GET['x'] == 'login') {

    include "login.php";

} else if (isset($_GET['x']) && $_GET['x'] == 'logout') {

    include "proses/proses_logout.php";

} else if (isset($_GET['x']) && $_GET['x'] == 'katmenu') {

    $page = "katmenu.php";
    include "main.php";

} else if (isset($_GET['x']) && $_GET['x'] == 'orderitem') {

    $page = "order_item.php";
    include "main.php";

} else {

    $page = "home.php";
    include "main.php";
}**/
?>
