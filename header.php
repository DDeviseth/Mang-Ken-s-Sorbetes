<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mang Ken Sorbetes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <header>
        <h1>Mang Ken's Sorbetes</h1>
        <p class="greeting">
            <?php
            $hour = date("G");
            if ($hour < 12) {
                echo "Magandang umaga to our valued customer!";
            } else if ($hour < 18) {
                echo "Magandang hapon to our valued customer!";
            } else {
                echo "Good evening to our valued customer!";
            }
            ?>
        </p>
    </header>
    <main>
