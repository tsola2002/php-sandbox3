<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    function customizedError ($errno, $errstr, $errfile, $errline)
    {
        if (!(error_reporting() & $errno)){
            return;
        }

        switch ($errno){
            case E_USER_WARNING:
                echo "<b>WARNING</b> [$errno] $errstr<br />\n";
                break;
        }
        return true;
    }

    set_error_handler("customizedError");

    if ($_POST)
    {
        $errMsg = "";
        $Name = $_POST["Name"];
        $Age = $_POST["Age"];
        $EmailID = $_POST["EmailID"];
        $Qualification = "";
        $WorkExp = $_POST["WorkExp"];
        if (empty($Name))
            $errMsg.="Name cannot be left blank.<br>";
        if (empty($Age))
            $errMsg.="Age cannot be left blank.<br>";
        else if (!filter_var($Age, FILTER_VALIDATE_INT))
            $errMsg.="Invalid Age.<br>";
        else if ($Age <= 0 || $Age > 100)
            $errMsg.="Age out of range (1 - 100).<br>";
        if (empty($EmailID))
            $errMsg.="Email ID cannot be left blank.<br>";
        else if (!filter_var($EmailID, FILTER_VALIDATE_EMAIL))
            $errMsg.="Invalid Email ID.<br>";
        if (isset($_POST["Qualification"]))
            $Qualification = $_POST["Qualification"];
        else
            $errMsg.="Please select at least one qualification.<br>";

        if (empty($WorkExp))
            $errMsg.="Work Experience cannot be left blank.<br>";
        else if (!filter_var($WorkExp, FILTER_VALIDATE_FLOAT))
            $errMsg.="Invalid Work Experience.<br>";
        else if ($WorkExp < 0 || $WorkExp > 50)
            $errMsg.="Work Experience out of range (0 - 50).<br>";
        if(!isset($_FILES["file"]))
            $errMsg.="Please attach your resume.<br>";
        if (empty($errMsg))
            if ((($_FILES["file"]["type"] == "application/msword")))
            {
                
                        $tmp_name = $_FILES["file"]["tmp_name"];
                        $name = $_FILES["file"]["name"];

                        move_uploaded_file($tmp_name, $name);
                        echo "Successfully uploaded.";
            }
            else
            {
                trigger_error("<br>Resume: Only MS Word document is supported.", E_USER_WARNING);
            }
        else
        {
            echo "<font color=red>" .   $errMsg . "</font>";
        }
    }
    
    ?>
</body>
</html>