<?php
    $numChairs = $_POST["numChairs"];
    $numNapkins = $_POST["numNapkins"];
    $numYeezys = $_POST["numYeezys"];
    echo '<html><head><title>Invoice</title><link rel="stylesheet" href="style.css"></head>';
    echo '<body>';
    echo '<h1>Thank you for shopping at The Store!</h1>';
    echo '<h2><em>It is the store</em>&#8482;</h2>';
    echo '<p>Your password was "' . $_POST["password"] . '". pwned.</p>';
    echo '<table class="centerTable border yellow"><thead><th class="border" colspan="4">Invoice</th></thead>';
    echo '<tbody><tr><th class="border"></th><th class="border">Quantity</th><th class="border">Unit Price</th><th class="border">Subtotal</th></tr>';
    echo '<tr><th class="border">Chair</th><td class="blue border">' . $numChairs . '</td><td class="blue border">$200</td><td class="blue border">$' . 200*$numChairs . '</td></tr>';
    echo '<tr><th class="border">Napkin</th><td class="blue border">' . $numNapkins . '</td><td class="blue border">$300</td><td class="blue border">$' . 300*$numNapkins . '</td></tr>';
    echo '<tr><th class="border">Yeezys</th><td class="blue border">' . $numYeezys . '</td><td class="blue border">$8</td><td class="blue border">$' . 8*$numYeezys . '</td></tr>';
    switch ($_POST["shipping"]) {
        case '7-Day': 
            $shipping_cost = 0;
            break;
        case '3-Day':
            $shipping_cost = 5;
            break;
        case 'Overnight':
            $shipping_cost = 50;
            break;
    };
    echo '<tr><th class="border">Shipping</th><td colspan="2" class="blue border">' . $_POST["shipping"] . '</td><td class="blue border">$' . $shipping_cost . '</td></tr>';
    echo '<tr><th colspan="3" class="border">Total Cost</th><td class="border"><b>$' . ((200*$numChairs)+(300*$numNapkins)+(8*$numYeezys)+$shipping_cost) . '</b></td></tr>';
    echo '</tbody></table>';
    echo '</body></html>';
?>