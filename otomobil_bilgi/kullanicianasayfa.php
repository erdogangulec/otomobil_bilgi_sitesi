<?php 

session_start();
if (isset($_SESSION["kullanici_adi"])) {
	echo "<h3>".$_SESSION["kullanici_adi"]."Hoşgeldiniz</h3>";
}
else
{
	echo "Yetkisiz kullanıcı";
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>OTObilgi.com</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="description" content="Otomobil Bilgi">
	<meta name="author" content="Erdoğan Kamil Güleç">
	<meta name="keywords" content="HTML, CSS, JavaScript, JQuery">
	<meta name="viewport"
	content="width= device-width,initial-scale= 1.0">

</head>
<body>
<div class="container">
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
      <a href="#" class="navbar-brand"><img width="100" src="OTObilgi.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ac"> <span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="ac">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="kullanicianasayfa.php" class="active">Ana Sayfa</a>
          </li>
           <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Otomobiller</a>
                        <div class="dropdown-menu">
                            <a href="luks_oto2.php" target="_self" class="dropdown-item">Lüks Otomobiller</a>
                            <a href="klasik_oto2.php" target="_self" class="dropdown-item">Klasik Otomobiller</a>
                        </div>
                    </li>
        </ul>
        <li class="nav-item">
        	<div class="btn-group">
        		<a href="cikis.php" class="btn btn-outline-warning btn-sm">ÇIKIŞ</a>
        	</div>        	
        </li>
      </div>

      
    </nav>	
	
    <!-- ---------------------------------- -->
    <section id="mainSlider" class="slider">
    <div id="mainCaption" class="caption">
      <h1><span class="badge badge-warning">OTO</span>mobil <span class="badge badge-warning">bilgi</span>leri Ve Daha Fazlası...</h1>
      <p>
        Aşşağı kaydırınız.
      </p>
    </div>
  	</section> 
		<br><br><br>
<!-- ----------------------------------------------- -->
 		<section id="parallax" class="sectionArea"></section> 
 <!-- ----------------------------------------------- -->
 <br>
 	<br>
 	
<hr>
  <div class="row">
	<div class="col-md-4">
	<div class="card">
	<img class="card-img-top" src="image/gtr.jpg">
	<div class="card-body">
		<h4 class="card-title">Nissan GT-R</h4>
		<p class="card-text">Nissan, 1969 ve 1974 yılları arasında ve tekrar 1989 ve 2002 yılları arasında, Skyline sedan tipi aracının yüksek performanslı bir modeli olan Skyline GT-R'ı üretmiştir. Bu araç bir ikon haline gelmiş ve yollarda ve pistlerde büyük ün kazanmıştır... </p>
			<a href="luks_oto2.php" class="btn btn-success">Daha Fazla</a>
	</div>
	</div>
		<br><br><br>
	</div>

<div class="col-md-4">
<div class="card">
	<img class="card-img-top" src="image/supra.jpg">
	<div class="card-body">
		<h4 class="card-title">Toyota Supra</h4>
		<p class="card-text">Toyota Supra, Toyota tarafından 1978-2002 yılları arasında ve 2019 yılından bu yana üretilen spor otomobil modelidir. Araç, Toyota Celica'nın temelinde geliştirilmiş olup 1986 yılında üçüncü nesli Celica'nın bir parçası olmaktan çıkmış ve bağımsız bir model olmuştur. Supra adı Latince kökenli, supra; yukarıda, exsupero;... </p>
			<a href="luks_oto2.php" class="btn btn-success">Daha Fazla</a>
		</div>
	</div>
		<br><br><br>
</div>

<div class="col-md-4">
	<div class="card">
		<img class="card-img-top" src="image/mustang.jpg">
		<div class="card-body">
			<h4 class="card-title">1967 Shelby Mustang</h4>
			<p class="card-text">Ford Mustang, Ford tarafından Ford Falcon modelinden esinlenerek üretilen otomobil, ilk kez 9 Mart 1964'te Ford'un Michigan Dearborn'daki tesislerinde üretilmiştir. 17 Nisan 1964 yılındaki New York Fuarında görücüye çıkan otomobil 1964 yılında başrolünde Sean Connery'in oynadığı James...  </p>
				<a href="klasik_oto2.php" class="btn btn-success">Daha Fazla</a>
			</div>
		</div>
			<br><br><br>
	</div>
	<div class="col-md-4">
<div class="card">
	<img class="card-img-top" src="image/ferrari.jpg">
	<div class="card-body">
		<h4 class="card-title">Ferrari 488</h4>
		<p class="card-text">Ferrari 488 GTB, İtalyan spor otomobilleri üreticisi Ferrari tarafında üretilen ve Ferrari 458 Italia'nın yerini alacak spor otomobildir. Dünya tanıtımının yapılacağı Cenevre Otomobil Fuarı öncesinde, 3 Şubat 2015 tarihinde tanıtılmıştır. Otomobilde çift turbo şarjlı 3,9 litrelik bir V8 motor bulunmaktadır... </p>
			<a href="luks_oto2.php" class="btn btn-success">Daha Fazla</a>
		</div>
	</div>
		<br><br><br>
</div>
<div class="col-md-4">
<div class="card">
	<img class="card-img-top" src="image/porsche.jpg">
	<div class="card-body">
		<h4 class="card-title">Porsche Carrera GT</h4>
		<p class="card-text">Porsche Carrera GT (980 Proje Kodu) bir orta motorudur spor araba Alman otomobil üreticisi tarafından imal edildi Porsche 2004 den 2007 Spor Araba Uluslararası onun listesinde Carrera GT numaralı adında En Sports 2000'li yılların Otomobil ve Tüm Zamanların en iyi spor otomobilleri sayı sekiz listede. Popular Science dergisi , gelişmiş teknolojisi ve şasisinin...</p>
			<a href="luks_oto2.php" class="btn btn-success">Daha Fazla</a>
		</div>
	</div>
		<br><br><br>
</div>
<div class="col-md-4">
<div class="card">
	<img class="card-img-top" src="image/cadillac.jpg">
	<div class="card-body">
		<h4 class="card-title">1964 Cadillac DeVille</h4>
		<p class="card-text">1902 yılında Henry Leland tarafından kurulmuştur. Markanın ismi 1701 yılında Detroit şehrini kuran Fransız Kaşif Antoine De La Mothe Cadillac’dan gelmektedir. Buick markasından sonra en eski Amerikan otomobil markasıdır. 1909 yılında General Motors bünyesine girmiştir. O tarihten itibaren üst düzey ve lüks araçlar üreten firmanın prestijli bir bilinirliği vardır...</p>
			<a href="klasik_oto2.php" class="btn btn-success">Daha Fazla</a>
		</div>
	</div>
		<br><br><br>
</div>
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