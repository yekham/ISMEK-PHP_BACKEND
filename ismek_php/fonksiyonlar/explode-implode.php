<?php 

//explode=>metni parçalar ve dizi halinde saklar
//implode=>metni birleştirir

$veri="Enstitü İstanbul İsmek Zemin İstanbul BackEnd Developer";

$parcalar=explode(' ', $veri);

var_dump($parcalar);

$sayac=1;
foreach($parcalar as $parca){
	echo "$sayac-"."$parca <br>";
	$sayac++;
}

$dizi=["ocak","şubat","mart","nisan","mayıs","haziran","temmuz","ağustos","eylül","ekim","kasım","aralık"];

$veri= implode(" / ", $dizi);

echo $veri;









 ?>