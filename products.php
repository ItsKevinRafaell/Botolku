<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<header class="header">
<?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="#" class="logo"><i class="fa-duotone fa-wine-bottle"></i>Botolku.</a>

      <nav class="navbar">
        <a  href="index.php">home</a>
        <a  class="active" href="products.php">menu</a>

        <a href="cart.php">order</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart.php" class="fas fa-shopping-cart"><span href="cart.php" class="cart"><span><?php echo $row_count; ?></span> </span></a>
        
      </div>
    </>


     

      <div id="menu-btn" class="fas fa-bars"></div>



</header>

<div class="container">

<section class="products">

   <h1 class="heading">Produk Kami</h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">Rp <?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="Tambahkan" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<section class="footer">
      <div class="box-container">
        <div class="box">
          <h3>Lokasi</h3>
          <a href="#">Balikpapan</a>
          <a href="#">Samarinda</a>
          <a href="#">Samboja</a>
          <a href="#">Grogot</a>
          <a href="#">Pasir Penajam Utara</a>
        </div>

        <div class="box">
          <h3>Link</h3>
          <a href="#home">home</a>
          <a href="#menu">menu</a>
          <a href="#about">about</a>
          <a href="#order">order</a>
        </div>

        <div class="box">
          <h3>Kontak</h3>
          <a href="#">+123-456-7890</a>
          <a href="#">+111-222-3333</a>
          <a href="#">botolku@service.com</a>
          <a href="#">botolku@cs.service.com</a>
          <a href="#">Balikpapan, Kalimantan Timur - 11111</a>
        </div>

      <div class="credit">copyright @2022 by <span>Botolku.</span></div> </section>
<!-- custom js file link  -->
<script src="js/js.js"></script>

</body>
</html>