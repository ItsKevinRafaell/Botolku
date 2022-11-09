<?php

@include 'config.php';
@include 'rupiah.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Keranjang Belanjaan</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/css.css">
   <link rel="stylesheet" href="css/style.css">


</head>
<body>

<header class="header">
<?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="#" class="logo"><i class="fa-duotone fa-wine-bottle"></i>Botolku.</a>

      <nav class="navbar">
        <a href="index.php">home</a>
        <a href="products.php">menu</a>

        <a  class="active" href="cart.php">order</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart.php" class="fas fa-shopping-cart"><span href="cart.php" class="cart"><span><?php echo $row_count; ?></span> </span></a>
        
      </div>
    </>


     

      <div id="menu-btn" class="fas fa-bars"></div>



</header>

<div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>Foto</th>
         <th>Nama Barang</th>
         <th>Harga</th>
         <th>Jumlah</th>
         <th>Harga Total</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td> <?php echo rupiah($fetch_cart['price']); ?>,00/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="Perbarui" name="update_update_btn">
               </form>   
            </td>
            <?php $sub_total =($fetch_cart['price'] * $fetch_cart['quantity']); ?>
            <td> <?php echo rupiah($sub_total)?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Hapus Produk Dari Keranjang?')" class="delete-btn"> <i class="fas fa-trash"></i>Hapus</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td><a href="products.php" class="option-btn" style="margin-top: 0;">Lanjutkan Pembelian</a></td>
            <td colspan="3">Total Harga </td>
            <td> <?php echo rupiah($grand_total); ?>,00/-</td>
            <td><a href="cart.php?delete_all" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Semua Produk Dari Keranjang?');" class="delete-btn"> <i class="fas fa-trash"></i> Hapus Semua  </a></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Lanjutkan Proses Pembelian</a>
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

      <div class="credit">copyright @2022 by <span>Botolku.</span></div>
      </section>

   
<!-- custom js file link  -->
<script src="js/js.js"></script>

</body>
</html>