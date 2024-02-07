<?php

$db = mysqli_connect("localhost", "root", "", "pesantren");

if( !$db ){
    die("gagal terhubung!" . mysqli_connect_error());
}
?>
