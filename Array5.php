<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencetak Struktur Array</title>
    <style>
        .tebal {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
echo "<span class='tebal'>Mencetak Struktur Array</span><br>";
$arrWarna=array("Blue","Black","Red","Yellow","Green</font>");
$arrNilai=array("Fulan"=>80, "Fulin"=>90, "Fulun"=>75, "Falan"=>85);
echo "<pre>";
print_r($arrWarna);
echo "<br>";
print_r($arrNilai);
echo "</pre>";
?>
    
</body>
</html>
