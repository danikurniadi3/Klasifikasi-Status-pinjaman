<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Performance | C-Technology</title>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

  <?php include 'partials/sidebar.php' ?>
  <?php include 'assets/assets.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Daily Performance</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>ID Nasabah</th>
                      <th>Jenis Kelamin</th>
                      <th>Status Pernikahan</th>
                      <th>Jumlah Tanggungan</th>
                      <th>Pendidikan</th>
                      <th>Wiraswasta</th>
                      <th>Income Nasabah</th>
                      <th>Income Pasangan</th>
                      <th>Jumlah Pinjaman</th>
                      <th>Jangka Waktu Pinjaman</th>
                      <th>Credit History</th>
                      <th>Wilayah Tempat Tinggal</th>
                      <th>Status Pinjaman</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php include 'inc/koneksi.php';
                    $no = 1;
                    $query = mysqli_query($koneksi, 'SELECT * FROM data_pinjaman');
                    while ($data = mysqli_fetch_array($query)) {
                      ?>
                      <tr>
                        <td>
                          <?php echo $no++ ?>
                        </td>
                        <td>
                          <?php echo $data['ID_Nasabah'] ?>
                        </td>
                        <td>
                          <?php echo $data['JenisKelamin'] ?>
                        </td>
                        <td>
                          <?php echo $data['StatusPernikahan'] ?>
                        </td>
                        <td>
                          <?php echo $data['JumTanggungan'] ?>
                        </td>
                        <td>
                          <?php echo $data['Pendidikan'] ?>
                        </td>
                        <td>
                          <?php echo $data['Wiraswasta'] ?>
                        </td>
                        <td>
                          <?php echo $data['IncomeNasabah'] ?>
                        </td>
                        <td>
                          <?php echo $data['IncomePasangan'] ?>
                        </td>
                        <td>
                          <?php echo $data['JumlahPinjaman'] ?>
                        </td>
                        <td>
                          <?php echo $data['JangkaWaktuPinjaman'] ?>
                        </td>
                        <td>
                          <?php echo $data['Credit_History'] ?>
                        </td>
                        <td>
                          <?php echo $data['WilayahTempatTinggal'] ?>
                        </td>
                        <td>
                          <?php echo $data['StatusPinjaman'] ?>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                  <tfoot>
                    <tr>
                    <th>ID Nasabah</th>
                      <th>Jenis Kelamin</th>
                      <th>Status Pernikahan</th>
                      <th>Jumlah Tanggungan</th>
                      <th>Pendidikan</th>
                      <th>Wiraswasta</th>
                      <th>Income Nasabah</th>
                      <th>Income Pasangan</th>
                      <th>Jumlah Pinjaman</th>
                      <th>Jangka Waktu Pinjaman</th>
                      <th>Credit History</th>
                      <th>Wilayah Tempat Tinggal</th>
                      <th>Status Pinjaman</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include 'partials/footer.php' ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
<!-- ./wrapper -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>