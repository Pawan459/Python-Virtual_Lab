<!DOCTYPE html>
<html>
<head>
	<title>Classes And Objects</title>
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
    margin-top: 9em;
  }

 
 #btn_1{
     width: 5em;
    margin-left: 7.7em;
    margin-top: .4em;
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
  #option{margin-left: 1em;
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
  margin-top: -9em;
}
@media (min-width: 320px) and (max-width:400px){


    .straight{
    
    margin-left: -2%;
   margin-top: 18%;

   
    
  }

  .block3{
    
    margin-top: -150%;
    margin-left: 100%;
    margin-bottom: 3%;
    margin-right: 5%;
   
  }
 
  .block4{
     margin-top: -150%; 
     margin-left: 240%;
 margin-right: 5%;
  margin-bottom: 6%;
    

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
     margin-left: 59%;
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
<body  data-spy="scroll" data-target=".navbar" data-offset="60" style="font-family: Ubuntu;">
<div class="top">
    	<nav class="navbar navbar-default navbar-fixed-top" style=" background-color:#F05054; border:0px; ">
    		<div class="container">
    			  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-1" aria-expanded="false">
      	    <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
      </button>
  </div>
     <ul class="nav navbar-nav navbar-left" >
     <h1 style="font-size: 44px; color: white; ">Analysis of Classes And Objects</h1>
     </ul>
    		
    		<div class="collapse navbar-collapse" id="collapse-1">
            <ul class="nav navbar-nav navbar-right" id="bs">
              
              <li><a href="../classesandobjects.php" style="font-family:  Ubuntu;">Back</a></li>  
        

            	
            </ul>
        </div>


    		</div>
    		
    	</nav>

    </div>
    <div class="container-fluid">
        <div class="straight">
<div class="block1" style="margin-top: 9em;">
	<div class="header1">Demonstration</div>
	<ul>
		 <label><br><br><li>To Know About Classes And Objects.</li></label>
	</ul>
<br>
<div class="tn">
<button class="btn btn-default" id="btn_1">Start</button><br>
<button class="btn btn-primary" id="btn_2">Next</button>
<button class="btn btn-primary" id="btn_3">Reset</button>
</div>
</div>

<div class="block3">
<div class="header2">Step Execute</div>
<div class="pre">
    
<div class="step1" id="step" style="display:none;text-align:left;">
	<b>	<p id="1">class pythonlab:</p>
		<p id="2" style="padding-left:10px;">pass</p>
		<p id="3">user1=pythonlab()</p>
		<p id="4">user1.name="Yash Srivastava"</p>
		<p id="5">user1.marks=96</p>
		<p id="6">user1.email=yash@pythonlab.com</p>
		<p id="7">print("Now we will Print the instance that user defined in the class")</p>
		<p id="8">print(user1.name)</p>
		<p id="9">print(user1.email)</p>
		<p id="10">print(user1.marks)</p></b>
</div>
    
</div>
</div>

<div class="block4">
<div class="header3">Output</div>
 <p id="res_1" style="display:none;">class:		user1</p>
    <p id="res_2" style="display:none;">class(user1) instance->name:	Yash Srivastava</p>
	<p id="res_3" style="display:none;">class(user1) instance->marks:	96</p>
	<p id="res_4" style="display:none;">class(user1) instance->email:	yash@pythonlab</p>
	<p id="res_5" style="display:none;"><b>Now we will Print the instance that user defined in the class</b></p>
	<p id="res_6" style="display:none;"><b>Yash Srivastava</b></p>
	<p id="res_7" style="display:none;"><b>yash@pythonlab</b></p>
	<p id="res_8" style="display:none;"><b>96</b></p>
</div>
</div>  
</div>


<br><br>
<script src="classesandobjects (1).js"></script>
</body>
</html>
