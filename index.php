<?php
	
		session_start();
		//session_destroy();

	
		
	?>

<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Sneaker.in</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/hexagons.min.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
			<link rel="stylesheet" href="css/css.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/service.css">
		</head>
		<body>
			
	<!-- Site Title -->
	<?php 
		include 'koneksi.php';
		if(isset($_SESSION['email']))
		{
	  $emailpemesanan=$_SESSION["email"];
		$sql = $con->query("select * from pemesanan where email='$emailpemesanan' and isConfirmed=0");
		}
		//$sql = conn->query('SELECT * FROM pemesanan WHERE email=$_SESSION["email"] and isConfirmed=0');
    //$data = mysqli_query($conn, $sql);
	?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>

    <div class="container">

        <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="order-section">
                  <div class="status-section">
                    Status Pemesanan
                  </div>

                  <div class="desc-section">
                      <ul>
                          <li>Kurir Sedang dalam perjalanan menuju ke lokasi anda</li>
                          <li>Siapkan sepatu yang ingin di cuci / perbaiki </li>
                          <li>Siapkan Uang sesuai dengan jumlah yang tertera</li>
                          <li>apabila anda tidak berada di lokasi mohon untuk menitipkan uang dan sepatu anda.</li>
                          <li>pembatalan tidak dapat dilakukan selama proses transaksi berlangsung</li>
                      </ul>
                  </div>

                  <div class="rincian-title">
                      Rincian Pemesanan
                  </div>

                  <div class="rincian-section">
                    <table class="table">
                      <thead>
                        <tr>
													<th scope="col">ID Pesanan</th>
													<th scope="col">Nama</th>
                          <th scope="col">Jumlah</th>
                          <th scope="col">Jumlah Harga</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $total = 0;
                          echo  'Halo user ' .$_SESSION["email"].' , silahkan di cek kembali pesanannya !' ;
                          while($result = mysqli_fetch_assoc($sql)) {
                              echo '<tr>';
															echo '<td>' .  $result['id']  . '</td>';
															echo '<td>' .  $result['services']  . '</td>';
                              echo '<td>' .  $result['jumlah_sepatu']  . '</td>';
                              echo '<td>' .  $result['harga']  . '</td>';
                              $total = $result['harga'] + $total;
                              echo '</tr>';

                          }
                        ?>
                      </tbody>
                    </table>
                    <b>Total Harga</b> : <p><?php echo $total?></p>
                  </div>
                  

              </div>
          </div>
          <div class="modal-footer">
                  <div class="button-section float-right">
									<a href="deleteorder.php" class="btn btn-success">Hapus Semua</a>
     							<a href="index.php" class="btn btn-danger">Batalkan</a>
                  <a href="konfirmasi.php" class="btn btn-success">Konfirmasi</a>
                  </div>
          </div>
        </div>
      </div>
    </div>

		</div>



		  <header id="header" id="home">
		    <div class="container">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li class="menu-active"><a href="#home">Home</a></li>
			          <li><a href="#service">Service</a></li>
			          <li><a href="#feature">Gallery</a></li>
			          <li><a href="#testimonial">Testimonial</a></li>
								<li><a href="#contact">About</a></li>
								<?php 
								if(isset($_SESSION['email']) &&  !empty($_SESSION['email']))
								{
								?>
     							<button type="button" id="konfirmasi_pemesanan" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
									 
									<div >konfirmasi Pesanan</div></button>
									<li class="menu-has-children"><a href="tampilprofile.php"  id="profile">Profile</a>	
									<ul>	
    						
								<?php }else{ ?>
									<button type="button" id="konfirmasi_pemesanan" class="btn btn-primary" style="display:none;" data-toggle="modal" data-target="#exampleModal">
      						<div >konfirmasi Pesanan</div>
    							</button>
			         	 
			            
									<li class="menu-has-children"><a href="tampilprofile.php" style="display:none;" id="profile">Profile</a>	
									<ul>	
									<?php } ?>
									<li><a href="editprofile.php">Edit Profile</a></li>
										<li><a href="logout.php">Logout</a></li>
			            </ul>
								</li>
			        </ul>
			      </nav><!-- #nav-menu-container -->
		    	</div>
		    </div>
		  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-9 col-md-12">
								<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
							

							<?php 
								if(isset($_SESSION['email']) &&  !empty($_SESSION['email']))
								{?>
							
								<?php 	}else {?>
									<a href="login.php" class="primary-btn text-uppercase">Login Sekarang</a>
									<?php 	}?>
						</div>											
					</div>
			</section>
			<!-- End banner Area -->		


			<!-- Start quote Area -->
			<section class="quote-area pt-100">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-5 col-sm-12 quote-left">
							<h2 class="text-right">
								<span>Snicker.IN</span><br>
								Jasa Laundry Sepatu Online Sepatu Di<br>
								<span>Indonesia</span>.
							</h2>
						</div>
						<div class="col-lg-7 col-sm-12 quote-right">
							<p class="text-left">
								Melalui SNICKER.IN pelanggan akan dipuaskan dengan adanya beberapa layanan yang kami miliki, seperti pelanggan tidak mesti datang lagi ke tempat laundry kami, cukup dengan menggunakan jasa kami untuk menjemput sepatu anda. 
									</p>
						</div>
					</div>
				</div>
			</section>
			<!-- End quote Area -->
			
			
			
			
			
