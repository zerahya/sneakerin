<?php

	if(isset($_POST['order']))
	{
		include('koneksi.php');
		session_start();
		
		$email		        = $_SESSION["email"];
		$alamat		        = $_POST['alamat'];
        $phone	            = $_POST['phone'];
        $jumlah_sepatu		= $_POST['jumlah_sepatu'];
        $services	    	= $_POST['services'];
		$note	        	= $_POST['note'];
		if (strpos($services,'Premium Suede')!==false){
			$harga=40000*$jumlah_sepatu;
		}
		else if(strpos($services,'One Day Service')!==false){
			$harga=50000*$jumlah_sepatu;
		}
		else if(strpos($services,'Repair Suede')!==false){
			$harga=15000*$jumlah_sepatu;
		}
		else if(strpos($services,'Unyellowing')!==false){
			$harga=25000*$jumlah_sepatu;
		}
		else if(strpos($services,'Standard Clean')!==false){
			$harga=20000*$jumlah_sepatu;
		}else{
			$harga=60000*$jumlah_sepatu;
		}

		$conn->query(" INSERT INTO pemesanan (id,email,alamat,harga,phone,jumlah_sepatu,services,note,isConfirmed) 
		VALUES(NULL, '$email', '$alamat', '$harga','$phone', '$jumlah_sepatu','$services', '$note',0)");

		
		if($conn)
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
	}

?>
		
		