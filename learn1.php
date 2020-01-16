<?php
    echo 'Hello World!';
    $nt = '2';
    echo '<br>';
    $abs = 'Salom';
    var_dump($abs);
    $array= [
        'salom',
        '123',
        'array'=>[
            9,
            8
        ]
    ];
    var_dump($array);

    //binary if (shart operatori)
    $abd = ($nt <= 2 ) ? 'we' : 'ew';
    echo '<br>';
    var_dump($abd);
    echo $a =8;
    $you = 'Abror';
    var_dump($you);
/*
and -- &&
or -- ||
not -- !
!= -- teng emas
=== -- tipi va qiymati boyicha soliwtiradi
*/

//foreach loop example, bu siql faqat massiv uchun yaxwi 
$arr = [1, 3, 5, 6, 2];
foreach($arr as $index => $value){
    echo $index ."=>".$value;
    echo '<br>';
}


?>