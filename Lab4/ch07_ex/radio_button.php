   <?php
   $card_type = filter_input(INPUT_POST, 'card_type');
   if ($card_type == NULL){
    $card_type = 'unknown';
   }
   ?>

    <input type="radio" name="card_type" value="visa" checked>
    Visa<br>
    <input type="radio" name="card_type" value="mastercard"> MasterCard<br>
    <input type="radio" name="card_type" value="discover"> Discover