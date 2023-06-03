<?php
  if ($_POST) {
    $adsoyad = $_POST["adsoyad"];
    $vize1 = intval($_POST["vize1"]);
    $vize2 = intval($_POST["vize2"]);
    $final = intval($_POST["final"]);

    $veriler = "$adsoyad-$vize1-$vize2-$final\n";

    $dosya = fopen("kayitlar.txt", "a+");
    fwrite($dosya, $veriler);
    fclose($dosya);
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
  <div style="text-align:center">
    <form action="index.php" method="post">
      <b>Adı Soyadı</b><br>
      <input type="text" maxlength="100" size="40" name="adsoyad"><br><br>
      <b>Vize Notu #1</b><br>
      <input type="text" size="40" name="vize1"><br><br>
      <b>Vize Notu #2</b><br>
      <input type="text" size="40" name="vize2"><br><br>
      <b>Final Notu</b><br>
      <input type="text" size="40" name="final"><br><br>
      <button type="submit">Kaydet</button>
    </form>
  </div>

</body>
</html>