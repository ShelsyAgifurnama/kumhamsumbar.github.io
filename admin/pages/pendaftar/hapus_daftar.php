<?php

$id = $_GET['idhapus'];

//hapus gambar

$datagambar =$koneksi->query("SELECT pendaftar_gambar FROM tb_pendaftar WHERE pendaftar_id = '$id'")->fetch_assoc();
$foto = $datagambar['pendaftar_gambar'];
unlink('assets/img/fotopendaftar/' . $foto);

//ini query hapus data berdasarkan id
$datahapus = $koneksi->query("DELETE FROM tb_pendaftar WHERE pendaftar_id = '$id'");

if($datahapus == TRUE){// jika $datahapus menghasilkan benar/true maka akan menampilkan 'data berhasil dihapus'
	echo "<script>
	alert('data berhasil dihapus')
    window.location='?page=pages/pendaftar/view_pendaftar'</script>";// tempat dimana folder itu  disimpan
}else{              //jika tidak maka tidak akan menampilkan apa2
	echo "<script>
	alert('data gagal dihapus')
	window.location='?page=pages/pendaftar/view_pendaftar'</script>";
}
?>