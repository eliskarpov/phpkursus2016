<?php 
#Elis Karpov, PHP kursus 2016, 08.05.2016
#yl0205

$movies[1][1] = 'Avatar';
$movies[1][2] = 'Batman';
$movies[1][3] = 'Titanic';
$movies[2][1] = 'Matrix';
$movies[2][2] = 'Divergent';
$movies[2][3] = 'Avengers';
$movies[3][1] = 'Sügisball';
$movies[3][2] = 'Seenelkäik';
$movies[3][3] = 'Malev';

for ($i = 1; $i < 4; $i++) 
{
  for ($j = 1; $j < 4; $j++) 
    {
    echo $movies[$i][$j]."<br>";
    }
}
?>
