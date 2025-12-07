<?php
// Author: Kenaz Brian Yanez
// Section: WD-203
// Mang Ken's Sorbetes 
// Date: December 2025

declare(strict_types=1);                                         

$mangKenSorbetes = [                                             
    'Ube'          => ['price' => 40.00, 'stock' => 4],
    'Cheese'       => ['price' => 45.00, 'stock' => 8],
    'Mango'        => ['price' => 40.00, 'stock' => 15],
    'Buko'         => ['price' => 38.00, 'stock' => 30],
    'Choco'        => ['price' => 45.00, 'stock' => 5],
    'Strawberry'   => ['price' => 40.00, 'stock' => 12],
    'Dinuguan'     => ['price' => 40.00, 'stock' => 3],
    'Avocado'      => ['price' => 48.00, 'stock' => 18],   
    'Macapuno'     => ['price' => 42.00, 'stock' => 7],    
    'Double Dutch'   => ['price' => 50.00, 'stock' => 20],   
    'Langka'       => ['price' => 42.00, 'stock' => 14]    
];

$tax_rate = 12;                                                  

function get_reorder_message(int $stock_level): string
{
    return ($stock_level < 10) ? 'Yes' : 'No';
}

function get_total_value(int $quantity, float $price): string
{
    return number_format($price * $quantity, 2);
}

function get_tax_due(int $quantity, float $price, int $tax = 0): string
{
    global $tax_rate;
    $tax = $tax === 0 ? $tax_rate : $tax;
    return number_format(($price * $quantity) * ($tax / 100), 2);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mang Ken Sorbetes - Stock Control</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="hero">
        <img src="images/hero.jpg" alt="Mang Ken's Sorbetes Cart">
    </div>
    <?php include 'includes/header.php'; ?>
    <h3 style="text-align: center; font-style: italic; margin: 0.5em auto 2em; color: #a5745dff;">
        STOCKS
    </h3>
    
    <main>
        <table>
            <caption>Available Flavors & Inventory</caption>
            <tr>
                <th>Flavor</th>
                <th>Stock Level</th>
                <th>Reorder?</th>
                <th>Total Value</th>
                <th>Tax Due (12% VAT)</th>
            </tr>

            <?php foreach ($mangKenSorbetes as $product_name => $data) { ?>   
                <tr>
                    <td><?= htmlspecialchars($product_name) ?></td>         
                    <td style="text-align:center;"><?= $data['stock'] ?></td> 
                    <td style="text-align:center; font-weight:bold; color:#ff6b6b;">
                        <?= get_reorder_message($data['stock']) ?>       
                    </td>
                    <td style="text-align:right;">₱<?= get_total_value($data['stock'], $data['price']) ?></td> 
                    <td style="text-align:right;">₱<?= get_tax_due($data['stock'], $data['price'], $tax_rate) ?></td> 
                </tr>
            <?php } ?> 
        </table>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>