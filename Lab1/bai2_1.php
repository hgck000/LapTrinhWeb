<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for="name">Product Name:</label>
        <input type="text" name="name" id="name">
        <label for="originalPrice">Original Price:</label>
        <input type="number" name="originalPrice" id="originalPrice">
        <label for="discount">Discount (%):</label>
        <input type="number" name="discount" id="discount">
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $originalPrice = floatval($_POST['originalPrice']);
        $discount = floatval($_POST['discount']);

        if (empty($originalPrice) || empty($discount)) {
            echo "Please enter valid numbers.";
        } else {
            $discountAmount = $originalPrice * ($discount / 100);
            $discountedPrice = $originalPrice - $discountAmount;
            echo "Discounted Price: $" . number_format($discountedPrice, 2);
        }
    }
    ?>
</body>
</html>