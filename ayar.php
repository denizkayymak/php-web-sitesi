<?php

$sa="localhost";
$ka="root";
$ks="";
$vta="maski";
   $baglan=mysqli_connect($sa,$ka,$ks,$vta);
        if(!$baglan)die("Bağlantı Kurulamadı".mysqli_error());
    mysqli_query($baglan,"set names'utf8'");

?>
