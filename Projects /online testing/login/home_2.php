<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="bootsrap/css/bootsrap.min.css">
  <script src="bootsrap/js/bootstrap.min"></script>

<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
<link href="css/bootstrap.css" rel="stylesheet"/>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https:ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container">
  <h2>WRS Onine Testing System</h2>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li style="float: right;"><button type="button" class="btn btn-primary" data-toggle="tab" > <a href="login.php"></a>Log Out</button></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
     <center> <button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Select Test</button></center><br>
     <div class="col-sm-4"></div>
     <div class="col-sm-4">
     <div id="select" class="tab-pane fade">
  <select class="form-control" id="">
               
                <option value="1">Computer</option>
                <option value="1">General Knowledge</option>
                <option value="1">Math</option>
                <option value="1">Biology</option>
  </select><br>
  <center> <button type="button" class="btn btn-primary" data-toggle="tab" href="#select">Submit Test</button></center>
</div>
  <div class="col-sm-4"></div>
</div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Showing Profile</h3>
      <center> <button type="button" class="btn btn-primary" data-toggle="tab" > <a href="login.php"></a>Log Out</button></center><br>
      
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Logout</h3>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
    </div>
  </div>
</div>

</body>
