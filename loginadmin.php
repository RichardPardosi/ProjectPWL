<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css " rel="stylesheet">
    <link rel="stylesheet" href="style2.css">
    <title>Login Admin</title>
</head>
<body>

     <div class="container d-flex justify-content-center align-items-center min-vh-100">
      <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--Left Box -->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #232323;"> 
        <div class="featured-image mb-3">
          <img src="images/satu.png" class="img-fluid" style="width: 750px">
        </div>
       </div>

    <!-- Right Box -->
      
    <div class="col-md-6 right-box"> 
        <div class="row align-items-center">
           <div class="header-text mb-4 d-flex justify-content-center align-items-center">
            <img src="images/hoho.png" class"img-right" style="width: 50px">
           </div>
           <div class="head1">
            <h5><center>Fotocopy BKM</center></h5>
           </div>
           <form action="" method="POST">
           <div class="input-group mb-3">
             <input type="text" name="user" class="form-control form-control-lg bg-light fs-6" placeholder="Username">
           </div>
           <div class="input-group mb-1">
            <input type="password" name="pass" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
          </div>
          <div class="input-group mb-5 d-flex justify-content-between">
              <small><a href="index.php">Login sebagai customer</a></small>
            </div>
          </div>
          <div class="input-group mb-3">
            <button name="submit" value="login" class="btn btn-lg btn-primary w-100 fs-6">Login</button>
          </div>
        </div>
    </div>
    </form>
    <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php';

                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".$pass."'" );
                if (mysqli_num_rows($cek) > 0){
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d->admin_id;
                    echo '<script>window.location="dashboard.php"</script>'; 
                }else{
                    echo '<script>alert("Username atau Password anda salah!")</script>';
                } 
            }
        
        
        ?>


      </div>  
     </div>
</body>
</html>