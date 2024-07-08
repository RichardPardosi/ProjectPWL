<?php
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
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
            <a href="dashboard.php">Beranda</a>
            <a href="profil.php">Profil</a>
            <a href="data-kategori.php">Data Kategori</a>
            <a href="data-produk.php">Data Produk</a>
            <a href="logout.php">Logout</a>
          </div>
        </div>
      </header>
    <br><br>
    <br><br>
    <!-- Content -->
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION ['a_global']->admin_name?> di Web Toko ATK BKM</h4>
            </div>
        </div>
    </div>

</body>
</html>