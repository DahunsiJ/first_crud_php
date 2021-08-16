<?php

include_once "config.php";



if(isset($_GET['id'])) {
    $user_id = $_GET['id'];

    $sql = "DELETE * FROM 'users' WHERE 'id' = '$user_id'";

    $sql = $conn->query($sql);

    if ($result = TRUE) {
        echo "Deleted Successfully";
    }else{
        echo "Errrrrrrrr:" . $sql . "<br>" . $conn->error;
    }
}
?>