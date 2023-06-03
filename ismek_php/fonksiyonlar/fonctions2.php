<?php 
									//String methods

$veri="eNsTitü İstanBul İsMeK";

echo strlen($veri);//str uzunluk
echo "<br>";

echo mb_strlen($veri,"utf-8");//tr karakteri işleyebilmemizi sağlar
echo "<br>";

//trim() sağda ve soldaki boşlukları temizler yada belirtilen şeyi
//ltrim() soldaki boşlukları temizler yada belirtilen şeyi
//rtrim() sağdaki boşlukları temizler yada belirtilen şeyi

echo substr($veri,0,5);// str parçalama
echo "<br>";

echo mb_substr($veri,0,-6,"utf-8");
echo "<br>";

$haber="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
/*
if (strlen($haber)>300){
	$ozet=substr($haber,0,300)."...";
}else{
	$ozet=$haber;
}

echo $ozet."\n";
echo "Toplam ".strlen($ozet)."Karakter!";
*/

function okuma($metin=""){
	$karakter=mb_strlen($metin,"utf-8");
	$sure=ceil($karakter / 1000);
	return $sure;
}
echo okuma($haber)."dakikalık okuma";
echo "<br>";

//str_word_count() metindeki kelime sayısını bulur

echo mb_strtolower($veri,"utf-8");//strleri küçük harfe çevirir
echo "<br>";

echo mb_strtoupper($veri,"utf-8");//strleri büyük harfe çevirir
echo "<br>";

echo ucfirst($veri);//strlerin baş harfini büyütür
echo "<br>";

echo lcfirst($veri);//ilk karekteri küçültür 
echo "<br>";

echo ucwords($veri);//tüm kelimenin baş harflerini büyütür
echo "<br>";

echo strrev($veri);//metni ters çevirir
echo "<br>";

$veri2="Mehmet Selçuk Batal";
//metin içinde metin bulmaya yarar
if (strstr($veri2,"Batal")) {
	echo "Bulundu";
}else{
	echo "Bulunamadı";
}
echo "<br>";

$veri3="* Enstitü * İstanbul * İsmek ***";
echo trim(str_replace(["*"," "],["","-"], $veri3));
echo "<br>";

$veri4="Ö Ç Ş İ Ğ Ü - ö ç ş i ğ ü";

function buyukHarf($veri){
	$veri=str_replace("i","İ",$veri);
	$veri=mb_strtoupper($veri,"utf-8");
	return $veri;
}
echo mb_strtoupper($veri4,"utf-8");
echo "<br>";
echo buyukHarf($veri4);
echo "<br>";

function kucukkHarf($veri){
	$veri=str_replace("İ","i",$veri);
	$veri=mb_strtoupper($veri,"utf-8");
	return $veri;
}
echo kucukkHarf($veri4);
echo "<br>";

function basHarfBuyuk($veri){
	//bütün kelimelerin baş harfi büyük olsun
	//ucwords(str) kullan i lerde sıkıntı çıkarıyor
}


$baslık="ÇARŞAMBA GÜNÜ İZMİR Fuarında ıslanan çocuk Hasta Oldu.";
function sefUrl($veri){
	$veri=str_replace("İ","i",$veri);
	$veri=mb_strtolower($veri,"utf-8");
	$bul=["ö","ç","ş","ı","ğ","ü"," "];
	$degistir=["o","c","s","i","g","u","-"];
	$veri=str_replace($bul,$degistir,$veri);
	return $veri;
}

echo sefUrl($baslık);
echo "<br>";

$veri5="<b><i><u>Ahmet'in \n bacanağı İstanbul'dan gelmiş, duydun mu?</i></b></u> ";
echo $veri5;
echo "<br>";

echo strip_tags($veri5,"<b><i>");//html etiketlerini kaldırır b ve i dışındakileri sildik 
echo "<br>";

echo nl2br($veri5)//enter veritabanına \n şeklinde gelir biz enter haline gelmesi için bu fonk. kullanırız















 ?>