<?php 

$tarih1 ="01.03.2020";
$tarih2 = "01.04.2022";
$fark = $tarih2 - $tarih1;

$gun= number_format(floor($fark / (60 * 60 * 24)));
$saat=number_format(floor($fark / (60 * 60)));
$dakika=number_format(floor($fark / (60)));
$saniye=number_format($fark);
$yil = number_format(floor($fark)/(60*60*24*365));
$hafta = number_format(floor($fark / 604800));
$ay = number_format(floor($fark / 86400 / 30 ));


echo " Yıl :" . $yil. " Ay :" .$ay. " Hafta :" .$hafta. " Gün :" .$gun. " Saat :" .$saat. " Dakika :" .$dakika. "Saniye :" .$saniye.  "<br>";

?>
