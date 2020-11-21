<div class="content-wrapper">  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">ADMIN</li>
        </ol>
   </nav>

   <div class="container mt-3">
   	<div class="card">
   		<div class="card-header bg-primary">
        <h1 align="center"> Data Pendaftar</h1>
      </div>
   		<div class="card-body">
        <div class="table-responsive">
   			<table id="" class="table table-bordered mt-3 ">
   				 <thead class="table table-dark">
                    <tr align="center">
                      <th>Nomor</th>
                      <th>Nama Pendaftar</th>
                      <th>ttlahir </th>
                      <th>Jenis kelamin</th>
                      <th>agama</th>
                      <th>warga negara</th>
                      <th>anak ke</th>
                      <th>Alamat</th>
                      <th>pendidikan terakhir</th>
                      <th>status</th>
                       <th>Tempat Lahir</th>
                      <th>foto</th>
                      <th>Aksi</th>
                   </tr></thead>
                    <tbody>
                  <?php
                  $no=0;
                  $ambil= $koneksi->query('SELECT * FROM tb_pendaftar');
                  while ($pecah = $ambil->fetch_assoc()){
                     $no++;
            ?>
            <tr align="center">
              <td><?= $no?></td>
              <td><?=$pecah['pendaftar_nama'] ?></td>
              <td><?=$pecah['pendaftar_ttl'] ?></td>
              <td><?=$pecah['pendaftar_jk'] ?></td>
              <td><?=$pecah['pendaftar_agama'] ?></td>
              <td><?=$pecah['pendaftar_wn'] ?></td>
              <td><?=$pecah['pendaftar_anake'] ?></td>
              <td><?=$pecah['pendaftar_alamat'] ?></td>
              <td><?=$pecah['pendaftar_pdkakhir'] ?></td>
              <td><?=$pecah['pendaftar_status'] ?></td>
              <td><?=$pecah['pendaftar_tmplahir'] ?></td>
              <td> <img width="100" height="100" src="assets/img/fotopendaftar/<?=$pecah['pendaftar_gambar']; ?>" 
              	atl=""></td>
                <td>
                   <a href="?page=pages/pendaftar/hapus_daftar&idhapus=<?=$pecah['pendaftar_id']?>" class="btn btn-danger ">Hapus</a>
                </td>
             
            </tr>
          <?php } ?>

          </tbody>
          
        
   				
   			</table>
        </div>
   			
   		</div>
   	</div>
   	
   </div>
	
</div>