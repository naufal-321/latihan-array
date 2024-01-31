<?php

$huruf = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "X", "Y", "Z",];

$mapel = ["Agama Islam", "PPKN", "B.Indonesia", "Matematika", "Bahasa Inggris", "Kejuruan RPL"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bulat{
        height: 50px;
        width: 50px;
        margin: 5px;
        text-align: center;
        line-height: 50px;
            background: red;
            color: white;
            float: left;
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }

        .tumpul{
            height: 100px;
        width: 100px;
        margin: 5px;
        text-align: center;
        line-height: 100px;
            background: orange;
            color: white;
            float: left;
            border-radius: 10% 0 10% 0;
        }
    </style>
</head>
<body>
    <?php for($i= 0; $i <count($huruf); $i++): ?>
    <div class="bulat"><?= $huruf[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>


    <?php foreach($mapel as $data): ?>
    <div class="tumpul"><?= $data; ?></div>
    <?php endforeach; ?>
</body>
</html>