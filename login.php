<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="css2/normalize.css">
        <link rel="stylesheet" href="css2/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="login.css">
		<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <title>Document</title>
</head>

        <body>
                
                <form id="booking-form" class="booking-form" name="form1" method="post" action="">
                    <div align="center"><img class="logo" src="img/example_logo.png" title="Example Logo" alt="Example Logo"></div>
                    <div class="h1">Form Login</div>
                    <div id="form-content">
                        <div class="group">
                            <label for="username">Username</label>
                            <div class="addon-right">
                                <input id="username" name="username" class="form-control" type="text">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="group">
                            <label for="password">Password</label>
                            <div class="addon-right">
                                <input id="password" name="password" class="form-control" type="text">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                        <div class="group submit">
                            <label class="empty"></label>
                            <div><input class="submit" name="submit" type="submit" value="Submit"/></div>
                        </div>
						  <div class="group submit">
						  <label class="empty"></label>
						 <div><button type="button" onclick="document.getElementById('id02').style.display='block'" style="background-color:red;">Register</button></div>
						</div>
						
						<p style="text-align:center; color:blue;" ><a onclick="document.getElementById('id01').style.display='block'">Lupa Password?</a></p>
					</div>
                </form>
       
</body>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="register.php" method="post">
    <div class="container">
      <h1>Selamat Datang Di Keluarga Sneaker.in</h1>
      <hr>
	   <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required> 
	  
      <label for="nama"><b>Nama Lengkap</b></label>
      <input type="text" placeholder="Nama Lengkap" name="nama" required>

      <label for="nomor"><b>Nomor  Ponsel</b></label>
      <input type="password" placeholder="Nomor Ponsel" name="nomorHP" required>

      <label for="psw"><b> Kata Sandi</b></label>
      <input type="password" placeholder="Password" name="password" required>  
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="submit">Daftar</button>
      </div>
    </div>
  </form>
</div>


<body>
</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form action="forget.php" class="modal-content">
    <div class="container">
      <h2 align="center">Reset Password melalui Email</h2>
      <p>Masukan email anda di bawah</p>
	  <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <div class="clearfix"> 
		<button type="submit"  class="signupbtn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Daftar</button>
      </div>
    </div>
	</form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');


// When the user clicks anywhere outside of the modal, closse it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	if (event.target == modal2) {
        modal.style.display = "none";
		modal.style.display = "none";
	}
}
</script>


</html>