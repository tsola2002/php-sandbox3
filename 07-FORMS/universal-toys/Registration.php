<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <head>
        <title>Registration Form</title>

    </head>
    <body>
        <h1>Registration Form</h1>
        <p>To register, please fill in your details below and click the Submit button.</p>
        <form action="Details.php" method="post" enctype="multipart/form-data">
            <div style="width: 30em;">
                <table>
                    <tr>
                        <td>Name</td>
                        <td><input type="text" name="name" id="name"/></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><textarea id="address" rows="4" cols="20" name="address"></textarea></td>
                    </tr>
                    <tr>
                        <td>Phone No</td>
                        <td><input type="text" name="phone" id="phone"/></td>
                    </tr>
                    <tr>
                        <td>Email ID</td>
                        <td><input type="text" name="email" id="email"/></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" id="password"/></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="cpassword" id="cpassword"/></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>Male <input type="radio" name="Gender" value="Male"/>
                            Female <input type="radio" name="Gender" value="Female" />
                        </td>
                    </tr>
                    <tr>
                        <td>Upload Address Proof</td>
                        <td><input type="file" name="file" value="" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submitButton" id="submitButton" value="Submit"/></td>
                    </tr>

                </table>



            </div>

        </form>
    </body>
</html>

