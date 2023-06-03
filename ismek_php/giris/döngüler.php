<?php 
/*

					//For döngüsü
$cift=0;
$tek=0;
$toplam=0;

for ($i=0; $i <= 100 ; $i++) { 
	if ($i%2==0) {
		$cift+=$i;
	}	
	else  {
		$tek+=$i;
	}
}

$toplam=$cift+$tek;

echo "Tek sayıların toplamı: $tek <br>";
echo "Çift sayıların toplamı: $cift <br>";
echo "Tüm sayıların toplamı: $toplam <br>";
*/

/*		
					//While döngüsü
$i=1;
while ($i<=100) {
	echo "$i-";
	$i++;
}
*/

					//Do-while döngüsü
/*
$i=1;
do {
	echo "$i-";
	$i++;
} while ($i<=100);
*/


					//For-each döngüsü
//Dizileri parçalamak için kullanılır (elemanlar yazdırılır)


/*
$mevsimler=["ilkbahar","yaz","sonbahar","kış"];
foreach ($mevsimler as $mevsim ) {
	echo $mevsim."<br>";
}
*/

					//Çarpım tablosu


for ($i=1; $i<=10 ; $i++){
	for ($j=1; $j<=10 ; $j++) {
		$sonuc=$i*$j;
		echo "$i x $j= $sonuc<br>"; 
	}
	echo "<hr><br>";
}










 ?>