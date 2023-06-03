<?php 
		//Veriables,Data types
$adsoyad = "yekta hamit"; //String(metin)
$tamsayi = 10; //Integer(Tam Sayı)
$ondalikliSayi = 37.56; //Float(Ondalık Sayı)
$dogruMu = true; //Boolean(T/F)

echo $adsoyad ; 

$adsoyad="Ali veli  ";

echo $adsoyad;

		//Sabitler(Constants)
define("_KURUM_" , "Enstitü İSMEK");//Sabit olduğunu anlamak için başına sonuna "_" koy
define("YAS" , 23);
echo _KURUM_;


define("KDV1" , 1);
define("KDV8" , 8);
define("KDV18" , 18);

echo KDV8;

		//Operatörler
$sayi1 = 10;
$sayi2 = 5;
$sayi3 = 0;

$sonuc= $sayi1%$sayi2;

echo $sonuc;

//Karşılaştırma Operatörleri < > >= <= == === != !== <>


//Mantıksal Operatörler &&(and) ||(or)  !(not)

if($sayi1 > $sayi2 || $sayi2!=5){
	echo "doğru";
};

$kullaniciAdi="admin";
$sifre="12345";

if ($kullaniciAdi=="admin" && $sifre=="1234") {
	echo "Hoşgeldiniz";
}else{
	echo "Tekrar deneyiniz";
}


//Arttırma-Azaltma Operatörleri ++ --
$sayi=5;
echo $sayi;
$sayi++;//$sayi=$sayi+1
$sayi--;//$sayi=$sayi-1
echo $sayi;

//Birleştirme Operatörü .
$ad="yekta";
$soyad="hamit";
echo $ad.$soyad;
//Bileşik Atama  Operatörleri += -= *= /= %=





 ?>