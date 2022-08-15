<? php

session_start();
require'function.php';


$id=$_GET['id'];
$result=mysqli_query($conn,$query);
$ID_Pembelian = mysqli_insert_id($con);

foreach($_SESSION['cart'] as $cart => $values) {


$query=query("INSERT INTO pembelian (`ID_Pembelian`, `Tanggal_Pembelian`, `Nama`, `Harga`, `Subtotal`)
          VALUES ("date("y-m-d")","$values['Nama']","$values['Harga']","$values['Jumlah']",
                      "(int)$values['Harga']*(int)$values['Jumlah']")");
}

$id=$_GET['id'];
$result=mysqli_query($conn,$query);
$ID_Pembelian = mysqli_insert_id($con);
?>