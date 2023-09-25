<?php
echo 'Hello vlog welcome to my guys';
$value1 = 10;
$value2 = 50;

$sum = $value1 + $value2;

echo '<br>';
echo '<p class="text1">The sum of '.$value1.' and '.$value2.' is '.$sum;

if($sum < 10) {
    echo 'The echo is less than 10';
}
else{
    echo 'The echo is more than 10';
}

for($i = 0; $i <= $sum; $i++){
    echo '<br>' .$i;
}
?>