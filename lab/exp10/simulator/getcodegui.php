<?php
	set_time_limit(600);
    /*$eid = $_POST["eid"];
    $name = $_POST["ename"];
    $salary = $_POST["salary"];
    $desig = $_POST["desig"];
    $location = $_POST["loc"];

    if (strpos($name, " ") >= 0)
    {
        $name = '"' . $name .'"';
    }

    ob_start();*/
    $path = "C:/\"Program Files\"/Python36/python.exe";
    $command = $path . " code1.py";
    $result = shell_exec($command);

    $result_file = fopen("result.txt", "w");
    fwrite($result_file, $result);

    echo "<script>location.href = 'gui.php?r=y';</script>";
?>ph