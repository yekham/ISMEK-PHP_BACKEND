<?php 
$sayi=5;


if ($sayi>5) {
 	echo "Sayı 5'ten büyük";
 }
elseif ($sayi==5) {
	echo "Sayı 5'e eşit.";
}
else{
	echo "Sayı 5'ten küçük";
}
echo "<br>";
$takim="fb";

if ($takim=="fb") {
 	echo "Fenerbahçe";
 }
elseif ($takim=="gs") {
	echo "Galatasaray";
}
else{
	echo "Takım bulunamadı";
}
echo "<br>";


$takim2="gs";
switch ($takim2) {
	case 'gs':
		echo "Galatasaray";
		break;
	case 'fb':
		echo "Fenerbahçe";
		break;
	default:
		echo "Farklı bir takım";
		break;
}
echo "<br>";


$binisUcreti=5;
$gecerli=true;
$bakiye=130;

if ($gecerli==true) {
	if ($bakiye>=$binisUcreti) {
			$bakiye-=$binisUcreti;	
			echo "Hoşgeldiniz";
		}
		else{
		echo "Bakiye yetersiz";
		}
}
else{
	echo "Kart geçersiz";
}
echo "<br>";

$cinsiyet="k";
$yas=18;
if ($cinsiyet=="e" && $yas==18 ) {
	echo "Partiye Hoşgeldiniz.";
}
else{
	if ($cinsiyet!="e") {
		echo "Sadece erkekler girebilir.";
	}
	if ($yas<20) {
		echo "20+ yaşında olmalısınız.";
	}
}
echo "<br>";

//3tane değişken tanımla en büyüğünü bulan program yap

$sayi1=10;
$sayi2=15;
$sayi3=28;

if ($sayi1>$sayi2 && $sayi1>$sayi3) {
	echo "En büyük sayı:".$sayi1;	
}
elseif ($sayi2>$sayi1 && $sayi2>$sayi3) {
	echo "En büyük sayı:".$sayi2;
}
else{
	echo "En büyük sayı: ".$sayi3;
}
//Yekta Hamit Pektaş



?>





