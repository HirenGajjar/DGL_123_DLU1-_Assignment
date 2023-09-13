<?php 
//Assingning new value to name and adding new element to favourites
$name      = 'Hiren';
$favorites = ['Chocolate', 'Toffee', 'Fudge','Oreo'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Echo Shorthand</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy is:
        <!-- Displaying 4th element of array -->
       <?= $favorites[3] ?>.</p>
  </body>
</html>