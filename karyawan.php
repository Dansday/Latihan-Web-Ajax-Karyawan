<?php
$id_mysql = mysqli_connect("localhost","root","","dbajax");
$nip = $_GET['q'];
if($nip){
$query = "select alamat from tblkaryawan where nip=$nip";
$data = mysqli_query($id_mysql,$query) or die ("gagal".mysqli_error());
while($d = mysqli_fetch_array($data)){
echo $d['alamat'];
}
}
?>