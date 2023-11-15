<?php 
$topping = filter_input(INPUT_POST, 'top' ,
        FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
if ($toppings !==NULL){
    $top1 = $toppings[0];
    $top2 = $toppings[1];
    $top3 = $toppings[2];
}
?>
<?php
$topping = filter_input(INPUT_POST, 'top' ,
FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
if ($toppings !==NULL){
foreach($toppings as $key => $value){
    echo $key. '=' . $value . '<br>';
}
}else{
    echo 'No toppings selected.';
}
?>