 <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/img/sumbar/banner.jpeg); height: 500px;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            
                            <a href="" class="post-title" data-animation="fadeInUp" data-delay="300ms">Kemenkumham Sumbar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/img/sumbar/logo3.jpg); height: 500px;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                           
                            <a href="" class="post-title" data-animation="fadeInUp" data-delay="300ms">Kemenkumham Sumbar</a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/img/sumbar/ZI.jpg); height:500px;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                    <!-- Post Contetnt -->
                        <div class="post-content text-center">
                               
                            <a href="" class="post-title" data-animation="fadeInUp" data-delay="300ms">Kemenkumham Sumbar</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">

            <div class="single-sidebar-widget p-30">
                <div class="section-heading">
                    <h5>Panduan</h5>
                </div>
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Button trigger modal -->
             
                    <a href="?page=bagian/panduan/unitpusat" class="facebook-fans text-center">Unit Pusat </a>
                    <!-- Twitter -->
                    <a href="?page=bagian/panduan/pengaduan" class="twitter-followers text-center"> pengaduan </a>
                    <!-- YouTube -->
                    <a href="?page=bagian/panduan/layanan" class="youtube-subscribers text-center">layanan online</a>
                    <!-- Google -->
                    <a href="?page=bagian/panduan/epasti" class="google-followers text-center">E-Pasti</a>
                    <a href="?page=bagian/panduan/info" class="facebook-fans text-center"   
                      >info internal </a>
                    <a href="?page=bagian/panduan/aplikasi" class="twitter-followers text-center"> Aplikasi </a>
                </div>
            </div>
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Berita Terkini</h5>
                </div>

               <!-- Single Blog Post -->
                <?php 
                
                $ambil = $koneksi->query("SELECT * FROM tb_berita WHERE kategori_id ='10'");
                 while ($pecah = $ambil->fetch_assoc()) {
                
                ?>
                    
                <div class="post-thumbnail">
                    <img src="admin/assets/img/fotoberita/<?= $pecah['berita_gambar'] ?>" 
                    style="width: 100px;height:70px;" alt="">
                </div>
                <div class="post-content">
                    <a href="?page=berita&iddetail=<?=$pecah['berita_id'] ?>" class="post-title"><?= $pecah['berita_judul'] ?></a>
                    <div class="post-meta d-flex justify-content-between mb-3">
                        <i class="fa fa-eye" aria-hidden="true">
                        <a href=""><?=  $pecah['berita_tgl'] ?> </a></i>
                    </div>
                </div>
                <?php } ?>
            </div>

        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
<div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
    <div class="card mb-3 " style="max-width: 700px;">
        <div class="card-header bg-dark ">
            <h5 class="text-light">Selamat Datang</h5>
        </div>

<div class="card-body bg-danger ">
    <div class="row no-gutters">
        <div class="col-md-4">
          <img src="assets/img/sumbar/suharman.jpeg" class="card-img" alt="...">
        </div>

        <div class="col-md-8">
            <div class="card-body ">
                <div class="card-title text-light ">Selamat datang di Website Kantor Wilayah Sumatera Barat Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia</div>
                    <p class="card-text"><b class="text-light">Kepala Kantor Wilayah,</b></p>
                    <p class="card-text"><div class="text-light">SUHARMAN, Bc.I.P., S.H., M.H
                    <br>NIP. 196011131985031002</div></p>
                </div>
            </div>
        </div>
        
    </div>
