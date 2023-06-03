<?php
if (!empty($_GET["p"])) {
  $sayfaNo = $_GET["p"];
} else {
  $sayfaNo = 1;
}

if (!empty($_GET["s"])) {
  $siralaHucre = $_GET["s"];
} else {
  $siralaHucre = "adsoyad";
}

if (!empty($_GET["y"])) {
  $siralaYon = $_GET["y"];
} else {
  $siralaYon = "asc";
}

if ($siralaYon == "asc") {
  $yon = "desc";
} else {
  $yon = "asc";
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
  <div style="text-align:center;margin-bottom:50px;border-bottom:1px solid #000;padding-bottom:20px">
    <a href="index.php">Yeni Kayıt</a> - <a href="indir.php">Kayıt İndir</a> - <a href="liste.php">Kayıt Listele</a>
  </div>
  <table width="100%" border="1">
    <tr style="font-weight:bold;text-align:center">
      <td>S.No</td>
      <td style="text-align:left">Adı Soyadı <a href="liste.php?s=adsoyad&y=<?php echo $yon; ?>&p=<?php echo $sayfaNo; ?>">🔽</a></td>
      <td>Vize 1 <a href="liste.php?s=vize1&y=<?php echo $yon; ?>&p=<?php echo $sayfaNo; ?>">🔽</a></td>
      <td>Vize 2 <a href="liste.php?s=vize2&y=<?php echo $yon; ?>&p=<?php echo $sayfaNo; ?>">🔽</a></td>
      <td>Final <a href="liste.php?s=final&y=<?php echo $yon; ?>&p=<?php echo $sayfaNo; ?>">🔽</a></td>
      <td>Ortalama <a href="liste.php?s=ortalama&y=<?php echo $yon; ?>&p=<?php echo $sayfaNo; ?>">🔽</a></td>
      <td>Durum <a href="liste.php?s=durum&y=<?php echo $yon; ?>&p=<?php echo $sayfaNo; ?>">🔽</a></td>
    </tr>
  <?php
    function cokluSirala(&$dizi, $sutun, $yon = SORT_ASC) {
      $siralanmis = array();
      foreach ($dizi as $anahtar => $satir) {
          $siralanmis[$anahtar] = $satir[$sutun];
      }
      array_multisort($siralanmis, $yon, $dizi);
    }

    $kayitDizi = [];
    $dosya = fopen("kayitlar.txt", "rbt");
    while (!feof($dosya)) {
      $satir = fgets($dosya);
      if ($satir != "") {
        $icerik = explode("-", $satir);
        $vizeHesap = (intval($icerik[1]) + intval($icerik[2])) / 2 * 0.40;
        $finalHesap = intval($icerik[3]) * 0.60;
        $ortalama = round($vizeHesap + $finalHesap);

        if ($ortalama >= 70) {
          $durum = "Geçti";
        } else {
          $durum = "Kaldı";
        }

        $kayitDizi[] = [
          "adsoyad" => $icerik[0],
          "vize1" => $icerik[1],
          "vize2" => $icerik[2],
          "final" => $icerik[3],
          "ortalama" => $ortalama,
          "durum" => $durum
        ];
      }
    }
    fclose($dosya);

    if ($siralaYon == "desc") {
      cokluSirala($kayitDizi, $siralaHucre, SORT_DESC);
    } else {
      cokluSirala($kayitDizi, $siralaHucre, SORT_ASC);
    }

    $sirano = 0;
    $kacarKacar = 6;
    foreach ($kayitDizi as $kayit) {
      $sirano++;
      $baslangic = (($sayfaNo-1) * $kacarKacar) + 1;
      $bitis = $sayfaNo * $kacarKacar;
      if ($sirano >= $baslangic && $sirano <= $bitis) {
        echo "<tr style='text-align:center'>
        <td>$sirano</td>
        <td style='text-align:left'>".$kayit['adsoyad']."</td>
        <td>".$kayit['vize1']."</td>
        <td>".$kayit['vize2']."</td>
        <td>".$kayit['final']."</td>
        <td>".$kayit['ortalama']."</td>
        <td>".$kayit['durum']."</td>
        </tr>";
      }
    }
  ?>
  </table>
  <br><br>
  <div style="text-align:center">
    <?php
      $toplamKayit = count($kayitDizi);
      $toplamSayfa = ceil($toplamKayit / $kacarKacar);
      for ($i = 1; $i <= $toplamSayfa; $i++) {
        echo "<a href='liste.php?s=$siralaHucre&y=$siralaYon&p=$i'>$i</a> - ";
      }
    ?>
  </div>
</body>
</html>