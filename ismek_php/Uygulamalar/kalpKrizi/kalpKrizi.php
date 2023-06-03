<?php
  error_reporting(0);

  if ($_POST){
    function hesapla($sigara, $yas, $kriz, $alkol) {
      $oran = 0;
      if ($sigara == "Evet") {
        if ($yas == "Evet") {
          if ($alkol == "Evet") {
            $oran = 90;
          } else {
            $oran = 60;
          }
        } else {
          $oran = 30;
        }
      } else {
        if ($kriz == "Evet") {
          $oran = 70;
        } else {
          if ($alkol == "Evet") {
            $oran = 20;
          } else {
            $oran = 1;
          }
        }
      }
      return $oran;
    }

    $sigara = $_POST["sigara"];
    $yas = $_POST["yas"];
    $kriz = $_POST["kriz"];
    $alkol = $_POST["alkol"];
    $cevapDizi = ["Evet", "Hayır"];

    if (!in_array($sigara,$cevapDizi) || !in_array($yas,$cevapDizi) || !in_array($kriz,$cevapDizi) || !in_array($alkol,$cevapDizi)) {
      @header("Refresh:5; Url=index.php");
      die("Hatalı Bilgi Girişi! Yönlendiriliyorsunuz...");
    }

    $sonuc = hesapla($sigara, $yas, $kriz, $alkol);

    if ($sonuc <= 10) {
      $yorum = "Hafif Olsa da Her Zaman Bir Risk Vardır";
    } else if ($sonuc > 10 && $sonuc <= 40) {
      $yorum = "Dikkatli Ol ve Sıkça Muayeneye Git, Doktora İyi Davran";
    } else if ($sonuc > 40 && $sonuc <= 70) {
      $yorum = "Sağlığına Dikkat Et, Check-Up Yaptır, Sağlıklı Beslen";
    } else {
      $yorum = "Artık Ailenle Vedalaşmaya Başlamalısın, Çocuklara Selam";
    }

    echo "************************************************<br>
    Kalp Krizi Riski: %$sonuc<br>
    $yorum<br>
    ************************************************<br><br>";
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
    Sigara İçiyor mu?<br>
    <select name="sigara">
      <option value="">Seçin...</option>
      <option value="Evet" <?php if ($sigara=="Evet") {echo "selected";} ?>>Evet</option>
      <option value="Hayır" <?php if ($sigara=="Hayır") {echo "selected";} ?>>Hayır</option>
    </select><br><br>
    Yaşı 40'ın Üzerinde mi?<br>
    <select name="yas">
      <option value="">Seçin...</option>
      <option value="Evet" <?php if ($yas=="Evet") {echo "selected";} ?>>Evet</option>
      <option value="Hayır" <?php if ($yas=="Hayır") {echo "selected";} ?>>Hayır</option>
    </select><br><br>
    Kalp Krizi Geçiren Var mı?<br>
    <select name="kriz">
      <option value="">Seçin...</option>
      <option value="Evet" <?php if ($kriz=="Evet") {echo "selected";} ?>>Evet</option>
      <option value="Hayır" <?php if ($kriz<>"Evet") {echo "selected";} ?>>Hayır</option>
    </select><br><br>
    Alkol Kullanıyor mu?<br>
    <select name="alkol">
      <option value="">Seçin...</option>
      <option value="Evet" <?php if ($alkol=="Evet") {echo "selected";} ?>>Evet</option>
      <option value="Hayır" <?php if ($alkol!="Evet") {echo "selected";} ?>>Hayır</option>
    </select><br><br>
    <button type="submit">Hesapla</button>
  </form>



</body>
</html>