<?php
  require_once("fonksiyon.php");

  if ($_POST) {
    $urun = $_POST["urun"];
    $tazelik = intval($_POST["tazelik"]);
    $miktar = (int)$_POST["miktar"];
  
    if (!in_array($urun, ["Kekik", "Nane", "Fesleğen", "Reyhan"]) || !in_array($tazelik, ["0", "1"]) || $miktar <= 0) {
      echo "<script>
      alert('BİLGİLERDE HATA VAR!');
      window.location.href='index.php';
      </script>";
      die();
    }

    $fiyat = birimFiyat($urun);
    $araFiyat = $miktar * $fiyat;
    $indirim = 0;
    if ($tazelik == 0) {
      $indirim = tazelikEtkisi($urun, $araFiyat);
    }
    $tutar = $araFiyat - $indirim;
    $kdv = $tutar * 0.18;
    $genToplam = $tutar + $kdv;

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form method="post" action="">
    Alınan Ürün:<br>
    <select name="urun">
      <option value="">Seçin...</option>
      <option value="Kekik">Kekik</option>
      <option value="Nane">Nane</option>
      <option value="Fesleğen">Fesleğen</option>
      <option value="Reyhan">Reyhan</option>
    </select><br><br>
    Tazelik Durumu:<br>
    <select name="tazelik">
      <option value="">Seçin...</option>
      <option value="1">Taze</option>
      <option value="0">Taze Değil</option>
    </select><br><br>
    Alım Miktarı:<br>
    <input type="text" name="miktar"><br><br>
    <button type="submit">Hesapla</button>
  </form>

  <?php
    if ($_POST) {
      echo "<br><br>*******************************<br>
      <b>otMaster Aktar v1.0</b><br><br>
      * $urun: $miktar kg. x $fiyat TL<br>
      Ürün Tutarı: ".number_format($araFiyat, 2, ',', '.')." TL<br>";
      if ($indirim > 0) {
        echo "İndirim: -".number_format($indirim, 2, ',', '.')." TL<br>
        Ara Toplam: ".number_format($tutar, 2, ',', '.')." TL<br>";
      }
      echo "KDV (%18): ".number_format($kdv, 2, ',', '.')." TL<br><br>
      <b>Genel Toplam: ".number_format($genToplam, 2, ',', '.')." TL</b><br>
      *******************************";
    }
  ?> 

</body>
</html>