</div><br>



            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                 <div class="section-heading">
                    <h5>Berita kementrian</h5>
                </div>


                <div class="trending-post-slides owl-carousel">
                <?php 
                
                  $ambil = $koneksi->query("SELECT * FROM tb_berita WHERE kategori_id ='12'");
                 while ($pecah = $ambil->fetch_assoc()) {
                
              
               ?>
        
                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="admin/assets/img/fotoberita/<?= $pecah['berita_gambar'] ?>" 
                        style="width:400px;height:200px;" alt="">
                        <div class="post-content">
                           <div class="text-light"><?= $pecah['berita_tgl'] ?></div>
                            <a href="?page=berita&iddetail=<?=$pecah['berita_id'] ?>" class="post-title"><?= $pecah['berita_judul'] ?></a>
                        </div>
                    </div>
                     <?php } ?>
                

              
                    <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="assets/img/sumbar/dsc2.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata"></a>
                            <a href="video-post.html" class="post-title"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feature Video Posts Area -->
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
               <div class="section-heading">
                    <h5>Berita Unit pelaksana teknis</h5>
                </div>

                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <!-- Single Featured Post -->
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                  <img src="assets/img/sumbar/download.jpg"
                    style="width:500px;height:300px;" alt=""
                     data-toggle="modal" data-target="#video">>
                                    <a href="https://youtu.be/PoeHI1tSF_g" class="video-play"><i class="fa fa-play"></i></a>
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">17 Agustus 2020</a>
                                        <a href="#">lifestyle</a>
                                    </div>
                                   <a href="#" class="post-title">Video Profil Kantor Wilayah Kemenkumham Sumatera Barat Menuju WBK Tahun 2020</a>
                                </div>
                                <!-- Post Share Area -->
                                <div class="post-share-area d-flex align-items-center justify-content-between">
                                    <!-- Post Meta -->
                                    <div class="post-meta pl-3">
                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                    </div>
                                    <!-- Share Info -->
                                    <div class="share-info">
                                        <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                        <!-- All Share Buttons -->
                                        <div class="all-share-btn d-flex">
                                            <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                             <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                <div class="single--slide">

                             
                <?php  
                  $ambil = $koneksi->query("SELECT * FROM tb_berita WHERE kategori_id ='13'");
                 while ($pecah = $ambil->fetch_assoc()) {
                ?>
                 
                
                    <div class="single-blog-post d-flex style-3">
                      <div class="post-thumbnail">
                       <img src="admin/assets/img/fotoberita/<?= $pecah['berita_gambar'] ?>"
                        style="width: 70px;height:70px;" alt="">                     
                      </div>
                    <div class="post-content">
                        <a href="?page=berita&iddetail=<?=$pecah['berita_id'] ?>" class="post-title"><h6><?= $pecah['berita_judul'] ?></h6></a>
                        <a href=""class="post-title">
                            <?= $pecah['berita_tgl'] ?>

                        <div class="post-meta d-flex">
                                                
                        </div>
                    </div>
                    </div>


                     <?php } ?>
                                  
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                          
                                        </div>
                                        <div class="post-content">
                                           
                                            <div class="post-meta d-flex">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="single--slide">
                                  

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="assets/img/sumbar/img.jpg"
                                             style="width: 70px;height:70px;" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.html" class="post-title"><h6>
                                                PENGAMBILAN SUMPAH DAN PELANTIKAN PEJABAT ESELON IV/b PADA KANTOR IMIGRASI KELAS II BUKITTINGGI
                                            </h6></a>
                                            <b>2015-09-25</b>
                                            <div class="post-meta d-flex">
                                               
                                            </div>
                                        </div>
                                    </div>
                                      <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="assets/img/sumbar/img2.jpg" 
                                             style="width: 70px;height:70px;" alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.html" class="post-title"><h6>
                                            Rapat tim PORA Kanim Kelas II Bukittinggi</h6></a>
                                             <b>2015-09-7</b>
                                            <div class="post-meta d-flex">
                                               
                                            </div>
                                        </div>
                                    </div>
                                         <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="assets/img/sumbar/dsc.jpg"
                                            style="width: 70px;height:70px;"alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href="single-post.html" class="post-title"><h6>
                                                Rapat Kakanwil Sumabar Dengan Ka UPT Se Sumatera 
                                            </h6></a>
                                            <b>2014-09-29</b>
                                            <div class="post-meta d-flex">
                                              
                                            </div>
                                        </div>
                                    </div>
                                     <div class="single-blog-post d-flex style-3">
                                        <div class="post-thumbnail">
                                            <img src="assets/img/sumbar/dsc2.jpg"
                                            style="width: 70px;height:70px;"alt="">
                                        </div>
                                        <div class="post-content">
                                            <a href=" " class="post-title"><h6>
                                               UPACARA PENYERAHAN REMISI DI LEMBAGA PEMASYARAKATAN KLAS IIA PADANG 
                                            </h6></a>
                                            <b>2014-08-20</b>
                                            <div class="post-meta d-flex">
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
                        <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <h6><u>Berita Terkait</u></h6>
                <!-- Section Title -->    
                <div class="section-heading">
                    <a href="?page=bagian/daftar/isi">
                    <h6>Dibuka hari ini, simak ini jadwal<br> dan syarat CPNS 2020 Sumbar</h6>
                </a>
                </div>
             

            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
        

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <div class="section-heading">
                    <h5>Berita Unit Pusat</h5>
                </div>
                 <?php 
                
                  $ambil = $koneksi->query("SELECT * FROM tb_berita WHERE kategori_id ='11'");
                 while ($pecah = $ambil->fetch_assoc()) {
                
              
               ?>
                    <div class="post-thumbnail">
                        <img src="admin/assets/img/fotoberita/<?= $pecah['berita_gambar'] ?>" 
                        style="width: 100px;height:70px;" alt="">
                    </div>
                    <div class="post-content">
                         <a href="?page=berita&iddetail=<?=$pecah['berita_id'] ?>" class="post-title"><h6><?= $pecah['berita_judul'] ?></h6></a>
                        <div class="post-meta d-flex justify-content-between mb-3">
                            <i class="fa fa-eye" aria-hidden="true">
                            <a href=""><?=  $pecah['berita_tgl'] ?> </a></i>
                           
                        </div>
                    </div>
                <?php } ?>
                <!-- Section Title -->
               
            <!-- Sidebar Widget -->
           <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Kategori</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="sidebar-item categories">
                     <?php $ambil = $koneksi->query("SELECT * FROM tb_kategori");
                        while ($pecah = $ambil->fetch_assoc()) {
                         ?>
                
             <li><h3><a href="?page=single-post&idkategori=<?= $pecah['kategori_id'] ?>"><?= $pecah['kategori_nama']  ?></a></h3></li>
                  
              </ul>
              <?php }  ?>
                  
               
            </div>
            


         

     

        
        </div>
    </section> 