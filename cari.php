<?php

require 'function.php';
$keyword = $_GET['keyword'];
$sql = "SELECT * FROM siswa 
                      WHERE 
                      nis LIKE '%$keyword%' OR 
                      nama LIKE '%$keyword%' OR 
                      rombel LIKE '%$keyword%' OR 
                      rayon LIKE '%$keyword%'
                      ";
$siswa = query($sql);
?>

<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>#</th>
		<th>Nis</th>
		<th>Nama</th>
		<th>Rombel</th>
		<th>Rayon</th>
	</tr>

	<?php if( empty($siswa)) : ?>
		<tr>
			<td colspan="7" align="center">Data Siswa Tidak Ditemukan</td>
		</tr>
	<?php endif; ?>
</table>
