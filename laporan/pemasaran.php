
<?php 
    include 'koneksi.php';

    $sql = 'SELECT * FROM pemesanan';
    $data = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css\bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">

        <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      <div >test form konfirmasi</div>
    </button>

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
                          <th scope="col">Nama</th>
                          <th scope="col">ID Pesanan</th>
                          <th scope="col">Jumlah</th>
                          <th scope="col">Harga per item</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          $total = 0;
                          while($result = mysqli_fetch_assoc($data)) {
                              echo '<tr>';
                              echo '<td>' .  $result['nama']  . '</td>';
                              echo '<td>' .  $result['id']  . '</td>';
                              echo '<td>' .  $result['jumlah_sepatu']  . '</td>';
                              echo '<td>' .  $result['harga']  . '</td>';
                              $total = ($result['jumlah_sepatu'] * $result['harga']) + $total;
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
                    <a href="#" class="btn btn-danger">Batalkan</a>
                    <a href="#" class="btn btn-success">Konfirmasi</a>
                  </div>
          </div>
        </div>
      </div>
    </div>

    </div>

  <script>
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
    });
  </script>

</body>
</html>