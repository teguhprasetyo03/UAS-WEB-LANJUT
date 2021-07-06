<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <script src="js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="css/datepicker.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Data Nilai Mahasiswa</title>
</head>

<body>
  <div class="container col-md-4 mt-4">
    <div class="card">
      <div class="card">
        <div class="card-header bg-secondary text-white">
          <center>
            <h1> Output </h1>
          </center>
        </div>
        <div class="card-header">
          <?php
          include('koneksi.php'); //memanggil file koneksi
          $datas = mysqli_query($koneksi, "select * from tb_nilai") or die(mysqli_error($koneksi));
          //script untuk menampilkan data barang
          //melakukan perulangan
          while ($row = mysqli_fetch_assoc($datas)) {
          ?>

            <label>NPM : <?= $row['NPM']; ?></td>
            </label> <br>
            <label> Nilai Tugas : <?= $row['nilai_tugas']; ?>
            </label> <br>
            <label> Nilai UTS : <?= $row['nilai_uas']; ?> </label> <br>
            <label> Nilai UAS : <?= $row['nilai_uts']; ?> </label> <br>
            <label> Mata Kuliah : <?= $row['mata_kuliah']; ?> </label> <br> <br>
          <?php
          } ?>
        </div>
      </div>
    </div>
</body>

</html>