<!DOCTYPE html>
<html>
<head>
	<title>File Operators</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/fileoperator.css">
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
      <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">File Operators</h1>
     </ul>
        
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              <li><a href="simulator\fileoperators (1).php" class="link1" style="color: #fff;">Simulator</a></li>
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

File operations in any programming is very essential. Files are used to save and transfer data. They can be of any form, a text file or a media file. They all serve the same purpose. <br>

Here you will learn about the various methods of file operations in Python programming language.<br><br>


<b><h2 id="2">Theory</h2></b><hr>

Python provides us with various file operations. A file can be created, edited, read and even copied. <br><br>
<b><h2>Creating a file</h2></b><hr>

To create a file, we need an object to store the file in. Here the role of object is to create a reference of the file.<br>
<div class="forwa">
	<b>
		Syntax : <br>object = open('file_name', 'mode')
	</b>
</div>
After all the desired operations are done, you need to close the file as well. This is done to save the file without properly.<br>
<div class="forwa">
	<b>
		Syntax :<br> object.close()
	</b>
	
</div>



While creating or opening a file, we need to enter the mode that we want it to open in. Some of the modes are :<br>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Name of mode</th>
        <th>Keywords</th>
        <th>Syntax</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Read</td>
        <td>r</td>
        <td>open('file_name', 'r')</td>
      </tr>
      <tr>
        <td>Write</td>
        <td>w</td>
        <td>open('file_name', 'w')</td>
      </tr>
      <tr>
        <td>Append</td>
        <td>a</td>
        <td>open('file_name', 'a')</td>
      </tr>
    </tbody>
  </table>


<br>
<div class="forwa">
	<b>
		Example :<br>

a = open('file.txt', 'w')<br>
a.write("Hello!, My name is Jake.")<br>
print(a.read())<br>
a.close()<br>


Output : Hello!, My name is Jake.

	</b>
</div>


The above example is of creating a file and printing it.<br>



<b><h2 id="3">Objective</h2></b><hr>

1.	To learn about the various file operations allowed in Python programming language.<br>
 
2.	To implement those operations in solving a problem.<br><br>



<b><h2 id="4">Manual</h2></b><hr>

In this lab you will learn about the file operations in Python by implementing them in creating and copying a file in the simulator.<br><br>



<b id="5"><h2>Procedure</h2></b><hr>

1.	 Read the simulator details.<br>
2.	Read the problem statement.<br>
3.	Press NEXT to proceed.<br>
4.	A code will be displayed.<br>
5.	Press NEXT again to see the execution of the code.<br>
6.	Relevant line in the code will be highlighted.<br><br><br>
<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://en.m.wikibooks.org/wiki/Python_Programming/Files">en.m.wikibooks.org/wiki/Python_Programming/Files</a><br>
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