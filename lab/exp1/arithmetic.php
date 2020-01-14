<!DOCTYPE html>

<html>

<head>

	<title>Arithmetic Operations</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/arith.css">

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

      <h1 style="color: #fff;padding-left: 3em;font-family: Ubuntu;font-size: 35px; ">Arithmetic Operations</h1>

     </ul>

        

        <div class="collapse navbar-collapse" id="collapse-1">

            <ul class="nav navbar-nav navbar-right" id="bs">

              <li><a href="simulator\Math_sim.php" class="link1" style="color: #fff;">Simulator</a></li>

              <li><a href="quiz/Quiz.php" class="link2" style="color: #fff;">Quiz</a></li>

              <li class="dropdown">

    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Explore

    <span class="caret"></span></button>

    <ul class="dropdown-menu">

      <li><a href="aboutlab.php">About lab</a></li>

      <li><a href="..\vlab.php">Explore Vlab</a></li>

    </ul></li>

 

            </ul>





        </div>





        </div>

        

      </nav>



    </div>
   <!--End of Navbar-->

    <!--Starting of Content-->

<?php include 'headerandsidelinks.php';?>

<div class="container-fluid">	

<div class="as" >



<b><h2><span id="1">Introduction</span></h2></b><hr>

<span>Computers were brought into use to make things easier for humans. Various programming languages were developed to make programs that bring out the best from a computer. One of such is Python. In this lab you will learn to code the basic operations that can be performed by using Python on a computer.</span><br><br>

<b><h2><span id="2">Theory</span></h2></b><hr>

<span>An operator is a symbol that tells the compiler that either a mathematical or a logical manipulation has to be done. In this lab you will be studying about the Arithmetic Operations.</span><br>

<h4>They are of the following types :</h4>

<table class="table table-hover">

    <thead>

      <tr>

        <th>S.no.</th>

        <th>Operator Name</th>

        <th>Symbol</th>

      </tr>

    </thead>

    <tbody>

      <tr>

        <td>1</td>

        <td>Addition</td>

        <td>+</td>

      </tr>

      <tr>

        <td>2</td>

        <td>Subtraction</td>

        <td>-</td>

      </tr>

      <tr>

        <td>3</td>

        <td>Multiplication</td>

        <td>*</td>

      </tr>

      <tr>

        <td>4</td>

        <td>Division</td>

        <td>/</td>

      </tr>

      <tr>

        <td>5</td>

        <td>Modulus</td>

        <td>%</td>

      </tr>

      <tr>

        <td>6</td>

        <td>Exponent</td>

        <td>**</td>

      </tr>

      <tr>

        <td>7</td>

        <td>Floor Division</td>

        <td>//</td>

      </tr>
    </tbody>

  </table>

<b>	<h4>Addition Operator ( + )</h4></b><hr>

       <span> The addition operator is used to add two numbers. It is placed between two numbers that are to be added.<br> 

        Syntax : number1 + number2<br> 

        Example : 25 + 32<br>

                          31 + 33</span><br><br>

<b>	<h4>Subtraction Operator ( - )</h4></b><hr>

 <span>The subtraction operator is used to subtract two numbers. It is placed between two numbers that are to be subtracted. The right placed number is subtracted from the one that is placed at left.<br>

Syntax : number1 - number2<br>

Example : 12 - 5<br>

                   54 - 37</span><br><br>

<b>	<h4>Multiplication Operator ( * )</h4></b><hr>

 <span>The multiplication operator is used to multiply two numbers. It is also placed between the two numbers that are to be operated.<br>

Syntax : number1 * number2<br>

Example : 12 * 3<br>

                  34 * 63</span><br><br>

<b><h4>	Division Operator (  / )</h4></b><hr>

 <span>The division operator is used to divide two numbers. It is used between the numbers that are to be operated. <br>

Syntax : number1 / number2<br><br>

It has some different rules that have to be kept in mind before operating the numbers.

Python2 operates the division operator by taking the integral value. <br><br>

Example : 6 / 4<br>

Answer : This operation will be solved in Python2 by taking the integral value i.e 1.

                 Therefore, the answer of 6 / 4 = 1<br><br>

This problem can be taken care by Type Casting. Type Casting is used to convert the output in a desired form.<br>

To get the correct answer of the above example, we will type cast it using float data type.<br><br>

Example : float(6 / 4)<br>

Answer : Now, the output will be changed into float type and the answer will be 1.5.<br>

                float(6 / 4) = 1.5<br><br>

There's another way of solving such problem. By using one float type input, we can get the desired answer.<br><br>

Example : 6.0 / 4<br>

Answer : 1.5</span><br><br>

	<b><h4>Modulus Operation ( % )</h4></b><hr>

 <span>It is used to give out the remainder of a division operation. It is also placed between numbers. The right placed number divides the one on the left and the remainder is given as output.<br>

Syntax : number1 % number2<br>

Example : 10 % 3<br>

                  34 % 12</span><br>

	<b><h4>Exponent Operation ( ** )</h4></b><hr>

 <span>It is used to perform exponential calculations. The right placed number acts as the power.<br>

Syntax : number1**number2<br>

Example : 2**3<br>

                  7 ** 6</span><br><br>

  <b><h4>Floor Division Operator ( // )</h4></b><hr>

 <span>It is used to perform floor division. This gives the result in int format.<br>

Syntax : number1 // number2<br>

Example : 45 // 9<br>

45 / 9 will give 5.0 where as 45 // 9 will give 5</span><br><br>

<b><h2><span id="3">Objective</span></h2></b><hr>

 <span>1.	To understand the basics of arithmetic operations used in Python programming.<br>

2.	To learn using these operations while programming.</span><br><br>

<b><h2><span id="4">Manual</span></h2></b><hr>

 <span>In this lab you will learn to perform arithmetic operations with the help of a user friendly GUI.</span><br><br>

<b><h2><span id="5">Procedure</span></h2></b><hr>

 <span>1. Read the simulator details.<br>

2.	Enter the values you want to operate.<br>

3.	Select the desired type of operation from the operations list.<br>

4.	Press CALCULATE to proceed.<br>

5.	Press NEXT to see the execution of the code.<br>

6.	Relevant line in the code will be highlighted.<br>

7.	The local variables will be shown in the Output Panel with their values.</span><br><br><br>
<b><h2><span id="6">Further References</span></h2></b><hr>
<a href="http://www.learnpython.org/en/Basic_Operators">www.learnpython.org/en/Basic_Operators</a>
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

<!--End of content-->
</body>

</html>