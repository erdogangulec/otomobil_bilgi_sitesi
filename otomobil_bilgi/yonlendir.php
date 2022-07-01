<?php 


session_start();
  if ($_SESSION["user"]=="") {
    echo "<script>window.location.href='panelcikis.php'</script>";
  }
  else
  {
    echo "kullanıcı Adınız:".$_SESSION['user']."<br>";
    echo "<a href='panelcikis.php'>Çıkış Yap</a><br><br><br>";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>OTObilgi.com</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="text-center">
<h1 class="text-center">Admin Paneline Hoş Geldiniz..</h1>
<hr>
<br><br><br>
<h4>seçim işlemi yapınız!</h4>
<br>
<a href="mesajpanel.php" class="btn btn-success">Yapılan Tüm Yorumları Gör</a>
<a href="panell.php" class="btn btn-success">İletişim Sayfası Gelen Mesajlar</a>


</div>











 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="js/popper.js" ></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>