<?php 

//mysqli sadece mysql'de çalışır, nesne tabanlıdır.


$baglan= new mysqli("localhost","yekta","190544.","ismek");

$baglan->set_charset("utf8");
/*
					//Kayıt ekleme
$tarih= date("Y-m-d H:i:s");
//query methodu kullanarak sorgu vs. yapılır
// -> işaret ile oluşturduğumuz nesnedeki fonc. ulaştık
$sorgu=$baglan->query("insert into ogrenciler values(NULL,'Mehmet Selçuk Batal',70,80,90,'$tarih')");

if ($sorgu) {
	echo "Kayıt eklendi!";
}
else{
	echo "Kayıt eklenemedi!";
}
*/


/*
						//kayıt güncelleme
$tarih= date("Y-m-d H:i:s");
//query methodu kullanarak sorgu vs. yapılır
// -> işaret ile oluşturduğumuz nesnedeki fonc. ulaştık
$sorgu=$baglan->query("update ogrenciler set adsoyad='Ali Veli',final1=0 where (no=1)");

if ($sorgu) {
	echo "Kayıt güncellendi!";
}
else{
	echo "Kayıt güncellenemedi!";
}
*/



/*
						//kayıt silme
$tarih= date("Y-m-d H:i:s");
//query methodu kullanarak sorgu vs. yapılır
// -> işaret ile oluşturduğumuz nesnedeki fonc. ulaştık
$sorgu=$baglan->query("delete from ogrenciler where no=1");

if ($sorgu) {
	echo "Kayıt silindi!";
}
else{
	echo "Kayıt silinenemedi!";
}

*/

//query methodu kullanarak sorgu vs. yapılır
// -> işaret ile oluşturduğumuz nesnedeki fonc. ulaştık

/*
// tek kayıt döndürmek bu şekilde oluyor eğer çok kayıt döndürülecekse döngü kullanılır
$sorgu=$baglan->query("select * from ogrenciler order by tarih asc")->fetch_object();
echo $sorgu->adsoyad;
*/
			

			//çoklu listeleme
//
$sorgu=$baglan->query("select * from ogrenciler order by tarih asc");
while($satir=$sorgu->fetch_object()){
	echo "Adı soyadı: $satir->adsoyad <br>
		Notlar: $satir->vize1 / $satir->vize2 / $satir->final1 <br>
		Tarih: $satir->tarih <br><br>";
}









$baglan->close();

 ?>