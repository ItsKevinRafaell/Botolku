<?php 
@include 'config.php';

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Botolku.</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/css.css" />

    <style>
      .popup {
        background-color: #ffffff;
    width: 420px;
    padding: 30px 40px;
    position: fixed;
    transform: translate(-50%, -50%);
    left: 50%;
    z-index: 1000;
    top: 50%;
    border-radius: 8px;
    font-family: "Poppins", sans-serif;
    display: none;
    text-align: center;
    box-shadow: 5px 5px 30px rgb(0 0 0 / 20%);
}

.popup h2 {
  margin-top: 10px;
  font-size: 25px;
}

.popup button {
  display: block;
  position: absolute;
  top: 0;
  right: 0;
  margin: 10px 10px auto;
  background-color: transparent;
  font-size: 30px;
  color: #ffffff;
  background: #03549a;
  border-radius: 100%;
  width: 40px;
  height: 40px;
  border: none;
  outline: none;
  cursor: pointer;
}

.popup p {
  font-size: 14px;
  text-align: justify;
  margin: 20px 0;
  line-height: 25px;
}
.popup .btn-popup {
  display: block;
  width: 150px;
  position: relative;
  margin: 10px auto;
  font-size: 17px;
  text-align: center;
  background-color: #192a56;
  border-radius: 10px;
  color: #ffffff;
  text-decoration: none;

}
    </style>
  </head>
  <body>
    <!-- header section starts      -->

    <header class="header">
<?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="#" class="logo"><i class="fa-duotone fa-wine-bottle"></i>Botolku.</a>

      <nav class="navbar">
        <a  class="active" href="index.php">home</a>
        <a href="products.php">menu</a>

        <a  href="cart.php">order</a>
      </nav>

      <div class="icons">
        <i class="fas fa-search" id="search-icon"></i>
        <a href="cart.php" class="fas fa-shopping-cart"><span href="cart.php" class="cart"><span><?php echo $row_count; ?></span> </span></a>

      </div>


     


      <div id="menu-btn" class="fas fa-bars"></div>


</header>
<div class="popup">

   <div class="fab fa-bottle "></div>
<!-- cancel button -->
   <button id="opengoogle"  href="www.google.com"><i class="fa-sharp fa-solid fa-xmark" style="font-size: 30px;"></i></button>

    <h2> Silahkan Konfirmasi Umur </h2>
    <p>Apakah Umur Anda Lebih Dari 21 Tahun? Lanjutkan Jika Iya, Tutup Jika Tidak</p>
    <button class="btn-popup" id="close">Lanjutkan</button>
