<?php
session_start();

require 'function.php';







?>
       
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    PENDAPATAN
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
  <link href="../assets/css/tables" rel="stylesheet" />
</head>

         <script>
                            
                            function penjumlahan() {
                              var bil1 = document.getElementById("bil1").value;
                              var bil2 = document.getElementById("bil2").value;
                              var hasil=  parseInt(bil1)+ parseInt(bil2);

                              document.getElementById("hasil").value=hasil;

                              return penjumlahan();
                            }

        </script>



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
          
          <li >
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

          <li class="active ">

             <a href="./Pendapatan.php?id=21">
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
            <a class="navbar-brand" href="javascript:;">PENDAPATAN</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form action="" method="POST" autocomplete="OFF" >
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
                <h4 class="card-title" style="font-family: Times New Rowman;"> PENDAPATAN</h4>
                <a href="tables.php">"Pilih Produk"</a>
                <br></br>
              </div>


          

                  <div>
               

                <?php
                $conn = mysqli_connect("localhost","root","","tabelbarang") ;
                
                $id=$_GET['id'];
                $query = mysqli_query($conn,"SELECT * FROM warung WHERE ID=$id ");
                
                
                if (mysqli_num_rows($query)>0) 
                {
                  while ($row = mysqli_fetch_array($query)) 
                  {
                   
                    ?>
                   
                  
             <div>
            <form action="" method="POST" action="Pendapatan.php" >

              <input type="text" name="Nama" placeholder="Nama_Barang" readonly="readonly" required="required" value="<?php echo $row['Nama'];?>" class="form-control">
              <input type="tect" name="Harga" placeholder="Harga" value="<?php echo $row['Harga'];?>" class="form-control">
                <?php }} ?>

              <input type="number" name="Jumlah" class="form-control">
              <button type="submit" name="submit" value="Tambah ke Keranjang" class="btn btn-primary" >Tambah ke Keranjang</button>
              
            </form>
           
             

             <?php
            
              if ( isset($_POST["submit"] )) { 
                if (isset($_SESSION['cart'][$id])) 
              {
                $item_array_id = array_column($_SESSION['cart'][$id], "id");
                if (!in_array($_GET['id'] , $item_array_id)) 
              {
                  $count = count($_SESSION['cart'][$id]);
                  $item_array = array(
                  'id' => $_GET['id'] ,
                  'Nama' => $_POST['Nama'],
                  'Harga' => $_POST['Harga'],
                  'Jumlah' => $_POST['Jumlah']
                );

                  $_SESSION['cart'][$count] = $item_array;


                }
                else
                {
                 echo "<script> alert('Item Berhasil ditambahkan') </script>";
                 echo "<script> window.location='Pendapatan.php' </script>";
                }
              }
              else
              {
                $item_array = array
                (
                  'Id' => $_GET['id'] ,
                  'Nama' => $_POST['Nama'],
                  'Harga' => $_POST['Harga'],
                  'Jumlah' => $_POST['Jumlah']
                );
                $_SESSION['cart'][0] = $item_array;

              } 

            }

              ?>

      

           

                 
                </div>
              </form>

              <?php 

                      

                       if (!empty($_SESSION['cart'])) 
                       {
                       

          
                       
                       
                            
                          
                          $i=1;

                          $Total=0;

                          
                          $query = mysqli_query($conn, "SELECT * FROM warung");

                          $result = mysqli_fetch_assoc($query);

                        

                         
                          foreach($_SESSION['cart'] as $cart => $values )
                          
                          $timezone = time() + (60 * 60 * 7);
                          $tanggal = gmdate('d-m-Y', $timezone);
                          $nama =   $values['Nama'];
                          $harga =  $values['Harga'];
                          $jumlah = $values['Jumlah'];
                          $subtotal = ((int)$values['Harga']) * ((int)$values['Jumlah']);
                         
                          

                          

                            mysqli_query($conn, "INSERT INTO `pembelian`(`ID_Pembelian`, `Tanggal_Pembelian`, `Nama`, `Harga`, `Jumlah`, `Subtotal`) VALUES ('[$cart]','[$tanggal]','[$nama]','[$harga]','[$jumlah]','[$subtotal]')");

                          

                          ?>
                        

                      <?php } ?>

            <form action="" method="POST">

              <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary justify-content-center" >



                        <th class="text-left">
                        No.
                      </th>

                        <th>
                       
                       Tanggal_Pembelian
                      
                      </th>
                      
                      <th>
                       
                       Nama
                      
                      </th>
                      
                      <th>
                       
                       Harga
                      
                      </th>
                      
                      <th>
                       
                       Jumlah
                      
                      </th>
                      

                      <th class="text-Justify" style="text-align: center;">
                        
                        Subtotal

                      </th> 

                     
                    
                       
                      
                    </thead>
                       




                          <?php
                       

                         
                       
                          
                          
                          $query = mysqli_query($conn, "SELECT*FROM `pembelian`  ");

                          $result = mysqli_fetch_array($query);

                           $i=1;
                          
                         
                           $total=0;
                          foreach($query as $row )
                          {
                         
                          
                          
                          $id = $row['ID_Pembelian'];
                          $tanggal =$row['Tanggal_Pembelian'];
                          $nama =   $row['Nama'];
                          $harga =  $row['Harga'];
                          $jumlah = $row['Jumlah'];
                          $subtotal = $row['Subtotal'];
                          (int)$total += (int)$subtotal;
                         
                          
                          
                          
                               
                          
                          
                          ?>

                          <tbody>
                        
                        <tr>
                        

                        <td >
                        <?php echo $i++; ?>
                        </td>
                        <td>
                        <?php echo $tanggal; ?>
                        </td>
                        <td>
                        <?php echo $nama; ?>
                        </td>
                        <td>
                         <?php echo $harga;  ?>
                        </td>
                        <td>
                         <?php echo $jumlah;?>
                        </td>
                        <td class="" style="text-align: center;">
                        <?php echo $subtotal;?>
                         
                         </td>

                         <td> <a   class="btn btn-primary btn-round" href="hapus.php?id=<?php echo $id ;?>"  
                             style="letter-spacing: 2px; font-family: sans-serif;"?>Hapus</a>

                        </td>



                        
                                

                                      <?php (int)$total += (int)$subtotal; } ?> 
                     

                     <tr>


                     


                       
                        <th  class="text-primary" name="pick">Total</th>
                        <td><input type="text" class="form-control" name="total" value="<?php echo $total;?>"></td>

  


                    </tr>
                    
                                      <?php   unset($_SESSION['cart']); ?>
                    </thead>

                    </form>
              </div>
              </div>
        
                </div>
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