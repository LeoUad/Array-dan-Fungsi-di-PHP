<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Seluruh Isi Array Dengan For Dan Foreach</title>
    <style>
        .tebal {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
echo "<span class='tebal'>Menampilkan Seluruh Isi Array Dengan For Dan Foreach</span><br><br>";
$arrWarna = array("Red","Orange","Yellow","Green","Blue","Purple");

echo "Menampilkan isi array dengan FOR: <br>";
for ($i = 0; $i < count($arrWarna); $i++){
    echo "Warna pelangi <font color=$arrWarna[$i]>" .$arrWarna[$i]. "</font><br>";
}

echo "<br>Menampilkan isi array dengan FOREACH: <br>";
foreach ($arrWarna as $warna){
    echo "Warna Pelangi <font color=$warna>". $warna . "</font><br>";
}
?>
    
</body>
</html>

