<?php
echo pow(2, 3); // lũy thừa
echo "<br>";
echo rand(1, 100); //random
echo "<br>";
echo sqrt(9);
echo "<br>";
echo ceil(4.5); // làm tròn
echo "<br>";
echo floor (4.6);
echo "<br>";
echo round(4.5);
echo "<br>";

$list = [2,6,8,9,5,7,3];
echo "Max= ".max($list);
echo "<br>";
echo "Min= ".min($list);
echo "<br>";
echo sort($list);
foreach($list as $item){
    echo $item. " ";
}
echo "<br>";
print_r($list);
echo "<br>";

$string = "Aptech Ho Chi Minh";
echo strlen($string);
echo "<br>";
echo strtoupper($string);
echo "<br>";
echo strtolower($string);
?>