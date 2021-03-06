<!DOCTYPE html>
<html>
<head>
  <title>Simulator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  
</head>
<style type="text/css">
  .erp{
    display: inline-block;
    width: 100%;
    top: 0;
    background-color: #FF3B3F;
    color: white;
   padding: 2px 10px ;
text-align: center;
  }
  .block1{
    position: fixed left;
    display: inline-block;
    width: 20em;
    height: 30em;
    overflow: auto;
    border: 1px solid grey;
    margin-top: 1em;
    margin-left: 1em;
  }
    .block2{
    position: fixed left;
    display: inline-block;
    width: 20em;
    height: 15em;
    overflow: hidden;
    border: 1px solid grey;
    margin-top: 1em;
    margin-left: 1em;
  }
     .block3{
    position: fixed left;
    display: inline-block;
    width: 30em;
    height: 30em;
    overflow: auto;
    border: 1px solid grey;
    margin-top: 1em;
    margin-left: .5em;
  }
     .block4{
    display: inline-block;
    width: 40em;
    height: 30em;
    overflow: hidden;
    border: 1px solid grey;
    margin-top: 1em;
    margin-left: .5em;
  }

  .header1{
position: absolute;
    padding-top: 1em;
    display: inline-block;
  width: 17.5em;
  height: 2.9em;
  border: 1px solid black;
  border-top-left-radius: 9px;
  border-top-right-radius: 9px;
  margin-top: -10px;
  margin-left:-1px;
  background-color: #eee;
  text-align: center;
  font-size:16px;
  }
    .header2{
position: absolute;
    padding-top: 1em;
    display: inline-block;
  width: 26.25em;
  height: 2.9em;
  border: 1px solid black;
  border-top-left-radius: 9px;
  border-top-right-radius: 9px;
  margin-top: -10px;
  margin-left:-1px;
  background-color: #eee;
  text-align: center;
  font-size:16px;
  }
    .header3{
position: absolute;
    padding-top: 1em;
    display: inline-block;
  width: 35em;
  height: 2.9em;
  border: 1px solid black;
  border-top-left-radius: 9px;
  border-top-right-radius: 9px;
  margin-top: -10px;
  margin-left:-1px;
  background-color: #eee;
  text-align: center;
  font-size:16px;
  }
  .block1 ul li{

    margin-top: 1em;
    font-size: 15px;
  }
  .tn{
    margin-top: -2em;
  }

 
 #btn_1{
     width: 5em;
    margin-left: 7.7em;
    margin-top: .9em;
  }
  #btn_2{
    width: 5em;
    margin-top: .3em;
    margin-left: 2em;
  }
  #btn_3{
    margin-top: .3em;
    margin-left: 6em;
  }
  #option{margin-left: .4em;
    width: 16em;
    margin-top: 2em;
  }

   .pre{
    margin-left: 1em;
    margin-top: 3.5em;
  }
  .block4 #res_1{
    margin-top: 3em;
  }
  .straight{
    margin-top: 2em;
    display: inline-block;
    height: 30em;
    margin-left: 2em;
  }
