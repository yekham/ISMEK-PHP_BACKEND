<?php

$adSoyad = $_POST["adsoyad"];
$sehir = $_POST["sehir"];

$dosyaAd = $_FILES["dosya"]["name"];
$dosyaGecici = $_FILES["dosya"]["tmp_name"];
$dosyaBoyut = $_FILES["dosya"]["size"];
$dosyaHata = $_FILES["dosya"]["error"];
$dosyaTur = $_FILES["dosya"]["type"];

$dosyaUzanti = explode('.', $dosyaAd);
$dosyaUzantison=end($dosyaUzanti);
$dosyaYeni = "dosyalar/dosya-" . substr(sha1(rand(111111,999999)),0,8) . ".$dosyaUzantison";

$dosyaTurler = ["image/png", "image/jpg", "image/jpeg", "image/gif"]; //Mime Type

if ($dosyaHata == 0) {

  if ($dosyaBoyut <= 2*1024*1024) {
    if (in_array($dosyaTur, $dosyaTurler)) {
      if (move_uploaded_file($dosyaGecici, $dosyaYeni)) {
        echo "
        Adı Soyadı: $adSoyad<br>
        Şehir: $sehir<br>
        Foto: <a href='$dosyaYeni' target='_blank'>Tıklayın</a>
        ";
      } else {
        echo "Hata: Dosya Yüklenemedi!";
      }
    } else {
      echo "Hata: Dosya Formatı Hatalı!";
    }
  } else {
    echo "Hata: Dosya Boyutu Büyük!";
  }
  
} else {
  echo "Hata: Sistem Kaynaklı Sorun Oluştu!";
}


?>