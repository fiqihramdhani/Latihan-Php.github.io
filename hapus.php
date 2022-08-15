<?php

session_start();

require'function.php';


$id=$_GET['id'];
if (hapus($id)>0) 
{
	echo "<script>

			alert('Barang berhasil di hapus');
			document.location.href='tables.php';

		  </script>";
		 ;
}

?>