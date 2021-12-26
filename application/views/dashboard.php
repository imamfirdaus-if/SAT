<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <?php $this->load->view('partials/head'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <?php $this->load->view('includes/nav'); ?>

  <?php $this->load->view('includes/aside'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
            <h1 class="m-0 text-dark"><b>Selamat Datang</b> Admin toko PT Berkah Perkasa</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
                  
           <!-- Menu Data Pelanggan -->
           <div class="col-lg-4 col-sm-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h2>Data Pelanggan</h2>
              </div>
              <div class="icon">
                <i class="fas fa-address-book"></i>
              </div>
              <a href="<?php echo site_url('pelanggan') ?>" class="small-box-footer">
                More Info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- End of data pelanggan-->

          <!-- Menu Data Transaki -->
          <div class="col-lg-4 col-sm-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h2>Data Transaksi</h2>
              </div>
              <div class="icon">
                <i class="fas fa-table"></i>
              </div>
              <a href="<?php echo site_url('laporan_penjualan') ?>" class="small-box-footer">
                More Info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- End of data transaksi-->

          <!-- Menu Data Produk -->
          <div class="col-lg-4 col-sm-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h2>Data Produk</h2>
              </div>
              <div class="icon">
                <i class="fas fa-box"></i>
              </div>
              <a href="<?php echo site_url('produk') ?>" class="small-box-footer">
                More Info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- End of data transaksi-->
          
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Produk Terlaris</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="produkTerlaris" style="min-height: 500px; height: auto; max-height: 250px; max-width: 100%"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Stok Produk</h3>
              </div>
              <div class="card-body">
                <div class="chart" style="height: auto;max-height: 250px; overflow-y: scroll;">
                  <ul class="list-group" id="stok_produk"></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<?php $this->load->view('includes/footer'); ?>

<?php $this->load->view('partials/footer'); ?>
<script src="<?php echo base_url('assets/vendor/adminlte/plugins/chart.js/Chart.min.js') ?>"></script>
<script>
  var transaksi_hariUrl = '<?php echo site_url('transaksi/transaksi_hari') ?>';
  var transaksi_terakhirUrl = '<?php echo site_url('transaksi/transaksi_terakhir') ?>';
  var stok_hariUrl = '<?php echo site_url('stok_masuk/stok_hari') ?>';
  var produk_terlarisUrl = '<?php echo site_url('produk/produk_terlaris') ?>';
  var data_stokUrl = '<?php echo site_url('produk/data_stok') ?>';
  var penjualan_bulanUrl = '<?php echo site_url('transaksi/penjualan_bulan') ?>';
</script>
<script src="<?php echo base_url('assets/js/unminify/dashboard.js') ?>"></script>
</body>
</html>
