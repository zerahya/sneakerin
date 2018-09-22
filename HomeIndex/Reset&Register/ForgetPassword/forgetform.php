<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<h2>Lupa Password?</h2>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
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
