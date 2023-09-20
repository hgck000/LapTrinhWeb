<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label for="principal">Investment money Amount:</label>
        <input type="number" name="principal" id="principal">
        <label for="years">Number of Years:</label>
        <input type="number" name="years" id="years">
        <label for="interest">Yearly Interest Rate (%):</label>
        <input type="number" name="interest" id="interest">
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $principal = floatval($_POST['principal']);
        $years = intval($_POST['years']);
        $interest = floatval($_POST['interest']);

        if (empty($principal) || empty($years) || empty($interest)) {
            echo "Please enter valid values for all fields.";
        } else {
            $interestAmount = ($principal * $interest * $years) / 100;
            $totalAmount = $principal + $interestAmount;

            echo "Principal Amount: $" . number_format($principal, 2) . "<br>";
            echo "Number of Years: " . $years . "<br>";
            echo "Yearly Interest Rate: " . $interest . "%<br>";
            echo "Total Amount: $" . number_format($totalAmount, 2);
        }
    }
    ?>
</body>
</html>
