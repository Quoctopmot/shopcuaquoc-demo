<p>Hello</p>
<?php
include('../../config/config.php');

$tendanhmuc = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
if(isset($_POST['themdanhmuc'])){
    $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tendanhmuc."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
}else if(isset($_POST['suadanhmuc'])){
    $sql_update = "UPDATE tbl_danhmuc SET tendanhmuc='.$tendanhmuc.',thutu='.$thutu.' WHERE iddanhmuc='$_GET[iddanhmuc]'";
    mysqli_query($mysqli,$sql_them);
    header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
}else{
    $id = $_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
}
?>