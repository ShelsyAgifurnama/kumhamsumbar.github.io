<?php

$id = $_GET['idhapus'];

//hapus gambar


//ini query hapus data berdasarkan id
$datahapus = $koneksi->query("DELETE FROM tb_user WHERE user_id = '$id'");

if($datahapus == TRUE){// jika $datahapus menghasilkan benar/true maka akan menampilkan 'data berhasil dihapus'
	echo "<script>
	alert('data berhasil dihapus')
    window.location='?page=pages/user/view_user'</script>";// tempat dimana folder itu  disimpan
}else{              //jika tidak maka tidak akan menampilkan apa2
	echo "<script>
	alert('data gagal dihapus')
	window.location='?page=pages/user/view_user'</script>";
}
?>