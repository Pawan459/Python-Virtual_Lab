<!DOCTYPE html>
<html>
<head>
  <title>Arithmatic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
     <link rel="stylesheet" type="text/css" href="css/math_sim.css">
</head>

<body style="font-family: Ubuntu;">
   <div class="top">
      <nav class="navbar navbar-default navbar-fixed-top" style=" background-color:#F05054; border:0px; ">
        <div class="container">
            <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>
        <span class="icon-bar" style="background-color: white"></span>
      </button>
  </div>
     <ul class="nav navbar-nav navbar-left" >
     <h1 style="font-size: 44px; color: white; ">Analysis of Arithmatic Operators</h1>
     </ul>
     <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" id="bs" >
              <li><a href="../arithmetic.php" style="font-family:  Ubuntu;">Back</a></li>
          
              
            </ul>
        </div>
 </div>
</nav>
</div>
<div class="container-fluid">
  <div class="straight">
<div class="block1" style="margin-top: 9em;">
  <div class="header1">Problem?</div><br>
  <div class="select">
    <select class="form-control" id="option" required="required">
        <option  value="">-- Select option --</option>
      <option  value="add1">Addition</option>
      <option  value="sub1">Subtraction</option>
      <option  value="mul1">Multiplication</option>
      <option  value="div1">Division</option>
    </select>
  </div>
<br>
<div class="tn">
<input type="text" class="form-control input-sm"  id="input_1" placeholder="Enter the First Number"><br>
<input type="text"  class="form-control input-sm"  id="input_2" placeholder="Enter the Second Number"><br>
<button class="btn btn-default" id="btn_1">Start</button><br>
<button class="btn btn-primary" id="btn_2">Next</button>
<button class="btn btn-primary" id="btn_3">Reset</button>
</div>
</div>
</div>

<div class="block3">
<div class="header2">Step Execute</div>
<div class="pre">
  <div class="step1" id="add" style="display:none;text-align:left;"><br><br><b>
    <p id="1">a = Input('Enter a Number')</p>
    <p id="2">b = Input('Enter a Number')</p>
    <p id="3">c = a + b</p>
    <p id="4">print("The Addition is :",c)</p></b>
  </div>
  <div class="step1" id="sub" style="display:none;text-align:left;"><br><br><b>
    <p id="s1">a = Input('Enter a Number')</p>
    <p id="s2">b = Input('Enter a Number')</p>
    <p id="s3">c = a - b</p>
    <p id="s4">print("The Subtraction is :",c)</p></b>
  </div>
  <div class="step1" id="mul" style="display:none;text-align:left;"><br><br><b>
    <p id="m1">a = Input('Enter a Number')</p>
    <p id="m2">b = Input('Enter a Number')</p>
    <p id="m3">c = a * b</p>
    <p id="m4">print("The Multiplication is :",c)</p></b>
  </div>
  <div class="step1" id="div" style="display:none;text-align:left;"><br><br><b>
    <p id="d1">a = Input('Enter a Number')</p>
    <p id="d2">b = Input('Enter a Number')</p>
    <p id="d3">c = a / b</p>
    <p id="d4">print("The Division is :",c)</p></b>
  </div>
    </div>
</div>

<div class="block4">
<div class="header3">Result</div>
  <table>
      <tr>
        <th>Variables</th>
        <th>Values</th>
      </tr>
      <tr>
        <td id="r1" style="display:none">a :</td>
        <td id="r1_1"></td>
      </tr>
      <tr>
        <td id="r2" style="display:none">b :</td>
        <td id="r2_2"></td>
      </tr>
      <tr>
        <td id="r3" style="display:none">c :</td>
        <td id="r3_3"></td>
      </tr>
      <tr>
        <td id="r4">Output :</td>
      </tr>
      <tr>
        <td id="r5_1" style="display:none;">The Addition is :</td>
        <td id="r5_2" style="display:none;">The Subtraction is :</td>
        <td id="r5_3" style="display:none;">The Multiplication is :</td>
        <td id="r5_4" style="display:none;">The Division is :</td>
        <td id="r5_5"></td>
      </tr>
  </table>
</div>
</div>
<br><br>


<script src="Math_sim.js"></script>
</body>
</html>
