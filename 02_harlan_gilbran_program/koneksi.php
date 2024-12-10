<?php
//host
$hostname ='localhost';
$user_db='root';
$password_db='';
$db_name = 'uas_harlan';

$koneksi = mysqli_connect($hostname,$user_db,$password_db,$db_name);
if(!$koneksi) {
    die(mysqli_connect_error());
}
//echo "Koneksi Sukses";

//mysql_query($koneksi,"SELECT" * FROM namatabel);

?>