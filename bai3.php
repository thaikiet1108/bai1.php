<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = ["Italy"=> "Rome", 
            "Luxembourg"=> "Luxembourg",
            "Belgium"=> "Brussels", 
            "Denmark"=> "Copenhagen",
            "Finland"=> "Helsinki", 
            "France"=> "Paris", 
            "Slovakia"=> "Bratislava", 
            "Slovenia"=> "Ljubljana", 
            "Germany"=> "Berlin", 
            "Greece"=> "Athens", 
            "Ireland"=> "Dublin", 
            "Netherlands"=>"Amsterdam", 
            "Austria"=> "Vienna", 
            "Poland"=> "Warsaw"] ;
            foreach ($arr as $quocgia => $thudo){
                echo "Thu do cua $quocgia la $thudo <br>";
            }
    ?>
</body>
</html>
