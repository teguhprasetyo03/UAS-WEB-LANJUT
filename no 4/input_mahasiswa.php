<!doctype html>

<head>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Data Nilai Mahasiswa</title>
</head>

<body>
  <div class="container col-md-6 mt-4">
    <div class="card">
      <div class="card-header bg-secondary text-white">
        <center>
          <h1> Input </h1>
        </center>
      </div>
      <div class="card-body">
        <form action="" method="post" role="form">
          <div class="form-group">
            <label>NPM</label>
            <input type="text" name="npm" required="">
          </div>
          <div class="form-group">
            <label>Nilai Tugas</label>
            <input type="text" name="nilai_tugas" required=""></input>
          </div>
          <div class="form-group">
            <label>Nilai UTS</label>
            <input type="text" name="nilai_uts" required=""></input>
          </div>
          <div class="form-group">
            <label>Nilai UAS</label>
            <input type="text" required="" name="nilai_uas"> </input>
          </div>
          <label>Mata Kuliah</label>
          <select name="mata_kuliah">
            <option value="pemrograman visual">Pemrograman Visual</option>
            <option value="pemrograman web">Pemrograman Web</option>
          </select> <br> <br>
          <button type="submit" class="btn btn-primary" name="submit" value="simpan">Simpan data</button>
        </form>

        <?php
        include('koneksi.php');

        //melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
        if (isset($_POST['submit'])) {
          //menampung data dari inputan
          $npm = $_POST['npm'];
          $n_tugas = $_POST['nilai_tugas'];
          $n_uts = $_POST['nilai_uts'];
          $n_uas = $_POST['nilai_uas'];
          $matkul = $_POST['mata_kuliah'];

          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          $datas = mysqli_query($koneksi, "insert into tb_nilai (npm,nilai_tugas,nilai_uts, nilai_uas,mata_kuliah) values('$npm', '$n_tugas', '$n_uts', '$n_uas', '$matkul')") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
          echo "<script>alert('data berhasil disimpan.');window.location='tampil_nilai.php';</script>";
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