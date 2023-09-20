<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai2</title>
</head>
<body>
<?php 
if (isset($_POST["a"]) && isset($_POST["b"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    
    if ($a == 0) {
        if ($b == 0) {
            $nghiem = "Phương trình có vô số nghiệm";
        } else {
            $nghiem = "Phương trình vô nghiệm";
        }
    } else {
        $x = -($b / $a);
        $x = round($x, 2);
        $nghiem = "x = $x";
    }
} 
?>

<form action="bai2.php" method="post">
    <label for="textfield">Số a</label>
    <input type="text" name="a"><label>X</label><br>
    <label for="textfield1">Số b</label>
    <input type="text" name="b"><label>= 0</label><br>
    <label for="textfield2">Nghiệm</label>
    <input type="text" name="nghiem" id="textfield2" value="<?php if(isset($nghiem)) echo $nghiem; ?>">
    <input type="submit" value="Kết quả">
</form>

</body>
</html>