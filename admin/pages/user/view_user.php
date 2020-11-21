<div class="content-wrapper">  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">ADMIN</li>
        </ol>
   </nav>

   <div class="container mt-3">
   	<div class="card">
   		<div class="card-header bg-primary">
        <h1 align="center"> Data username</h1>
      </div>
   		<div class="card-body">
   			<table id="" class="table table-bordered mt-3 ">
   				 <thead class="table table-dark">
                    <tr align="center">
                      <th>Nomor</th>
                      <th>User NIK</th>
                      <th>Password </th>
                      <th>Aksi</th>
                   </tr></thead>
                    <tbody>
                  <?php
                  $no=0;
                  $ambil= $koneksi->query('SELECT * FROM tb_user');
                  while ($pecah = $ambil->fetch_assoc()){
                     $no++;
            ?>
            <tr align="center">
              <td><?= $no?></td>
              <td><?=$pecah['user_nik'] ?></td>
              <td><?=$pecah['user_password'] ?></td>
                <td>
                   <a href="?page=pages/user/hapus_user&idhapus=<?=$pecah['user_id']?>" class="btn btn-danger ">Hapus</a>
                </td>
             
            </tr>
          <?php } ?>

          </tbody>
          
        
   				
   			</table>
   			
   		</div>
   	</div>
   	
   </div>
	
</div>