<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="CSS2/normalize.css">
        <link rel="stylesheet" href="CSS2/main.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <title>Document</title>
</head>
        <body>
            <form id="booking-form" class="booking-form" name="form1" method="post" action="editprofile-proses.php">
                <div align="center"><img class="logo" src="img/example_logo.png" title="Example Logo" alt="Example Logo"></div>
                    <div class="group">
                        <label for="name">Nama Lengkap</label>
                        <div><input id="name" name="name" class="form-control" type="text" placeholder="Name" required></div>
                    </div>
                    <div class="group">
                        <label for="phone">Phone</label>
                        <div><input id="phone" name="phone" class="form-control" type="text" placeholder="Phone" onkeypress="ValidateNumberOnly()" required></div>
                    </div>
                    <div class="group submit">
                        <label class="empty"></label>
                        <div><a href="index.php"><button name="save" type="submit" value="save">Save Change</button></a></div>
                        <br>
                        <div><a href="index.php"><button style="background-color:red;" name="cancel" type="button" value="Submit">Cancel</button></a></div>
                    </div>
                </div>
                <div id="form-loading" class="hide"><i class="fa fa-circle-o-notch fa-spin"></i></div>
            </form>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>     
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    
</body>
</html>