<?php

function birimFiyat($urun = '') {
  switch($urun) {
    case 'Kekik':
      $fiyat = 50;
    break;
    case 'Nane':
      $fiyat = 80;
    break;
    case 'Fesleğen':
      $fiyat = 100;
    break;
    case 'Reyhan':
      $fiyat = 90;
    break;
    default:
      $fiyat = 0;
    break;
  }
  return $fiyat;
}

function tazelikEtkisi($urun, $araFiyat) {
  if ($urun == "Kekik") {
    $oran = 0.10;
  } else if ($urun == "Nane") {
    $oran = 0.20;
  } else if ($urun == "Fesleğen") {
    $oran = 0.10;
  } else if ($urun == "Reyhan") {
    $oran = 0.25;
  } else {
    $oran = 0;
  }
  $indirim = $araFiyat * $oran;
  return $indirim;
}

?>