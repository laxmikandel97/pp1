<?php
/**Name: laxmi kandel
 * Date: 01/06/2020
 * URL:http://laxmikandel.greenriverdev.com/IT328/pp1/index.php
 * Discription: Pair Program 1**/
ini_set("display_errors", 1);
error_reporting(E_ALL);
$number = array(7, 9, 8, 9, 8, 8, 6);
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
<h1>Pair Program 1</h1>
<?php
printArr($number);
$storeMax = largest($number);
echo "The largest number is: $storeMax<br>";
echo "The unique numbers are: ";
$uniqueNumbers = removeDups($number);
foreach ($uniqueNumbers as $num) {
    echo $num . "\n";
}
echo "<br>";
$arrayCount = distribution($number);
echo "Distribution of array: ";
print_r($arrayCount);
?>
</body>
</html>