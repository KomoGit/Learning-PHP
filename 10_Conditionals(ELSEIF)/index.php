<?php 
    define("Title","Lesson 08 - Conditionals (IF)");
    $native_language = "de";    
?>

<html>
<head>
    <title><?=Title?></title>
<body>
    <?php 
        if($native_language == "de"){
            echo "Sie haben die Sprache Deutsch gewählt.";
        }elseif($native_language == "az"){
            echo "Siz Azərbaycan dilini seçmisiniz.";
        }else{
            echo "Error, the language could not be found. Setting to default English.";
        }    
    ?>
</body>
</head>
</html>