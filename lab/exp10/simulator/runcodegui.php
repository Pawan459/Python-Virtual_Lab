<?php

    $result = "";
    $codecopy = "";

    $codecopy = file_get_contents("code1.py");

    $explanation = "";

    $explanation = file_get_contents("explanation.html");

if (isset($_GET["r"]))
    {
        $result = "";
        $file_handle = fopen("result.txt", "r") or die ("");

        while (!feof($file_handle))
        {
            $result = fgets($file_handle);
        }

        fclose($file_handle);
    }

?>
<html>
    <head>
    </head>
    <body>
        <table align = "center" width = "100%" height = "99%">
            <tr>
                <td rowspan = "4" align = "right" width = "60%">
                    <textarea style = "height: 100%; width: 100%;' readonly name = "script"><?= $codecopy ?></textarea>
                </td>
            </tr>
            <tr>
                <td style = "height: 40%; vertical-align: top;">
                    <form name = "inputs" action = "getcodegui.php" method = "POST">
                    <table style = "width: 100%; vertical-align: top;">
                        <tr>
                            <td colspan = "2" align = "right">
                                <input type = "submit" value = "Submit" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </td>
            </tr>
            <tr>
                <td>
                    Click <a href = "explanation.html" target = "new">here</a> for explanation
<!--                    <textarea style = "height: 90%; width: 100%;' readonly name = "result">--><?//= $explanation ?><!--</textarea>-->
                </td>
            </tr>
        </table>
    </body>
</html>