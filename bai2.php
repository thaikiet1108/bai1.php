<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");
    for( $i = 0; $i < count($arr); $i++ ){
        echo $arr[$i];
        if($i<count($arr)-1){
            echo " , ";
        }
    }
    echo "<hr>";

    sort($arr);
    echo "<ul>";
    foreach ($arr as $y) {
        echo "<li>$y</li>";
    }
    echo"</ul>";

    echo "<hr>";
    array_push($arr,"Los Angeles", "Calcutta", "Osaka", "Beijing");

    ?>
</body>
</html>
