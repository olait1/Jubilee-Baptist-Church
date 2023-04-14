<?php
include_once("conn.php");
if (isset($_POST['send'])) {
    # code...
$name=$_POST['name'];
$email=$_POST['email'];
$website=$_POST['website'];
$message=$_POST['message'];
    
$sql="INSERT INTO contact_us VALUES('','$name','$email','$website','$message')";
$query=mysqli_query($conn,$sql);
if (!$query) {
    # code...
    echo"not inserted ".mysqli_error($conn);
}else{


    echo "insert";
}

}


header("location:index.php");
?>