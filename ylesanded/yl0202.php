<?php 
#Elis Karpov, PHP kursus 2016, 08.05.2016
#yl0202

$animals[]="Karu";
$animals[]="Ilves";
$animals[]="Kass";
$animals[]="Koer";
$animals[]="Rebane";
$animals[]="Hunt";
$animals[]="Kits";
$animals[]="Tiiger";
$animals[]="Panda";
$animals[]="Jänes";

foreach ($animals as $key => $val)
{
  echo "$val on massiivis kohal $key.<br>"; 
} 
?>