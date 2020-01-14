 <?php
 session_start();
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "datatypes";
    $firstErr = $lastErr = $emailErr = $phoneErr = "";
$first = $last = $email = $phone = "";
        $conn = mysqli_connect($host, $user, $password, $db);

        //if(isset($_POST['submit']))
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
         // $first = $_POST['first'];
            if (empty($_POST['first'])) {
    $firstErr = "Name is required";
  } else {
    $first = test_input($_POST['first']);
       if (!preg_match("/^[a-zA-Z ]*$/",$first)) {
      $firstErr = "Only letters and white space allowed"; 
    }
  }
          
        //$last = $_POST['last'];
    if (empty($_POST['last'])) {
    $lastErr = "Name is required";
  } else {
    $last = test_input($_POST['last']);
       if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
      $lastErr = "Only letters and white space allowed"; 
    }
  }
         // $email = $_POST['email'];
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
          $password = $_POST['password'];


          $phone = $_POST['phone'];
          $qy="SELECT `firstname`, `lastname`, `password`, `email`, `phone` FROM `authusers` WHERE 1";
              $result = mysqli_query($conn,$qy);
            while($row=mysqli_fetch_array($result)){
          $check = $row["email"]==$email;
          if($check){

                echo"Already Register";
                header("location:lab/vlab.php")
                exit;
            }
            
            //back to its own page how????????????-------??????.
             }
if(!$check){
    $sql = "INSERT INTO `authusers`(`firstname`, `lastname`, `password`, `email`, `phone`) VALUES ('$first','$last','$password','$email','$phone')";
    mysqli_query($conn, $sql);
    //how to move on next page.
    //header("location:vlab.php");
    }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
mysqli_close($conn);
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>ready</title>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<style type="text/css">
  .modal-body .form-horizontal .col-sm-2,
.modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}
</style>
<body style="font-family: Ubuntu; background-color: #eee;">


<div class="container">
<!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalHorizontal">
    Launch Horizontal Form
</button>

<!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    
      <h1 style="color: #F05054;font-weight: bold; font-size: 34px;">Registration Form</h1>
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <form method="post" class="form-horizontal" role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style="padding-top: 4em;">
 
 <!-- <div class="col-lg-10">

  <div class="panel panel-default">

    <div class="panel-body">

      <div class="container-fluid">

       <div class="panel panel-default" style="border: 0px;">

    <div class="panel-body" >


    </div>

  </div>

</div>-->

<div class="form-group row">
   <div class="col-xs-6">
    <!--<label for="ex3">col-xs-4</label>-->
    <input class="form-control" id="ex3" type="text" name="first" placeholder="first name" required="">
    <span class="error">* <?php echo $firstErr;?></span>
  </div>
  <div class="col-xs-6">
    <!--<label for="ex3">col-xs-4</label>-->
    <input class="form-control" id="ex3" type="text" name="last"  placeholder="last name" required="">
    <span class="error">* <?php echo $lastErr;?></span>
  </div>
</div>

<div class="form-group row">
   <div class="col-xs-12">
    <!--<label for="ex3">col-xs-4</label>-->
    <input class="form-control" id="ex3" type="text" name="email"  placeholder=" enter your email" required="@">
    <span class="error">* <?php echo $emailErr;?></span>
  </div>

</div>


<div class="form-group row">
   <div class="col-xs-12">
    <!--<label for="ex3">col-xs-4</label>-->
    <input class="form-control" id="ex3" type="password" name="password"  placeholder=" enter your password" required="">

  </div>

</div>

<div class="form-group row">
   <div class="col-xs-12">
    <!--<label for="ex3">col-xs-4</label>-->
    <input class="form-control" id="ex3" type="text" name="phone"  placeholder=" enter your mobile numb." required="">
    <span class="error">* <?php echo $phoneErr;?></span>
  </div>

</div>

<input type="submit" name="submit" value="Submit" class="btn btn-primary">

    </div>

  </div>

  </div>

</form>
</div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="button" class="btn btn-primary">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
