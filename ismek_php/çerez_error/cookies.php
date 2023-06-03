<?php 

//bir veriyi birden fazla kere kullanmak için ya çerez dosyalarında saklanır ya da oturum dosyalarında saklanır.

//çerezler kullanıcının kendi bilgisayarında saklanır

//çerezleri kullanıcılar silebilir




setcookie('ibb','Enstitü İstanbul İsmek - Zemin İstanbul',time()+ 60*60*24);


//isset()=> bir değişkenin varlığını sorgular(oluşturulup oluşturulmadığı) 
//empty()=> boş olup olmadığıı kontrol eder
if (isset($_COOKIE['ibb']) && !empty($_COOKIE['ibb'])) {
	echo $_COOKIE['ibb'];
}
// ilk yenilemede oluşturulur sonra ekrana yazdırılır.


								//cookie silme 
//1- aynı isimde boş bir cookie oluştur

setcookie('ibb','',time()-1);

//2- 



 ?>