</div>

    <!-- header section ends-->

    <!-- search form  -->

    <form action="" id="search-form">
      <input type="search" placeholder="search here..." name="" id="search-box" />
      <label for="search-box" class="fas fa-search"></label>
      <i class="fas fa-times" id="close"></i>
    </form>

   

    <!-- home section starts  -->
    

    <section class="home" id="home">
      
      <div class="swiper-container home-slider">
        <div class="swiper-wrapper wrapper">
          <div class="swiper-slide slide">
            <div class="content">
              <span>Selamat Datang Di...</span>
              <h3>Botolku</h3>
              <p>Marketplace Penyedia Minuman Dengan Kualitas Dan Layanan Terbaik di Balikpapan Dan Sekitarnya</p>
              <a href="/products.php" class="btn">Pesan Sekarang</a>
            </div>
            <div class="image">
              <img src="images/v7.png" alt="" />
            </div>
          </div>

        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- home section ends -->

    

    <!-- dishes section starts  -->

    <section class="dishes" id="home">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/images/v1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
      <h1 class="heading">Katalog Produk</h1>

      <div class="box-container">
        <div class="box">
          <img src="images/v1.png" alt="" />
          <h3>Seagram's Vodka</h3>
          <span>Rp. 300.000,00 </span>
        </div>

        <div class="box">
          <img src="images/v2.png" alt="" />
          <h3>Imperial Black Whisky</h3>
          <span>Rp. 300.000,00 </span>
        </div>

        <div class="box">
          <img src="images/v3.png" alt="" />
          <h3>Chivas Regal 12</h3>
          <span>Rp. 850.000,00 </span>
        </div>
      </div>
      <a href="products.php" class="btn btn-menu">Check All Menu</a>
    </section>

    <!-- dishes section ends -->

    <!-- about section starts  -->

    <section class="about" id="home">
      <h1 class="heading">MENGAPA HARUS KAMI?</h1>

      <div class="row">
        <div class="image">
          <img src="images/v4.png" alt="" />
        </div>

        <div class="content">
          <h3> KUALITAS DAN LAYANAN TERBAIK</h3>
          <p>Botolku Merupakan Marketplace Terbaik Bagi Anda Yang Ingin Mendapatkan Kualitas Minuman Terbaik </p>
          <p>Setiap Minuman Yang Dijual Memiliki Cita Rasa Unik Dan Pastinya Dengan Harga Terjangkau</p>
          <div class="icons-container">
            <div class="icons">
              <i class="fas fa-shipping-fast"></i>
              <span>Gratis Ongkir</span>
            </div>
            <div class="icons">
              <i class="fas fa-dollar-sign"></i>
              <span>Pembayaran Mudah</span>
            </div>
            <div class="icons">
              <i class="fas fa-headset"></i>
              <span>Layanan 24/7</span>
            </div>
          </div>
          <a href="#" class="btn">Belanja Sekarang</a>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <!-- menu section ends -->

    <!-- review section starts  -->

    <!-- review section ends -->

    <!-- order section starts  -->

    <!-- <section class="order" id="order">
      <h3 class="sub-heading">order now</h3>
      <h1 class="heading">free and fast</h1>

      <form action="send.php" method="post" target="_blank">
        <div class="inputBox">
          <div class="input">
            <span>Your name</span>
            <input type="text" name="nama" placeholder="Enter Your Name" required/>
          </div>
          <div class="input">
            <span>Your number</span>
            <input type="text" name="noWa" placeholder="Enter Your Number" required/>
          </div>
        </div>
        <div class="inputBox">
          <div class="input">
            <span>Your order</span>
            <div class="custom-select" style="width: 200px">
              <select name="order" required>
                <option >Select Order</option>
                <option name="A123">Seagram's Vodka - A123</option>
                <option name="B7S3">Imperial Black Whisky - B7S3</option>
                <option name="PZ6D">Chivas Regal 12 - PZ6D</option>
                <option name="1LO9">Vibe Black Tea - 1LO9</option>
                <option name="4CFA">Vibe Lychee - 4CFA</option>
                <option name="0ZOP">Martell VSOP - 0ZOP</option>
                <option name="1KSB">Black Label Whisky - 1KSB</option>
                <option name="6ZYP">Red Label Whisky - 6ZYP</option>
                <option name="3PL2">Wine Lambrusco Sababay - 3PL2</option>
              </select>
              <span href="" class="price-product" style="color: rgb(90, 90, 90)"> </span>
            </div>
          </div>
          <div class="inputBox">
            <div class="input">
              <span>Payment</span>
              <div class="custom-select select-payment" style="width: 425px">
                <select name="payment">
                  <option value="0" name="order">Select Payment</option>
                  <option value="Cash On Delivery">Cash On Delivery</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="inputBox">
          <div class="input">
            <span>Quantity</span>
            <input type="number" name="quantity" placeholder="How Many Orders" />
          </div>
          <div class="input">
            <span>Date and Time</span>
            <input type="datetime-local" name="waktu" />
          </div>
        </div>
        <div class="inputBox">
          <div class="input">
            <span>Your Address</span>
            <textarea name="alamat" placeholder="Enter Your Address" id="" cols="30" rows="10"></textarea>
          </div>
          <div class="input">
            <span>Your Message</span>
            <textarea name="pesan" placeholder="Enter Your Message" id="" cols="30" rows="10"></textarea>
          </div>
        </div>

        <input type="submit" name="submit" value="order now" class="btn" />
      </form>
    </section> -->

    <!-- order section ends -->

    <!-- footer section starts  -->

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
          <a href="/products.php">menu</a>
          <a href="/cart.php">order</a>
        </div>

        <div class="box">
          <h3>Kontak</h3>
          <a href="#">+123-456-7890</a>
          <a href="#">botolku@service.com</a>
          <a href="#">Balikpapan, Kalimantan Timur - 11111</a>
        </div>

      <div class="credit">copyright @2022 by <span>Botolku.</span></div></section>

    


    <!-- footer section ends -->

    <!-- loader part  -->
    <!-- <div class="loader-container">
      <img src="images/loader.gif" alt="" />
    </div> -->

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script src="js/js.js"></script>

   <script>
function myFunction() {
  var x = document.getElementById("navbar");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

   </script> 

   <script>
 window.addEventListener("load", function () {
  //setTimeout() method sets a timer which executes a function once the timer expires
  setTimeout(
    function open(event) {
      document.querySelector(".popup").style.display = "block";
    },
    2000 // 1 seconds = 1000 milliseconds
  );
});
//Activate the cancel button
document.querySelector("#close").addEventListener("click", function () {
  document.querySelector(".popup").style.display = "none";
});

document.querySelector("#opengoogle").addEventListener("click", function () {
  window.location.href = 'https://google.com'
});


   </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
