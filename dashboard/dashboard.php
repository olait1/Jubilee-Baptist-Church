<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
<div class="row container ">
        <div class="col-md-12 container">
            <div class="col-md-6">
            <div class="w-50 jumbotron align-item-center justify-item-center">
                <h2 class="text-center text-muted">Event</h2>
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
            <div class="col-md-6">

            <div class="w-50 jumbotron align-item-center justify-item-center">
                            <form action="pastors.php" method="post" enctype="multipart/form-data">
                            <h2 class="text-center text-muted">Sermon</h2>
            <div class="form-group">
            <label for="Tittle"> Tittle</label>
             <input type="text" class="form-control" name="tittle" id="tittle">
</div> 
     
<div class="form-group">
            <label for="fname"> Date</label>
             <input type="text" class="form-control" id="date" name="date">
</div>
<div class="form-group">
            <label for="Servant_of_God"> Servant Of God</label>
             <input type="text" class="form-control" id="Servant_of_God" name="Servant_of_God">
</div>
<div class="form-group">
            <label for="Audio"> Audio</label>
             <input type="text" class="form-control" id="Audio" name="Audio">
</div>

<div class="form-group">
            <label for="Audio"> Video</label>
             <input type="text" class="form-control" id="Video" name="Video">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
        <div class="col-md-12">

<div class="w-50 jumbotron align-item-center justify-item-center">
                <form action="pastors.php" method="post" enctype="multipart/form-data">
                <h2 class="text-center text-muted">Upcoming Sermon</h2>
<div class="form-group">
<label for="Tittle"> Tittle</label>
 <input type="text" class="form-control" name="tittle" id="tittle">
</div> 


<div class="form-group">
<label for="fname"> Date</label>
 <input type="text" class="form-control" id="date" name="date">
</div>
<div class="form-group">
<label for="Servant_of_God"> Servant Of God</label>
 <input type="text" class="form-control" id="Servant_of_God" name="Servant_of_God">
</div>

<div class="form-group">
<label for="Tittle"> Tittle-Description</label>

    <textarea class="form-control" name="tittle_d" id="tittle" cols="30" rows="10"></textarea>
</div> 
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
    </div>
</body>
</html>