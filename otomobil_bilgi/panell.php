
 <!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>İletişim Alanı Gelen Mesajlar</h1>

<table id="customers">
  <tr>
   <!--  <th>id</th> -->
    <th>Ad</th>
    <th>Soyad</th>
    <th>Email</th>
    <th>Konu</th>
    <th>Mesaj</th>
    <th>[SİL]</th>
  </tr>

<?php 
  


  session_start();
  if ($_SESSION["user"]=="") {
    echo "<script>window.location.href='panelcikis.php'</script>";
  }
  else
  {
    echo "kullanıcı Adınız:".$_SESSION['user']."<br>";
    echo "<a href='yonlendir.php'>Geri</a><br><br><br>";
      include("baglanti.php");

    $sec="Select * From iletisim";
    $sonuc=$baglanti->query($sec);
    if ($sonuc->num_rows>0) {
      while ($cek=$sonuc->fetch_assoc()) {
     
        echo "<tr>";
       /* echo "<td>".$cek['id']."</td>";*/
        echo "<td>".$cek['ad']."</td>";
        echo "<td>".$cek['soyad']."</td>";
        echo "<td>".$cek['email']."</td>";
        echo "<td>".$cek['konu']."</td>";
        echo "<td>".$cek['mesaj']."</td>";
        echo '<td> <a href="sil.php?id='.$cek['id'].'" onclick="return uyari();">Sil</a> </td>';
        echo "</tr>";

        
      }
    }
    else
    {
      echo "Veritabanında kayıt bulunamadı!";
    }
    }



 ?>



  
</table>

</body>
</html>