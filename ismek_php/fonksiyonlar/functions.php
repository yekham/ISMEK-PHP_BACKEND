<?php 

/*
function hesap($sayi1=0,$sayi2=0,$islem=" "){
	
	$sonuc=0;
	
	switch($islem){
		case "topla":
			$sonuc=$sayi1+$sayi2;
		break;
		case "çıkar":
			$sonuc=$sayi1+$sayi2;
		break;
		case "çarp":
			$sonuc=$sayi1*$sayi2;
		break;
		case "böl":
			$sonuc=$sayi1+$sayi2;
		break;
		default:
			$sonuc="HATA!";
		break;

	}
	return $sonuc;
}

$sonuc= hesap(8,5,"topla");echo "Sonuç:". $sonuc;
echo "<br>";

$sonuc= hesap(20,9,"çarp");echo "Sonuç:". $sonuc;
echo "<br>";

$sonuc= hesap(20,9,);echo "Sonuç:". $sonuc;
echo "<br>";
*/

/*
								//Örnek-1
function rastgele($limit1=0,$limit2=0){
	$sayilar=[];
	for ($i=$limit1; $i <= $limit2 ; $i++) { 	// code.
		$sayilar[]= $i;	
	}
	shuffle($sayilar);
	return $sayilar[0];
}


echo rastgele(100,200);
*/



function cevir($gun=""){
	$gunler=["Monday"=>"Pazartesi",
	"Tuesday"=>"Salı",
	"Wednesday"=>"Çarşamba",
	"Thursday"=>"Perşembe",
	"Friday"=>"Cuma",
	"Saturday"=>"Cumartesi",
	"Sunday"=>"Pazar"];

if (array_key_exists($gun,$gunler )) {
	return $gunler[$gun];
}else{
	return "HATA!";
}



}


echo cevir("Wednesdayx")





 ?>