<!--start service area-->
<section class="service" id="service">
<div class="container">
		<div id="poptrox">
			<ul id="gallery">
				<li class="nopad"><a href="order.php"><img src="img/1.PNG" width="270" height="270" alt="" title="gambar belum keluar" /></li>
				<li><a href="order.php"><img src="img/2.PNG" width="270" height="270"  alt="" title="gambar belum keluar" /></li>
				<li><a href="order.php"><img src="img/3.PNG" width="270" height="270"  alt="" title="gambar belum keluar" /></li><br>
				<li class="nopad"><a href="order.php"><img src="img/4.PNG" width="270" height="270"  alt="" title="gambar belum keluar" /></li>
				<li><a href="order.php"><img src="img/5.PNG" width="270" height="270" alt="" title="gambar belum keluar" /></li>
				<li><a href="order.php"><img src="img/6.PNG" width="270" height="270"  alt="" title="gambar belum keluar" /><</li>
			</ul>
</div>
</div>
</section>	
<!--end service area-->
			<!-- Start feature Area -->
			<section class="feature-area relative" id="feature">				
								<div class="container">
										 <meta charset="utf-8">
							  <meta name="viewport" content="width=device-width, initial-scale=1">
							  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
							  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
							  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
							  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
							  <style>
							  /* Make the image fully responsive */
							  .carousel-inner img {
							      width: 100%;
							      height: 100%;
							  }
							  </style>
							</head>
							<body>
							
							<div id="demo" class="carousel slide" data-ride="carousel">
							  <ul class="carousel-indicators">
							    <li data-target="#demo" data-slide-to="0" class="active"></li>
							    <li data-target="#demo" data-slide-to="1"></li>
							    <li data-target="#demo" data-slide-to="2"></li>
							  </ul>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="img/Galery 5.jpg" alt="Los Angeles" width="1100" height="500">
							    </div>
							    <div class="carousel-item">
							      <img src="img/Galery 2.jpg" alt="Chicago" width="1100" height="500">
							      <div class="carousel-caption">
								 </div>
							    </div>
							    <div class="carousel-item">
							      <img src="img/Galery 3.jpg" alt="New York" width="1100" height="500">
							      <div class="carousel-caption">
								  </div>
							    </div>
							  </div>
							  </div>
							    <div class="carousel-item">
							      <img src="img/Galery 4.jpg" alt="New York" width="1100" height="500">
							      <div class="carousel-caption">
								  </div>
							    </div>
							  </div>
							  </div>
							    <div class="carousel-item">
							      <img src="img/Galery 5.jpg" alt="New York" width="1100" height="500">
							      <div class="carousel-caption">
								  </div>
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#demo" data-slide="prev">
							  
							    <span class="carousel-control-prev-icon"></span>
							  </a>
							  <a class="carousel-control-next" href="#demo" data-slide="next">
							    <span class="carousel-control-next-icon"></span>
							  </a>			  	
							  <a class="carousel-control-prev" href="#demo" data-slide="prev">
							  
							    <span class="carousel-control-prev-icon"></span>
							  </a>
							  <a class="carousel-control-next" href="#demo" data-slide="next">
							    <span class="carousel-control-next-icon"></span>
							  </a>
							  <a class="carousel-control-next" href="#demo" data-slide="next">
							    <span class="carousel-control-next-icon"></span>
							  </a>
								</div>
									           
	                    </div>
	                </div>
	            </div>
									
				</div>
			
				
			</section>
			<!-- End feature Area -->

			<!-- Start counter Area -->
			<section class="counter-area section-gap" id="counter">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">1</h1>
								<p>Happy Clients</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">2</h1>
								<p>Total Projects</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">5</h1>
								<p>Cups Coffee</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-counter">
								<h1 class="counter">1000</h1>
								<p>Tickets Submitted</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- end counter Area -->

			<!-- Start video Area -->
			<section class="video-area pb-100" id="video">
				<div class="container">
					<div class="row justify-content-center">
						<div class="video-section section-gap col-lg-12">
							<div class="text-wrap">
								<h1 class="text-white">Explore ourself in a new way</h1>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore <br> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
								</p>
								<div class="play-btn-wrap">
									<a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="play-btn">

									<img src="img/play-btn.png" alt=""> Watch Video
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End video Area -->

			<!-- Start callto-action-area Area -->
			<section class="callto-action-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-9">
							<h1 class="text-white">Got Impressed to our features</h1>
							<p class="text-white">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
							</p>
							<a class="primary-btn" href="#">Get a free Quote</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End callto-action-area Area -->


			<!-- Start testomial Area -->
			<section class="portfolio-2" id="testimonial">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div >
							<div class="title text-center">
								<h1 class="mb-10">Testimonies</h1>

								<title>Bootstrap Example</title>
							  <meta charset="utf-8">
							  <meta name="viewport" content="width=device-width, initial-scale=1">
							  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
							  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
							  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
							  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
							  <style>
							  /* Make the image fully responsive */
							  .carousel-inner img {
							      width: 100%;
							      height: 100%;
							  }
							  </style>
							</head>
							<body>
							
							<div id="demo" class="carousel slide" data-ride="carousel">
							  <ul class="carousel-indicators">
							    <li data-target="#demo" data-slide-to="0" class="active"></li>
							    <li data-target="#demo" data-slide-to="1"></li>
							    <li data-target="#demo" data-slide-to="2"></li>
							  </ul>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="img/ewe.png" alt="Los Angeles" width="1100" height="500">
							      <div class="carousel-caption">
											<h2>Sepatu Saya Harum Seperti Bunga Mawar</h2>
							        <h3>@DJSoda</h3>
							      </div>
							    </div>
							    <div class="carousel-item">
							      <img src="img/ewe.png" alt="Chicago" width="1100" height="500">
							      <div class="carousel-caption">
											<h2>Harganya Murah</h2>
							        <h3>@ArdianKurniawan</h3>
							      </div>
							    </div>
							    <div class="carousel-item">
							      <img src="img/ewe.png" alt="New York" width="1100" height="500">
							      <div class="carousel-caption">
											<h2>Sepatu Saya Kembali Seperti Baru</h2>
							        <h3>@DinoAlesandro</h3>
							      </div>
							    </div>

							  </div>
							  <a class="carousel-control-prev" href="#demo" data-slide="prev">
							  
							    <span class="carousel-control-prev-icon"></span>
							  </a>
							  <a class="carousel-control-next" href="#demo" data-slide="next">
							    <span class="carousel-control-next-icon"></span>
							  </a>
							  	
									<p class="carousel-caption" style="color:black;" style="font-family:ubuntu;">Cinderella Is proof that a new pair of shoes can change your life</p>
							</div>
									
									<img src="img/logko.png" class="img-fluid" alt="Paris" width="2500" height="480">

									           
	                    </div>
	                </div>
	            </div>
			</section>

			<!-- End testomial Area -->

