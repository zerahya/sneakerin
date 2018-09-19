<!DOCTYPE html>
<html>
    <head>
        <title>Order Service Sneekers</title>
        <link rel="stylesheet" href="order.css">
<!---------
        <script type="text/javascript">
            function fn_ValForm()
            {
                var sMsg="";
    
                if(document.getElementsByName("nama").value =="")
                {
                    sMsg +=("\n*Anda belum mengisikan Nama");
                }
                if(document.getElementByName("alamat").value =="")
                {
                    sMsg +=("\n*Anda belum mengisikan Alamat");
                }
                if(document.getElementByName("phone").value =="")
                {
                    sMsg +=("\n*Anda belum mengisikan nomor telepon");
                }
                if(document.getElementsByName("jumlah_sepatu").value =="")
                {
                    sMsg +=("\n*Anda belum mengisikan Jumlah Sepatu");
                }
                if(document.getElementsByName("service").value =="")
                {
                    sMsg +=("\n*Anda belum mengisikan Jenis Service");
                }
                if(sMsg !="")
                {
                    alert("Peringatan:" +sMsg);
                    return false;
                }
                else 
                    return true; 
            }
        </script>
---->

    </head>
    <body>

        <div class="topnav">
            <a href><img src="About/yulita.png"alt="SEPATU" width="120" height="20"></a>
            <div class="topnav-right">
                <a href="#Home">Home</a>
                <a href="service.php">Services</a>
                <a href="#Gallery">Gallery</a>
                <a href="#Testimonies">Testimonies</a>
                <a href="About/about.css">About</a>
            </div>
        </div>

        <div class="judul">
            <img src="Logo Sneaker.png">
        </div>
        <div class="isiForm">
            <h2>Form Order</h2>
            <form action="order-proses.php" method="POST">
                Nama Lengkap*<br>
                <input type="text" name="nama">
                <br><br>
                Alamat Lengkap*<br>
                <textarea rows="4" cols="55" name="alamat"></textarea>
                <br><br>
                Nomor Handphone*<br>
                <input type="text" name="phone">
                <br><br>
                Jumlah Sepatu*<br>
                <input type="text" name="jumlah_sepatu">
                <br><br>
                Jenis Service*<br>
                <div class="jenisservis">
                    <p id="text" style="display:none">Premium Suede</p>
                    <p id="text2" style="display:none">One Day Service</p>
                    <p id="text3" style="display:none">Repair Service</p>
                    <p id="text4" style="display:none">Unyellowing</p>
                    <p id="text5" style="display:none">Standard Clean</p>
                    <p id="text6" style="display:none">Repaint</p>
                </div>
                <input type="checkbox" name="service" value="Premium Suede" id="myCheck" onclick="myFunction()">Premium Suede
                <input type="checkbox" name="service" value="One Day Service" id="myCheck2" onclick="myFunction2()">One Day Service
                <input type="checkbox" name="service" value="Repair Service" id="myCheck3" onclick="myFunction3()">Repair Service
                <br>
                <input type="checkbox" name="service" value="Unyellowing" id="myCheck4" onclick="myFunction4()">Unyellowing
                <input type="checkbox" name="service" value="Standard Clean" id="myCheck5" onclick="myFunction5()">Standard Clean
                <input type="checkbox" name="service" value="Repaint" id="myCheck6" onclick="myFunction6()">Repaint
                <br><br>
                Note<br>
                <textarea rows="4" cols="55" name="note"></textarea>
                <br>
                <p class="wajib">*wajib diisi</p>
                <br>
                <button name="order" type="submit" value="submit" onclick="fn_ValForm()">Order Sekarang</button>
-
                <script>
                    function myFunction() {
                        var checkBox = document.getElementById("myCheck");
                        var text = document.getElementById("text");
                        if (checkBox.checked == true){
                            text.style.display = "block";
                        } else {
                           text.style.display = "none";
                        }
                    }

                    function myFunction2() {
                        var checkBox = document.getElementById("myCheck2");
                        var text = document.getElementById("text2");
                        if (checkBox.checked == true){
                            text.style.display = "block";
                        } else {
                           text.style.display = "none";
                        }
                    }

                    function myFunction3() {
                        var checkBox = document.getElementById("myCheck3");
                        var text = document.getElementById("text3");
                        if (checkBox.checked == true){
                            text.style.display = "block";
                        } else {
                           text.style.display = "none";
                        }
                    }

                    function myFunction4() {
                        var checkBox = document.getElementById("myCheck4");
                        var text = document.getElementById("text4");
                        if (checkBox.checked == true){
                            text.style.display = "block";
                        } else {
                           text.style.display = "none";
                        }
                    }

                    function myFunction5() {
                        var checkBox = document.getElementById("myCheck5");
                        var text = document.getElementById("text5");
                        if (checkBox.checked == true){
                            text.style.display = "block";
                        } else {
                           text.style.display = "none";
                        }
                    }

                    function myFunction6() {
                        var checkBox = document.getElementById("myCheck6");
                        var text = document.getElementById("text6");
                        if (checkBox.checked == true){
                            text.style.display = "block";
                        } else {
                           text.style.display = "none";
                        }
                    }
                </script>
            </form>
        </div>
    </body>
</html>