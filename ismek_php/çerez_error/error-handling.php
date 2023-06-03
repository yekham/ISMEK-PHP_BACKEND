<?php 

//exception=> hata yakalama


//ölümcül hatalar(E_ERROR)=> karşılaşırsa sistem kitlenir, çalışmaz
//çalışma anı uyarıları(E_WARNING)=> ekrana mesaj basar ve çalışmaya devam eder.
//çalışma anı bildirimleri(E_NOTICE)=> ekrana mesaj basar ve çalışmaya devam eder.

//error_reporting();//0=> hatayı gizler 1=> hatayı gösterir

//error_reporting(E_ERROR|E_WARNING|E_PARSE)=>  



//try-catch=> hata oluştuğu zaman sistemin çökmesini engeller
//throw=> hatayı yakalar

try{

	$sayi1=10;
	$sayi2=0;

	if( $sayi2==0 ){
		throw new Exception("Sıfıra bölmeye çalıştın");
	}
	
		echo $sayi1/$sayi2;
	
}
catch(Exception $e){
	echo $e->getMessage();
}




 ?>