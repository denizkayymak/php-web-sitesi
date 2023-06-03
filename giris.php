<?php
    session_start();
    include("ayar.php");
    if ($_POST) {
        include("ayar.php");
        $Kimlik = $_POST["Kimlik"];
        $Sifre = $_POST["Sifre"];
        if ($Kimlik == "" || $Sifre == "") {
                echo "kayıt bulunamadı";
            } 
        else{
            $sor = mysqli_query($baglan,$sql= "select *from uyeler where (Kimlik='$Kimlik' AND Sifre='$Sifre')");
            $sor =mysqli_query($baglan,$sql);
            $kayitsay=mysqli_num_rows($sor);
            if($kayitsay==0) 
            header('Location: giris.php');
            else {
                $uyevarmi = mysqli_fetch_assoc($sor);
                $_SESSION["giris"] = 1; 
                $_SESSION["AdSoyad"]= $kayitsayi['AdSoyad'];
                $_SESSION["Yetki"]=$kayitsayi['Yetki'];
                echo "<script> window.location.href='indexx.php'; </script>";
          }}
        } ?>
        
<!doctype html>
<html>

<head>
<meta http-equiv="Content-Language" content="tr">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>Yönetim Sistemi V5</title>
<link rel="stylesheet"  href="style/style.css"> 
</head>
<body >

<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span></span>Kullanıcı Paneli</h2>

    <form  method="post" action="indexx.php" >
        <b>Kullanıcı Adı:</b><br>
        <input type="text" name="Kimlik" size="30" required><br><br>
        <b>Parola:</b><br>
        <input type="password" name="Sifre" size="30" required><br><br><br>
        <input type="submit" value="Giriş Yap">
    </form>
</body>

</html>