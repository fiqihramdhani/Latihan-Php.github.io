<?php 

//koneksi ke database
$conn = mysqli_connect("localhost","root","","tabelbarang") ;

function query($query) {
    global $conn;
    $result = mysqli_query($conn,"SELECT * FROM warung");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

//fungsi untuk insert ke database

function tambah($data) {
global $conn;
//ambil data dari tiap tiap element
$nama = htmlspecialchars($data["Nama"]);
$ukuran = htmlspecialchars($data["Ukuran"]);
$expired = htmlspecialchars($data["Expired"]);
$harga = htmlspecialchars($data["Harga"]);


//Perintah untuk memasukan INSERT DATA
$query = "INSERT INTO warung VALUES ('','$nama','$ukuran','$expired','$harga')";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);

}



function registrasi ($data) {
global $conn;

//ambil data dari tiap tiap element
$username = strtolower(stripslashes($data["username"]));
$password = mysqli_real_escape_String($conn,$data["password"]);
$firstname = htmlspecialchars($data["first"]);
$lastname= htmlspecialchars($data["last"]);
$address = htmlspecialchars($data["address"]);
$city = htmlspecialchars($data["city"]);
$country = htmlspecialchars($data["country"]);
$postcalcode= htmlspecialchars($data["post"]);
$about= htmlspecialchars($data["about"]);

//cara mengecek username yang sudah terdaftar

$result = mysqli_query ($conn, "SELECT * FROM user WHERE username  = '$username'");

if (mysqli_fetch_assoc($result)) {

   echo "
        <script>
        
        alert ('Username yang di tambahakan sudah terdaftar!');

        </script>

   ";

   return false;
}

$password = md5($password, PASSWORD_DEFAULT);


//perintah untuk memasukan (INSERT) data ke database
$query = "INSERT INTO user VALUES ('','$username','$password','$firstname','$lastname','$address','$city','$country','$postcalcode','$about')";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);

}

function cart($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}




function hapus($id)
{
    global $conn;
    mysqli_query($conn,"DELETE FROM pembelian WHERE ID_Pembelian=$id");
    return mysqli_affected_rows($conn);
}



function cari($keyword) {

    $query = "SELECT `ID`, `Nama`, `Ukuran`, `Expired`, `Harga` FROM warung WHERE Nama LIKE '%$keyword%' OR
                                       Ukuran Like '%$keyword' OR
                                       Expired Like '%$keyword' OR
                                       Harga Like '%$keyword' ORDER BY ID";
                                   

                                       return query($query);

}
?>