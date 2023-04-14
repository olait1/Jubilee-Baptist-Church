<?php
$sname=$_POST['sname'];
$oname=$_POST['Oname'];
$tittle=$_POST['tittle'];

$file=$_FILES['file'];
// print_r($file);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$ex=strtolower(end(explode('.',$file_name)));
$possible_extension=['jpg','jpeg','png','gif'];
if (in_array($ex,$possible_extension)) {
    # code...
    $fname=basename($file_name);
    $dir="../upload/". $fname;
  $upload=move_uploaded_file($file_tmp,$dir);
  if (!$upload) {
    # code...
    echo "file hasn't been uploaded";
  }
  if (!(empty($sname)||empty($oname)||empty($tittle))) {
    # code...
   include_once("../conn.php");
   $sql="INSERT INTO family VALUES('','$tittle','$sname','$fname','$oname')";
   $query=mysqli_query($conn,$sql);
   if (!$query) {
    # code...
    echo"not insert".mysqli_error($conn);
   }
}
}else{
    echo"<script>alert('please upload valid image');</script>";
}


 header("location:index.php");