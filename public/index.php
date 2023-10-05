<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title>Music</title>
</head>
<body>
<header>

<?php
include('../views/menu.php');
?>
</header>



</style>
<?php




for ($i = 0; $i < 10; $i++) {
    include('../views/data.php');
    foreach ($dataLibrary as $musicItem) {
        echo $musicItem['title'] . "<br>";

    }
}

for ($i = 0; $i < 10; $i++) {
    include('../views/card.php');
    foreach ($dataLibrary as $musicItem) {

    }
}






?>
</body>
</html>


