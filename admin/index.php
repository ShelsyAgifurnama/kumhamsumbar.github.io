<?php
include 'model/koneksi.php';
session_start();

if(empty($_SESSION['admin'])){
  echo "<script>
  alert('Silahkan login dulu')
  window.location='login.php'
  </script>";
}
?>

<?php
include 'model/koneksi.php';
?>

<!DOCTYPE html>
<html>
<?php
include 'components/header.php';
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php
  include 'components/navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">ADMIN</span>
    </a>

    <!-- Sidebar -->
   <?php
   include 'components/sidebar.php';
   ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <?php
  include 'content.php';
  ?>
  <!-- /.content-wrapper -->
 <?php
 include 'components/footer.php';
 ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php
include 'components/script.php';
?>

</body>
</html>
