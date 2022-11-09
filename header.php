<header class="header">
<?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="#" class="logo"><i class="fa-duotone fa-wine-bottle"></i>Botolku.</a>

      <nav class="navbar">
        <a class="active" href="index.php">home</a>
        <a href="products.php">menu</a>
        <a href="">about</a>

        <a href="cart.php">order</a>
      </nav>

      <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart.php" class="fas fa-shopping-cart"><span href="cart.php" class="cart"><span><?php echo $row_count; ?></span> </span></a>
        
      </div>
    </>


     

      <div id="menu-btn" class="fas fa-bars"></div>



</header>