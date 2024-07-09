<?php
$arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
echo "<b>Array sebelum di urutkan";
echo "<pre>";
print_r($arrNilai);
echo "</pre";

ksort($arrNilai);
reset($arrNilai);
echo "<b>Nilai setelah diurutkan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);
reset($arrNilai);
echo "<b>Nilai setelah diurutkan dengan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";
?>