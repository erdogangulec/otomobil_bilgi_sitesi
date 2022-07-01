<?php 
  include("baglanti.php");
  if (isset($_POST["isim"], $_POST["soyisim"], $_POST["mail"], $_POST["konu"], $_POST["mesaj"]))
  {
    $ad=$_POST["isim"];
    $soyad=$_POST["soyisim"];
    $email=$_POST["mail"];
    $konu=$_POST["konu"];
    $mesaj=$_POST["mesaj"];



    $ekle="INSERT INTO iletisim (ad, soyad, email, konu, mesaj) VALUES ('".$ad."','".$soyad."','".$email."','".$konu."','".$mesaj."')";

    if($baglanti->query($ekle)===TRUE)
    {
      echo "<script>alert('Mesajınız başarı ile Gönderildi.')</script>";

    }
    else
    {
      echo "<script>alert('HATA!')</script>";
    }

  }


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OTObilgi.com</title>
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

	<section id="contactSlider" class="slider">
        <div id="contactCaption" class="caption">
            <h1>İletişim</h1>
            <h3><span class="badge badge-danger">Admine sorun, şikayet yada önerilerinizi iletiniz.</span></h3>
        </div>
    </section> 

	<div class="box2">
		 <form action="iletisim.php" method="post">
		 	
			<input type="text" class="form-control" placeholder="Adınızı Girin" name="isim" required="">   <br>
												
			<input type="text" class="form-control" placeholder="Soyadınızı Girin" name="soyisim" required="">
			<br>

			<div class="form-group">
				<input type="email" class="form-control" name="mail" placeholder="Mail Adresinizi Yazın">
			</div>
			
      <input type="text" class="form-control" placeholder="Konu" name="konu" required="">
      <br>
			<div class="form-group">
				<textarea name="mesaj" class="form-control" rows="10"></textarea>

			</div>

			<!-- <div class="form-group">
				<input type="file" name="">
				
			</div><br> -->
      <button type="submit" class="btn btn-success">Gönder</button>
		  </form>					
		
			

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
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js/popper.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>