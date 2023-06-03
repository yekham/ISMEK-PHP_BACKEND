<?php 
//tavsiye edilen yöntemdir
//veritabanı sunucu türü:veritabanı sunucu ismi;veri tabanı ismi; charset, kulllanıcı ismi , şifre

//try-catch ile bağlantıda oluşacak sorunları yakalarız ve ekrana basarız böylece bağlantı sorununu kontrol ederiz

try{
        $baglan= new PDO("mysql:host=localhost;dbname=ismek;charset=utf8","yekta","190544.");
        //Bu attribute'lar hocanın kullandıkları bunu projene kopyala yapıştır
        $baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $baglan->setAttribute (PDO::ATTR_EMULATE_PREPARES, false);
        $baglan->setAttribute (PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
        //her defasında listeleme sorgusunda fetch yapma işleminden kurtardı
        $baglan->setAttribute (PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

}catch(Exception $e){
    die ("Hata oluştu,Sistem durduruldu!");
}

//--------------------------------------------------------------------------------------------------------------------------

/*
                        //Kayıt ekleme
//prepared statements; kayıt ekleme, listeleme işlemlerinde saldırının önüne geçmek için kullanılır.
//query güvensiz yöntemdir prepare() kullan!
//Prepare kısmında dışarıdan gönderilecek sonuçlar için "?" konur ki güvenli olsun , execute kısmında ise girilecek değerler sırayla verilir. 
$sorgu=$baglan->prepare("insert into ogrenciler values(?,?,?,?,?,?)");

$sonuc=$sorgu->execute( array(NULL,'Ayşe Fatma',10, 20, 30, date('Y-m-d H:i:s') ) );

if($sonuc){
    echo "Kayıt eklendi!";
}
else{
    echo "Kayıt eklenemedi!";

}
*/
       
//----------------------------------------------------------------------------------------------------------------------------

/*
                            // kayıt güncelleme
//Prepare kısmında dışarıdan gönderilecek sonuçlar için "?" konur ki güvenli olsun , execute kısmında ise girilecek değerler sırayla verilir. 
$sorgu=$baglan->prepare("update ogrenciler set adsoyad=?,final1=? where no=?");

$sonuc=$sorgu->execute(array("Selin Sarıca",40,3) );

if($sonuc){
    echo "Kayıt güncellendi!";
}
else{
    echo "Kayıt güncellenemedi!";

}
*/

//-------------------------------------------------------------------------------------------------------------------------------
/*
                            //Kayıt silme
$sorgu=$baglan->prepare("delete from ogrenciler where no=?");

$sonuc=$sorgu->execute( array(3) );

if($sonuc){
    echo "Kayıt silindi!";
}
else{
    echo "Kayıt silinenemedi!";

}
*/

                      
//---------------------------------------------------------------------------------------------------------------------------------

                        //listeleme işlemlerinde fetch kullanılır

/*
//eğer gönderilecek veri kullanıcıdan geliyorsa=>prepare biz listeliyorsak => query kullan.
                                //Tek Kayıt listeleme
$sorgu=$baglan->query("select * from ogrenciler order by tarih desc");

$satir=$sorgu->fetch();

echo $satir->adsoyad;
*/



/*
                            //çoklu kayıt listeleme

$sorgu=$baglan->query("select * from ogrenciler order by tarih desc",PDO::FETCH_OBJ);


foreach($sorgu as $satir){
    echo "Adı soyadı: $satir->adsoyad<br>
    Kayıt tarihi: $satir->tarih<br><br>";
}
*/



/*
//Get metodu ile girdiğimiz no ya göre kayıt listeleyen sorgu bu şekilde olur , değer kullanıcıdan geldiği için prepare kullandık
$no=$_GET["no"];

$sorgu=$baglan->prepare("select * from ogrenciler where (no=?) order by tarih desc");

$sorgu->execute(array($no));

foreach($sorgu as $satir){
    echo "Adı soyadı: $satir->adsoyad<br>
    Kayıt tarihi: $satir->tarih<br><br>";
}
*/

//---------------------------------------------------------------------------------------------------------------------------------






 ?>