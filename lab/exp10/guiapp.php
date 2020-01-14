<!DOCTYPE html>
<html>
<head>
	<title>GUI Application</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/systeminformation.css">
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
     <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">GUI Application</h1>
     </ul>
        
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              <li><a href="simulator\gui.php" class="link1" style="color: #fff;">Simulator</a></li>
              <li><a href="quiz\Quiz.php" class="link2" style="color: #fff;">Quiz</a></li>
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

    

     <!--Starting of Content-->


<?php include 'headerandsidelinks.php';?>	
<div class="as">
	






<b><h2 id="1">Introduction</h2></b><hr>
Computers were built to make basic calculations easy for humans. But then came the need of a better interaction between machines and humans. And thus, GUI came into use. Python programming language provides us a platform, to create and use Graphical User Interface applications. In this lab you will learn to work on such a GUI application using Python on a computer.<br><br>


<b><h2 id="2">Theory</h2></b><hr>
For developing a GUI application, we will need a module. Python offers multiple options for it. One of such module is 'tkinter'.<br> 
For developing a GUI Application we will be using some built-in functions and built-in modules that we have already covered in previous experiments.
We are taking tinkter as reference, so we will be talking about its functionality.
<br><br>
<b><h3>Our basic steps for a GUI Application will be :</h3></b><br>
1.  Importing the tkinter module.<br>
2.  Creating the main window.<br>
3.  Adding widgets to the main window.<br>
4.  Assigning events to the widgets<br><br>

We will start by importing our module.
<br>
<div class="forwa">
	<b>import tkinter</b>
</div>
Now as we have imported our module, we need a main window, under which we can place all our widgets that are to be used.<br><br>
<div class="forwa">
	<b>window = tkinter.Tk()</b>
</div>
<br><br>
Here, 'window' is the name of our main window object.
To execute this main window, we use a function known as 'mainloop()'. It executes an infinite loop and runs the application until it is closed by a user.<br><br>
<div class="forwa">
  <b>import tkinter
window = tkinter.Tk()   <br>                    
.                         <br>                       
.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all widgets are added here<br>
.                                               <br>
window.mainloop()                          
</b>
</div>
<br><br>
Now, we have plenty of widgets to add in our main window. Some of them are :<br>
<b>1. Button</b>
To add a button we just need to follow this syntax.
<div class="forwa">
  <b>Syntax :</b>
Btn = Button(master, option=value)
</div>
'master' is the parameter used to represent the parent window.<br><br>
<b>2.Canvas</b>
 It is used to display graphical representations or images. The syntax is : <br>
<div class="forwa">
  <b>Syntax :</b>
Cvn = Canvas(master, option=value)

</div>

Similarly we have many such widgets which can be used in a GUI Application.



<b><h2 id="3">Objective</h2></b><hr>

1.  To understand the modules used for GUI in Python.<br>
2.  To use such modules to develop a GUI.<br><br>



<b><h2 id="4">Manual</h2></b><hr>

In this lab you will learn to develop a GUI Application in Python programming language.<br><br>


<b><h2 id="5">Procedure</h2></b><hr>

1.  Read the simulator details.<br> 
2.  Click Start to get the code.<br> 
3.  Sample code for the GUI Application will appear.<br> 
4.  Go though the code once.<br> 
5.  Click Execute to run the GUI Application.<br> 
<br><br><br> 
<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://wiki.python.org/moin/GuiProgramming">wiki.python.org/moin/GuiProgramming</a>
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
