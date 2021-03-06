<?php
  $mysqli = new mysqli("localhost", "root", null, "css326_shortMemoryGame");

  if ($mysqli->connect_errno) {
    echo $mysqli->connect_error;
  }

  $easy_sql = "SELECT * FROM question_set WHERE qset_id = 1";
    $result = $mysqli->query($easy_sql);
    if ($result){
      $row = $result->fetch_array();
      $easy_desc = $row["qset_description"];
    } else {
        echo "Error:" . $mysqli->error;
    }

    $medium_sql = "SELECT * FROM question_set WHERE qset_id = 2";
    $result = $mysqli->query($medium_sql);
    if ($result){
      $row = $result->fetch_array();
      $medium_desc = $row["qset_description"];
    } else {
        echo "Error:" . $mysqli->error;
    }

    $hard_sql = "SELECT * FROM question_set WHERE qset_id = 3";
    $result = $mysqli->query($hard_sql);
    if ($result){
      $row = $result->fetch_array();
      $hard_desc = $row["qset_description"];
    } else {
        echo "Error:" . $mysqli->error;
    }
?>
<html>
  <link rel="stylesheet" href="style.css">
  <div style="display: flex; margin-top:3em;">
    <a href="/home.php">
      <img src="icon/previous.png" alt="previous" class="iconsize-medium" style="margin-left:2em; position:absolute;">
    </a>
    <h1 style="justify-self: center; width:100%;">Please Select Level</h1>
  </div>
  <br><br><br>
  <div class="choose-btn-align">
    <form action="user-name-input.php" action="question.php" method="post">
    <!-- easy btn -->
      <a href="/user-name-input.php" class="tooltip">
        <button class="btn-easy align-center" name="choose-level" value="1">
          <img src="icon/easy.png" alt="medal" class="iconsize-small">
          <strong class="margin-btn">Easy</strong>
          <img src="icon/easy.png" alt="medal" class="iconsize-small">
        </button>
        <span class="tooltiptext"><?php echo $easy_desc;?></span>
      </a>
      <br><br><br>
      <!-- medium btn -->
      <a href="/user-name-input.php" class="tooltip">
        <button class="btn-medium align-center" name="choose-level" value="2">
          <img src="icon/medium.png" alt="medal" class="iconsize-small">
          <strong class="margin-btn">Medium</strong>
          <img src="icon/medium.png" alt="medal" class="iconsize-small">
        </button>
        <span class="tooltiptext"><?php echo $medium_desc;?></span>
      </a>
      <br><br><br>
      <!-- hard btn -->
      <a href="/user-name-input.php" class="tooltip">
        <button class="btn-hard align-center" name="choose-level" value="3">
          <img src="icon/hard.png" alt="medal" class="iconsize-small">
          <strong class="margin-btn">Hard</strong>
          <img src="icon/hard.png" alt="medal" class="iconsize-small">
        </button>
        <span class="tooltiptext"><?php echo $hard_desc;?></span>
      </a>
      </form>
  </div>
</html>