<?php

#отряды - можно написать класс
$pehota1 = [
    'health' => 100,
    'armour' => 10,
    'damage' => 10,
];

$luchniki1 = [
    'health' => 100,
    'armour' => 10,
    'damage' => 10,
];

$konnica1 = [
    'health' => 100,
    'armour' => 10,
    'damage' => 10,
];

$pehota2 = [
    'health' => 100,
    'armour' => 10,
    'damage' => 10,
];

$luchniki2 = [
    'health' => 100,
    'armour' => 10,
    'damage' => 10,
];

$konnica2 = [
    'health' => 100,
    'armour' => 10,
    'damage' => 10,
];
# армии - можно через класс с наследованием

$army1 = [
    'name' => 'Aleksandr',
    'units' => [
        'pehota' => 200,
        'luchniki' => 200,
        'konnica' => 200,
    ]
];

$army2 = [
    'name' => 'Aleksandr',
    'units' => [
        'pehota' => 300,
        'luchniki' => 333,
        'konnica' => 333,
    ]
];

function dmgCnt($a, $p, $l, $k){
    $pehDmg = $a['units']['pehota']*$p['damage'];
    $luchDmg = $a['units']['luchniki']*$l['damage'];
    $konDmg = $a['units']['konnica']*$k['damage'];
echo $pehDmg ."<br>". $luchDmg."<br>". $konDmg."<br>";

return array(
    $pehDmg,
    $luchDmg,
    $konDmg,
);
}
$arr1 = dmgCnt($army1, $pehota1, $luchniki1, $konnica1);
$arr2 = dmgCnt($army2, $pehota2, $luchniki2, $konnica2);
echo "<pre> first ";  print_r($arr1); echo "</pre>";
echo "<br>";
echo "<pre> second ";  print_r($arr2); echo "</pre>";

print_r($arr1- $arr2);


