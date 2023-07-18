<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Performance | C-Technology</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <?php include 'assets/assets.php'?>
  <?php include 'partials/sidebar.php'?>
  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Klasifikasi Status Pengajuan Pinjaman</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="hasil.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputname">Income Nasabah</label>
                    <input type="number" class="form-control" id="IncomeNasabah" placeholder="IncomeNasabah" name="IncomeNasabah" max="10000" min="0" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputposisi">Income Pasangan</label>
                    <input type="number" class="form-control" id="IncomePasangan" placeholder="IncomePasangan" name ="IncomePasangan"  max="10000" min="0">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputtelepon">Jumlah Pinjaman</label>
                    <input type="number" class="form-control" id="JumlahPinjaman" placeholder="JumlahPinjaman" name ="JumlahPinjaman" max="9999" min="0" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputemail">Jangka waktu Pinjaman</label>
                    <input type="number" class="form-control" id="JangkaWaktuPinjaman" placeholder="JangkaWaktuPinjaman" name="JangkaWaktuPinjaman"  max="500" min="0" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputemail">Credit History</label>
                    <input type="number" class="form-control" id="Credit_History" placeholder="Credit_History" name="Credit_History"  max="1" min="0">
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" onClick="window.location.href='index.php';" class="btn btn-primary">Back</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
</body>
</html>