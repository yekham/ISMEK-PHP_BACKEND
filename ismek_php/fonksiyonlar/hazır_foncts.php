<?php 

							//header functions
//header("Content-Type:text/html; Charset=Utf-8");//tr dil desteği verir

//header("Location: https://www.enstitu.ibb.istanbul");//Kod satırına geldiğinde verilen lokasyona doğrudan yönlendirme yapılır

//header("Refresh:5; Url=https://www.enstitu.ibb.istanbul");//5 saniye saydıktan sonra yönlendirme yapılır

					//Die Fonksiyonu Sistemi öldürmeye yarar ,bundan sonra gelecek kod bloğunu işletmez
/*
header("Refresh:5; Url=https://www.enstitu.ibb.istanbul");
die("10 saniye içinde yönlendiriliyorsunuz");
echo "Deneme çıktı";
*/


//Tarih fonksiyonları
/*
$bugun=getdate();
echo "Bu yıl: ".$bugun["year"]."<br>";
echo "Bu ay: ".$bugun["month"]."<br>";
echo "Bu gün: ".$bugun["weekday"]."<br>";
echo "Bugün, yılın: ".$bugun["yday"]."günüdür <br>";


$tarih=date("d-m-Y H:i:s");
echo $tarih;
echo "<br>";

echo date("d");
echo "<br>";

echo "Bugün yılın ".date("z").".günüdür.";
echo "<br>";

echo "Bugün hafta yılın ".date("W").".haftasıdır.";
echo "<br>";

echo "Bugün ay toplam ".date("t")." gün çekmektedir.";
echo "<br>";

$gunler=["Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar"];
$aylar=["Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık"];


echo "Bugün: ".$gunler[date("w")-1];
echo "<br>";

echo "Bu ay: ".$aylar[date("n")-1];
echo "<br>";


echo "Şimdi: ".date("d")." ".$aylar[date("n")-1]." ".date("Y").",".$gunler[date("w")-1];
echo "<br>";

echo date("H:i");
echo "<br>";
*/

								//ileri tarih işlemleri
/*
//echo time();//unix epoch,zaman damgası
$bugün=getdate(time());
echo $bugün["weekday"];
echo "<br>";

$dun=getdate(time()-24*60*60);//24 saat geri gider
echo "Dün:".$dun["weekday"];
echo "<br>";

$yarın=getdate(time()+24*60*60);
echo"Yarın: ".$yarın["weekday"];
echo "<br>";

$gunsonra=getdate(time()+28*24*60*60);
echo"28 gün sonra: ".$gunsonra["mday"]."/".$gunsonra["mon"]."/".$gunsonra["year"];
echo "<br>";
*/

										//mktime
/*
$zaman=mktime(0,0,0,date("m")-7,date("d"),date("Y")-10);
echo "Tarih: ".date("d-m-Y",$zaman);//aldığı parametreye göre işlem yaptı default'ı bugün
echo "<br>";
*/

								//Math fonc.
/*
echo rand();
echo "<br>";

echo mt_rand(10,100);
echo "<br>";

$sayi=10.7;

echo ceil($sayi);//yukarı yuvarlama
echo "<br>";

echo floor($sayi);//aşşağı yuvarlama
echo "<br>";

echo round($sayi);//en yakın tamsayıya yuvarlama
echo "<br>";

echo min(15,29,6,54,11,87,45);//min bulma
echo "<br>";

echo max(15,29,6,54,11,87,45);//max bulma
echo "<br>";


echo abs(10.5);//mutlak sayı
echo "<br>";

echo sqrt(16);//karekök alma
echo "<br>";

echo pow(2,5);//üs alma
echo "<br>";

echo fmod(10,3);//bölümünden kalan bulma
echo "<br>";

echo log(15);//log alma
echo "<br>";

echo hypot(6, 8) //hipotenüs bulma
echo "<br>";

*/

							//Şifreleme fonksiyonları
$veri="Mehmet Selçuk Batal";
							//güvensiz yöntemler
//echo crc32($veri);


/*
$sifre=base64_encode($veri);
echo "Şifrelenmiş". $sifre;
echo "<br>";

echo "çözülmüş: ".base64_decode($sifre);
*/

//echo crypt($veri,"istanbul");


							//güvenliyöntemler
/*
$sifre1=md5($veri);
$sifre2=sha1($veri);
$sifre3=md5(sha1($veri));//en güvenli


echo "MD5:$sifre1 <br> SHA1:$sifre2 <br> Karışık:$sifre3";
*/


							//SSL kullanarak şifreleme,tavsiye edilen bu

//print_r(openssl_get_cipher_methods());//sunucumuzun hangi şifreleme algoritmalarını desteklediğini gösterir


/*
$algoritma="AES-128-ECB";//şifreleme algoritması
$anahtar="istanbul";//şifre anahtarı

$sifrelenmis=openssl_encrypt($veri, $algoritma, $anahtar);

$cozulmus= openssl_decrypt($sifrelenmis, $algoritma, $anahtar);

echo"veri: $veri <br> şifrelenmiş:$sifrelenmis <br> çözülmüş:$cozulmus";
*/










 ?>