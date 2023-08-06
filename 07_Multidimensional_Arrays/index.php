<?php 
    define("Title","Lesson 07 - Multidimensional Arrays");
    $pirates = array(
        array(
        "name" => "Edward Teach",
        "nickname" => "Blackbeard",
        "ship_name" => "Queen Anne's Revenge",
        "age" => 40
        ),
        array(
            "name" => "Edward Kenway",
            "nickname" => "nil",
            "ship_name" => "Jackdaw",
            "age" => 30
        )
            );
?>

<html>
<head>
    <title><?=Title?></title>
<body>
    <br> <?= $pirates[0]["name"]?> 
    <br> <?= $pirates[0]["nickname"]?> 
    <br> <?= $pirates[0]["ship_name"]?> </br>
    <br> <?= $pirates[1]["name"]?> 
    <br> <?= $pirates[1]["nickname"]?> 
    <br> <?= $pirates[1]["ship_name"]?> </br>
</body>
</head>
</html>