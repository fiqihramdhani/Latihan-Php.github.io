<?php


session_start();

if ( !isset ($_SESSION ["login"])) {
     

           header('location: login.php');
           exit;

}

if (isset($_SESSION ["logout"])) {
     
    header("Location: http://localhost:8080/Project/login.php");

    exit;

}



//Menambahkan Fumgsi dari Fuction.php
require 'function.php';

/*
cek data berhasil di input atau gagal dengan fungsi IF ( tambah ($_POST) > 0) 
{echo " <script>alert ('Data Berhasil di tambahkan !') ; document.location.href='tables.php'</script>" ; } 
*/


if ( isset($_POST["submit"] )) { 

    If ( tambah ($_POST) > 0) {

        echo " 

        <script> 

        alert ('Data Berhasil ditambahkan !') ; 
        document.location.href= 'tables.php' ;

        </script>

        "; 
    }else{

    echo " 

        <script> 

        alert ('Data Gagal ditambahkan !') ; 
        document.location.href= 'tables.php' ;

        </script>

         " ; 

 
} 




}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
   <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    WARUNG SEMBAKO ONLINE
  </title>


  <link href="../assets/input/Input.css" rel="stylesheet" />
</head>

<body class="">
      <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>INPUT BARANG</h3>
                        <p>Isikan Data dibawah Ini !.</p>
                        <form class="requires-validation" novalidate action="" method="post" >


                            <div class="col-md-4 ">
                               <input class="form-control" type="text" name="Nama" placeholder="Nama" autocomplete="off" >
                               
                            </div>

                            <div class="col-md-4">
                                <input class="form-control" type="text" name="Ukuran" placeholder="Ukuran" autocomplete="off" >
                                

                              <div class="col-md-4">
                                <input class="form-control" type="text" name="Expired" placeholder="Expired" autocomplete="off" >
                              
                            </div>


                    

                           <div class="col-md-4">
                              <input class="form-control" type="text" name="Harga" placeholder="Harga" autocomplete="OFF" >
                               


                          

                      

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
