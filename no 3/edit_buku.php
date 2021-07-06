<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="js/bootstrap-datepicker.js"></script>
  <link rel="stylesheet" href="css/datepicker.css">
  <title>Data Buku</title>
</head>

<body>
  <div class="container col-md-6 mt-4">
    <h1>Tabel Buku</h1> <br>
    <div class="card">
      <div class="card-header bg-info text-white">
        Edit Data Buku
      </div>
      <div class="card-body">
        <?php
        include('koneksi.php');

        $id = $_GET['id']; //mengambil id barang yang ingin diubah

        //menampilkan barang berdasarkan id
        $data = mysqli_query($koneksi, "select * from tb_buku where id = '$id'");
        $row = mysqli_fetch_assoc($data);

        ?>
        <form action="" method="post" role="form">
          <div class="form-group">
            <label>Kode Buku</label>
            <input type="text" name="kode_buku" required="" class="form-control" value="<?= $row['kode_buku']; ?>">
            <!-- ini digunakan untuk menampung id yang ingin diubah -->
            <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">
          </div>
          <div class=" form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control" value="<?= $row['judul_buku']; ?>">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
          </div>
          <div class="form-group">
            <label>Tanggal Terbit</label> <br>
            <input type="text" name="tgl_terbit" class="form-control" value="<?= $row['tgl_terbit']; ?>">
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" required="" class="form-control" value="<?= $row['stok']; ?>">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" value="simpan">Ubah Data</button>
        </form>

        <?php

        if (isset($_POST['submit'])) {
          //menampung data dari inputan
          $kode = $_POST['kode_buku'];
          $judul = $_POST['judul_buku'];
          $harga = $_POST['harga'];
          $tgl_terbit = $_POST['tgl_terbit'];
          $stok = $_POST['stok'];

          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          mysqli_query($koneksi, "update tb_buku set kode_buku='$kode', judul_buku= '$judul',harga='$harga',tgl_terbit='$tgl_terbit',stok='$stok' where id ='$id'") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
          echo "<script>alert('data berhasil diubah.');window.location='tampil_buku.php';</script>";
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>