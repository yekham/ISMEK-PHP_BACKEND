<?php

//Get methodunu sitedeki arama kutusu dışında kullanma çünkü girilen veriler adres çubuğunda gözükür.


//post varlığını kontrol etmek güvenli açısından gereklidir.




if ($_POST) {
  $adsoyad = $_POST["adsoyad"];
  $sehir = $_POST["sehir"];
  $cinsiyet = $_POST["cinsiyet"];
  $hobiler = implode(" - ", $_POST["hobiler"]);
  $aciklama = $_POST["aciklama"];

  echo "
  <b>Adı Soyadı:</b> $adsoyad<br>
  <b>Şehir:</b> $sehir<br>
  <b>Cinsiyet:</b> $cinsiyet<br>
  <b>Hobiler:</b> $hobiler<br>
  <b>Açıklama:</b> $aciklama
  ";
} else {
  header("Refresh:10;Url=index.html");
  die("Yetkisiz Erişim! Ana Sayfaya Yönlendiriliyorsunuz.");
}















?>