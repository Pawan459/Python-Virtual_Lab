<!DOCTYPE html>
<html>
<head>
	<title>Virtual lab</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1,  user-scalable=1.0, minimum-scale=1.0, maximum-scale=1.0">  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/fonts.css">

</head>
<style type="text/css">


    .pb-cmnt-textarea {
        resize: none;
        padding: 20px;
        overflow: hidden;
        height: 130px;
        width: 60%;
        border: 1px solid #F2F2F2;
    }
</style>
    <body style="font-family: Ubuntu; background-color: #E6E6FA;">
    	<div class="top">
    	<nav class="navbar navbar-default" style=" background-color:white; border-bottom: 1em solid #AF1216;border-top:0px; ">
    		<div class="container-fluid">
    			  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      	    <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
        <span class="icon-bar" style="background-color: #77BB41"></span>
      </button>
      <img src="img/vlab.png" class="img-responsive main-logo" width="20%">
    		</div>
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
           


    		</div>
    	</div>
    		
    	</nav>

    </div> 

    <div class="container-fuid" style="padding: 2px 44px;">
      <label><h1 style="font-family: Cabin Sketch;">Feedback Form</h1></label><br>
       <h3>1. Designation *</h3>
      <form method="POST" action="feedbackDBA.php">
       
        <div class="form-check" style="padding: 4px 28px;">
    <input name="designation" type="radio" value="Professor" class="form-check-input with-gap" id="radio106" >
    <label class="form-check-label" for="radio106">Professor</label>
    <input name="designation" type="radio"  value="Student" class="form-check-input with-gap" id="radio107"  checked style="margin-left: 2em;">
    <label class="form-check-label" for="radio107">Student</label>

    <input name="designation" type="radio" value="Other" class="form-check-input with-gap" id="radio108" style="margin-left: 2em;">
    <label class="form-check-label" for="radio108">Other</label>
</div>

        <h3>2. Did you attempt any experiments? *</h3>
     
             <div class="form-check" style="padding: 4px 28px;">
    <input name="Yes" type="radio" value="Yes" class="form-check-input with-gap" id="radio109">
    <label class="form-check-label" for="radio109">Yes</label>
    <input name="Yes" type="radio" value="No" class="form-check-input with-gap" id="radio110" style="margin-left: 2em;" >
    <label class="form-check-label" for="radio110">No</label>
</div>

<h3> 3. Please rate your experience *</h3>

     <div class="form-check" style="padding: 4px 28px;">
    <input name="rate" type="radio" value="2.0" class="form-check-input with-gap" id="radio111">
    <label class="form-check-label" for="radio111">2.0</label>

    <input name="rate" type="radio" value="4.0" class="form-check-input with-gap" id="radio112" style="margin-left: 2em;">
    <label class="form-check-label" for="radio112">4.0</label>

    <input name="rate" type="radio" value="6.0" class="form-check-input with-gap" id="radio113" style="margin-left: 2em;">
    <label class="form-check-label" for="radio113">6.0</label>

    <input name="rate" type="radio" value="8.0" class="form-check-input with-gap" id="radio114" style="margin-left: 2em;">
    <label class="form-check-label" for="radio114">8.0</label>

    <input name="rate" type="radio" value="10.0" class="form-check-input with-gap" id="radio115" style="margin-left: 2em;">
    <label class="form-check-label" for="radio115">10.0</label>
</div>

<h3>Comment your views and suggestions</h3>

  
     
                <div class="panel-body" >
                    <textarea name="comment"  placeholder="Write your comment here!" class="pb-cmnt-textarea" ></textarea>  
</div>
 
<br><button type="Submit" value="submit" class="btn btn-primary" style="margin-left: 1em;">Submit</button><br><br><br><br><br><br><br><br>
      </form>


    </div>
   </body>
  
  </html>