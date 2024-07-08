<?php
error_reporting(0);
    include 'db.php';


    $produk =mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($produk);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Dashboard</title>
</head>
<body>
    <!-- Header Start -->
    <header>
        <div class="container">
          <div class="header-left">
            <img class="logo" src="img/logo.png">
            <p>Toko ATK BKM</p>
                
                <button>
                    <svg viewBox="0 0 1024 1024">
                        <path class="path1" q="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140
                        .706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.
                        529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.
                        455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                        </path>
                    </svg>
                </button>
            </form>
          </div>

          <div class="header-right">
            <a href="dashboardcustomer.php">Beranda</a>
            <a href="produk.php">Produk</a>
          </div>
        </div>
      </header>
    <br><br>
    <br><br>

    <!-- Search -->
     <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">

                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
     </div>

      <!-- detail product -->
       <div class="section">
        <div class="container">
            <h3>Detail Produk</h3>
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->product_image ?>" width="100%">
                </div>
                <div class="col-2">
                    <h3><?php echo $p->product_name ?></h3>
                    <h4>Rp. <?php echo number_format($p->product_price) ?></h4>
                    <p>Deskripsi :<br>
                                <?php echo $p->product_description ?>
                            </p>
                    <p>Hubungi via Whatsapp 
                    <a href="https://api.whatsapp.com/send?phone=6282298800249&text=Hai, apakah barang ini ready?" target="_blank"><img src="img/wa.png" class="logowa" width="50px"></a></p>
                </div>

            </div>
        </div>
       </div>
       

       <!-- Footer -->
        <div class="footer">
            <div class="container">
            <h4>Alamat</h4>
            <p>Perumahan Bukit Kayumanis, Bogor, Jawa Barat</p>

            <h4>Email</h4>
            <p>atkbkm@gmail.com</p>

            <h4>No. Hp</h4>
            <p>082298800249</p>

                <small>Copyright &copy; 2024 - KelompokPwl</small>
            </div>
        </div>
</body>
</html>