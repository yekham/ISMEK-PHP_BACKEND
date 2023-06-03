<?php



$dosyaAd = $_FILES["dosya"]["name"];//dosyanın ismi 
$dosyaGecici = $_FILES["dosya"]["tmp_name"];//dosyanın geçici olarak saklandığı yer
$dosyaBoyut = $_FILES["dosya"]["size"];// dosyanın boyutu
$dosyaHata = $_FILES["dosya"]["error"];// dosya hata var mı yok mu 
$dosyaTur = $_FILES["dosya"]["type"];// dosyanın türü 

//gelen dosya dizinini .'ya göre parçalayarak bir dizi oluşturduk
$dosyaUzanti = explode('.', $dosyaAd);

// dizinin son elemanını aldık
$dosyaUzantison=end($dosyaUzanti);

//dosyanın hangi isimle kaydedileceğini belirledik "dosya-rastgele sayılar-dosya uzantısı"
$dosyaYeni = "dosyalar/dosya-" . substr(sha1(rand(111111,999999)),0,8) . ".$dosyaUzantison";

//Kabul edilecek dosya uzantıları burada kontrolü "type" dan yap
$dosyaTurler = ["image/png", "image/jpg", "image/jpeg", "image/gif"]; //Mime Type

if ($dosyaHata == 0) {
//tmp klosöründe bir hata yoksa...
  if ($dosyaBoyut <= 2*1024*1024) {
    if (in_array($dosyaTur, $dosyaTurler)) {
      //güvenlik açısından kontrolü type'tan yapıyoruz isim kaydetmeyi ise name'den
      if (move_uploaded_file($dosyaGecici, $dosyaYeni)) {
        //move_uploaded_file(neyi , nereye )=> dosyayı alma işlemi yapılır
        echo "<a href='$dosyaYeni'>$dosyaYeni</a>";
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