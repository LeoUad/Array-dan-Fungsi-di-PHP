<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mendeklarasikan & Menampilkan Array</title>
    <style>
        .tebal {
            font-weight: bold;
        }
        .merah{
            color: red;
            font-weight: bold;
        }
        .hijau{
            color: green;
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
echo "<span class='tebal'>Mendeklarasikan & Menampilkan Array</span><br><br>";
$arrBuah=array("Mangga","Apel","Pisang","Jeruk");
echo "<span class='tebal'>". $arrBuah[0]. "</span><br>";
echo "<span class='tebal'>". $arrBuah[3]. "</span><br><br>";

$arrWarna=array();
$arrWarna[]="Merah";
$arrWarna[]="Biru";
$arrWarna[]="Hijau";
$arrWarna[]="Putih";
echo "<span class='merah'>". $arrWarna[0]. "</span><br>";
echo "<span class='hijau'>". $arrWarna[2]. "</span><br><br>";
?>

</body>
</html>
    

