
<!DOCTYPE html>
<html>
<head>
	<title>PYTHON PROGRAMMING LAB</title>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  

</head>
<style type="text/css">
  .modal-body .form-horizontal .col-sm-2,
.modal-body .form-horizontal .col-sm-10 {
    width: 100%
}

.modal-body .form-horizontal .control-label {
    text-align: left;
}
.modal-body .form-horizontal .col-sm-offset-2 {
    margin-left: 15px;
}

.col-sm-3 .experiment-card:hover{
box-shadow: 17px 17px 45px #FD767A;
}
.row a{
	text-decoration: none;
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
  .text {
  color: black;
  font-size: 20px;
  position: absolute;
}
.navbar-nav li a:hover, .navbar-nav li.active a{
	 color: #f4511e !important;
	background-color:#fff !important;
}
 .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
.navbar-default{
	margin-top: -1em;
}
.text{
	text-align: center;
	font-size: 80px;
	color: #eee;
  font-weight: semi-bold;
	font-family: Ubuntu;

}
.row1{
	width: 60%;
}

@media (min-width: 320px) and (max-width: 490px){

.page-footer{
	display: none;
}
.navbar-left ul{
	display: none;
}
.space h1{
  margin-top: 25%;
}

}
@media (min-width:491px ) and (max-width:680px ){
.space h1{
  margin-top: 15%;
}
 #two{
	display: none;
}
 #three{
	display: none;
}
 #four{
	display: none;
}
.col-lg-9{
	width: 100%;
	margin-top: 20%;
}

#one{
   margin-top: -17%;
   margin-left: 70%;
}


}
@media (min-width: 681px) and (max-width: 800px){
  .space h1{
  margin-top: 15%;
}
.col-lg-9{
	width: 100%;
}
.col-md-3{
	width: 100%;
}
.col-xs-2{
	margin-top: 13%;
}
#one{
	margin-top: 13%;
	margin-left: 10%;
}
#two{
	display: none;
}
#three{
	width: 50%;
	margin-top: -13%;
	margin-left: 90%;
}
#four{
	width: 50%;
	margin-top: -13%;
	margin-left: 130%;
}
}
@media (min-width: 801px) and (max-width: 1000px){
.col-lg-9{
	width: 80%;
}
.col-md-3{
	width: 100%;
}
.col-xs-2{
	margin-top: 13%;
}
#one{
	margin-top: 13%;
	margin-left: 10%;
}

#three{
	width: 50%;
	margin-top: -13%;
	margin-left: 80%;
}
#four{
	width: 50%;
	margin-top: -13%;
	margin-left: 120%;
}
#two{
	width: 50%;
	margin-top: -13%;
	margin-left: 170%;
}
}

@media (min-width: 	1001px) and (max-width: 1120px){

.col-lg-9{
	width: 80%;
}
.col-md-3{
	width: 100%;
}
.col-xs-2{
	margin-top: 13%;
}
#one{
	margin-top: 13%;
	margin-left: 10%;
}

#three{
	width: 50%;
	margin-top: -13%;
	margin-left: 80%;
}
#four{
	width: 50%;
	margin-top: -13%;
	margin-left: 120%;
}
#two{
	width: 50%;
	margin-top: -13%;
	margin-left: 170%;
}
}
@media (min-width: 	1121px){

.col-lg-9{
	width: 80%;
}
.col-md-3{
	width: 100%;
}
.col-xs-2{
	margin-top: 12%;
}
#one{
	margin-top: 12%;
	margin-left: 10%;
}

#three{
	width: 50%;
	margin-top: -13%;
	margin-left: 80%;
}
#four{
	width: 50%;
	margin-top: -13%;
	margin-left: 120%;
}
#two{
	width: 50%;
	margin-top: -13%;
	margin-left: 170%;
}
}
.experiment-card {
         position:relative; 
         /*padding: 1.5em 2em 1.5em 2em;*/
           padding: 0em 1em 0em 1em;
           margin: 0em 1em 0em 1em;
           margin-top: 2%;
          
         border-radius: 6px;
         width: 105%;
         
         min-height: 2%;
         color:  #fff/* #333 */
         margin-top: 1em;
         background-color: #FD767A;
      }
      .right-card {
         margin-left: 3em;
         margin-top: 3em;
      }
   
    .col-sm-3{
      padding: 2em 3em 0em 0em;
    }
.experiment-description{
   padding: 0em 1em 0em 1em;
   margin: 0em 1em 0em 0em;
   margin-top: 2%;
   height: 270px;
   overflow-y:hidden;
   background-color: #FD767A;border-radius: 6px;
  width: 100%;
  color: #fff;
   font-family: Ubuntu;
   /*border-radius: 1em;
   border: 1px solid #aaa;*/
}

  

@media (max-width: 480px) {
    .experiment-description {
  margin-top: 2%;
  height: 100%;
  }
}
</style>
<body data-spy="scroll" data-target=".navbar" data-offset="60" style="font-family: Ubuntu;">



<div class="space"><h1 style="text-align: center; padding-top: 2em; color: #AF1216;  font-size: 60px;">Explore Python Lab</h1></div><br /><br />
 <!--header-->
 <?php include 'header.php'?>
 <!--header end-->

