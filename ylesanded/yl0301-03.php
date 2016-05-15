<?php 
#Elis Karpov, PHP kursus 2016, 15.05.2016
#yl0301

$mas[0]="Karu";
$mas[1]="Jänes";
$mas[2]="Hunt";
$mas[3]="Rebane";
$mas[4]="Hirv";
$mas[5]="Hiir";
$mas[6]="Põder";
$mas[7]="Ahv";
$mas[8]="Mäger";
$mas[9]="Mutt";

function kuva_massiiv($mas) 
{
    for ($i=0; $i<sizeof($mas); $i++) 
    {
        echo "$i) $mas[$i]<br><p>";
    }
}
kuva_massiiv($mas);

#yl0302

function vaheta_elemendid($i, $j, $mas)  
{
    $ajutine = $mas[$i];
    $mas[$i] = $mas[$j];
    $mas[$j] = $ajutine;

    return $mas;

}


$mas = vaheta_elemendid(3, 7, $mas);
echo "<br>";
kuva_massiiv($mas);


#yl0303

function kustuta_element($k, $mas)  
{
    unset($mas[$k]); 
        $mas = array_values($mas);
        
    return $mas;
}

$mas = kustuta_element(1, $mas);
echo "<br>";
kuva_massiiv($mas);
?> 