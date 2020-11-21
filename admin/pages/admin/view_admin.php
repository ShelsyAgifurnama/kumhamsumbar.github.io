<div class="content-wrapper">
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">ADMIN</li>
        </ol>
   </nav>

   <div class="container mt-3">
    <div class="card">
      <div class="card-header bg-primary">
        <h1 align="center"> Data Admin</h1>
      </div>
      <div class="card-body">

           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#satu">
           Masukan data admin
           </button>

        <table id="" class="table table-bordered mt-3 " >
          <thead class="table table-dark">
            <tr align="center">
              <th>Nomor</th>
              <th>Nama Admin</th>
              <th>Username</th>
              <th>Password</th>
              <th>Email</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
                  <?php
                  $no=0;
                  $ambil= $koneksi->query('SELECT * FROM tb_admin');
                  while ($pecah = $ambil->fetch_assoc()){
                     $no++;
            ?>
            <tr align="center">
              <td><?= $no?></td>
              <td><?=$pecah['admin_nama'] ?></td>
              <td><?=$pecah['admin_username'] ?></td>
              <td><?=$pecah['admin_password'] ?></td>
              <td><?=$pecah['admin_email'] ?></td>
                     <td> <img width="100" height="100" src="assets/img/fotoadmin/<?=$pecah['admin_foto']; ?>" atl=""></td>
              <td>
                <a href="?page=pages/admin/edit_admin&idedit=<?=$pecah['admin_id']?>"  class="btn btn-warning ">Edit</a>
                        <a href="?page=pages/admin/hapus_admin&idhapus=<?=$pecah['admin_id']?>" class="btn btn-danger ">Hapus</a>
              </td>
            </tr>
          <?php } ?>

          </tbody>
          
        </table>
          <!-- Modal -->
<div class="modal fade" id="satu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">masukan data admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Nama </label>
            <input type="text" name="nama" class="form-control">
          </div>
          <div class="form-group">
            <label>username</label>
            <input type="text" name="user" class="form-control">
          </div>
          <div class="form-group">
            <label>password</label>
            <input type="password" name="pass" class="form-control">
          </div>
          <div class="form-group">
            <label>email</label>
            <input type="email" name="email" class="form-control">
          </div>
               <div class="form-group">
                  <label>foto</label>
                  <input type="file" name="foto" class="form-control">
               </div>
        
           
         </div>
        
   
      <div class="modal-footer">
       <button type="submit" name="simpan" class="btn btn-danger">Simpan Data</button>
      
        <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
      </div>
       </form>
       <?php
if(isset($_POST['simpan'])){
  $nama =$_POST['nama'];
  $user =$_POST['user'];
  $pass =md5($_POST['pass']);
   $email =$_POST['email'];


  
  $namafoto   =$_FILES['foto']['name'];
  $lokasifoto =$_FILES['foto']['tmp_name'];
  $namafoto = time() ."_".$namafoto;


  move_uploaded_file($lokasifoto,"assets/img/fotoadmin/" .$namafoto);

  $simpan = $koneksi->query("INSERT INTO tb_admin (admin_nama,
      admin_username,
    admin_password,
      admin_email,
      admin_foto) VALUES ('$nama','$user','$pass','$email','$namafoto')");





  if($simpan == TRUE){
    echo "<script>
          alert('data berhasil disimpan')
          window.location='?page=pages/admin/view_admin'
          </script>";
  }else{
    echo "<script>
          alert('data gagal disimpan')
          window.location='?page=pages/admin/view_admin'
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