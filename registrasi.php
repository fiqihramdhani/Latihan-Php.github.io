<?php







//Menambahkan Fumgsi dari Fuction.php
require 'function.php';


if (isset($_POST["registrasi"])) {

  if(registrasi ($_POST) > 0) {

     echo "<script>

            alert ('User baru berhasil di tambahkan!');
            document.location.href= 'registrasi.php' ;

           </script>";

 }else{

     echo mysqli_error($conn);
    

 }


 } 
 
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    PENDAFTARAN
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/user/registrasi.css" rel="stylesheet" />
  
</head>

<body class="">

      <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 >REGISTRATION</h3>
                        <p>Isikan Data dibawah Ini !.</p>
                        <form action="" method="POST">
                        
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        
                        <input type="text" name="username" class="form-control" placeholder="Username" value="" autocomplete="OFF">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                         
                        <input type="password" name="password" class="form-control" placeholder="password" autocomplete="OFF">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>First Name</label>
                         
                        <input type="text" name="first" class="form-control" placeholder="First Name" value="" autocomplete="OFF">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Last Name</label>
                       <input type="text" name="last" class="form-control" placeholder="Last Name" value="" autocomplete="OFF">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                         
                        <input type="text" name="address" class="form-control" placeholder="Home Address" value="" autocomplete="OFF">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City</label>
                                               <input type="text" name="city" class="form-control" placeholder="City" value="" autocomplete="OFF">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Country</label>
                         
                        <input type="text" name="country" class="form-control" placeholder="Country" value="" autocomplete="OFF">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Postal Code</label>
                                               <input type="text" name="post" class="form-control" placeholder="ZIP Code" autocomplete="OFF" >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                      <textarea type="text" name="about" class="form-control">Deskripsikan diri anda </textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                    
                      <button type="submit" name="registrasi" class="btn btn-primary btn-round">Register</button>
                    </div>
                  </div>
                   
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>