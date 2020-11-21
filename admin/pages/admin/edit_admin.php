<div class="content-wrapper">
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">ADMIN</li>
        </ol>
   </nav>
   <?php
$id= $_GET['idedit'];
$dataedit = $koneksi->query("SELECT * FROM tb_admin WHERE admin_id ='$id'")->fetch_assoc();//untuk menampilkkan isi data

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
	
	<div class="container mt-3">
		<div class="card">
			<div class="card-header bg-warning">
				<h1 align="center">Edit data admin</h1>	
			</div>
			<div class="card-body">
				<form action="" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nama </label>
						<input type="text" value="<?= $dataedit['admin_nama']?>"  name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label>username </label>
						<input type="text" value="<?= $dataedit['admin_username']?>"  name="user" class="form-control">
					</div>
					<div class="form-group">
						<label>password </label>
						<input type="pass" value="<?= $dataedit['admin_password']?>"  name="pass" class="form-control">
					</div>
					<div class="form-group">
						<label>email </label>
						<input type="email" value="<?= $dataedit['admin_email']?>"  name="email" class="form-control">
					</div>
					<div class="form-group">
						
						<img width="150" width="150" src="assets/img/fotoadmin/<?= $dataedit['admin_foto'] ?>" alt="">
						<input type="text" readonly class="form-contol mt-2" value="<?= $dataedit['admin_foto']?>"  name="fotolama">

					</div>
					<div class="form-group">
						<label>upload foto admin</label>
						<input type="file" name="foto" class="form-control">
					</div>
					<button type="submit" name="edit" class="btn btn-warning btn-block">edit data</button>

				</form>

				<?php 
				if(isset($_POST['edit'])){
					$nama  =$_POST['nama'];
					$user  =$_POST['user'];
					$pass =$_POST['pass'];
					$email =$_POST['email'];
					
					$fotolama  =$_POST['fotolama'];
					$namafoto = time() ."_".$namaaslifoto;

					$namafoto =$_FILES['foto']['name'];
					$lokasifoto=$_FILES['foto']['tmp_name'];

					if(!empty($lokasifoto)){
						unlink("assets/img/fotoadmin/" .$fotolama);
						move_uploaded_file($lokasifoto, "assets/img/fotoadmin/". $namafoto);
						$editdata =$koneksi->query("UPDATE tb_admin SET 
							admin_nama    = '$nama',
							admin_username= '$user',
							admin_password= '$pass',
							admin_email   = '$email',
							admin_foto    = '$namafoto' WHERE admin_id='$id'");
					}
					else{
						$editdata = $koneksi->query("UPDATE tb_admin SET
						    admin_nama    = '$nama',
							admin_username= '$user',
							admin_password= '$pass',
							admin_email   = '$email'
							 WHERE admin_id='$id'");
					}
					if($editdata == TRUE){
						echo "<script>
						alert('data berhasil diedit')
						window.location='?page=pages/admin/view_admin'</script>";
					}else{
						echo "<script>
						alert('data gagal diedit')
						window.location='?page=pages/admin/edit_admin'</script>";
					}

				}
				?>

			</div>

			
		</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>