<?php
    // keyword function_name (kun, oy, yil)
    function getNowDate() {
        return date('d.m.Y');
        
    }
    echo getNowDate();
    echo '<br>';
    // Get time
    function getNowTime() {
        return date('H:i:s');
        //return date(soat:daqiqa:aoniya)
    }
    echo getNowTime();
    echo '<br>';
    function ad($a, $b, $c){
        echo $a+$b*$c;
    }
    ad(8, 6, 2);










?>