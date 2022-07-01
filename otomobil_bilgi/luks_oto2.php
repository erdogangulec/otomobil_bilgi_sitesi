<?php
include("baglanti.php");
  if (isset($_POST["kullanici"],$_POST["mesaj"]))
  {
    $kullanici_adi=$_POST["kullanici"];
    $mesaj=$_POST["mesaj"];



    $ekle="INSERT INTO yorum (kullanici_adi, mesaj) VALUES ('".$kullanici_adi."','".$mesaj."')";

    if($baglanti->query($ekle)===TRUE)
    {
      echo "<script>alert('Mesajınız başarı ile Gönderildi.')</script>";

    }
    else
    {
      echo "<script>alert('HATA!')</script>";
    }

  }  ?>
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
	<div class="scrollspy">
	<a href="#git1"><button class="btn btn-outline-warning">Nissan GT-R</button></a>
    <a href="#git2"><button class="btn btn-outline-warning">Toyota - Supra</button></a>
    <a href="#git3"><button class="btn btn-outline-warning">Ferrari 488</button></a>
    <a href="#git4"><button class="btn btn-outline-warning">Porsche Carrera GT</button></a>
    <a href="#git5"><button class="btn btn-outline-danger">Form-Yorum Alanı</button></a>
    </div>
	<div class="box3">

		<img src="image/gtr.jpg">
		<h1><b><span class="badge badge-warning ">Nissan GT-R</span></b></h1>
		<h5><span class="badge badge-dark">Teknik Özellikler</span></h5>
		<table class="table table-striped">
			<tbody>
				<tr>
					<td></td>
					<td>Motor</td>
					<td>V 6</td>					
				</tr>

				<tr>
					<td></td>
					<td>Silindir Hacmi</td>
					<td>3799 cc</td>					
				</tr>

				<tr>
					<td></td>
					<td>Beygir Gücü</td>
					<td>485 HP</td>					
				</tr>

				<tr>
					<td></td>
					<td>Şehir İçi Ortalama Tüketim</td>
					<td>18.3 lt</td>					
				</tr>

				<tr>
					<td></td>
					<td>Şehir Dışı Ortalama Tüketim</td>
					<td>9.1 lt</td>										
				</tr>
				<tr>
					<td></td>
					<td>Maksimum Hız</td>
					<td>314 km/s</td>										
				</tr>
				<tr>
					<td></td>
					<td>0-100 Km Hızlanma</td>
					<td>3.5 sn</td>										
				</tr>
				<tr>
					<td></td>
					<td>Boş Ağırlık</td>
					<td>1740 kg</td>										
				</tr>

			</tbody>
		</table>
		<hr>
	<div data-spy="scroll">
      <div id="git1">
        <h1>Otomobilin Tarihi</h1>
      </div>
  	</div>
		
		<p>Nissan, 1969 ve 1974 yılları arasında ve tekrar 1989 ve 2002 yılları arasında, Skyline sedan tipi aracının yüksek performanslı bir modeli olan Skyline GT-R'ı üretmiştir. Bu araç bir ikon haline gelmiş ve yollarda ve pistlerde büyük ün kazanmıştır. Nissan GT-R, her ne kadar artık “Skyline” armasını taşımasa da Nissan Skyline GT-R geçmişinin bir parçasıdır. Hemen önceki Skyline GT-R nesilleri gibi, Nissan GT-R da 4 çekerli, çift turbolu 6 silindirli bir motora ve artık simgesi haline gelmiş 4 adet yuvarlak stop lambasına sahiptir. Ancak GT-R tamamen yeni bir model olup Skyline ailesinin diğer fertleri ile çok az ortak noktaya sahiptir ve küçük adımlardan oluşan evrimlerden ziyade tamamen yeniden tasarım yoluna gidilmiştir: dört tekerlekten yönlendirmeli HICAS sistemi kaldırılmış ve daha önceki sıralı 6 silindirli RB26DETT motor yerini V6 VR38DETT motora bırakmıştır. GT-R mirasından ötürü, tamamen yeni sürüm olan şasinin kodu CBA-R35 veya kısaca 'R35' olarak adlandırılmıştır. 2017 yılında yeni bir görünüme sahip olarak piyasaya çıktı.</p><br>
		<p>GT-R yine selefi olan Skyline serilerine verilen ve ilk defa bir Avustralya otomobil yayını olan Wheels'in Temmuz 1989 baskısında sözü edilmiş olan Godzilla lakabını korumuştur.</p><br>
		<div class="embed-responsive embed-responsive-21by9">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/L2LvP1LsrI8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		
		<hr><br>
		<img src="image/supra.jpg">
		<h1><b><span class="badge badge-warning ">Toyota - Supra</span></b></h1>
		<h5><span class="badge badge-dark">Teknik Özellikler</span></h5>

		<table class="table table-striped">
			
			<thead class="thead-inverse">
				<tr>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>Motor</td>
					<td>Sıralı 4</td>					
				</tr>

				<tr>
					<td></td>
					<td>Silindir Hacmi</td>
					<td>1998 cm3</td>					
				</tr>

				<tr>
					<td></td>
					<td>Beygir Gücü</td>
					<td>258 PS or 254 bhp or 190 kW</td>					
				</tr>

				<tr>
					<td></td>
					<td>Şehir İçi Ortalama Tüketim</td>
					<td>10.1 lt</td>					
				</tr>

				<tr>
					<td></td>
					<td>Şehir Dışı Ortalama Tüketim</td>
					<td>7.3 lt</td>										
				</tr>
				<tr>
					<td></td>
					<td>Maksimum Hız</td>
					<td>250  km/s</td>										
				</tr>
				<tr>
					<td></td>
					<td>0-100 Km Hızlanma</td>
					<td>5.3 sn</td>										
				</tr>
				<tr>
					<td></td>
					<td>Boş Ağırlık</td>
					<td>1370 kg</td>										
				</tr>

			</tbody>
		</table>
		<div data-spy="scroll">
      <div id="git2">
        <h1>Otomobilin Tarihi</h1>
      </div>
  	</div>
		<p>
		Toyota Supra, Toyota tarafından 1978-2002 yılları arasında ve 2019 yılından bu yana üretilen spor otomobil modelidir. Araç, Toyota Celica'nın temelinde geliştirilmiş olup 1986 yılında üçüncü nesli Celica'nın bir parçası olmaktan çıkmış ve bağımsız bir model olmuştur. Supra adı Latince kökenli, supra; yukarıda, exsupero; aşmak ve supergrediatur; ötesine geçmek kelimelerinden türetilmiştir. Birinci nesil Supra, Aichi'deki, Tahara şehrinde üretilmeye başlamıştır. Dördüncü nesil Supra, Japonya'daki Toyota şehrinde üretimine devam etmiştir. Beşinci nesil Supra'lar ise BMW Z4 ile birlikte Avusturya'nın Graz şehrinde üretilmektedir.</p>

		<p>1998'de Toyota, Amerika Birleşik Devletleri'ndeki dördüncü nesil Supra'nın satışını durdurdu. Supra'nın dördüncü neslinin üretimi de Japonya'da 2002'de sona erdi.</p>

		<p>İlk dort nesil Supra 1978 ve 2002 yılları arasında çıkmıştır. Beşinci nesil Supra Mart 2019'da tanıtılmış, Mayıs 2019'da satılmaya başlamıştır.</p>
		<div class="embed-responsive embed-responsive-21by9">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/h9S_RcEvhOY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
				<hr>
		<img src="image/ferrari.jpg">
		<h1><b><span class="badge badge-warning ">Ferrari 488</span></b></h1>
		<h5><span class="badge badge-dark">Teknik Özellikler</span></h5>

		<table class="table table-striped">
			
			<thead class="thead-inverse">
				<tr>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>Motor</td>
					<td>V 8</td>					
				</tr>

				<tr>
					<td></td>
					<td>Silindir Hacmi</td>
					<td>3902 cm3</td>					
				</tr>

				<tr>
					<td></td>
					<td>Beygir Gücü</td>
					<td>670 PS or 661 bhp or 493 kW @ 8000 rpm</td>					
				</tr>

				<tr>
					<td></td>
					<td>Yakıt tüketimi - Ortalama</td>
					<td>11.4 L/100km</td>					
				</tr>

				<tr>
					<td></td>
					<td>Co2 Emisyonu(gr/km)</td>
					<td>260 g/Km</td>										
				</tr>
				<tr>
					<td></td>
					<td>Maksimum sürat / Azami Hı</td>
					<td>>330 km/h</td>										
				</tr>
				<tr>
					<td></td>
					<td>0-100 Km Hızlanma</td>
					<td>3.0 sn</td>										
				</tr>
				<tr>
					<td></td>
					<td>Boş Ağırlık</td>
					<td>1475 kg</td>										
				</tr>
				<tr>
					<td></td>
					<td>Kasa tipi</td>
					<td>Coupe</td>										
				</tr>

			</tbody>
		</table>
	<div data-spy="scroll">
      <div id="git3">
		<h1>Otomobile Dair</h1>
      </div>
  	</div>
		<p>
		Ferrari 488 GTB, İtalyan spor otomobilleri üreticisi Ferrari tarafında üretilen ve Ferrari 458 Italia'nın yerini alacak spor otomobildir. Dünya tanıtımının yapılacağı Cenevre Otomobil Fuarı öncesinde, 3 Şubat 2015 tarihinde tanıtılmıştır. Otomobilde çift turbo şarjlı 3,9 litrelik bir V8 motor bulunmaktadır.</p><br>
		<div class="embed-responsive embed-responsive-21by9">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/uvuO96B-W2M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
				<hr>
		<img src="image/porsche.jpg">
		<h1><b><span class="badge badge-warning ">Porsche Carrera GT</span></b></h1>
		<h5><span class="badge badge-dark">Teknik Özellikler</span></h5>

		<table class="table table-striped">
			
			<thead class="thead-inverse">
				<tr>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td>Motor</td>
					<td>V 10</td>					
				</tr>

				<tr>
					<td></td>
					<td>Silindir Hacmi</td>
					<td>5733 cm3</td>					
				</tr>

				<tr>
					<td></td>
					<td>Beygir Gücü</td>
					<td>612 PS or 604 bhp or 450 kW @ 8000 rpm</td>					
				</tr>

				<tr>
					<td></td>
					<td>Yakıt tüketimi - Ortalama</td>
					<td>17.8 L/100km</td>					
				</tr>

				<tr>
					<td></td>
					<td>Co2 Emisyonu(gr/km)</td>
					<td>429 g/Km</td>										
				</tr>
				<tr>
					<td></td>
					<td>Maksimum sürat / Azami Hı</td>
					<td>>330 km/h</td>										
				</tr>
				<tr>
					<td></td>
					<td>0-100 Km Hızlanma</td>
					<td>3.9 sn</td>										
				</tr>
				<tr>
					<td></td>
					<td>Boş Ağırlık</td>
					<td>1380 kg</td>										
				</tr>
				
			</tbody>
		</table>
		<div data-spy="scroll">
      <div id="git4">
		<h1>Otomobilin Tarihi</h1>
      </div>
  	</div>
		<p>
		Carrera GT'nin gelişimi 911 GT1 ve LMP1-98 yarış arabalarına kadar izlenebilir . Kısmen 1998'deki FIA ve ACO kural değişiklikleri nedeniyle, her iki tasarım da sona ermişti. O zamanlar Porsche , 1999 sezonu için yeni bir Le Mans prototipi planlamıştı. Araba başlangıçta turboşarjlı bir düz altı motor kullanmak için tasarlandı, ancak daha sonra yeni bir V10 motor kullanmak için yeniden tasarlandı ve proje 2000 yılında planlanan tamamlanmaya geri döndü. V10, Porsche tarafından Footwork Formula One ekibi için gizlice inşa edilen bir üniteydi. 1992'de, ancak daha sonra rafa kaldırıldı. Motor, Le Mans prototipi için yeniden dirildi.</p><br>
		<p>Porsche , 2000 Paris Otomobil Fuarı'nda sergilenen Carrera GT adlı bir konsept otomobilde prototipten 5.5 L V10'u esas olarak ekranlarına dikkat çekmek amacıyla kullanarak projenin bir bölümünü canlı tuttu . Araca yönelik şaşırtıcı ilgi ve Cayenne'den sağlanan gelir akışı, Porsche'nin otomobili üretmeye karar vermesine yardımcı oldu ve Porsche'nin Leipzig'deki yeni üretim tesisinde az sayıda üretilecek olan yasal yol versiyonunun geliştirilmesi başladı . Porsche, 2004 yılında Carrera GT'nin üretimine başladı. İlk Carrera GT, 31 Ocak 2004'te Amerika Birleşik Devletleri'nde satışa çıktı.</p><br>
		<div class="embed-responsive embed-responsive-21by9">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/wNOAxl9iOr8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<hr>
		<div data-spy="scroll">
      <div id="git5">
        <h4><b><span class="badge badge-success ">Yorumlar</span></b></h1>
      </div>
  	</div>
		<form action="luks_oto2.php" method="post">
		 	
			<input type="text" class="form-control" placeholder="Kullanıcı Adı" name="kullanici" required="">												
			<br>
			<div class="form-group">
				<textarea name="mesaj" class="form-control" rows="10"></textarea>

			</div>
      <button type="submit" class="btn btn-success">Gönder</button>
		  </form>
		<br>



<table   style="margin-left:30px; background-color: gray; color: black; font-size: 20px; font-weight: bold; border-style: solid; width: 100%; text-align: left;">
<?php 
   $sec="Select * From yorum";
    $sonuc=$baglanti->query($sec);
    if ($sonuc->num_rows>0) {
      while ($cek=$sonuc->fetch_assoc()) {
     
        echo "<tr>";
        echo "<td>".$cek['kullanici_adi']."</td>";
        echo "<td>".$cek['mesaj']."</td>";       
      }
    }
    else
    {
      echo "Veritabanında kayıt bulunamadı!";
    }


 ?>
</table>
<br>
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
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</body>
</html>