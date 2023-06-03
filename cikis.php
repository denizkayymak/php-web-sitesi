<?php
    session_start();
    session_destroy();
    setcookie("Kimlik","",time()-1);
    echo "<script> window.location.href='deneme.php'; </script>";
?>

