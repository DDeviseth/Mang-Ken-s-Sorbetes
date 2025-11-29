<?php
$customer_name = "Dear"; //sir pang foreigner base and prices q dito HADHADHAHA (Cold Stone price)
$scoops = 8;
$with_wafer = true;
$with_sprinkles = true;

$flavors = [
    "Ube" => 40,"Cheese" => 45, "Mango" => 40,
    "Buko"=> 38,"Choco" => 45, "Strawberry" =>  40,
    "Dinuguan"=> 40
];

include "header.php";
?>

<h2>Our 7 Classic Flavors</h2>
<table>
    <tr><th colspan="3">Choose your flavor</th></tr>
    
    <tr>
        <td>
            <img src="images/ube.jpg" class="flavor-img">
            <div class="flavor-name">Ube</div>
            <div class="price">₱<?= $flavors["Ube"] ?></div>
        </td>
        <td>
            <img src="images/cheese.jpg" class="flavor-img">
            <div class="flavor-name">Cheese</div>
            <div class="price">₱<?= $flavors["Cheese"] ?></div>
        </td>
        <td>
            <img src="images/mango.jpg" class="flavor-img">
            <div class="flavor-name">Mango</div>
            <div class="price">₱<?= $flavors["Mango"] ?></div>
        </td>
    </tr>
    
    <tr>
        <td>
            <img src="images/buko.jpg" class="flavor-img">
            <div class="flavor-name">Buko</div>
            <div class="price">₱<?= $flavors["Buko"] ?></div>
        </td>
        <td>
            <img src="images/choco.jpg" class="flavor-img">
            <div class="flavor-name">Choco</div>
            <div class="price">₱<?= $flavors["Choco"] ?></div>
        </td>
        <td>
            <img src="images/strawberry.jpg" class="flavor-img">
            <div class="flavor-name">Strawberry</div>
            <div class="price">₱<?= $flavors["Strawberry"] ?></div>
        </td>
    </tr>
    
    <tr>
        <td colspan="3">
            <img src="images/dinuguan.jpg" class="flavor-img">
            <div class="flavor-name">Dinuguan (Secret Flavor!)</div>
            <div class="price">₱<?= $flavors["Dinuguan"] ?></div>
        </td>
    </tr>
</table>

<div class="bayad">
    <p>Hi <?= $customer_name ?>! Order mo:</p>
    <p><strong><?= $scoops ?> scoops</strong>
        <?= $with_wafer ? " + wafer cone" : "" ?>
        <?= $with_sprinkles ? " + sprinkles" : "" ?>
    </p>

    <?php
    $total = 40 * $scoops;
    if($with_wafer) $total += 20;
    if($with_sprinkles) $total += 15;

    if($scoops >= 10) {
        $discount = 50;
    } elseif($scoops >= 5) {
        $discount = 30;
    } else {
        $discount = 0;
    }
    $total -= $discount;
    ?>

    <p class="big">Total: ₱<?= $total ?>
        <?php if($discount > 0) echo " (Theres a discount of ₱$discount)" ?>
    </p>
</div>

<div class="bulk">
    <strong>Bulk Prices :</strong><br><br>
    <?php 
    for($i = 1; $i <= 10; $i++) {
        $price = 40 * $i;
        if($i >= 5) $price -= 30;
        echo "$i scoops = ₱$price <br>";
    }
    ?>
</div>

<div class="stock">
    <strong>Stock ng Dinuguan:</strong><br><br>
    <?php
    $stock = 15;
    while($stock > 0){
        echo "May $stock pa... ";
        $stock -= 5;
    }
    echo "Sold out!";
    ?>
</div>

<?php include "footer.php"; ?>
