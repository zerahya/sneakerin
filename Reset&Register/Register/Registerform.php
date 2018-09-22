<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<h2>Modal Signup Form</h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  
  
  <form class="modal-content">
    <div class="container">
      <h2 align="center">Daftar Sekarang</h2>
      <p>Sudah Punya akun sneaker.In? <a href="#">Masuk</a></p>
	  <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
      <div class="clearfix"> 
		<button class="signupbtn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Daftar</button>
      </div>
    </div>
	</form>
</div>

 
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="register.php" method="post">
    <div class="container">
      <h1>Selamat Datang</h1>
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
        <button type="submit" class="signupbtn" name="submit">Sign Up</button>
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

</body>
</html>
