<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$chu = "";
if (isset($_POST["a"])) {
    $A = $_POST["a"];
    switch ($A) {
        case 0:
            $chu = "Không";
            break;
        case 1:
            $chu = "Một";
            break;
        case 2:
            $chu = "Hai";
            break;
        case 3:
            $chu = "Ba";
            break;
        case 4:
            $chu = "Bốn";
            break;
        case 5:
            $chu = "Năm";
            break;
        case 6:
            $chu = "Sáu";
            break;
        case 7:
            $chu = "Bảy";
            break;
        case 8:
            $chu = "Tám";
            break;
        case 9:
            $chu = "Chín";
            break;
        default:
            $chu = "Không hợp lệ!";
    }
}
?>

<form action="" method="post">
    <label for="textfield">Chọn số từ 1 đến 9: </label>
    <input type="text" name="a"><br>
    <input type="submit" value="Chuyển sang chữ"></br>
    <label for="textfield2">Bằng chữ: </label>
    <input type="text" name="" value="<?php if (isset($chu)) echo $chu; ?>">
</form>

</body>
</html>