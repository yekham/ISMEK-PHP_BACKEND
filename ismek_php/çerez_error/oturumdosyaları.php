<?php 

//çerez=>kullanıcının bilgisayarında, bilgiler şifresiz, belirli süre sonra imha olur
//otturum=> sunucuda, bilgiler kısmi şifrelidir, tarayıcı kapatıldığında imha olur
//isset()=> oluşturulmuş mu?

session_start();//oturum başlatılması lazım yapılmazsa session çalışmaz
$_SESSION['adsoyad']="Mehmet Selçuk Batal";
$_SESSION['adres']="Üsküdar-İstanbul";
$_SESSION['telefon']="123123123123";

if(isset($_SESSION["adsoyad"]) && !empty($_SESSION["adsoyad"]) ){
	echo $_SESSION["adsoyad"];
}

					//silme işlemleri
//unset() oluşturma,sil tekli silme

//unset($_SESSION['adres']);

//aralarına virgül koyarak birden fazla silme yapılabilir.

// session_destroy() toplu silme yapar

session_destroy();

var_dump($_SESSION);









 ?>