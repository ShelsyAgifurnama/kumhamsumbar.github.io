
<div class="content-wrapper">
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">ADMIN</li>
        </ol>
   </nav>
   <?php
$id = $_GET['idedit'];
$dataedit = $koneksi->query("SELECT * FROM tb_berita WHERE berita_id ='$id'")->fetch_assoc();

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
			<div class="card-header bg-info">
				<h1 align="center">Edit data berita</h1>	
			</div>
			<div class="card-body">
				<form action="" method="POST" enctype="multipart/form-data">
					
					 <div class="form-group">
                        <label>Judul berita </label>
                       <input type="text" value="<?= $dataedit['berita_judul']?>"  name="judul" class="form-control">
                     </div>
                     <div class="form-group">
                        <label>Kategori nama</label>
                        <select name="kat" id="kategori" class="form-control">
                       
                           <?php 
                              $ambil = $koneksi->query("SELECT * FROM tb_kategori");
                              while ($pecah = $ambil->fetch_assoc()){ ?>

                           <option value="<?=$pecah['kategori_id']; ?>"><?=$pecah['kategori_nama'] ?></option>
                         <?php  }?>
                        </select>
                        <script>

                        	//mengembalikan sebuah Elementobjek yang mewakili unsur yang idproperti cocok dengan string tertentu. Karena ID elemen harus unik jika ditentukan, ini adalah cara yang berguna untuk mendapatkan akses ke elemen tertentu
                        	document.getElementById('kategori').value = '<?= $dataedit['kategori_id']  ?>'
                        </script>
                      </div>



                      <div class="form-group">
                          <label>Isi berita</label>
                          <textarea  name="isi"cols="30" rows="5" class="form-control"><?= $dataedit['berita_isi']?>
                          </textarea>
                          
                      </div>
                      <div class="form-group">
                           <label>Tanggal berita</label>
                           <input type="date" value="<?= $dataedit['berita_tgl']?>"  name="tgl" class="form-control">
                      </div>


              <div class="form-group">
			<img width="150" width="150" src="assets/img/fotoberita/<?= $dataedit['berita_gambar'] ?>" alt="">
			<input type="text" readonly class="form-contol mt-2" value="<?= $dataedit['berita_gambar']?>"  name="fotolama">
		      </div>

					<div class="form-group">
						<label>upload foto admin</label>
						<input type="file" name="foto" class="form-control">
					</div>
					<button type="submit" name="edit" class="btn btn-warning ">edit data</button>

				</form>

				<?php 
				if(isset($_POST['edit'])){
					$judul =$_POST['judul'];
                    $kategori =$_POST['kat'];
                    $isi =$_POST['isi'];
                    $tgl =$_POST['tgl'];

                    $fotolama  = $_POST['fotolama'];
					$namafoto = time() ."_".$namaaslifoto;

					$namafoto =$_FILES['foto']['name'];
					$lokasifoto=$_FILES['foto']['tmp_name'];


					
					if(!empty($lokasifoto)){
						unlink("assets/img/fotoberita/" .$fotolama);
						move_uploaded_file($lokasifoto, "assets/img/fotoberita/". $namafoto);
						$editdata =$koneksi->query("UPDATE tb_berita SET 
							kategori_id  = '$kategori',
                            berita_judul = '$judul',
                            berita_tgl   = '$tgl',
                            berita_isi   = '$isi',
							berita_gambar = '$namafoto' WHERE berita_id='$id'");
					}
					else{
						$editdata = $koneksi->query("UPDATE tb_berita SET
						   kategori_id = '$kategori',
                           berita_judul = '$judul',
                           berita_tgl = '$tgl',
                           berita_isi = '$isi'
							 WHERE berita_id='$id'");
					}
					
					if($editdata == TRUE){
						echo "<script>
						alert('data berhasil diedit')
						window.location='?page=pages/berita/view_berita'</script>";
					}else{
						echo "<script>
						alert('data gagal diedit')
						window.location='?page=pages/berita/edit_berita'</script>";
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