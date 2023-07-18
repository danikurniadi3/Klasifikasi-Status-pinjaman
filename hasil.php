<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Performance | C-Technology</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <?php include 'assets/assets.php' ?>
  <?php include 'partials/sidebar.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Hasil Klasifikasi Status Pengajuan Pinjaman</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <!-- /.card-header -->
        <!-- form start -->
        <div class="card-body">

          <?php
          // Mendapatkan data dari formulir
          $IncomeNasabah = $_POST['IncomeNasabah'];
          $IncomePasangan = $_POST['IncomePasangan'];
          $JumlahPinjaman = $_POST['JumlahPinjaman'];
          $JangkaWaktuPinjaman = $_POST['JangkaWaktuPinjaman'];
          $Credit_History = $_POST['Credit_History'];

          if ($Credit_History <= 0.50 && $JumlahPinjaman <= 547.50 && $IncomeNasabah <= 6266.50 && $IncomePasangan <= 6623.00 && $JangkaWaktuPinjaman <= 240.00) {
            $status = "Ditolak";
          } else if ($Credit_History <= 0.50 && $JumlahPinjaman <= 547.50 && $IncomeNasabah <= 6176.00 && $IncomePasangan <= 6623.00 && $JumlahPinjaman <= 61.50 && $JangkaWaktuPinjaman) {
            $status = "Ditolak";
          } else if ($Credit_History <= 0.50 && $JumlahPinjaman <= 547.50 && $IncomeNasabah <= 3594.50 && $IncomePasangan <= 6623.00 && $JangkaWaktuPinjaman <= 240.00) {
            $status = "Ditolak";
          } else if ($Credit_History <= 0.50 && $JumlahPinjaman <= 61.50 && $IncomeNasabah <= 6266.50 && $IncomePasangan <= 6623.00 && $JangkaWaktuPinjaman <= 240.00) {
            $status = "Ditolak";
          } else if ($Credit_History <= 0.50 && $JumlahPinjaman <= 61.50 && $IncomeNasabah <= 6176.00 && $IncomePasangan <= 6623.00 && $JumlahPinjaman <= 61.50 && $JangkaWaktuPinjaman <= 240.00) {
            $status = "Ditolak";
          } else if ($Credit_History <= 0.50 && $JumlahPinjaman <= 61.50 && $IncomeNasabah <= 3594.50 && $IncomePasangan <= 6623.00 && $JangkaWaktuPinjaman <= 240.00) {
            $status = "Ditolak";
          } else if ($Credit_History <= 0.50 && $JumlahPinjaman <= 547.50 && $IncomeNasabah <= 6266.50 && $IncomePasangan <= 6623.00 && $JangkaWaktuPinjaman > 240.00) {
            $status = "Disetujui";
          } else if ($Credit_History > 0.50 && $JumlahPinjaman > 121.50 && $IncomeNasabah > 3596.50 && $IncomePasangan <= 26918.50 && $JangkaWaktuPinjaman <= 420.00) {
            $status = "Disetujui";
          } else if ($Credit_History > 0.50 && $JumlahPinjaman > 121.50 && $IncomeNasabah > 3596.50 && $IncomePasangan <= 26918.50 && $JangkaWaktuPinjaman <= 48.00) {
            $status = "Disetujui";
          } else if ($Credit_History >  0.50 && $JumlahPinjaman >  121.50 && $IncomeNasabah >  3596.50 && $IncomePasangan <= 26918.50 && $JangkaWaktuPinjaman <= 24.00){
            $status = "Disetujui";
          }else{
            $status = "Disetujui";
          }

          // Tampilkan hasil klasifikasi
          echo "<h2>Status Peminjaman: $status</h2>";
          ?>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="button" onClick="window.location.href='cekstatus.php';" class="btn btn-primary">Back</button>
          </div>
          </form>
        </div>
        <!-- /.card -->
</body>

</html>