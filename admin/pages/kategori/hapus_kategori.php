<?php

$id = $_GET['idhapus'];


$datahapus = $koneksi->query("DELETE FROM tb_kategori WHERE kategori_id = '$id'");

if($datahapus == TRUE){
	echo "<script>
	alert('data berhasil dihapus')
    window.location='?page=pages/kategori/view_kategori'</script>";
}else{
	echo "<script>
	alert('data gagal dihapus')
	window.location='?page=pages/kategori/view_kategori'</script>";
}
?>