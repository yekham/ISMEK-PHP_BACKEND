<?php

if ($_POST) {
  $kullanicilar = ["ahmet", "mehmet", "zeynep"];
  $sifreler = ["123", "456", "789"];

  $kullanici = $_POST["kullanici"];
  $sifre = $_POST["sifre"];
  // in_array(ne varsa,nerede varsa)=>dizide varsa


  if (in_array($kullanici, $kullanicilar)) {
    if (in_array($sifre, $sifreler)) {
      echo "Merhaba $kullanici, hoş geldiniz!";
    } else {
      echo "Hatalı Şifre Yazıldı!";
    }
  } else {
    echo "Kullanıcı Adı Bulunamadı!";
  }

} else {
  header("Location:index.html");
}

?>