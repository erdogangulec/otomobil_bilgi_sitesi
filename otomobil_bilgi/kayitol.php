<?php 
include("baglanti.php");

$username_err="";
$email_err="";
$parola_err="";
$parolatkr_err="";

if (isset($_POST["kaydet"])) {
//kullanıcı adı bölümü
  if (empty($_POST["kullaniciadi"])) {
      $username_err="Kullanıcı adı boş geçilemez.";
    }  
  else if (strlen($_POST["kullaniciadi"])<6) {
    $username_err="kullanıcı adı minimum 6 karakterden oluşmalı!";
  }
  
  else{
    $username=$_POST["kullaniciadi"];
  }

//mail bölümü
if (empty($_POST["email"])) {
  $email_err="email alanı boş geçilemez.";
}
else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  $email_err = "Geçersiz email formatı";
}
else{
  $email=$_POST["email"];
}

//parola bölümü

if (empty($_POST["parola"])) {
  $parola_err="bu alan boş geçilmez";
}

else if (strlen($_POST["parola"])<6) {
    $parola_err="parola minimum 6 karakterden oluşmalı!";
  }

else{
  $parola=password_hash($_POST["parola"],PASSWORD_DEFAULT);
}

//parola tekrar alanı
if (empty($_POST["parolatkr"])) {
  $parolatkr_err="parola tekrar alanı boş geçilemez";
}
else if ($_POST["parola"]!=$_POST["parolatkr"]) {
  $parolatkr_err="parola eşleşmiyor!!!";
}
else{

  $parolatkr=$_POST["parolatkr"];
}



if (isset($username)&& isset($email)&& isset($parola)&& isset($parolatkr)) {
  


  $ekle="INSERT INTO kullanicilar (kullanici_adi, email, parola) VALUES ('$username','$email','$parola')";

  $calistirekle= mysqli_query($baglanti,$ekle);

  if ($calistirekle) {
    echo '<div class="alert alert-success" role="alert">
  Kayıt başarılı.
</div>';
  }
  else{
    echo '<div class="alert alert-danger" role="alert">
  Kayıt başarısız!
</div>';
  }

  mysqli_close($baglanti);

}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>kayıt ol sayfası</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
      <a href="#" class="navbar-brand"><img width="100" src="OTObilgi.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ac"> <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="ac">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="anasayfa.php" class="active">Ana Sayfa</a>
          </li>
          <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Oto Hakkında</a>
                        <div class="dropdown-menu">
                            <a href="bmw.php" target="_self" class="dropdown-item">Bmw</a>
                            <a href="mercedes.php" target="_self" class="dropdown-item">Mercedes</a>
                            <a href="audi.php" target="_self" class="dropdown-item">Audi</a>
                            <a href="ferrari.php" target="_self" class="dropdown-item">Ferrari</a>
                            <a href="lamborghini.php" target="_self" class="dropdown-item">Lamborghini</a>
                            <a href="porsche.php" target="_self" class="dropdown-item">Porsche</a>
                        </div>
                    </li>
           <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Otomobiller</a>
                        <div class="dropdown-menu">
                            <a href="luks_oto.php" target="_self" class="dropdown-item">Lüks Otomobiller</a>
                            <a href="klasik_oto.php" target="_self" class="dropdown-item">Klasik Otomobiller</a>
                            <a href="bgerekenler.php" target="_self" class="dropdown-item">Bilinmesi Gerekenler</a>
                        </div>
                    </li>
           <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Videolar</a>
                        <div class="dropdown-menu">
                            <a href="c_testleri.php" target="_self" class="dropdown-item">Çarpışma Testleri</a>
                            <a href="y_t_testleri.php" target="_self" class="dropdown-item">Yol Tutuş Testleri</a>
                        </div>
                    </li>
          <li class="nav-item">
            <a class="nav-link" href="iletisim.php" target="_self">İletişim</a>
          </li>
          

        </ul>
        <li class="nav-item">
          <div class="btn-group">
            <a href="giris.php" class="btn btn-outline-warning btn-sm">Giriş</a>
            <a href="kayitol.php" class="btn btn-outline-warning btn-sm">Kayıt Ol</a>
          </div>          
        </li>
      </div>

      
    </nav> 

<div class="box2">
     <form action="kayitol.php" method="POST">
      
      <input type="text" class="form-control 

        <?php 

        if(!empty($username_err)){

          echo "is-invalid";
        }



         ?>

      " placeholder="kullanıcı adı girin" name="kullaniciadi" required="">
      <div id="validationServer03Feedback" class="invalid-feedback">
  <?php 
    echo $username_err;


   ?>
    </div>   <br>
                        
      <div class="form-group">
        <input type="text" class="form-control 

        <?php 

        if(!empty($email_err)){

          echo "is-invalid";
        }



         ?>




        " name="email" placeholder="Mail Adresinizi Yazın"> 
        <div id="validationServer03Feedback" class="invalid-feedback">
 <?php 

  echo $email_err;

  ?>
    </div>
      </div>
    <br>
    <div class="form-group">
        <input type="password" class="form-control 

        <?php 

        if(!empty($parola_err)){

          echo "is-invalid";
        }



         ?>



        " name="parola" placeholder="şifre"> 
        <div id="validationServer03Feedback" class="invalid-feedback">
  <?php 
  echo $parola_err;


   ?>
    </div>
      </div>

<div class="form-group">
        <input type="password" class="form-control 

        <?php 

        if(!empty($parolatkr_err)){

          echo "is-invalid";
        }



         ?>



        " name="parolatkr" placeholder="şifre tekrar"> 
        <div id="validationServer03Feedback" class="invalid-feedback">
  <?php 
  echo $parolatkr_err;



   ?>
    </div>
      </div>
      

      
                
   
      <button type="submit" name="kaydet" class="btn btn-success">KAYDET</button>
      </form>
  </div>

</div>



  <footer class="secc">
      <div class="conn">
        <div class="col">
          <div class="footerItem">
            <h1><span class="badge badge-warning">OTO</span>mobil <span class="badge badge-warning">bilgi</span>leri Ve Daha Fazlası...</h1>
            <br><br>
            <p>
              Copyright @2021. Tüm Hakları Saklıdır - OTObilgi.com
            </p>
          </div>
        </div>    
      </div>
  </footer>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js/popper.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>