<?php
$conn = mysqli_connect("localhost", "", "", "");


function query($sql) {
	global $conn;
	$result = mysqli_query($conn, $sql);
    
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ){
    	$rows[] = $row;
    }

    return $rows;
} 

?>
