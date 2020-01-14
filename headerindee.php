 <!DOCTYPE html>
<html>
 <?php
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
                echo "Already Register";
                break;
            }
            //back to its own page how????????????-------??????.
             }
if(!$check){
    $sql = "INSERT INTO `authusers`(`firstname`, `lastname`, `password`, `email`, `phone`) VALUES ('$first','$last','$password','$email','$phone')";
    mysqli_query($conn, $sql);
     echo " <script> alert('Welcome!'); </script>";
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



<body data-spy="scroll" data-target=".navbar" data-offset="60" style="font-family: Ubuntu;">
  <!--Navbar-->
	<div class="container">
	<div class="navbar navbar-default navbar-fixed-top" role="navigation" style=" background-color:#F05054; border:0px;" >
		<div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar" style="background-color:white;"></span>
						<span class="icon-bar" style="background-color:white";></span>
						<span class="icon-bar" style="background-color:white";></span>
					</button>
  </div>
     <ul class="nav navbar-nav navbar-left" style="padding-left: 0em;">
     <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">Python<br> Programming Language</h1>
     </ul>
    	<div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left" id="bs">
                <li><a href="lab\vlab.php" style="font-family: Ubuntu;">Explore VLab</a></li>
            	<li><a href="aboutlab.php" style="font-family: Ubuntu;">About Lab</a></li>
            	<li><a href="team.php" style="font-family: Ubuntu;">Team</a></li>
            </ul>
   <!--Social Link of Vlabs-->
        	<ul class="nav navbar-nav navbar-right" style="padding-right: 3em;padding-top: 2em;">
        <li>
            <a href="https://www.facebook.com/pages/Virtual-Labs-IIT-Delhi/301510159983871"  target="_blank"><img src="img/facebook.png" width="32" height="32"></a>
        </li>
        <li>
            <a href="https://twitter.com/TheVirtualLabs" target="_blank"><img src="img/twitter.png" width="32" height="32"></a>
        </li>
        <li>
           <a href="http://.com" target="_blank"> <img src="img/instagram.png" width="32" height="32"></a>
        </li>
        <li>
            <a href="https://www.youtube.com/watch?v=mVBYNXLaDdg" target="_blank">
            <img src="img/youTube.png" width="32" height="32"></a>
        </li>
          <button class="btn btn-light btn-lg" data-toggle="modal" data-target="#myModalHorizontal"style=" border: 3px solid #fff;border-radius: 6px; "><img src="img/user.png" width="32" height="32">

 	</ul>
 </div>
    	</div>
    		</div>
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
</button>
</div>
</div>
</div>
</form>
</div>
</body>
</html>