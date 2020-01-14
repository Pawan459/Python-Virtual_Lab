<!DOCTYPE html>
<html>
<head>
	<title>Classes And Objects</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" type="text/css" href="css/classesandobjects.css">
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
      <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">Classes and Objects</h1>
     </ul>
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              <li><a href="simulator\classesandobjects (1).php" class="link1" style="color: #fff;">Simulator</a></li>
              <li><a href="quiz\.php" class="link2" style="color: #fff;">Quiz</a></li>
              <li class="dropdown">
    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Explore
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="aboutlab.php">About lab</a></li>
      <li><a href="../vlab.php">Explore Vlab</a></li>
    </ul>
            </ul>
        </div>
        </div>
      </nav>
    </div>

    <!--End of Navbar-->

    

      <!--Startinf of Content-->


<?php include 'headerandsidelinks.php';?>	
<div class="as">


<b><h2><span id="1">Introduction</span></h2></b><hr>

Classes are the blueprints or we can say a group of sets of instructions that perform specific task for a object.<br>
It is used to keep related tasks together.
Objects is an instance of class which stores variables and functions that are passed from the class. An object tells about the behavior and property of a class.<br><br>


<b><h2><span id="2">Theory</span></h2></b><hr>

There are three things that we can do with class<br><br>
<strong>1.)	Class variables:-</strong> A variable that can be shared by each and every object of the class.<br>
<strong>2.)	Instance variable:-</strong> A variable that is unique and can be used only in the instance or object in which it is called<br>
<strong>3.)	Method :-</strong> These are the functions that define inside a class.<br><br>
<div class="forwa">
	<b>Syntax:<br>
class class_name:<br>
	statements<br>
</b>
</div>




<b><h2>How to define class objects</h2></b><br>
<div class="forwa">
	<b>Syntax:<br>
Object_name.class_name()<br>
</b>
</div>



<b><h2>How to give values to objects in a class</h2></b><br>
<div class="forwa">
	<b>Syntax:<br>
Object_name.Marks = 56<br>
Object_name.Name = 'Nitin Rautela'<br>
</b>
</div>




<b><h2>How to call objects of a class</h2></b><br>
<div class="forwa">
	<b>Syntax:<br>
print(Object_name.Marks)<br>
Output: 56<br>
</b>
</div>



<b><h2><span id="3">Objective</span></h2></b><hr>

1.	To understand the concepts of objects and classes used in Python programming language.<br>
 
2.	To implement those concepts in solving a simple problem in the simulator.<br>


<b><h2><span id="4">Manual</span></h2></b><hr>

In this lab you will learn about the classes and objects with the help of a simple program and will implement it in Python programming language.<br><br>


<b><h2><span id="5">Procedure</span></h2></b><hr>

1.	 Read the simulator details.<br>
2.	Enter the desired input.<br>
3.	Press CALCULATE to proceed.<br>
4.	The code will be displayed.<br>
5.	Press NEXT to see the execution of the code.<br>
6.	Relevant line in the code will be highlighted.<br>
7.	The local variables will be shown in the Output Panel with their values.<br><br><br>


<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://www.learnpython.org/en/Classes_and_Objects">www.learnpython.org/en/Classes_and_Objects</a>
<br><br><br>
<br><br><br>
<br><br><br>
</div>
</div>

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