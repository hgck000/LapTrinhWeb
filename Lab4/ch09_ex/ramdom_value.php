$number = 0;
$places = 5;
for($i =0; $i <$places; $i++){
    $number += mt_rand(0,9);
    $number /=10;
}
echo $number;