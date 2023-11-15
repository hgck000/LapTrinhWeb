$total = 0;
$count = 0;
while ($count<100){
    $number = mt_rand(0,100);
    $total+= $number;
    $count++;
} 
$average = $total
echo 'The average is: ' . $average;
