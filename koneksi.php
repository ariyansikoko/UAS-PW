<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $name = "piano";
    $koneksi = mysqli_connect($host, $user, $password) or die ("Task failed successfully");
    mysqli_select_db($koneksi, $name);
?>