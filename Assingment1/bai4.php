
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['button'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $tong = 0;
    $tich = 1;
    $tong1 = 0;
    $tong2 = 0;
    for ($i = $a; $i <= $b; $i++) {
        $tong += $i;
        $tich *= $i;
        if ($i % 2 == 0) {
            $tong2 += $i; 
        } else {
            $tong1 += $i; 
        }
    }
}
?>
    <form action="" method="post">
        <label for="">Số A:</label> <input type="text" name="a"> <label for="">Số B:</label> <input type="text" name="b"><br>
        <label for="">Tổng của dãy số:</label> <input type="text" name="tổng" value="<?php if(isset($tong)) echo $tong; ?>"><br>
        <label for="">Tích của dãy số:</label> <input type="text" name="tong" value="<?php if(isset($tich)) echo $tich; ?>"><br>
        <label for="">Tổng của các số lẻ:</label> <input type="text" name="tong" value="<?php if(isset($tong1)) echo $tong1; ?>"><br>
        <label for="">Tổng của các số chẵn:</label> <input type="text" name="tong" value="<?php if(isset($tong2)) echo $tong2; ?>"><br>
        <input type="submit" name="button" id="button" value="Tính toán" />
    </form>
</body>
</html>