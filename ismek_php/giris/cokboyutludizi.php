<?php 
//dizi içinde dizi saklayarak çok boyutlu dizi oluşturulur.


$ogrenciler=array(
	array("no"=>"1","adsoyad"=>"Ahmet Koç","tc"=>"123456"),
	array("no"=>"2","adsoyad"=>"Mehmet Batal","tc"=>"123456"),
	array("no"=>"3","adsoyad"=>"Ayşe Sertaç","tc"=>"123456"),
	array("no"=>"4","adsoyad"=>"Merve Dilli","tc"=>"123456")
);
echo $ogrenciler[2]["adsoyad"];
echo "<br>";
foreach ($ogrenciler as $ogrenci ) {
	if($ogrenci["no"]>=3){
		echo"$ogrenci[no]-$ogrenci[adsoyad]($ogrenci[tc])";
		echo "<br>";
	}
}
echo "<br>";













 ?>