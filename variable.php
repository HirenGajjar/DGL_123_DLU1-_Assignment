<?php
$name = "Hiren";
$price = 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title> <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Creating Variables -->
    <h1>The candy Store</h1>
    <h2>Welcome 
        <?PHP 
        echo $name;
        ?>
    </h2>
    <p>
        The cost of your candy is
        <?PHP echo $price;?> per pack.
    </p>
</body>
</html>