<?php 
    define("Title","Lesson 06 - Associative Arrays");
    $arr = array(
        "name" => "Edward Teach",
        "nickname" => "Blackbeard",
        "ship_name" => "Queen Anne's Revenge",
        "age" => 40
    );
?>

<html>
<head>
    <title><?=Title?></title>
<body>
    <br> <?= $arr["name"]?> 
    <br> <?= $arr["nickname"]?> </br>
    <br> <?= $arr["ship_name"]?> </br>
    <?= $arr["age"]?> 
</body>
</head>
</html>