th,td{
  padding:10px;
}
th{
  text-align:left;
}
table#t2{
  border-collapse:collapse;
}
table#t2 th{
  background-color:black;
  color:white;
}
.select{
  width: 7em;
  margin-left: 6em;
  margin-top: 3em;
}
.form-control{
  margin-top: 1em;
}
@media (min-width: 320px) and (max-width:400px){


    .straight{
    
    margin-left: -2%;
   margin-top: 18%;

   
    
  }

  .block3{
    
    margin-top: -150%;
    margin-left: 100%;
    margin-bottom: 7%;
    margin-right: 5%;
   
  }
 
  .block4{
     margin-top: -150%; 
     margin-left: 240%;
 margin-right: 5%;
  margin-bottom: 14%;
    

 }
}
@media (min-width: 401px) and (max-width:480px){


    .straight{
    
    margin-left: -2%;
   margin-top: 20%;

   
    
  }

  .block3{
    
    margin-top: -130%;
    margin-left: 85%;
    margin-bottom: 6%;
    margin-right: 5%;
   
  }
 
  .block4{
     margin-top: -130%; 
     margin-left: 210%;
 margin-right: 5%;
  margin-bottom: 12%;
    

 }
}
@media (min-width: 481px) and (max-width:580px){


    .straight{
    
    margin-left: -2%;
   margin-top: 22%;

   
    
  }

  .block3{
    
    margin-top: -130%;
    margin-left: 70%;
    margin-bottom: 4%;
    margin-right: 5%;
   
  }
 
  .block4{
     margin-top: -130%; 
     margin-left: 170%;
 margin-right: 5%;
  margin-bottom: 9%;
    

 }
}
@media (min-width: 581px) and (max-width:680px){


    .straight{
    
    margin-left: -2%;
   margin-top: 20%;


   
    
  }

  .block3{
    
    margin-top: -130%;
    margin-left: 55%;
    margin-bottom: 3%;
    margin-right: 5%;
   
  }
 
  .block4{
     margin-top: -130%; 
     margin-left: 136%;
 margin-right: 5%;
  margin-bottom: 7%;
    

 }
}
@media (min-width: 681px) and (max-width:768px){


    .straight{
    
    margin-left: 1%;
   margin-top: 20%;


   
    
  }

  .block3{
    
    margin-top: -130%;
    margin-left: 47%;
    margin-bottom: 3%;
    margin-right: 5%;
   
  }
 
  .block4{
     margin-top: -130%; 
     margin-left: 116%;
 margin-right: 5%;
  margin-bottom: 6%;
    

 }
}
@media (min-width: 769px) and (max-width: 810px){
.straight{
    
    margin-left: 1%;
   margin-top: 20%;


   
    
  }

  .block3{
    
    margin-top: -130%;
    margin-left: 40%;
    margin-bottom: 2.6%;
    margin-right: 5%;
   
  }
 
  .block4{
     margin-top: -130%; 
     margin-left: 95%;
 margin-right: 5%;
  margin-bottom: 5.4%;
    

 }

}
@media (min-width: 811px){
.straight{
    
    margin-left: 1%;
   margin-top: 20%;


   
    
  }

  .block3{
    
    margin-top: -130%;
    margin-left: 40%;
    margin-bottom: 2.6%;
    margin-right: 5%;
   
  }
 
  .block4{
     margin-top: -130%; 
     margin-left: 95%;
 margin-right: 5%;
  margin-bottom: 5.4%;
    

 }

}
@media (min-width: 1326px){
.straight{
    
    margin-left: 1%;
   margin-top: 3%;


   
    
  }

  .block3{
    
    margin-top: -160%;
    margin-left: 1%;
    margin-bottom: 0%;
    margin-right: 5%;
   
  }
 
  .block4{
     margin-top: -120%; 
     margin-left: 57%;
 margin-right: 5%;
  margin-bottom: 1.4%;
    

 }
#bs li a{
  text-decoration: none; 
    border-width: 4em;
    
  height: 2.3em;
    margin-left: .5em;
    margin-top: 1.2em; 
    margin-right: .5em;
    color: #fff;
    font-family:Ubuntu;
    font-weight: lighter;
    font-size: 24px;
}
.navbar-nav li a:hover, .navbar-nav li.active a{
   color: #f4511e !important;
  background-color:#fff !important;
}
 .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
}
</style>
<body style="font-family: Ubuntu;">
   <div class="top">
      <nav class="navbar navbar-default navbar-fixed-top" style=" background-color:#F05054; border:0px; ">
        <div class="container">
            <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
        <span class="icon-bar" style="background-color: white;"></span>
      </button>
  </div>
     <ul class="nav navbar-nav navbar-left" >
     <h1 style="font-size: 44px; color: white;">Analysis of Strings</h1>
     </ul>
          <div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              
              <li><a href="./Indexing.php" style="font-family:  Ubuntu;">Back</a></li>   
            </ul>
        </div>
 </div>
</nav>
</div>
<div class="container-fluid">
  <div class="straight">
<div class="block1" style="margin-top: 9em;">
  <div class="header1">Demonstration</div><br> <br><br>
  <label>Demonstrate the workking of slicing the strings.</label><br>
    <input type="text" class="form-control input-sm"  id="input1" placeholder="Enter the String">
    <input type="text"  class="form-control input-sm"  id="input_2" placeholder="Starting index">
       <input type="text"  class="form-control input-sm"  id="input_3" placeholder="Ending index">

<br>
<div class="tn">
<button class="btn btn-default" id="btn_1">Start</button><br><br>
<button class="btn btn-primary" id="btn_2">Next</button>
<button class="btn btn-primary" id="btn_3">Reset</button>
</div>
</div>
</div>

<div class="block3">
<div class="header2">Step Execute</div>
<div class="step1" id="step" style="display:none;text-align:left;"><br><br><b>
    <p id="1">s = input("Enter the String :")</p>
    <p id="2">start = input("Starting Index :")</p>
    <p id="3">end = input("Ending Index :")</p>
    <p id="4">print(s[start:end])</p>
</b>
</div>
</div>

<div class="block4">
<div class="header3">Result</div>
<b>
 <p id="res_1" style="display:none;">The Sliced String is :</p>
    <p id="res_2"></p>
  </b>
</div>
</div>
<script src="js/string_slicing.js"></script>
</body>
</html> 
