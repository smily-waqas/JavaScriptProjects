
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="..//css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> WRS Online Testing System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li ><button type="button" style="background-color: black; padding: 5px; margin-top: 8px; border-radius: 6px; border-color: black;"><a href="#" style="background-color: black; color: white; border-radius: 10px; margin-right: 5px;" class="glyphicon glyphicon-user">Admin Panel</a></button></li>
           <li ><button class="btn btn-primary" type="button" style=" border-color: black; background-color: black; padding: 5px; margin-top: 8px; "><a href="login.php" style="color: white;">Log out</a></button></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid" >
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar" style="background-color: black;">
          <ul class="nav nav-sidebar">
            <li class="active" ><a href="#">Dashboard <span class="sr-only">(current)</span></a></li>
            <li><a href="category.php" style="color: white;">Category</a></li>
            <li><a href="sub_category.php" style="color: white;">Sub Category</a></li>
            <li><a href="subject.php" style="color: white;">Subject</a></li>
            <li><a href="students.php" style="color: white;">Student</a></li>
            <li><a href="exam.php" style="color: white;">Exam</a></li>
            <li><a href="question.php" style="color: white;">Add Question</a></li>
            <li><a href="settings.php" style="color: white;">Settings</a></li>
            <li><a href="notice.php" style="color: white;">Notice</a></li>
            <li><a href="result.php" style="color: white; ">View Result</a></li>
          </ul>
          
        </div>
       
              <?php
include("../connection.php");
if (isset($_POST['submit']))
{
$question= $_POST["qu"];
$option1= $_POST["op1"];
$option2= $_POST["op2"];
$option3= $_POST["op3"];
$option4= $_POST["op4"];
$answer= $_POST["ans"];
$category= $_POST['cat'];
$qy= "INSERT INTO  quesion(question,op1,op2,op3,op4,ans,cat) VALUES('$question','$option1','$option2', '$option3','$option4','$answer','cat')";
     $run = mysqli_query($conn, $qy);
  if ($run=TRUE) {
    echo "Data Inserted";
  } 
  else
  {
     echo "Some thing wrong";
  }
}

?>
            </div>
        
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>