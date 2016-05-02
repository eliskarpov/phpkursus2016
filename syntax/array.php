<?php 

$drinks[]="Piim";
$drinks[]="Tee";
$drinks[]="Kohv";
$drinks[]="Mahl";
$drinks[]="Vesi";
$drinks[]="Morss";
$drinks[]="Kali";

sort($drinks);

//echo $drinks[0];
echo "<pre>";
print_r($drinks);
echo "<\pre><br>";

//var_dump($drinks);

$rand1 = rand(0, sizeof($drinks)-1);
$rand2 = rand(0, sizeof($drinks)-1);

echo "Isa lemmik jook on $drinks[$rand1], 
aga poeg joob jooki $drinks[$rand2].";

echo "<hr>";

echo "<ul>";
for ($i = 0; $i < sizeof($drinks); $i++)
{
    echo "<li>$drinks[$i] ";
    echo "- " . rand(2,7) . "€";
    echo "</li>";
}
echo "</ul>";

echo "<p>";

foreach ($drinks as $key => $val)
{
    $counter++;
    echo "$counter) Massiivi element nr indeksiga $key väärtus on $val<br>";
}
?>