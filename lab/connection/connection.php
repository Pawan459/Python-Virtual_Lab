<?php
    $host = "50.62.209.3:3306";
    $user = "phPsitVLU";
    $password = "F1i_46vp";
    $db = "ph10463294181_PsitVlab";
    $conn = mysqli_connect($host, $user, $password, $db);
//making here to take input from user about the level he/she to be go inside that is taken from from the webpage like selcting 'easy' that will be added here automatically and then it do the furrther work.//  
   $sql="SELECT `qid`, `cid`, `level`, `qname`, `A`, `B`, `C`, `D`, `correct_ans` FROM `questions`";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($result)) 
    {
        if($row["cid"]==$cid)
        {
            if($row["level"]==$level)
            {
     //echo " ".$row["qid"].".".$row["qname"]." <br>";
     //echo " ".$row["Answer1"]." <br> ".$row["Answer2"]." <br> ".$row["Answer3"]." <br> ".$row["Answer4"]." <br>";
   ?>
   <div class="card">
<div class="card-header">
    <?php echo "".$row["qid"]-$var.".".$row["qname"]."";?>
</div>
<div class="card-body">
    <input type="radio" name="quizto[<?php echo $row["qid"]; ?>]" value="A"required=""><?php echo "".$row["A"]."";?><br>
    <input type="radio" name="quizto[<?php echo $row["qid"]; ?>]" value="B"required=""><?php echo "".$row["B"]."";?><br>
    <input type="radio" name="quizto[<?php echo $row["qid"]; ?>]" value="C"required=""><?php echo "".$row["C"]."";?><br>
    <input type="radio" name="quizto[<?php echo $row["qid"]; ?>]" value="D"required=""><?php echo "".$row["D"]."";?><br><br>
</div>
    </div> <br /><br />
          <?php  
            }
        }
    }
    ?>