<?php 

$silinecekID= $_GET['id'];
 
$baglan=mysqli_connect("localhost","root","","veritabani");
mysqli_set_charset($baglan, "utf8");
 
$sonuc=mysqli_query($baglan,"DELETE from yorum 
where id=".$silinecekID);
 
if($sonuc>0){
echo "Başarıyla silindi,2 sn. sonra yönlendirileceksiniz.";
header( "refresh:2;url=mesajpanel.php" ); 
 }
else
echo "Bir sorun oluştu silinemedi";

 ?>