<?php 

/*
if (mkdir("Uygulamalar/resim1")) {
	// klosör oluşturmaya yarar
	//oluşturulduysa şeklinde sorgulama yaptık
	echo "Dizin oluşturuldu";
}
else{
	echo "Dizin oluşturulmadı";
}
*/

// ../ yukarı çıkma yolu


//chmod=>7,5,5 olmalı
// chmod("resim1",0777);=> klosörün yazım okuma yetkilerinin tanımlanmasını sağlar
//mkdir("resim1",0755)=> kullanmanın bir başka yolu

//rename("resim1","xxxxxx");=> isim değiştirmeye yarar

//klosörü taşıma işlemi rename("Uygulamalar/resim1","resimler/aaaa")

//rmdir("resimler/aaaa")=> silme işlemi removedir

//dizini silmek istiyorsan önce dosyaları silmen gerekir.


/*
//dosyayı açıyoruz
if($dizin=opendir("ahmet")){
	//dosyayı okuduk
	while($dosya=readdir($dizin)){
		if(!in_array($dosya,[".z","..z"])){
		if(is_file("ahmet/$dosya")){
			$tur="Dosya";
		}
		else if(is_dir("ahmet/$dosya")){
			$tur="Dizin";
		}
		else{
			$tur="Belirsiz";
		}
		//dosya ismini ekrana yazdırdık
		echo "$tur => $dosya<br>";}
	}
	//dosyayı kapattık
	closedir($dizin);
}

*/



/*
foreach(scandir("ahmet") as $icerik){
	if(is_file("ahmet/$icerik")){
		echo "Dosya => $icerik<br>";
	}
	if(is_dir("ahmet/$icerik")){
		echo "Dosya => $icerik<br>";
	}
}
*/


														//Dosya işlemleri
//yoksa oluşturur varsa hiçbir şey yapmaz touch fonk güvenli
/**
if(touch("deneme/icerikler.txt")){
	echo "Dsoya oluşturuldu";
}
else{
	echo "Dosya oluşturulamadı";
}
*/


											//yazma işlemi

//r=>dosyayı okumak için
//w=> write(içini boşaltıp açma)
//a=> append(içini boşaltmadan açma)
//wbt "bt"mac windows uyumu için gerekli 




/*
$dosya=fopen("deneme/icerikler.txt","w");
fwrite($dosya, "Mehmet Selçuk Batal\n");//yan yana yazar yeni satıra geçmez "\n ile satır atlatma yapılır","\t tab atlama yapar"
fwrite($dosya, "Enstitü İstanbul İSMEK\n ");
fwrite($dosya, "İBB Zemin İstanbul\n");
fclose($dosya);
*/

										//okuma işlemi

/*
//dosya boyutu kadar okuma yaptı, boyut belirlemek okuma işleminde gerekli
echo nl2br(fread($dosya,filesize("deneme/icerikler.txt") ));// \n=><br> döndürme işlemini nl2br fonk yapıyor
*/

//while(!feof($dosya))=>dosyanın sonuna gelinceye kadar demek ,feof() fonksiyonu dosyanın sonuna gelinip gelinmediğini kontrol etmek için kullanılır.

/*
$dosya=fopen("deneme/icerikler.txt","r");
// dosyanın sonuna gelinceye kadar okuma yaptık fgets()-> satır satır okuma yapar
while (!feof($dosya)) {
	echo fgets($dosya)."<br>";
}

fclose($dosya);
*/


							//dosya kopyalama

copy("deneme/icerikler.txt","deneme/icerikler_kopya.txt");

							//dosya silme



//file_exists=>dosya mevcut mu is_file=>türü dosya mı?
if (file_exists("deneme/icerikler_kopya.txt")) {
	if(unlink("deneme/icerikler_kopya.txt")){
	echo "Dosya silindi";
}
else{
	echo "Dosya silinemedi";
}
}
else{
	echo "Dosya bulunamadı!";
}










 ?>