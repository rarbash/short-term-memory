<?php
  $mysqli = new mysqli("localhost", "root", null, "css326_shortMemoryGame");
  if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
  }

  $query = "SELECT * FROM question WHERE qset_id = ".$_POST['qset_id'];
  $result = $mysqli->query($query);
  while($row = $result->fetch_array()) {
    $new_array[] = $row;
  }
  echo json_encode($new_array);
?>