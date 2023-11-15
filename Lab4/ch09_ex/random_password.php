$password_length = 8;
$symbols = '~!@#$%^&*()-_=+[]{};:,.<>?';
$symbol_count  = strlen($symbols);
$index = mt_rand(0, $symbol_count - 1);
$password = substr($symbols,$index , 1);
$password .= chr(mt_rand(48, 57));
$password .= chr(mt_rand(65 , 90));
while (strlen($password)< $password_length){
$password .= chr(mt_rand(97,122));
}
$password = str_shuffle($password);
echo $password;