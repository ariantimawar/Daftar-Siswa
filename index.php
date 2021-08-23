<?php
require 'functions.php';

if(isset($_GET['cari'])){
	$keyword = $_GET['$keyword'];
    $sql = "SELECT * FROM siswa
            WHERE 
            nis LIKE '%$keyword%' OR 
            nama LIKE '%$keyword%' OR
            rombel LIKE '%$keyword%' OR 
            rayon LIKE '%$keyword%' 
            ";
    $siswa = query($sql);
}
else{
	$siswa = query("SELECT * FROM siswa");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title> Data Siswa </title>
</head>
<body>
    <h1> Data Siswa </h1>
    <br><br>
    <form action="" method="get">
    	<input type="search" name="keyword" placeholder="masukkan keyword pencarian..." size="30" autocomplete="off" id="keyword">
    	<button type="submit" name="cari" id="cari"> Cari! </button>
    </form>
    <br>
    <div id="container">
    	<table border="1" cellspacing="0" cellpadding="5">
    		<tr>
    			<th>#</th>
    			<th>Nis</th>
    			<th>Nama</th>
    			<th>Rombel</th>
    			<th>Rayon</th>
    		</tr>

    		<?php if (empty($siswa)) :?>
    		<tr>
    			<td colspan="7" align="center"> Data Siswa Tidak Ditemukan</td>
    		</tr> 
            <?php endif; ?>

            <?php $i=1; ?>
            <?php $i++; ?>

    	</table>
    </div>
</body>
</html>
