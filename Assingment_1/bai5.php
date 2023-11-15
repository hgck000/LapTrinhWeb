<?php

function phuongtrinhbac2($a, $b, $c)
{
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                return "Phương trình vô số nghiệm";
            } else {
                return "Phương trình vô nghiệm";
            }
        } else {
            $x = -$c / $b;
            return "Phương trình có một nghiệm x = $x";
        }
    } else {
        $delta = $b * $b - 4 * $a * $c;

        if ($delta < 0) {
            return "Phương trình vô nghiệm";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "Phương trình có nghiệm kép x = $x";
        } else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Phương trình có hai nghiệm phân biệt: x1 = $x1 và x2 = $x2";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    $nghiem = phuongtrinhbac2($a, $b, $c);
}
?>

<form action="" method="post">
    <label for="a">Hệ số a</label>
    <input type="text" name="a"><label>X2</label></br>
    <label for="b">Hệ số b</label>
    <input type="text" name="b"><label>X</label></br>
    <label for="c">Hệ số c</label>
    <input type="text" name="c"><label>= 0</label></br>
    <input type="submit" value="Tính toán">
</form>

<?php if(isset($nghiem)): ?>
    <label for="nghiem">Nghiệm</label>
    <input style="width:750px;" type="text" name="nghiem" id="nghiem" value="<?php echo $nghiem; ?>" readonly>
<?php endif; ?>

</body>
</html>