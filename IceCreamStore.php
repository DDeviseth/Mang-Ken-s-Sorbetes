<?php

$shopname = "Mang Ken's Sorbetes";   // name ng tindahan
$nameko = "Brian";                  
$nameko = "Kenaz";                

$presyo_per_scoop = 40;           
$bilang_ng_scoop = 4;              
$may_wafer = true;                 //wafer cone
$discount = "10";                  // iscount 

// computation
$total = $presyo_per_scoop * $bilang_ng_scoop;
if($may_wafer){
    $total = $total + 20;          //extra waffer
}

// type juggling 
$total = $total - $discount;       

// flavors namin for todays video
$flavor_list = [
    "Ube" => 40,
    "Cheese" => 45,
    "Mango" => 40,
    "Mais con Yelo" => 42,
    "Buko" => 38,
    "Choco" => 45,
    "Strawberry" => 40,
    "Dinuguan" => 40
];

?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $shopname; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">
    <h1>Hi <?= $nameko ?>! Welcome po!</h1>
    <p>Kay Mang Ken Sorbetes tayo!</p>

    <h2>Flavors namin today:</h2>

    <table>
        <tr>
            <th>Flavor</th>
            <th>Price</th>
        </tr>
        <?php
        foreach($flavor_list as $flavor => $price){
            echo "<tr>";
            echo "<td>$flavor</td>";
            echo "<td>₱$price</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <div class="bayad">
        <p>Order mo: <?= $bilang_ng_scoop ?> scoops 
            <?php if($may_wafer) echo "may wafer +20"; ?>
        </p>
        <p class="big">Bayad: ₱<?= $total ?> na lang!</p>
        <small>may discount na po ₱<?= $discount ?></small>
    </div>

    <p class="last">Salamat po <?= $nameko ?>! balik ka ulit dear</p>
</div>

</body>
</html>