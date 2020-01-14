<!DOCTYPE html>
<html>
<head>
    <title>Quiz</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css1/bootstrap.min.css">

<!-- jQuery library -->
<script src="js1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="js1/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js1/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>               
<body style="font-family: Ubuntu;">
     <nav class="navbar navbar-default navbar-fixed-top" style=" background-color:#F05054; border:0px; ">
        <div class="container-fluid">
            <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
      </button>
  </div>
     <ul class="nav navbar-nav navbar-right" >
      <h1 style="color: white;padding-left: 2em;font-family: Ubuntu;font-size: 35px; ">Quiz </h1>
     </ul>
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs" style="padding-right: 3em;font-size: 29px;margin-top: 22px;">
              <li><a href="../arithmetic.php" class="link1" style="color: #fff;">Back</a></li>
            </ul>
        </div>
        </div>
      </nav>
    <div class="container">
          <form action="res_2.php" method="POST" style="padding-top: 8em;padding-right: 7em;">
<?php $cid="4";$level="Medium";$var=($cid-1)*30; require 'C:\New folder\htdocs\workshop\bold\src\lab\connection\connection.php';?>
<input type="submit" name="submit" value="Submit" class="btn btn-success"><br /><br /><br />
  </div>
    </body>
</htmlt