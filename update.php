<?php
  session_start();
?>

<?php
  $mysqli = new mysqli("localhost", "root", null, "css326_shortMemoryGame");
  if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
  }

  $user_name = $_SESSION["user_name"];
  $total_score = $_POST["total_score"];
  $level = $_SESSION["choose-level"];
  $_SESSION["total_score"] = $total_score;

  $query1 = "INSERT INTO user(user_name) VALUES ('$user_name')";
  $insert_user = $mysqli->query($query1);

  $queryID = "SELECT * FROM user WHERE user_name = '$user_name' ORDER BY user_id DESC LIMIT 0,1";
  $getID = $mysqli->query($queryID);
  while($row=$getID->fetch_array()){
    $id = $row["user_id"];
  }

  $query2 = "INSERT INTO score(user_id, score, qset_id) VALUES ('$id', '$total_score', '$level')";
  $insert_score = $mysqli->query($query2);
?>