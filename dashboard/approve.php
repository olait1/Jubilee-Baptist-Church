<?php
$id=$_GET['id'];
echo $id;
include_once("../conn.php");
$sql="SELECT * FROM contact_us  WHERE id=$id";
$query=mysqli_query($conn,$sql);
if ($query) {
    # code...
    while ($row=mysqli_fetch_assoc($query)) {
        # code...
   $uname=$row['uname'];
   $email=$row['email'];
   $website=$row['website'];
   $message=$row['message'];

   $sql="SELECT CURDATE() as 'currentdate'";
   $query=mysqli_query($conn,$sql);
   $data= mysqli_fetch_assoc($query);
   $dates=$data['currentdate'];
$sql="INSERT INTO message VALUES('','$uname','$email','$website','$message','$dates')";
$query=mysqli_query($conn,$sql);
if ($query) {
    # code...
    echo "inserted";
}else{
    echo "not inserted".mysqli_error($conn);
}
$sql="DELETE FROM contact_us WHERE id= $id";
$query=mysqli_query($conn,$sql);
if($query){
    echo "deleted";
}else{
    echo "not delete";
}
}
}
header("location:index.php");
?>