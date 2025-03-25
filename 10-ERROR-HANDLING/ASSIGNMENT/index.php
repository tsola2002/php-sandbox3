<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Era</title>
</head>
<body>
        
            <div style="width: 750px; height:100px; background-color:cadetblue; ">
                JobEra
            </div>


            <form action="validate.php" method="post" enctype="multipart/form-data">
                <h1> The Registration Form </h1>

                <table border="0"><tr><td>
                            Name </td><td><input type="text" name="Name" value="" /></td>
                    </tr>
                    <tr><td>

                            Age </td><td><input type="text" name="Age" value="" /></td></tr>
                    <tr><td>
                            Email ID </td><td><input type="text" name="EmailID" value="" /></td></tr>
                    <tr><td>
                            Qualification </td><td><select name="Qualification" multiple="multiple">
                                <option> BSC </option>
                                <option>BCA</option>
                                <option>MCA</option>
                                <option>MSC</option>
                                <option>BTech</option>
                            </select>
                        </td>
                    </tr>
                    <tr><td>
                            Work Experience </td><td><textarea name="WorkExp" rows="4" cols="20"></textarea> </td>
                    </tr>
                    <tr><td>
                            Resume</td><td><input type="file" name="file" value="" /></td></tr>
                    <tr><td>
                            <input type="submit" value="Submit" /></td>
                    </tr>
                </table>
            </form>
        
    </body>
</html>