<!---start about area-->
<section class="about-area" id="contact">
		<link rel="stylesheet" href="css/about.css">
	<div class="about-container">
		<div class="about-row">
			<div class="about-col-6">
					<h1 id="about-h1">ABOUT SNEAKER.IN</h1>
					<p>SNEAKER.IN ADALAH USAHA YANG BERGERAK DIBIDANG JASA PENCUCIAN KHUSUS SEPATU. 
						SNEAKER.IN DIDIRIKAN PADA TANGGAL 30 AGUSTUS 2018 YANG DAPAT DIBILANG SEBAGAI
						PIONIR LAUNDRY SEPATU DI INDONESIA, BERAWAL DARI TUGAS MATA
						KULIAH PENGEMBANGAN APLIKASI WEB DISALAH SATU UNIVERSITAS SWASTA DI KOTA YOGYAKARTA
						PENGAMBILAN NAMA SNEAKER.IN MERUPAKAN GABUNGAN DARI KATA SERAPAN BAHASA INDONESIA YAITU SNEAKER DAN 
						INDONESIA YANG MEMILIKI ARTI SEPATU KETS YANG BERSIH DARI INDONESIA AGAR LEBIH MUDAH
						DIINGAT MAKA PENULISANNYA MENGGUNAKAN BAHASA INDONESIA MENJADI SNEAKER.IN
					</p>
				</div>
			<div class="about-col-6">
					<img src="yul3.png" height="300" width="300">
			</div>
			
		</div>
	</div>
</section>

<!---end about area-->

			<!-- start footer Area -->
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> Re-distributed by <a target="_blank" href="www.Themewagon.com">Themewagon</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->
			
  <script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    });
  </script>

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/hexagons.min.js"></script>
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/mail-script.js"></script>
			<script src="js/main.js"></script>
		</body>
	</html>
