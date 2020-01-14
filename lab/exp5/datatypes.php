<!DOCTYPE html>
<html>
<head>
	<title>Data Type</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/datatypes.css">
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
    <h1 style="color: white;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">Data Types</h1>
     </ul>
        
        <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              <li><a href="simulator\list_tuples_dict.php" class="link1" style="color: #fff;">Simulator</a></li>
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
Many times there comes a need of clubbing the data together. While making a program we may require to club our data that is inter-related to each other. This data can be put together in an array.<br>
Here, you will learn about the various types od arrays in Python programming language.<br><br>
<b><h2 id="2">Theory</h2></b>
Before starting with arrays you must know the concept of mutability.<br>
An object may be classified into two categories :<br>
i.	Mutable<br>
ii.	Immutable<br><br>
<strong>Mutable</strong>are those objects whose value can be altered after assigning a particular value.<br><br>
<strong>Immutable</strong> are those objects whose value can not be altered after assigning of a value.<br><br>
<table class="table table-hover">
    <thead>
      <tr>
        <th>S.no.</th>
        <th>Data Type</th>
        <th>Character</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>List</td>
        <td>Mutable</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Tuple</td>
        <td>Immutable</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Dictionary</td>
        <td>Mutable</td>
      </tr>
    </tbody>
  </table>
<b><h2>S.No	Data Type	Character</h2></b>
1	List	Mutable<br>
2	Tuple	Immutable<br>
3	Dictionary	Mutable<br>
<b><h2>	List</h2></b><hr>
It is a collection of data in which date is stored in ordered form.<br>
<div class="forwa">
<b>Syntax : object_name = [ elements ]</b>	
</div>
The above mentioned syntax is of list where the elements are  mentioned in square brackets.<br><br>
<div class="forwa">
	<b>Example : list1 = [1, 2, 3, 4, 5]</b>
</div>
Syntax to print a list is :<br><br>
<div class="forwa">
<b>Syntax : print(list1)</b>	
</div>
	<b><h2>Tuple</h2></b><hr>
A tuple is a collection of data which is mostly similar to a list except that it is immutable i.e. the value once stored in a tuple cannot be changed. Though tuple allows concatenation.<br><br>
<div class="forwa">
	<b>Syntax : object_name = ( elements )</b>
</div>
This is the syntax of a tuple, where elements are placed under parenthesis.<br><br>
<div class="forwa">
	<b>Example : tup1 = ( 1, 'Made by Harsh', 3.34)</b>
</div>
The printing syntax of tuple is same as that of list.<br><br>
<b><h2>	Dictionary</h2></b><hr>
Dictionary is a collection of data which is not sequential like a list, thus indexing is not possible.<br>
It consists of a key and its value.<br>
The above syntax is for a dictionary where the elements are placed under curly brackets.<br><br>
<div class="forwa">
	<b>Example : dict1 = {1 : "Red", 2 : "Blue", 3 : "Green"}</b>
</div>
<b><h2 id="3">Objective</h2></b><hr>
1.	To learn about the various array types in Python programming language.<br>
2.	To implement those data types in programs.<br>
<b><h2 id="4">Manual</h2></b><hr>
In this lab you will learn about the data types and some of their functions used in Python programming language.<br><br>
<b><h2 id="5">Procedure</h2></b><hr>
1.	 Read the simulator details.<br>
2.	Enter the details and values you want to proceed with.<br>
3.	Press CALCULATE to proceed.<br>
4.	The code will be displayed.<br>
5.	Press NEXT to see the execution of code.<br>
6.	Relevant line in the code will be highlighted.<br>
7.	The local variables will be shown in the Output Panel with their values.<br><br><br>


<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://www.learnpython.org/en/Lists">www.learnpython.org/en/Lists</a><br>
<a href="http://www.learnpython.org/en/Dictionaries">www.learnpython.org/en/Dictionaries</a>
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