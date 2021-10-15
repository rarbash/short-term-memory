<?php
    $mysqli = new mysqli("localhost", "root", null, "css326_shortMemoryGame");

    if ($mysqli->connect_errno) {
        echo $mysqli->connect_error;
    }

    if (isset($_GET["user_id"])){
        $user_id = $_GET["user_id"];
        $query = "DELETE FROM user WHERE user_id = '$user_id'";
        $result = $mysqli->query($query);

        if (!$result){
            echo "Delete failed!<br/>";
            echo $mysqli->error;
        } else {
            header("location: admin-user-score.php");
        }
    }
?>