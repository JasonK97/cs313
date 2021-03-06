<?php
    session_start();
    $_SESSION["pencil"] = "p";
    $_SESSION["ring"] = "r";
    $_SESSION["phaser"] = "ph";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="shop.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <title>Kent Emporium | Browse</title>
</head>

<body>
    <div class="header">
        <a href="browse.php" class="logo">Kent Emporium</a>
        <div class="header-right">
            <a class="active" href="browse.php">Home</a>
            <a href="cart.php">View Cart</a>
        </div>
    </div>

    <h1 id="main">Items for Purchase</h1>
    <form action="cart.php" method="POST">
        <!--used from w3Schools-->
        <div class="card">
            <img src="image-asset.jpeg" alt="A Really Nice Pencil" style="width:100%">
            <h1>A Really Nice Pencil</h1>
            <p class="price">$19.99</p>
            <p>Carved from the wood of the great big tree in the movie Avatar, this is a nice pencil.</p>
            <p><button name="Pencil" >Add to Cart</button></p>
        </div>
        <br>
        <div class="card">
            <img src="oneRing.jpg" alt="The One Ring" style="width:100%">
            <h1>The One Ring</h1>
            <p class="price">$499.99</p>
            <p>Forged in the great Mount Doom, this ring is all powerful and provides the ability to go invisible. Previously owned by the Dark Lord himself, Sauron!</p>
            <p><button name="Ring">Add to Cart</button></p>
        </div>
        <br>
        <div class="card">
            <img src="stunPhaser.jpg" alt="Set Phasers to Stun" style="width:100%">
            <h1>Stun Phaser</h1>
            <p class="price">$34.99</p>
            <p>Created for use of officers of Starfleet, we finally got the ability to disable the kill function and sell to the general public.</p>
            <p><button name="Phaser">Add to Cart</button></p>
        </div>
        <br>
    </form>
    <?php
        if(isset($_POST['Pencil'])) {
            $_SESSION["pencil"] = "Pencil";
        } else if(isset($_POST['Ring'])) {
            $_SESSION["ring"] = "Ring";
        } else if(isset($_POST['Phaser'])) {
            $_SESSION["phaser"] = "Phaser";
        }
    ?>
</body>

</html>