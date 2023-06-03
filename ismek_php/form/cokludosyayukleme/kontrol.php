<?php


//
foreach ($_FILES["dosya"]["name"] as $sira => $name) {
  $dosyaAd = $_FILES["dosya"]["name"][$sira];
  $dosyaGecici = $_FILES["dosya"]["tmp_name"][$sira];
  $dosyaBoyut = $_FILES["dosya"]["size"][$sira];
  $dosyaHata = $_FILES["dosya"]["error"][$sira];
  $dosyaTur = $_FILES["dosya"]["type"][$sira];

  $dosyaUzanti = explode('.', $dosyaAd);
  $dosyaUzantison=end($dosyaUzanti);
  $dosyaYeni = "dosyalar/dosya-" . substr(sha1(rand(111111,999999)),0,8) . ".$dosyaUzantison";

  if (move_uploaded_file($dosyaGecici, $dosyaYeni)) {
    echo "Dosya Yüklendi => " . $dosyaYeni . "<br>";
  } else {
    echo "Dosya Yüklenemedi => " . $dosyaYeni . "<br>";
  }

}











?>