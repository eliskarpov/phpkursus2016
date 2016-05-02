<?php

function getname($name)
{
    global $names;
$names = "koer    123
kass    12345
kukk    77777
ilves    976340";
    
    $rows = explode("\n", $names);
    //print_r($rows);
    
    foreach($rows as $key => $val)
    {
        //$surenames[$val] = $key;
        $temp = explode("    ", $val);
        $surename[$temp[0]] = $temp[1];
    }
    print_r($surename);
    print_r(array_keys($surename, "koer 123"));
    
    return $count;
}

getname("koer");

?>