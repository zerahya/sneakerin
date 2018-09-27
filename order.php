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
        <a href="index.php"><button style="float:right; color:white; width:5%; align:center;">HOME</button></a>
        <br><br><br><br>
        <div class="judul">
            <img src="img/Logo Sneakre.png">
        </div>
        <div class="isiForm">
            <h2>Form Order</h2>
            <form action="order-proses.php" method="POST">
                Alamat Lengkap*<br>
                <textarea rows="4" cols="55" name="alamat" required></textarea>
                <br><br>
                Nomor Handphone*<br>
                <input type="text" name="phone" required>
                <br><br>
                Jumlah Sepatu*<br>
                <input type="text" name="jumlah_sepatu" required>
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
                <input type="radio" name="services" value="Premium Suede" id="services" onclick="myFunction()" required>Premium Suede
                <input type="radio" name="services" value="One Day Service" id="services" onclick="myFunction2()">One Day Service
                <input type="radio" name="services" value="Repair Service" id="services" onclick="myFunction3()">Repair Service
                <br>
                <input type="radio" name="services" value="Unyellowing" id="services" onclick="myFunction4()">Unyellowing
                <input type="radio" name="services" value="Standard Clean" id="services" onclick="myFunction5()">Standard Clean
                <input type="radio" name="services" value="Repaint" id="services" onclick="myFunction6()">Repaint
                <br><br>
                Note<br>
                <textarea rows="4" cols="55" name="note"></textarea>
                <br>
                <p class="wajib">*wajib diisi</p>
                <br>
                <button name="order" type="submit" value="submit" onclick="fn_ValForm()">Order Sekarang</button>
<!---
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
                --->
            </form>
        </div>
    </body>
</html>