<?php 
include './config/koneksi.php';
$query = "SELECT max(RIGHT(id_karyawan, 4)) as max_id FROM karyawan ORDER BY 'KW0001'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$id_max = $row['max_id'];
$sort_num = (int) substr($id_max, 1, 4);
$sort_num++;
$new_code = 'KW'.sprintf("%04s", $sort_num);

$new_code;
?>
