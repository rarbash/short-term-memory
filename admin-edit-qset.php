<?php
    $mysqli = new mysqli("localhost", "root", null, "css326_shortMemoryGame");

    if ($mysqli->connect_errno) {
        echo $mysqli->connect_error;
    }

    if (isset($_POST["submit"]) && isset($_GET["qset_id"])){
        $qset_id = $_GET["qset_id"];
        $desc = $_POST["new_desc"];

        $update_sql = "UPDATE question_set SET qset_description='$desc' WHERE qset_id='$qset_id'";
        $result = $mysqli->query($update_sql);

        if (!$result){
            echo "Update failed!<br/>";
            echo $mysqli->error;
        } else {
            $url = "/admin-question-set.php";
            header("Location: $url");
        }
    }

    if (isset($_GET["qset_id"])){
        $qset_id = $_GET["qset_id"];
        $query = "SELECT * FROM question_set WHERE qset_id = '$qset_id'";
        $result = $mysqli->query($query);
        if ($result){
            $row=$result->fetch_array();
        } else {
            echo "Error:" . $mysqli->error;
        }
    }
?>
<html>
    <link rel="stylesheet" href="admin-style.css">
    <body class="body">
        <div class="nav">
            <a href="/admin-user-score.php">Users and Scores</a>
            <div class="vl"></div>
            <a href="/admin-question-set.php">Question Sets</a>
        </div>
        

        <h2 class="font-text">Edit a Question Set</h2>
        <form action="admin-edit-qset.php?qset_id=<?php echo "$qset_id" ?>" method="post">
            <h2 class="font-text">ID: <?php echo $row['qset_id']; ?></h2>
            <h2 class="font-text">Name: <?php echo $row['qset_name']; ?></h2>
            <h2 class="font-text">New Description:</h2>
            <textarea name="new_desc" rows="5" cols="75" class="font-text"><?php echo $row['qset_description']; ?></textarea>
            <br><br>
            <input type='submit' value='Submit' name='submit' class="btn">
        </form>
    </body>
</html>