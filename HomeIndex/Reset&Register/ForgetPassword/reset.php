 
<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<h2>Lupa Password?</h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  
  <form action="confirmpassword.php" class="modal-content">
    <div class="container">
      <h2 align="center">Reset Password melalui Email</h2>
	   <label for="email"><b>masukan kembali email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required> 
	  <p>masukan password anda</p>
	  <hr>
      <label for="email"><b>Password Baru</b></label>
      <input type="Password" placeholder="Enter Password" name="password" required>
      <div class="clearfix"> 
		<button class="signupbtn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Daftar</button>
      </div>
    </div>
	</form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

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
