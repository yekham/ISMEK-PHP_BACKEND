<?php 
/*
$dosya=fopen("ogrenciler.csv","a");
fputs($dosya,"Mehmet Selçuk ;70;80;90\n");
fputs($dosya,"ali veli ;70;80;90\n");
fputs($dosya,"ayşe fatma ;70;80;90\n");
fputs($dosya,"burak Selçuk ;70;80;90\n");


fclose($dosya);
*/




$dosya=fopen("ogrenciler.csv","rbt");
while(!feof($dosya)){
	$satir=fgetcsv($dosya,9000,";");
	echo "$satir[0] <br>
	$satir[1] <br>
	$satir[2] <br>
	$satir[3] <br> ";
}
fclose($dosya);


 ?>