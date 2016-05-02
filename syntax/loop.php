<?php 

//numbritejada 100-ni
for($i = 0; $i <= 100; $i++)
 //lahutamine for($i = 0; $i <= 100; $i--)
{
        echo "$i ";
}    

//korrutustabel
echo "<table border=1>";
for ($i = 1; $i <= 10; $i++)
{
    echo "<tr>";
    
    for ($j = 1; $j <= 10; $j++)
    {
        echo "<td>$i,$j</td>";
    }
    
    echo "</tr>";
}
echo "</table>";

//mäng - leia O
$rand = rand(1, 444);
for($i = 0; $i < 444; $i++)
{
        echo "0 ";
        if ($i == $rand) 
        echo "O ";
}


?>