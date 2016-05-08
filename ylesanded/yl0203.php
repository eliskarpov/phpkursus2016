<?php 
#Elis Karpov, PHP kursus 2016, 08.05.2016
#yl0203

$stars = array("Diaz", "Reeves", "Cage", "Jolie", "Pitt", "Aniston", "Bloom", "Ferrell", "Kunis", "Kidman");

for($i=0; $i<sizeof($stars); $i++)
{
  echo "$i) $stars[$i]<br>";
}
?>