<?php 
/*
unset($ogrenciler[2],$ogreciler[4]); //dizi eleman silme

$ogreciler2=array_reverse($ogrenciler); //dizi eleman ters çevirir ve yeni dizi oluşturur
print_r($ogreciler2);

array_unshift($ogrenciler,"Selim"); //eleman ekleme başa
print_r($ogreciler2);

array_push(array, var);//eleman ekleme başa

array_shift(array);//dizi başı elemanı siler
array_pop(array);//dizinin son elemanını siler

count(var)//dizi eleman sayısını bulur 

array_merge()//dizileri birleştirir

array_dif()//iki diziyi karşılaştırır ve 1.verilende olup 2.de olmayanları döndürür

array_sum()//dizi içindeki sayıların toplamını döndürür

array_product()//dizi içindeki sayıların çarpımını döndürür

array_intersect()//iki dizi arası ortak eleman bulma

array_unique()//dizi içerisindeki birden fazla tekrar eden elemanları temizler 1 kere döndürür






*/

$notlar=[
	"Türkçe"=>60,
	"Matematik"=>40,
	"Fizik"=>70,
	"Geometri"=>35
];
//print_r($notlar);
asort($notlar);//küçükten büyüğe

arsort($notlar);//büyükten büyüğe

ksort($notlar);//anahtara göre küçükten 

krsort($notlar);//anahtara göre büyükten 

shuffle($notlar);//karıştırarak sıralama

print_r($notlar);

echo "<br>";

//dizi içinden rastgele eleman seçme 
$sonuc=array_rand($notlar);
echo $notlar[$sonuc];

echo "<br>";

//dizi elemanlarını ayırmak için (dilimlemek)
$sonuc=array_slice($notlar,2,4);
print_r($sonuc) ;

echo "<br>";

//dizinin son elemanını verir
echo end($notlar);

echo "<br>";

//
$isimler=["ahmet","mehmet","ali","veli","ayşe"];
if (in_array("ahmet", $isimler)) {
	echo "var";
}else {
	echo "yok";
}
echo "<br>";

$sonuc=in_array("mehmet",$isimler);
if($sonuc==true){
	echo "var";
}
else{
	echo "yok";
}



 ?>