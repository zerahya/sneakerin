<?php

	if(isset($_POST['order']))
	{
        include('koneksi.php');
        
		$nama		        = $_POST['nama'];
		$alamat		        = $_POST['alamat'];
        $phone	            = $_POST['phone'];
        $jumlah_sepatu		= $_POST['jumlah_sepatu'];
        $service	    	= $_POST['service'];
		$note	        	= $_POST['note'];

		$conn->query(" INSERT INTO pemesanan (id, nama, alamat, phone, jumlah_sepatu,services , note) VALUES(NULL, '$nama', '$alamat', '$phone', '$jumlah_sepatu',NULL, '$note')");
		echo "mask";
	
		/*
	/*	if($input)
		{
			echo 'Data berhasil di tambahkan! ';
			echo '<a href="order.php">Kembali</a>';
		}
		else
		{
			echo 'Gagal menambahkan data! ';
			echo '<a href="order.php">Kembali</a>';
		}
	}
	else
	{
		echo '<script>window.history.back()</script>';
	}*/
}
?>
		
		