<?php
$toppings = filter_input(INPUT_POST, 'top',
    FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);
if($toppings !== NULL){
    foreach ($toppings as $key => $value){
        echo $key. ' = ' . $value . '<br>';
    }
}else{
    echo 'No toppings selected.';
}

?>
<select name="top[]" size="3" multiple>
<option value="pep" selected>Pepperoni</option>
<option value="olv">Olives</option>
</select>