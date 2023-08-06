<?php 
    define("Title","Lesson 08 - Conditionals (IF)");
    $var1 = 30;
    $var2 = 30;
    $var3 = false;
    if($var1 < $var2){
        $var3 = true;
    }
?>

<html>
<head>
    <title><?=Title?></title>
<body>
    <?php 
        if($var3){
            echo("This statement is correct");
        }else{
            echo("This statement is incorrect");
        }
    ?>
</body>
</head>
</html>