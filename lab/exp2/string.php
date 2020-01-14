<!DOCTYPE html>

<html>

<head>

	<title>String</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/string.css">

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

       <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">String</h1>

     </ul>

        

        <div class="collapse navbar-collapse" id="collapse-1">

            <ul class="nav navbar-nav navbar-right" id="bs">

              <li><a href="simulator/Indexing.php" class="link1" style="color: #fff;">Simulator</a></li>

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

    


  <!--Startinf of Content-->


<?php include 'headerandsidelinks.php';?>	

<div class="as">

	

<b><h2 id = "1">Introduction</h2></b><hr>

Strings are the combination of characters that may or may not form a set of information. In simpler words it is sequence of characters. It can be your name, your address or any data that you store in it. Python programming language provides you many operations that can be performed on a string like concatenation, slicing, multiplication etc. In this lab you will learn about some of these operations.<div id = "2"></div>


<b><h2 id = "2">Theory</h2></b><hr>

We can access a string using indexing. In a string each character is assigned with a unique index value which starts from 0. A string can be written in both single quotes and double quotes.<br>

Example &nbsp;:&nbsp;&nbsp;'Hello World'<br>

                  "Hello World"<br>

s = "Hello World"<br>

<div class="forwa">   
<table border = "1"width = "50%">
	<tr>
		<td width = "20%">Index value</td>
		<td>0</td>
		<td>1</td>
		<td>2</td>
		<td>3</td>
		<td>4</td>
		<td>5</td>
		<td>6</td>
		<td>7</td>
		<td>8</td>
		<td>9</td>
		<td>10</td>
	</tr>
	<tr>
		<td border = "1">String</td>
		<td>H</td>
		<td>e</td>
		<td>l</td>
		<td>l</td>
		<td>o</td>
		<td> </td>
		<td>W</td>
		<td>o</td>
		<td>r</td>
		<td>l</td>
		<td>d</td>
	</tr>
		<td width = "20%">Index value</td>
		<td>-11</td>
		<td>-10</td>
		<td>-9</td>
		<td>-8</td>
		<td>-7</td>
		<td>-6</td>
		<td>-5</td>
		<td>-4</td>
		<td>-3</td>
		<td>-2</td>
		<td>-1</td>
	</tr>
</table><br>
You can use the above table to work with slicing.<br>
<!-- <b>Index Value	&nbsp;&nbsp;:0&nbsp;&nbsp;1&nbsp;&nbsp;2&nbsp;&nbsp;3&nbsp;&nbsp;4&nbsp;&nbsp;5&nbsp;&nbsp;6&nbsp;&nbsp;7&nbsp;&nbsp;8&nbsp;&nbsp;9&nbsp;&nbsp;10<br><br>

String	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:H&nbsp;&nbsp;e&nbsp;&nbsp;l&nbsp;&nbsp;&nbsp;l&nbsp;&nbsp;&nbsp;o&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;W&nbsp;&nbsp;o&nbsp;&nbsp;r&nbsp;&nbsp;&nbsp;l&nbsp;&nbsp;&nbsp;d</b><br> -->

</div>

Python allows negative indexing as well.<br>

Example : -1, -3, -5.<br>

Where -1 refers to the last index, -2 refers to second last index and so on.<br>

Printing here can be done by placing the string in single or double quotes after print.<br><br>

<div class="forwa">

	<b>print("Hello World")</b>

</div>

	<b><h4>Concatenation</h4></b><hr>

A string in python is immutable i.e. it can not be changed once defined. But concatenation is still possible.<br><br>

<div class="forwa">

	<b>s = 'Hello World'<br>

       s = s +"Example"

</b>

</div>

Now the string will be as "Hello WorldExample".<br><br>

<b><h4>Repetition</h4></b><hr >

This is a unique property of strings in Python programming language. When a string is multiplied with an integer, the characters of string are multiplied the same number of times.<br><br>

Syntax : string*integer<br><br>

<div class="forwa">

	<b>s = "k"<br>

       s = s*5</b>

</div>

Now the string will be "kkkkk". It has repeated itself 5 times.<br><br>

<b><h4>Slicing</h4></b><hr>

Slicing is done in Python to select or display the desired number of characters in a string. It is done with the help of symbol ':'.<br><br>

Syntax : String[ index: ]<br><br>

<div class="forwa">

	<b>s = "Hello World"<br>

1)	s = s[2:]<br>

2)	s = s[1:8]

</b>

</div>

Here the 1st example will give output "llo World". All the characters from and after second index is selected.<br>

In the 2nd example output will be "ello Wo". Characters between index number 1 and 8 are selected.<br><br>

Length of a string can be calculated using the len function.<br>

Syntax : len("string")<br>

<div class="forwa">

	<b>

	len("Hello World")

	</b>

</div>

It will return 11.<br><br>

<b><h2 id = "3">Objective</h2></b><hr>

1)	To understand the concepts of string in Python programming language.<br>

2)	To implement the operations that can be performed in a string.<br><br>

<b><h2 id = "4">Manual</h2></b><hr>

In this lab you will learn about the various string manipulations that are allowed in Python programming language.<br><br>

<b><h2 id = "5">Procedure</h2></b><hr>

1.	Select the problem.<br>

2.	Read the simulator details.<br>

3.	Enter the desired input you want to operate.<br>

4.	Press CALCULATE to proceed.<br>

5.	The code will be displayed.<br>

6.	Press NEXT to see the execution of code.<br>

7.	Relevant line in the code will be highlighted.<br>

8.	The local variables will be shown in the Output Panel with their values.<br><br><br>


<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://www.learnpython.org/en/Basic_String_Operations">www.learnpython.org/en/Basic_String_Operations</a>
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

