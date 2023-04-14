<?php
$sname=$_POST['sname'];
$oname=$_POST['Oname'];
$tittle=$_POST['tittle'];
$year=$_POST['year'];
$file=$_FILES['file'];
print_r($file);
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
  if (!(empty($sname)||empty($oname)||empty($tittle)||empty($year))) {
    # code...
   include_once("../conn.php");
   $sql="INSERT INTO pastors VALUES('','$tittle','$oname','$sname','$year','$fname')";
   $query=mysqli_query($conn,$sql);
   if (!$query) {
    # code...
    echo"not insert";
   }
}
}else{
    echo"<script>alert('please upload valid image');</script>";
}


 header("location:index.php");