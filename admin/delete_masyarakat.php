<?php

include '../koneksi.php';
$nik=$_GET['nik'];
echo $nik;
$sql=$mysqli -> query("delete from masyarakat where nik='$nik'");

if ($sql) {
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Dihapus');
		window.location='../admin/admin.php?url=lihat_masyarakat';

	</script>

	<?php
}

?>