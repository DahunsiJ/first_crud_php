<?php
include_once "config.php";

if(isset($_POST['update'])) {
    $user_id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "UPDATE 'users' SET 'firstname' = '$firstname', 'lastname' = '$lastname', 'email' = '$email', 'password' = '$password', 'gender' = '$gender' WHERE 'id' = '$user_id'";

    $result = $conn->query($sql);

    If($result == TRUE){
        echo "Success";
    }else {
        echo "Errrrr:" . $sql . <br> . $conn->error;
    }
}

if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM 'users' WHERE 'id' = '$user_id'";

    $sql = $conn->query($sql);

    if($result->num_rows > 0 ) {
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
        }
    ?>    
    <html>
        <body>
            <h2>User Update form</h2>
            <form action="" method="post">
                <fieldset>
                    <legend>Personal Information:</legend>
                    <label for="firstname">First Name:
                        <input type="text" name="firstname" value="<?php echo $firstname ?>"> 
                    </label>
                    <label for="lastname">Last Name:
                        <input type="text" name="lastname" value="<?php echo $lastname ?>">
                    </label>
                    <label for="password">Password:
                        <input type="password" name="password" value="<?php echo $password ?>">
                    </label>
                    <label for="gender">Gender:
                        <label for="male">Male:
                            <input type="radio" name="gender" id="male" value="male" <?php if($gender == 'Male'){ echo "checked";}?> > 
                        </label>
                        <label for="female">Female
                            <input type="radio" name="gender" id="female" value="female" <?php if($gender == 'Fem ale'){ echo "checked";}?> >
                        </label>
                    </label>
                    <input type="submit" value="Update" name="update">
                </fieldset>
            </form>
        </body>
    </html>
   

<php 

        } else {
            header('Location: Index.php');
        }
    };
}
?>