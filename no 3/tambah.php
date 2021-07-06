<!doctype html>

<head>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Data Buku</title>
</head>

<body>
  <div class="container col-md-6 mt-4">
    <h1>Tabel Buku</h1> <br>
    <div class="card">
      <div class="card-header bg-success text-white">
        Tambah Data Buku
      </div>
      <div class="card-body">
        <form action="" method="post" role="form">
          <div class="form-group">
            <label>Kode Buku</label>
            <input type="text" name="kode_buku" required="" class="form-control">
          </div>
          <div class="form-group">
            <label>Judul Buku</label>
            <input type="text" name="judul_buku" class="form-control">
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="jenis_buku" class="form-control">
          </div>
          <div class="form-group">
            <label>Tanggal Terbit</label> <br>
            <input type="text" name="tgl_terbit" class="form-control">
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input type="text" name="stok" required="" class="form-control">
          </div>
          <br>
          <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
        </form>

        <?php
        include('koneksi.php');

        //melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
        if (isset($_POST['submit'])) {
          //menampung data dari inputan
          $kode = $_POST['kode_buku'];
          $judul = $_POST['judul_buku'];
          $harga = $_POST['harga'];
          $tgl_terbit = $_POST['tgl_terbit'];
          $stok = $_POST['stok'];

          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          $datas = mysqli_query($koneksi, "insert into tb_buku (kode_buku,judul_buku,harga,tgl_terbit,stok) values('$kode', '$judul', '$harga', '$tgl_terbit', '$stok')") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
          echo "<script>alert('data berhasil disimpan.');window.location='tampil_buku.php';</script>";
        }
        ?>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

</body>

</html>