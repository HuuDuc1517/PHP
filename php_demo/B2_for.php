<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <?php
    $a = array(1,2,5,9,7);
        
        for($i=0; $i < 5; $i++){
            echo $a[$i]. " ";
        }

        foreach($a as $aItem){
            echo $aItem. " ";
        }

        $b = array ("firtname" =>"Join", "lastname"=>"Marry");
        foreach($b as $ar){
            echo $ar." ";
        }
    ?>


























</body>
</html>