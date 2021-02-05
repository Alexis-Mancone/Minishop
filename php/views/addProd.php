<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>inscription</title>
  <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

<form action= "php/management/addProductDB.php">
  <div id="container" class="container">
    <h1>Add a product to sell</h1>
    <hr>

    <label class ="data" for="type"><b>Type</b></label>
    <input class ="inputData" type="text" placeholder="Type of product" name="type" id="type" required>
    <hr>

    <label class ="data" for="size"><b>Size</b></label>
    <input class ="inputData" type="text" placeholder="Size of the product" name="size" id="size" required>
    <hr>

    <label class ="data" for="color"><b>Color</b></label>
    <input class ="inputData" type="text" placeholder="The Color" name="color" id="color" required>
    <hr>

    <label class ="data" for="price"><b>Price</b></label>
    <input class ="inputData" type="text" placeholder="Fixed a Price" name="price" id="price" required>
    <hr>

    <label class ="data" for="desc"><b>Description</b></label>
    <input class ="inputData" type="text" placeholder="Description" name="desc" id="desc" required>
    <hr>

    <label class ="data" for="image"><b>Image</b></label>
    <input class ="inputData" type="text" placeholder="-Link" name="image" id="image" required>
    <hr>

    <?php 
    //If Error from the connexion.php, print the error 
    if (isset($_SESSION['error_message'])) {
    ?>
      <div class="error" ><?php echo $_SESSION['error_message']; ?></div>
    <?php
      unset($_SESSION['error_message']);
    }
    ?>
    
    <input type="submit" class="registerbtn" value = "Inscription">
    
    <p><br><a href="?p=admin"><- Return</a>.</p>
  </div>
</form>

</body>
</html>