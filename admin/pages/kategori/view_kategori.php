<div class="content-wrapper">
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">KATEGORI</li>
        </ol>
   </nav>

   <div class="container mt-3">
   	<div class="card">
   		<div class="card-header bg-danger">
   			<h1 align="center"> Data Kategori</h1>
   		</div>
   		<div class="card-body">
         <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#simpan">
           Masukan kategori
           </button>

   			<table class="table table-bordered">
   				<thead class="bg-primary">
   					<tr align="center">
   						<th>Nomor</th>
   						<th>Nama Kategori</th>
   						<th>Aksi</th>
   					</tr>
   				</thead>
   				<tbody>
   					<?php 
                  $no=0;
                  $ambil= $koneksi->query('SELECT * FROM tb_kategori');
   					while ($pecah = $ambil->fetch_assoc()){
                     $no++;
   					?>
   					<tr>
   						<td><?= $no?></td>
   						<td><?=$pecah['kategori_nama'] ?></td>
   						
   						<td class="text-center">
   						 <a href="?page=pages/kategori/edit_kategori&idedit=<?=$pecah['kategori_id']?>"  class="btn btn-success ">Edit</a>
   							<a href="?page=pages/kategori/hapus_kategori&idhapus=<?=$pecah['kategori_id']?>" class="btn btn-warning ">Hapus</a>
   						</td>
   					</tr>
   				<?php } ?>
   				</tbody>
   				
   			</table>
   			
   		</div>
        <!-- Modal -->
<div class="modal fade" id="simpan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">masukan data kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="" method="POST">
          <div class="form-group">
            <label>Nama kategori </label>
            <input type="text" name="nama" class="form-control">
          </div>
        
            
         </div>
      <div class="modal-footer">
         <button type="submit" name="simpan" class="btn btn-danger" >Simpan Data</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
      </div>
      </form>
      <?php
if(isset($_POST['simpan'])){
  $nama =$_POST['nama'];
 
 

  $simpan = $koneksi->query("INSERT INTO tb_kategori (kategori_nama) VALUES ('$nama')");





  if($simpan == TRUE)
  {
    echo "<script>
          alert('data berhasil disimpan')
          window.location='?page=pages/kategori/view_kategori'
          </script>";
  }else{
    echo "<script>
          alert('data gagal disimpan')
          window.location='?page=pages/kategori/view_kategori'
          </script>";
  }
  
  

}
?>
    </div>
  </div>
</div>

    </div>
       </div>
      
      
        
      </div>
      
    </div>
    

   		
   	</div>
      </div>


        