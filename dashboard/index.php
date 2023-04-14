
<?php

?>
<style>
body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<?php
include_once("../conn.php");
$sql="SELECT * FROM contact_us";
$query=mysqli_query($conn,$sql);
if (mysqli_num_rows($query)>0) {
    # code...
  
?>
<p class="p-4 text-capitalize" style="background:#0f0; padding:15px; width:100%; margin:0;">You are having new message to Check!!!</p>
<?php
}else{
  
?>
<p class="p-4 text-capitalize" style="background:#f00; padding:15px;">you are not having new message to check!!!</p>
<?php
}
?>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="dashboard.php">Admin Dashboard</a>
  <a href="../index.php">Home</a>
  
  <a href="../index.php#about">About Us</a>
  <a href="../index.php#pastors">Pastor</a>
  <a href="../pastor/index.php">Pastor Dashboard</a>
  <a href="../index.php#events">Event</a>
  <a href="../index.php#seremons">Sermon</a>
  <a href="../index.php#families">Family</a>
  <a href="../family/index.php">Family Dashboard</a>
  <a href="../index.php#contact">Contact</a>

  <a href="javascript:void(0)" onclick="article();">NEW MESSAGE
  <span class="bg-danger p-2" style="background:red; border-radius:50%;,color:#fff;">
  <?php
include_once('../conn.php');
$sql="SELECT count(*) as total FROM contact_us";
$query=mysqli_query($conn,$sql);
$data= mysqli_fetch_assoc($query);
echo $data['total'];
  ?>
  
  </span></a>
</div>
<div id="main">
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
</div>

<div style="overflow-x:auto; display:none;" id="articleTable" >
  <table >

    <tr>
      <th>Name</th>
      <th>E-mail</th>
      <th>Website</th>
      <th>Message</th>
     
      <th>Action</th>
     
    </tr>
    <?php
  $sql="SELECT * FROM contact_us";
  $query=mysqli_query($conn,$sql);
  if ($query) {
      # code...
      while($row=mysqli_fetch_assoc($query)){

    
  ?>
    <tr>
      <td><?php echo $row['uname'];?></td>
      <td><?php echo $row['email'];?></td>
      <td class="text-justify"><?php echo $row['website'];?></td>
      <td><?php echo $row['message'];?></td>
      <td>
   
      <a href="approve.php?id=<?php
      
      echo $row['id'];
      ?>">Check</a>

      <a href="delete.php?id=<?php
          $id=$row['id'];
      echo $id;?>">
Delete
    </a>
    
      </td>
      <?php

      ?>
     
    </tr>
   <?php
     }
    }
    ?>
  </table>
</div>

<script>
function article(){
    document.getElementById("articleTable").style.display="";
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>


</html> 
