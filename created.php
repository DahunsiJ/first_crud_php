<?php
include_once "create.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <h1>Sign Up</h1>

    <form action="" method="post">
        <fieldset>
            <legend>Personal Information:</legend>
            <label for="firstname">First Name:
                <input type="text" name="firstname">
            </label>
            <label for="lastname">Last Name:
                <input type="text" name="lastname">
            </label>
            <label for="password">Password:
                <input type="password" name="password">
            </label>
            <label for="gender">Gender:
                <label for="male">Male:
                    <input type="radio" name="male" id="male" value="male">
                </label>
                <label for="female">Female
                    <input type="radio" name="female" id="female" value="female">
                </label>
            </label>
            <input type="submit" value="Sign Up">
        </fieldset>
    </form>

</body>
</html>