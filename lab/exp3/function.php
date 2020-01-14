<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
   <link rel="stylesheet" type="text/css" href="css/function.css">
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
    <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">Built-in Functions</h1>
     </ul>
        
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              <li><a href="simulator\built_idsimulator.php" class="link1" style="color: #fff;">Simulator</a></li>
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

An executable program in a programming language contains multiple lines. To simplify this code, various functions are used. <br>They can be built-in functions or user defined functions. In this lab you will learn about the built-in functions used in Python programming language.<br><br>


<b><h2 id="2">Theory</h2></b><hr>

A function is basically a chunk or module of code that takes in some input from the user and may or may not give any output. The function may provide some alterations to the input values.<br><br>
<div class="forwa">
	<b>Syntax : id(object)</b>
</div>


The above given syntax is for the <b><u>'id' function</u></b> used in python programming language.<br>
This function returns the identity of an  object. A identity has to be unique and constant for a particular object during the lifetime.<br><br>
<div class="forwa">
	<b>A=1<br>
Id(A)<br>
Output: 132523532
</b>
</div>
The above example is for id function that returns a unique identifier of an object 'A'.<br><br>
<div class="forwa">
	<b>Syntax : type(object)</b>
</div>
This syntax is for the <b><u>'type' function</u></b> used in Python. It returns the data type of an object. It returns the following data types :<br>
i.	Integer<br>
ii.	String<br>
iii.	Float<br>
etc.<br><br>

<div class="forwa">
	<b>A = 5<br>
type(A)<br>
Output : class 'int'
</b>
</div>
The above example is for type function that returns the data type of an object 'A'.<br><br>
<b><h2 id="3">Objective</h2></b><hr>

1.	To understand the basics of functions used in Python programming language.<br>

2.	To implement the 'id' and 'type' functions in a code.<br>


<b><h2 id="4">Manual</h2></b><hr>

In this lab you will learn about some of the built-in functions that are present in Python programming language.<br><br>


<b><h2 id="5">Procedure</h2></b><hr>

1.	 Read the simulator details.<br>
2.	Enter your choice.<br>
3.	Press CALCULATE to proceed.<br>
4.	The code will be displayed.<br>
5.	Press NEXT to see the execution of code.<br>
6.	Relevant line in the code will be highlighted.<br>
7.	The local variables will be shown in the Output Panel with their values.<br><br><br>


<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://www.programiz.com/python-programming/methods/built-in">www.programiz.com/python-programming/methods/built-in</a>
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