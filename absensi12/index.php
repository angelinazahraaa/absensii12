<!doctype html>
<html lang="en">
    <?php
    include_once("koneksi.php");
    $result = mysqli_query($mysqli, "SELECT * FROM siswa ORDER BY id DESC");

   if (isset($_POST ["submit"])){
    $nis = $_POST ['nis'];
    $nama = $_POST ['nama'];
    $hari = $_POST ['hari'];
    $keterangan = $_POST ['keterangan'];


    $add =mysqli_query($mysqli, "INSERT INTO siswa(nis,nama,waktu_kehadiran,hari,keterangan)VALUES('$nis','$nama','$hari','$keterangan', NOW())");

} 

    ?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Absen</title>
  </head>
  <body>
    <!-- As a heading -->
<nav class="navbar navbar-dark bg-dark">
  <span class="navbar-brand mb-0 h1">Absen XII PPLG1</span>
</nav>
    <h2 class="p-4 text-center">DAFTAR KEHADIRAN XII PPLG 1</h2>

    <div class="container">
     <form action="" method="post" name="form_absen">
      <div class="col-md-6 offset-md-3">
         <div class="mb-3">
          <label class="form-label">Nis</label>
          <input type="text" class="form-control" nis="nis" placeholder="Masukkan Nis">
        </div>
        <div class="mb-3">
          <label class="form-label">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
       </div>
       <div class="mb-3">
           <label class="form-label">Hari</label>
          <input type="text" class="form-control" name="hari" placeholder="Masukkan Hari">
        </div>
        <div class="mb-3">
           <label class="form-label">Keterangan</label>
          <input type="text" class="form-control" name="keterangan" placeholder="Masukkan Keterangan">
        </div>
        <br>
       <div class="text-center">
        <button type="reset" class="btn btn-dark" name="Reset">Reset</button>
        <button type="submit" class="btn btn-dark" name="Submit">Hadir</button>
       </div>
    </div>
</div>

    </form>

    <table class="my-5 table table-striped">
        <tr class="table-dark">
            <th>Nis</th>
            <th>Nama</th>
            <th>waktu_kehadiran</th>
            <th>hari</th>
            <th>Keterangan</th>
        </tr>

        <?php
        while ($sr = mysqli_fetch_array($result)){
         ?>
           <tr class="table-primary">
            <td><?php echo $sr['nis']; ?></td>
            <td><?php echo $sr['nama']; ?></td>
            <td><?php echo $sr['waktu_kehadiran']; ?></td>
            <td><?php echo $sr['hari']; ?></td>
            <td><?php echo $sr['keterangan']; ?></td>
          
           </tr>
           <?php
        }
        ?>
    </table>
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>