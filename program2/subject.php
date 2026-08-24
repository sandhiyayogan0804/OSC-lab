<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>
<body>

<h2>⚡ Electricity Bill Calculator</h2>

<form method="POST" action="">
    Enter Units Consumed:
    <input type="number" name="units" min="0" step="0.01" required>
    <input type="submit" name="submit" value="Calculate Bill">
</form>

<?php
if (isset($_POST['submit'])) {
    $units = $_POST['units'];
    $bill = 0;

    // Validate input
    if (is_numeric($units) && $units >= 0) {
        // Calculate bill based on units
        if ($units <= 100) {
            $bill = $units * 5;
            $rate = "₹5 per unit";
        } elseif ($units <= 200) {
            $bill = (100 * 5) + (($units - 100) * 7);
            $rate = "₹5 for first 100, ₹7 for next 100";
        } elseif ($units <= 300) {
            $bill = (100 * 5) + (100 * 7) + (($units - 200) * 10);
            $rate = "₹5 for first 100, ₹7 for next 100, ₹10 for next 100";
        } else {
            $bill = (100 * 5) + (100 * 7) + (100 * 10) + (($units - 300) * 15);
            $rate = "₹5 for first 100, ₹7 for next 100, ₹10 for next 100, ₹15 for above 300";
        }

        // Display results
        echo "<hr>";
        echo "<h3>📊 Bill Details:</h3>";
        echo "Units Consumed: <strong>" . $units . "</strong> units<br>";
        echo "Rate Applied: " . $rate . "<br>";
        echo "Total Bill: <strong>₹" . number_format($bill, 2) . "</strong>";
    } else {
        echo "<p style='color:red;'>❌ Please enter a valid positive number!</p>";
    }
}
?>

</body>
</html>