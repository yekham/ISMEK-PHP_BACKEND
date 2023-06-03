<?php  

//var_dump($_SERVER);
//$_SERVER,$_GET,$_POST,$_REQUEST,$_FILES,$_COOKIE,$_SESSION,$GLOBALS

/*
echo "Ip Adresi: ".$_SERVER["REMOTE_ADDR"];	//127.0.0.1
echo "<br>";

echo "Tarayıcı:".$_SERVER["HTTP_USER_AGENT"];
echo "<br>";

echo "Sunucu Adresi:".$_SERVER["HTTP_HOST"];
echo "<br>";

echo "Sunucu IP ".$_SERVER["SERVER_ADDR"];
echo "<br>";

echo "Sunucu Adı:".$_SERVER["SERVER_NAME"];
echo "<br>";

echo "Sunucu Yazılım:".$_SERVER["SERVER_SOFTWARE"];
echo "<br>";

echo "Sayfanın Dizini:".$_SERVER["DOCUMENT_ROOT"];
echo "<br>";
*/
//Get,post,reguest,files form işlemlerinde kullanılır
//yüklenen dosyaları almak için files,gönderilen verileri almak için get ve post,hangi formatta gönderildiği bilinmiyorsa request kullanılır.

							//$GLOBALS
/*
//fonksiyon dışındaki değişkeni fonksiyon içinde kullanma;
function merhaba(){
	echo "merhaba ". $GLOBALS['adsoyad'];
}
$adsoyad="Mehmet Selçuk Batal";
 merhaba();

echo "<br>";


//fonksiyon içindeki değişkeni fonksiyon dışında kullanma;  
function zar($sayi1,$sayi2){
	global $sonuc;
	$sonuc=rand($sayi1,$sayi2);
}

zar(1,6);
echo $sonuc;
*/

function deneme(){
	$sayi1=10;
	$sayi2=5;
	$sayi3=17;
	return "sayi1=$sayi1|sayi2=$sayi2|sayi3=$sayi3";
}

$veriler= explode("|",deneme());

foreach($veriler as $veri){
	$xveri=explode("=",$veri);
	echo $xveri[0]."////".$xveri[1]."<br>";
}





?>