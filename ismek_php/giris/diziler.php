<?php 

				//Arrays

$mevsimler1=array("ilkbahar","sonbahar","yaz","kış");
$mevsimler2=["ilkbahar","sonbahar","yaz","kış"];

$ogrenciler=array();

$ogrenciler[]="Ahmet";
$ogrenciler[]="Kadir";
$ogrenciler[]="Hakan";
$ogrenciler[]="Zeynep";


//echo $ogrenciler[3];
foreach ($ogrenciler as $ogrenci) {
	echo "$ogrenci <br>";
}
//bir değişkenin içeriğini incelemek veya hata ayıklama yapmak gibi çeşitli amaçlar için kullanılabilir.
var_dump($ogrenciler);
print_r($ogrenciler)



 ?>