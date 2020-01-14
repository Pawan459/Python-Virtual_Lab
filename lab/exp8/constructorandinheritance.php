<!DOCTYPE html>
<html>
<head>
	<title>Constructor And Inheritance</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/constructorandinheritance.css">
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
       <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">Constructor and Inheritance</h1>
     </ul>
        
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              <li><a href="simulator\constructorandinheritance.php" class="link1" style="color: #fff;">Simulator</a></li>
              <li><a href="#" class="link2" style="color: #fff;">Quiz</a></li>
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


<b><h2 id="1">Introduction</h2></b><hr>

Inheritance is a feature that says if you define a new class giving a reference of some other class then due to inheriting property of python your new class will inherit all attributes and behavior of the parent class.<br>
A Constructor is a special kind of method that have same name as the class in python self variable do the same. It can be used to set the values of the members of an object.<br><br>


<b><h2 id="2">Theory</h2></b><hr>

<b>How to define constructor</b><br>
<div class="forwa">
	<b>Syntax:<br>
class class_name<br>
	def __init__(self,variable1,variable2)<br>
		self.variabl1=variable1<br>
		self.variable2=variable2
</b>
</div>




<b>How to give values to objects using constructors</b><br>
<div class="forwa">
	<b>Syntax:<br>
Object_name=class_name('variable values',variable values)
</b>
	
</div>




<b>How to call objects using constructors</b><br>
<div class="forwa">
	<b>
		Syntax:<br>
print(Object_name.variable1)<br>
Output: variable value.

	</b>
	
</div>



<b>How to inherit a class</b><br>
<div class="forwa">
	<b>
		Syntax:<br>
class class_name(parent class name)

	</b>
</div>



<b>How to check whether it is inherited or not</b><br>
<div class="forwa">
	<b>
		Syntax:<br>
Object_name = inherited_class_name('variable1,variable2')<br>
print(Object_name.variable1)<br>
Output: variable value.</b>
	
</div>
<h2><b id="3">Objective</b></h2><hr>

1.	To learn about constructors and inheritance property of Python programming language.<br>
 
2.	To learn the implementation of both constructors and inheritance.<br>


<h2><b id="4">Manual</b></h2><hr>

In this lab you will learn about the constructors that are used in Python programming language. You will also see the inheritance property.<br><br>


<h2><b id="5">Procedure</b></h2><hr>

1.	 Read the simulator details.<br>
2.	Press the CALCULATE button to proceed.<br>
3.	The code will be displayed.<br>
4.	Press NEXT to see the execution of the code.<br>
5.	Relevant line in the code will be highlighted.<br><br><br>
<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://www.python-course.eu/python3_inheritance.php">www.python-course.eu/python3_inheritance.php</a><br>
<a href="http://interactivepython.org/runestone/static/CS152f17/ClassesBasics/UserDefinedClasses.html">interactivepython.org/runestone/static/CS152f17/ClassesBasics/UserDefinedClasses.html</a><br>
<br><br><br>
<br><br><br>
<br><br><br>
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
