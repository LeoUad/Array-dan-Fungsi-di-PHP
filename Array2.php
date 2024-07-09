<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Assosiatif(indeks selain angka)</title>
    <style>
        .tebal {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
echo "<span class='tebal'>Array assosiatif(indeks selain angka)</span><br><br>";
$arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
echo "<span class='tebal'>" .$arrNilai['Fulan']. "<span><br>";
echo "<span class='tebal'>" .$arrNilai['Fulin']. "</span><br><br>";

$arrNilai=array();
$arrNilai['Amin']=80;
$arrNilai['Aman']=95;
$arrNilai['Amen']=77;
echo "<span class='tebal'>" . $arrNilai['Aman']. "</span><br>";
echo "<span class='tebal'>" . $arrNilai['Amin']. "<span><br><br>";
?>

</body>
</html>

