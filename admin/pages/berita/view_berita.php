<div class="content-wrapper">
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">ADMIN</li>
        </ol>
   </nav>

   <div class="container mt-3">
    <div class="card">
      <div class="card-header bg-warning">
        <h1 align="center"> Data Berita</h1>
      </div>
      <div class="card-body">

           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">
           Masukan data berita
           </button>

        <table class="table table-bordered mt-3 ">
          <thead class="table table-dark">
            <tr align="center">
              <th>Nomor</th>
              <th>Judul Berita</th>
              <th>Kategori Nama</th>
              <th>Isi Berita</th>
              <th>Tanggal Berita</th>
              <th>Gambar Berita</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
                <?php
                 $no=0;
  $ambil = $koneksi->query("SELECT * FROM tb_berita a JOIN tb_kategori b ON  a.kategori_id=b.kategori_id");
                  $no = 1;
                 while ($pecah = $ambil->fetch_assoc()) {
                                    

                ?>
            <tr align="center">
              <td><?= $no++ ?></td>
              <td><?= $pecah['berita_judul'] ?></td>
              <td><?= $pecah['kategori_nama'] ?></td>
              <td><?= $pecah['berita_isi'] ?></td>
              <td><?= $pecah['berita_tgl'] ?></td>
              
                     <td> <img width="150" height="150" src="assets/img/fotoberita/<?=$pecah['berita_gambar']; ?>"  atl=""></td>
              <td>
                <a href="?page=pages/berita/edit_berita&idedit=<?=$pecah['berita_id']?>" class ="btn btn-warning">edit</a>
                <a href="?page=pages/berita/hapus_berita&idhapus=<?=$pecah['berita_id']?>" class="btn btn-primary ">Hapus</a>
              </td>
            </tr>
          <?php } ?>

          </tbody>
          
        </table>
          <!-- Modal -->
          
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">masukan data berita</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Judul berita </label>
            <input type="text" name="judul" class="form-control">
          </div>
          <div class="form-group">
            <label>Kategori nama</label>
            
            <select name="kat" class="form-control">
              <option value="">silahkan pilih </option>

              <?php 
              $ambil = $koneksi->query("SELECT * FROM tb_kategori");
              while ($pecah = $ambil->fetch_assoc()){ ?>

                <option value="<?=$pecah['kategori_id']; ?>"><?=$pecah['kategori_nama'] ?></option>
                <?php  }?>
             
              
            </select>
             
            
          </div>
          <div class="form-group">
            <label>Isi berita</label>
            <textarea  name="isi"cols="30" rows="5" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label>Tanggal berita</label>
            <input type="date" name="tgl" class="form-control">
          </div>
               <div class="form-group">
                  <label>Foto</label>
                  <input type="file" name="foto" class="form-control">
               </div>
        
           
         </div>
        <!--batas div modal-->
   
      <div class="modal-footer">
       <button type="submit" name="simpan" class="btn btn-danger">Simpan Data</button>
      
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Batal</button>
      </div>
       </form>


        <?php
if(isset($_POST['simpan'])){
  $judul =$_POST['judul'];
  $kategori =$_POST['kat'];
  $isi =$_POST['isi'];
   $tgl =$_POST['tgl'];




    $namafoto   =$_FILES['foto']['name'];
    $lokasifoto =$_FILES['foto']['tmp_name'];
    $size = $_FILES['foto']['size'];
    if($size > 1000000){
      echo "<script>
      alert ('batas file 3mb')
      window.location = '?page=pages/berita/view_berita'
      </script>";
    }else{


  move_uploaded_file($lokasifoto,"assets/img/fotoberita/" .$namafoto);
  }

  $simpan = $koneksi->query("INSERT INTO tb_berita (kategori_id,
    berita_judul,
    berita_tgl,
    berita_isi,
    berita_gambar) VALUES ('$kategori','$judul','$tgl','$isi','$namafoto')");





  if($simpan == TRUE){
    echo "<script>
          alert('data berhasil disimpan')
          window.location='?page=pages/berita/view_berita'
          </script>";
  }else{
    echo "<script>
          alert('data gagal disimpan')
          window.location='?page=pages/berita/view_berita'
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