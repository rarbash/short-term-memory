<?php
  $mysqli = new mysqli("localhost", "root", null, "css326_shortMemoryGame");
  if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
  }

  $query = "SELECT * FROM choices WHERE question_id = ".$_POST['question_id'];
  $result = $mysqli->query($query);
  while($row = $result->fetch_array()) {
    $new_array[] = $row;
  }
  echo json_encode($new_array);
?>