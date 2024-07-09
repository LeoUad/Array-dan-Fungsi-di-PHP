<?php
$arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
echo "<b>Menampilkan isi array asosiatif dengan foreach: </b><br><br>";
foreach($arrNilai as $nama=>$nilai){
    echo "Nilai $nama=$nilai<br>";
}

reset($arrNilai);
echo "<b><br>Menampilka isi array asosiatif dengan WHILE dan LIST:</b><br>";
while(list($nama,$nilai)=each($arrNilai)){
    echo "Nilai $nama=$nilai<br>";
}
?>