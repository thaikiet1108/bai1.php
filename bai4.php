<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .chessboard {
            width: 640px;
            height: 640px;
            border: 2px solid #000;
            display: flex;
            flex-wrap: wrap;
        }
        .square {
            width: 80px;
            height: 80px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
<div class="chessboard">
    <?php
    for ($row = 0; $row < 8; $row++) {
        for ($col = 0; $col < 8; $col++) {
            $class = ($row + $col) % 2 == 0 ? "white" : "black";
            echo "<div class='square $class'></div>";
        }
    }
    ?>
</div>
</body>
</html>
