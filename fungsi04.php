<?php
function tambah_string($str){
    $str=$str. ", Yogyakarta";
   return $str;
}

$string="<b>Universitas Ahmad Dahlan</b>";
echo "\$string = $string<br>";
echo tambah_string($string). "<br>";
echo "\$string = $string<br>";
?>