<?php
function inc($i){
    echo $i = $i + 1; //i++

}
$i = 10;
inc(10);

function add(&$str){
    $str =$str."Call by Rederence";
    echo $str;
}
$str = "This is";
add($str);
