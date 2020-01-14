<!DOCTYPE html>
<html>
<head>
	<title>Modules</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/modules.css">
</head>

<body style="font-family: Ubuntu;">

  <!--Navbar-->


	
<div class="top">
      <nav class="navbar navbar-default navbar-top" style=" background-color:#F05054; border:0px; ">
        <div class="container-fluid">
            <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
      </button>
  </div>
     <ul class="nav navbar-nav navbar-left" >
    <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">Built-in Modules</h1>
     </ul>
        
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              <li><a href="simulator\built_in_modules1.php" class="link1" style="color: #fff;">Simulator</a></li>
              <li><a href="quiz/Quiz.php" class="link2" style="color: #fff;">Quiz</a></li>
              <li class="dropdown">
    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Explore
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      
      <li><a href="aboutlab.php">About lab</a></li>
      <li><a href="../vlab.php">Explore Vlab</a></li>

    </ul></li>
 
            </ul>


        </div>


        </div>
        
      </nav>

   </div>

    <!--End of Navbar-->

      <!--Startinf of Content-->


<?php include 'headerandsidelinks.php';?>	
<div class="as">


<b><h2 id="1">Introduction</h2></b><hr>

To perform specific functions like add, subtract, power, square root, we need to write two three lines of logic to make our task or function work properly. So we have built in functions inside those modules which can straight away perform those task by passing the values to calculate.<br>

Here you will learn about some of the built-in modules used in Python programming language.<br><br>


<b><h2 id="2">Theory</h2></b><hr>

We simply have to import those built in modules present inside the program then we can easily perform those specific task after calling those functions. <br>

<b>Some of the modules that are used in Python are :</b><br>

<h3>math, datetime, decimal, operator, test, user, sets,  etc.</h3><br>
<div class="forwa">
	<b>Example:<br>

import math<br>
A= math.sqrt(16)<br>
Print(A)<br>

Output: 4.0
</b>
</div>


The above given example is of math module. Here math module is imported, with the help of which, complex mathematical calculations can be performed.<br><br>



<b><h2 id="3">Objective</h2></b><hr>

1.	To learn about the built-in modules used in Python.<br>
 
2.	To implement some of them in an example in the simulator.<br><br>



<b><h2 id="4">Manual</h2></b><hr>

In this lab you will learn about the built-in modules in Python which are used to import additional functions.<br><br> 
<b><h2 id="5">Procedure</h2></b><hr>

1.	 Read the simulator details.<br>
2.	Enter the input values.<br>
3.	Press CALCULATE to proceed.<br>
4.	A code will be displayed.<br>
5.	Press NEXT to see the execution of the code.<br>
6.	Relevant line in the code will be highlighted.<br>
7.	The value of the objects will be displayed in the output panel.<br><br><br>


<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://www.learnpython.org/en/Modules_and_Packages">www.learnpython.org/en/Modules_and_Packages</a>
<br><br><br>
<br><br><br>
<br><br><br>
	</div>
</div>
  <!--End of content-->
<footer style="     
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;">
    <div class="container-fluid footer-div" style="background:  #F05054; margin-top: -3em;  padding: 0em;" >
      <div class="col-xl-3" >
        <h2 style=" color: #fff; 
        font-size: 14px; font-weight: lighter; color: #fff;text-align: center;">@ Python VLab 2018</h2>
      </div>
    </div>
  </footer>

</body>
</html>