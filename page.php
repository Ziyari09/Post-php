<?php

if (isset($_POST['submit'])) {

    $username_input = $_POST['username'];

    echo "<h1>Selamat datang </h1>";
    echo "Haloo Selamat Datang ".  $username_input . "<br/>";
    echo "Password Telah Disimpan" ;

}else {
    echo "Mohon maaf , kamu harus login dari halaman awal ";
}