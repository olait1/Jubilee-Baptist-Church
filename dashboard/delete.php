<?php
include_once('../conn.php');
$id=$_GET['id'];
echo $id;
$sql="DELETE FROM contact_us WHERE id='$id'";
$query=mysqli_query($conn,$sql);
if($query){
    echo "deleted";
}else{
    echo "not delete ".mysqli_error($conn);
}
header("location:index.php");
?>