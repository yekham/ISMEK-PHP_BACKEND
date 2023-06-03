<?php
// Verilen değişkenler
$agil_sayisi = $_POST['agil_sayisi'];
$agil_kapasitesi = $_POST['agil_kapasitesi'];
$toplam_koyun = $_POST['toplam_koyun'];

// Ağılları yerleştirme
$ağıllar = array_fill(0, $agil_sayisi, 0); // Başlangıçta tüm ağılları sıfırlar ile doldur

// Koyunları ağıllara yerleştirme
$artan_koyun = $toplam_koyun;
For ($i = $agil_sayisi – 1; $i >= 0; $i--) {
    $dolu_koyun = min($artan_koyun, $agil_kapasitesi); // Dolu koyun sayısı, artan koyun sayısı ve ağıl kapasitesinin minimumu
    $ağıllar[$i] = $dolu_koyun;
    $artan_koyun -= $dolu_koyun; // Artan koyun sayısını güncelleme

    İf ($artan_koyun <= 0) {
        Break; // Artan koyun kalmadığında döngüyü sonlandır
    }
}

// Sonuçları ekrana yazdırma
For ($i = $agil_sayisi – 1; $i >= 0; $i--) {
    Echo “Ağıl “ . ($i + 1) . “: “ . $ağıllar[$i] . “ koyun”;
    Echo PHP_EOL;
}

İf ($artan_koyun > 0) {
    Echo “Artan koyun sayısı: “ . $artan_koyun;
} else {
    Echo “Artan koyun yok.”;
}
?>
