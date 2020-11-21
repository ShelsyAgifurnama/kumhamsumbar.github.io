<?php

$id = $_GET['idhapus'];

//hapus gambar

$datagambar =$koneksi->query("SELECT admin_foto FROM tb_admin WHERE admin_id = '$id'")->fetch_assoc();
$foto = $datagambar['admin_foto'];
unlink('assets/img/fotoadmin/' . $foto);

//ini query hapus data berdasarkan id
$datahapus = $koneksi->query("DELETE FROM tb_admin WHERE admin_id = '$id'");

if($datahapus == TRUE){// jika $datahapus menghasilkan benar/true maka akan menampilkan 'data berhasil dihapus'
	echo "<script>
	alert('data berhasil dihapus')
    window.location='?page=pages/admin/view_admin'</script>";// tempat dimana folder itu  disimpan
}else{              //jika tidak maka tidak akan menampilkan apa2
	echo "<script>
	alert('data gagal dihapus')
	window.location='?page=pages/admin/view_admin'</script>";
}
?>