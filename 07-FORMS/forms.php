<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
        <h1>Working with forms in PHP</h1>

        <form method="post" action="handle_reg.php">
            <p>Name: <input type="text" name="name"></p>
            <p>Email: <input type="email" name="email"></p>
            <p>Password: <input type="password" name="password"></p>
            <p>Date Of Birth: <input type="date" name="dob"></p>
            <p><input type="submit" name="submit" value="Register"></p>
        </form>
</body>
</html>