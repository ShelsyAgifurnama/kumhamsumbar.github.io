<?php

$id = $_GET['idhapus'];

//hapus gambar

$datagambar =$koneksi->query("SELECT berita_gambar FROM tb_berita WHERE berita_id = '$id'")->fetch_assoc();// ini query berguna menangkap gambar
$foto = $datagambar['berita_gambar'];
unlink('assets/img/fotoberita/' . $foto);//ini query untuk menghapus foto lama supaya tidak memakan banyak memori

//ini query hapus data berdasarkan id
$datahapus = $koneksi->query("DELETE FROM tb_berita WHERE berita_id = '$id'");

if($datahapus == TRUE){// jika $datahapus menghasilkan benar/true maka akan menampilkan 'data berhasil dihapus'
	echo "<script>
	alert('data berhasil dihapus')
    window.location='?page=pages/berita/view_berita'</script>";// tempat dimana folder itu  disimpan
}else{              //jika tidak maka tidak akan menampilkan apa2
	echo "<script>
	alert('data gagal dihapus')
	window.location='?page=pages/berita/view_berita'</script>";
}
?>