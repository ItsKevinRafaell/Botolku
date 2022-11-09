<?php 


if(isset($_POST['order_btn'])) {
    $name = $_POST['name'];
    $no_wa = $_POST['no_wa'];
    $method = $_POST['method'];
    $alamat = $_POST['alamat'];
    $pesan = $_POST['pesan'];


    header("location:https://api.whatsapp.com/send?phone=6281934597703&text=
    Nama :%20$name%20%0a,
    Nomor Whatsapp :%20$no_wa%20%0a,
    Order :%20$total_product%20%0a,
    Payment Method:%20$method%20%0a,
    Alamat :%20$alamat%20%0a,
    Method:%20$method%20%0a,    
    Harga:%20$price_total%20%0a
    ");
} else {
    echo "
    <script>
    
    window.location=history.go(-1);
    
    </script>
    
    ";
}



?>

