<?php

@include 'config.php';
@include 'rupiah.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $no_wa = $_POST['noWa'];
   $method = $_POST['method'];
   $alamat = $_POST['alamat'];
   $pesan = $_POST['pesan'];


   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $price_totall = rupiah($price_total);


   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, no_wa, method, alamat, pesan,  total_products, total_price) VALUES('$name','$no_wa','$method','$alamat','$pesan','$total_products','$price_total')") or die('query failed');

     
   echo "<script type='text/javascript'> window.location = 'https://api.whatsapp.com/send?phone=6281934597703&text=%20Form%20Pembelian%20Botolku.%0a%20Terimakasih%20Telah%20Melakukan%20Pemesanan,%20Berikut%20Adalah%20Rinican%20Pesanan%20Anda%20%0a%20-------------------------------%20%0a%20Nama%20:%20.$name.,%20%0a%20Nomor%20Whatsapp%20:%20$no_wa,%20%0a%20Pembayaran%20:%20$method,%20%0a%20Alamat%20:%20$alamat,%20%0a%20Catatan%20Kurir%20:%20$pesan,%0a%20Total%20Produk%20:%20$total_product,%0a%20Harga%20Total:%20$price_totall,00%0a%20----------------------------..%0a%20Silahkan%20Tunggu%20Balasan%20Dari%20Admin,Terimakasih'; </script>";
   
    mysqli_query($conn, "DELETE FROM `cart`");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chekout Belanjaan</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/css.css">

</head>
<body>

<header class="header">
<?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="#" class="logo"><i class="fa-duotone fa-wine-bottle"></i>Botolku.</a>

      <nav class="navbar">
        <a  href="index.php">home</a>
        <a href="products.php">menu</a>

        <a class="active" href="cart.php">order</a>
      </nav>

      <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart.php" class="fas fa-shopping-cart"><span href="cart.php" class="cart"><span><?php echo $row_count; ?></span> </span></a>
        
      </div>
    </>


     

      <div id="menu-btn" class="fas fa-bars"></div>



</header>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">Selesaikan Pembelian Anda</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price=($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> Harga Total : <?= rupiah($grand_total); ?>,00</span>
   </div>

      <div class="flex">
         <div class="inputBox">
            <span>Nama</span>
            <input type="text" placeholder="Masukkan Nama " name="name" >
         </div>
         <div class="inputBox">
            <span>Nomor Whatsapp</span>
            <input type="number" placeholder="Masukan Nomor Whatsapp" name="noWa" >
         </div>
         <div class="inputBox">
            <span>Metode Pembayaran</span>
            <select name="method">
               <option value="Cash On Delivery" selected>Cash On Delivery</option>
               <option value="Transfer Bank - Mandiri">Transfer Bank - Mandiri</option>
            </select>
         </div>
         <div class="inputBox">
            <span>Alamat</span>
            <input type="text" placeholder="Masukkan Alamat Detail" name="alamat" >
         </div>
         <div class="inputBox">
            <span>Catatan</span>
            <input type="text" placeholder="Pesan Untuk Kurir" name="pesan" >
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btn">
   </form>

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

      <div class="credit">copyright @2022 by <span>Botolku.</span></div>
    </section>

<!-- custom js file link  -->
<script src="js/js.js"></script>
   
</body>
</html>