<?php
  $dosya = fopen("kayitlar.txt", "rbt");
  $csv = fopen("notlar.csv", "wbt");
  while (!feof($dosya)) {
    //$icerik = str_replace("-", ";", fgets($dosya));
    $satir = explode("-", fgets($dosya));
    $icerik = implode(";", $satir);
    fwrite($csv, $icerik);
  }
  fclose($csv);
  fclose($dosya);

  $indir = "notlar.csv";
  header("Content-Type: application/force-download");
  header("Content-Disposition: attachment; filename=$indir");
  header("Content-Transfer-Encoding: binary");
  header("Content-Length:". filesize($indir));
  readfile($indir);

?>