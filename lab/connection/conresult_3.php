<?php
session_start();
    $host = "50.62.209.3:3306";
    $user = "phPsitVLU";
    $password = "F1i_46vp";
    $db = "ph10463294181_PsitVlab";
        $conn = mysqli_connect($host, $user, $password, $db);
if ($conn) {
   if(isset($_POST['submit']))
   {
       if(!empty($_POST['quizto']))
       {
            $count=count($_POST['quizto']);
            //echo "out of 5 there are".$count."you selectd";
            $mark_3=0;
            $i=21+$var-10*($cid-1);
            $selected = $_POST['quizto'];
          // print_r($selected);
           $sql="SELECT `qid`, `cid`, `level`, `qname`, `A`, `B`, `C`, `D`, `correct_ans` FROM `questions` WHERE level='Medium'";
		    $result = mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_array($result))  {
		    	if($row["cid"]==$cid)
		    	{
		    		$check_3=$row["correct_ans"]==$selected[$i];
		    		if($check_3) {
		    		$mark_3++;
		    		}
                   
		    		
		    	    //else{
		    			//echo "Correct Answer is ".$row["correct_ans"]."---):  You selected " .$selected[$i]."<br>";
		    		//}
		    	}$i++;
           }
        }//echo "Your result is".$mark."";
   }
}
$mark_2=$_SESSION['mark1'];
$mark_3=$mark_2+$mark_3;
//echo "".$mark_3."";
?>
<!DOCTYPE html>
<html>
<style type="text/css">
	td{
		text-align: right;
		padding-right: 12em;
	}
	.ans{
		text-align: left;
		padding-left: 12em;
	}
	.row{
		margin-left: all;
		border: 2px solid black;
	}
	input{

	}
</style>
</html>
	<div class="container" style="padding-top: 3em;">	
		<div class="card">
			<div class="card-header text-center">
		<h1>Result</h1>
	</div>
	<div class="card-body">
		<?php 
		if($mark_3<29) 
		{
			?>
			<h3 style="color:#F05054;"><?php echo "Your result is ".$mark_3."/30 in this level." ; ?></h3>
	<?php
		}else{
		?>
	<h3 style="color:green;"><?php echo "Your result is ".$mark_3."/30 in this level." ; ?></h3>

		<?php
	}
	?>
	</div>	
	<table>
			<h4 style="text-align: left;padding-left: 2em;">That you response in quiz:
			</h4><tr>
			<thead>
			<th style="text-align: right;padding-right: 12em;">Q no.</th>
			<th style="text-align: left;padding-left: 10em;">Answer</th>
		    </thead>
	    </tr>
		<?php
		$i=21+$var;
            $selected = $_POST['quizto'];
		 $sql="SELECT `qid`, `cid`, `level`, `qname`, `A`, `B`, `C`, `D`, `correct_ans` FROM `questions` WHERE level='Hard'";
		    $result = mysqli_query($conn,$sql);
		    while($row = mysqli_fetch_array($result))  {
		    	if($row["cid"]==$cid)
		    	{
		    		$check_3=$row["correct_ans"]==$selected[$i];
		    		if ($cid!=1){
		    			?>
		    			<?php
						if($check_3){
									?>
					<tr>			
				    <td>
					<?php echo "<div style='color:#000000';/div><strong>Qno ".$row["qid"]%$var."</strong>";
					?>
					</td>
					<td class="ans">
				    <?php echo "<div style='color:green';padding:2em;/div><strong>".$row[$selected[$i]]."<br></strong>";
                      ?>
                      </td>
                  </tr>
                 <?php }
                  else{?>
                  	<tr>
                  	<td>
                  	<?php echo "<div style='color:#000000';padding:2em;/div>Qno ".$row["qid"]%$var."</strong>"
                  	?>
                  	</td>
                  	<td class="ans"> 
                  		<?php echo "<div style='color:green';padding:2em;/div><strong>".$row[$selected[$i]]."<br></strong>";
                      ?>
                   </td>
              </tr>
             <?php  
              }
             ?>
             <?php }
             else{
                  if($check_3){
                  	?>
                  	<tr>
                     <td>
                  	<?php echo "<div style='color:#000000';padding:2em;/div>Qno ".$row["qid"]."</strong>"
                  	?>
                  	</td>	
                  	<td class="ans"> 
                  		<?php echo "<div style='color:green';padding:2em;/div><strong>".$row[$selected[$i]]."<br></strong>";
                      ?>
                      </td>
                       </tr>
                 <?php }
                 else{ ?>
                 	<tr>
                 	 <td>
                  	<?php echo "<div style='color:#000000';padding:2em;/div>Qno ".$row["qid"]."</strong>"
                  	?>
                  	</td>	
                  	<td class="ans"> 
                  		<?php echo "<div style='color:green';padding:2em;/div><strong>".$row[$selected[$i]]."<br></strong>";
                      ?>
                      </td>
                  </tr>
                <?php
                 }
              } 

          }$i++;
          
      }
?>
</table>
</div>
</div>
<?php

if($mark_3==30){
	?>
	<script type="text/javascript">
		alert('Well Done!!!');
	</script>
	<form name="save" type="submit" method="POST">
<button type="submit" name="" value="Submit" class="btn btn-info btn btn-large" style="float: right; margin-left: 1em;margin-right:6em;margin-top: 1em;"></button>
</form>
<?php
}
?>
<?php
if(isset($_POST['save'])){
	$s="INSERT INTO 'score'('scores') VALUES ('$ark_3')";
	mysqli_query($conn,$s);
}
?>

<?php
mysqli_close($conn);
?>