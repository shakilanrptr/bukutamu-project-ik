<?php
    $server = "localhost";
    $user ="root";
    $password ="123456";
    $database ="dbbukutamu";

    $koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));

?>