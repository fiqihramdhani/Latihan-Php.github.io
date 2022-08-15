<?php

session_start();


 
              


if ( !isset ($_SESSION ["login"])) {
     

           header('location: login.php');
           exit;

}

if (isset($_SESSION ["logout"])) {
     
    header("Location: http://localhost/Project/login.php");

    exit;

}



require 'function.php';

$warung = query ( "SELECT * FROM warung");

//ambil data tabel dari database


$result = mysqli_query($conn,"SELECT `ID`, `Nama`, `Ukuran`, `Expired`, `Harga` FROM `warung` GROUP BY ID  ");
 




$keyword="";          

if (isset($_POST['cari'])) {
  $_SESSION['p'] = $_POST['keyword'];
  $keyword =  $_SESSION['p'];
} 
     
              $query =mysqli_query($conn, "SELECT * FROM `warung` WHERE Nama LIKE '%$keyword%' OR
                                       Ukuran Like '%$keyword' OR
                                       Expired Like '%$keyword' OR
                                       Harga Like '%$keyword' ORDER BY ID");

             


  unset($_SESSION['p']) ;               
                                       
                                
   
 
 ?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    DAFTAR & HARGA BARANG
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
           <div class="OIP">
            <img src="../assets/img/OIP.Jpg">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          WARUNG RIWAYATI
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
          <li>
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="active ">
            <a href="./tables.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
           
          <li>
            <a href="./profile.php">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          
          <li>
            <a href="./map.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Maps</p>
            </a>
          </li>

          <li>

             <a href="./Pendapatan.php">
              <i class="nc-money-coins"></i>
              <p>Pendapatan</p>
            </a>

          </li>
         
          <li>

            <a href="./icons.html">
              <i class="nc-icon nc-diamond"></i>
              <p>Icons</p>
            </a>

          </li>
          
          <li>
            <a href="./typography.html">
              <i class="nc-icon nc-caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">DAFTAR & HARGA BARANG</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">

               
               
    
            <form action="tables.php" method="POST" autocomplete="OFF" action="index.php?cari">
              <div class="input-group no-border">
                <input type="text" name="keyword" value="" class="form-control"  placeholder="Search" >

                <div class="input-group-append">
                  <div class="input-group-text">
                    <button type="submit" name="cari"><i class="nc-icon nc-zoom-split" ></i></button>
                  </div>
                </div>
              </div>
            </form>
          

            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-magnify" href="javascript:;">
                  <i class="nc-icon nc-layout-11"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link">
                  <i class="nc-icon nc-bell-55"></i>
                  
                  </p>
                </a>
               
              </li>
              <li class="nav-item">
                <a class="nav-link  dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="registrasi.php">Sign Up</a>
                  <a class="dropdown-item" href="login.php">Login</a>
                  <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content" style="justify-content: center;">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" style="font-family: Times New Rowman;"> DAFTAR TABEL / ISI</h4>
                <a href="Input.php"><button class="button btn-primary" >Input Barang</button></a>
                <br></br>
              </div>
            <form action="" method="POST">

              <div class="card-body">

                  <table class="table">
                    <thead class=" text-primary">


                      <th class="text-left">
                        No.
                      </th>
                      <th>
                       Nama
                      </th>
                      <th>
                        Ukuran
                      </th>
                      <th>
                       Expired
                      </th>
                      <th class="text-Justify">
                        Harga
                      </th>

                      
                      <th class="text-Justify">
                        Pembelian
                      </th>
                    </thead>
                    <tbody>
                       
                       
                       <?php 
                       
                        foreach ($query as $row) {
                           $i=1;
                       
                         ?>
                       
                      <tr>
                        

                        <td>
                          <?php echo $i++ ?>
                        </td>
                        <td>
                         <?php echo $row['Nama']; ?>
                        </td>
                        <td>
                         <?php echo $row['Ukuran'];?>
                        </td>
                        <td>
                         <?php echo $row['Expired']?>
                        </td>
                        <td class="text-justify">
                         <?php echo $row['Harga'] ?>
                        </td>

                      
                        <td class="text-justify">
                        
                        <a   class="btn btn-primary btn-round" href="proses.php?id=<?php echo $row['ID'] ;?>"  
                             style="letter-spacing: 2px; font-family: sans-serif;"?>Pilih</a>
                        
                        </td>


                      </tr>
                    <?php } ?>
                  
                    
                   
                    </tbody>

                  </table>
                 
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
          <div class="col-md-12">
           
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmO9eInJjTT-IFLLYq1iHC8kLfP263ank"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>