<div class="container-fluid"  id="explore">
<div class="row">
	<!--1st experiment-->
	<a href="exp1\arithmetic.php">
		<div class="col-sm-3">
		  <div class="experiment-card">
     <div class="experiment-description">
				<h3>1.Arithmetic Operation</h3>
				<p><br><br><br>An operator is a symbol that tells the compiler that either a mathematical or a logical manipulation has to be done. In this lab you will be studying about the Arithmetic.......<br></p>

			</div> 
          
      <img src="img/check.png" class="pull-left" width="30">
          <a href="exp1\arithmetic.php"></a><br /><br />
      
    </div>
    </div>
   </a>

  <!--2nd experiment-->
	<a href="exp3\function.php">
		<div class="col-sm-3">
		    <div class="experiment-card">
     <div class="experiment-description">
				<h3>2.Functions</h3>
				<p><br><br><br>A function is basically a chunk or module of code that takes in some input from the user and may or may not give any output. The function may provide some alter......<br></p>
				</div>
          <img src="img/check.png" class="pull-left" width="30">
       <br /><br />
        
      
    </div>
    </div>
   </a>
<!--3rd experiment-->
	<a href="exp4\loop.php">
		 <div class="col-sm-3">
    <div class="experiment-card">
     <div class="experiment-description">			<h3>3.Loop</h3>
				<p><br><br><br>Loop is a sequential set of instructions which gets executed multiple times to reduce minimize the repetition of code.To understand the functioning and flow of'.............<br></p>
				</div>
            <img src="img\check.png" class="pull-left" width="30">
        <br /><br />
        
      
    </div>
    </div>
   </a>
<!--4th experiment-->

	
	<a href="exp5\datatypes.php">
		  <div class="col-sm-3">
    <div class="experiment-card">
     <div class="experiment-description">
				<h3>4.Data Types</h3>
				<p><br><br><br>A function is basically a chunk or module of code that takes in some input from the user and may or may not give any output. The function may provide some altera.......<br></p>
			</div>
            <img src="img\check.png" class="pull-left" width="30">
        <br /><br />

        
      
    </div>
    </div>
   </a>

   </div>
<!--5th experiment-->
<div class="row">
	
	<a href="exp2\string.php">
		 <div class="col-sm-3">
    <div class="experiment-card">
     <div class="experiment-description">
				<h3>5.String</h3>
				<p><br><br><br> We can access a string using indexing. In a string each character is assigned with a unique index value which starts from 0. A string can be written in both .......<br></p>
      </div>
				<img src="img\check.png" class="pull-left" width="30"><br /><br />
				
			
		</div>
   	</div>
   </a>
<!--6th experiment-->
   	
   	<a href="exp6\classesandobjects.php">
   	<div class="col-sm-3">
    <div class="experiment-card">
     <div class="experiment-description">
				<h3>6.Classes and Objects</h3>
				<p><br><br><br>Classes are the blueprints or we can say a group of sets of instructions that perform specific task for a object.It is use to which stores variables and funct......<br></p>
				</div>
        <img src="img\check.png" class="pull-left" width="30">
				<br /><br />
				
			
		</div>
   	</div>
   </a>
  
   <!--7th experiment-->

      <a href="exp7\modules.php">
     <div class="col-sm-3">
    <div class="experiment-card">
     <div class="experiment-description">
				<h3>7.Modules</h3>
				<p><br><br><br>To perform specific functions like add, subtract, power, square root, we need to write two three lines of logic to make our task or function work properly.......<br></p>
				</div>
        <img src="img\check.png" class="pull-left" width="30"><br /><br />
			
		</div>
   	</div>
   </a>
<!--8th experiment-->
   	<a href="exp8\constructorandinheritance.php">
   		<div class="col-sm-3">
    <div class="experiment-card">
     <div class="experiment-description">
				<h3>8.Constructor and Inheritance</h3>
				<p><br>Inheritance is a feature that says if you define a new class giving a reference of some other class then due to inheriting property of python your ne.........<br></p>
				</div>
        <img src="img\check.png" class="pull-left" width="30"><br /><br />
				
			
		</div>
   	</div>
   </a>

   </div>
<!--9th experiment-->
<div class="row">
   	<a href="exp9\fileoperators.php">
   	<div class="col-sm-3">
    <div class="experiment-card">
     <div class="experiment-description">
				<h3>9.File Operators</h3>
				<p><br><br><br>File operations in any programming is very essential. Files are used to save and transfer data. They can be of any form, a text file or a media file. They ..........<br></p>
			</div>
      	<img src="img\check.png" class="pull-left" width="30">
				<br /><br />
				
			
		</div>
   	</div>
</a>
<!--10th experiment-->

   <a href="exp10\guiapp.php">
   <div class="col-sm-3">
    <div class="experiment-card">
     <div class="experiment-description">
				<h3>10.GUI Application</h3>
				<p><br><br><br>Computers were built to make basic calculations easy for humans. But then came the need of a better interaction between machines and humans. And thus, GUI came into us.........<br></p>
				</div>
        <img src="img\check.png" class="pull-left" width="30">
			<br /><br />
				
			
		</div>
   	</div>
   </a>

   </div>

   <br><br><br><br>
<!--end of container here-->
</div>

<!---Footer--->

<?php include 'footer.php'?>


<!--End of Footer-->

</body>
</html>