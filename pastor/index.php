<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JBC Pastors</title>
		<link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .m{
            margin: 20vh auto 0 auto;
        }
    </style>
</head>
<body>
    <div class="row container ">
        <div class="col-md-12 container">
            <div class="w-50 jumbotron mx-auto align-item-center justify-item-center">
                            <form action="pastors.php" method="post" enctype="multipart/form-data">
            
            <div class="form-group">
            <label for="Tittle"> Tittle</label>
             <input type="text" class="form-control" name="tittle" id="tittle">
</div> 
     
<div class="form-group">
            <label for="fname"> Surname</label>
             <input type="text" class="form-control" id="sname" name="sname">
</div>
<div class="form-group">
            <label for="Oname"> Other-Name</label>
             <input type="text" class="form-control" id="Oname" name="Oname">
</div>
<div class="form-group">
            <label for="Year"> Year</label>
             <input type="text" class="form-control" id="Year" name="year">
</div>
<div class="form-group">
            <label for="mname"> Image</label>
             <input type="file" class="form-control" id="file" name="file">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>

        </div>
    </div>
</body>
</html>