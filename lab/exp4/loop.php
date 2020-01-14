<!DOCTYPE html>
<html>
<head>
	<title>Loop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/loop.css">
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
     
   <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">Loop</h1>
     </ul>
        
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              <li><a href="simulator\Factorial.php" class="link1" style="color: #fff;">Simulator</a></li>
              <li><a href="quiz/Quiz.php" class="link2" style="color: #fff;">Quiz</a></li>
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
The execution of programming language codes is done by a compiler. A compiler is given a set of codes or rather a sequence of codes that perform a desired task. The task may or may not be repetitive but the compiler is smart enough to process it.<br><br>
Such repetitive code is known as a 'loop'. In this lab you will learn about the loops used in Python programming lab.<br><br>
<b><h2 id="2">Theory</h2></b><hr>
Loop is a sequential set of instructions which gets executed multiple times to reduce minimize the repetition of code.<br><br>
In Python, we have two types of loops :<br>
i.	for loop<br>
ii.	while loop<br><br>
To understand the functioning and flow of a loop, you must get familiar with the term 'block'. A block is the smallest unit in a loop which performs one particular task.<br><br>
<b>	<h2>For loop</h2></b><hr>
<center>
       <img src="flow.jpg" width="100%" height="420">
</center>
<div class="forwa">
	<b>Syntax : for object in range(initialization, limit, update ):
             statements</b>
</div>
The above given syntax is of for loop where we put the object name after 'for' and the limit inside 'range( )'.<br><br>
<div class="forwa">
	<b>Example : for a in range(4):<br>
              print(a)<br>
Output : 0, 1, 2, 3, 4</b>
</div>
<b><h2>	While loop</h2></b><hr>
The block diagram for while loop is same as that of for loop.<br>
The only difference is that the statements are not written together. Instead they are written in the body of loop except the testing condition.<br><br>
<div class="forwa">
	<b>Syntax : while expression:<br>
               statements
</b>
</div>
The above statement is for while loop, where the testing condition is placed after while and it is followed by the statements placed in the loop body.<br><br>
<div class="forwa">
	<b>
		Example : while a < 5:<br>
                print(a)<br>
Output : 0, 1, 2, 3, 4
	</b>
</div>
<b><h2 id="3">Objective</h2></b><hr>
1.	To learn about the flow of control of loops.<br>
2.	To learn using the types of loops in Python programming language.<br>
<b><h2 id="4">Manual</h2></b><hr>
In this lab you will learn making programs using the loops provided in Python programming language.<br><br>
<b><h2 id="5">Procedure</h2></b><hr>
1.	 Read the simulator details.<br>
2.	Enter the values you want to proceed with.<br>
3.	Press CALCULATE to proceed.<br>
4.	The code will be displayed.<br>
5.	Press NEXT to see the execution of code.<br>
6.	Relevant line in the code will be highlighted.<br>
7.	The local variables will be shown in the Output Panel with their values.<br><br><br><br>


<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://www.learnpython.org/en/Loops">www.learnpython.org/en/Loops</a>
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