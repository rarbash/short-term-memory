<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <?php
      $mysqli = new mysqli("localhost", "root", null, "css326_shortMemoryGame");

      if ($mysqli->connect_errno) {
        echo $mysqli->connect_error;
      }
    ?>
  </head>
  <h1>Welcome to</h1>
  <h1>Short-term memory</h1>
  <h1>test</h1>
  <div class="align-center" style="margin-bottom: 35px;">
    <img src="icon/medal.png" alt="medal" class="iconsize-medium">
    <h2 class="secondary-color" style="margin: 25px;">Ranking</h2>
    <img src="icon/medal.png" alt="medal" class="iconsize-medium">
  </div>
  <!-- Ranking Table -->
  <div class="ranking">
  <!-- easy -->
  <div class="ranking-table">
    <div class="align-center" style="margin-bottom: 0px;">
      <img src="icon/easy.png" alt="medal" class="iconsize-medium">
      <h2 class="easy-color" style="margin: 25px;">Easy</h2>
      <img src="icon/easy.png" alt="medal" class="iconsize-medium">
    </div>
    <br>
    <div class="header-ranking">
      <h3 class="secondary-color align-center">Rank</h3>
      <h3 class="secondary-color align-center">Name</h3>
      <h3 class="secondary-color align-center">Score</h3>
    </div>
      <div class="list-ranking">
        <?php
          $query = "SELECT user.*, score.* FROM user, score WHERE user.user_id = score.user_id AND qset_id = 1 ORDER BY score.score DESC";
          $result = $mysqli->query($query);
          $rank = 0;
          if($result){
            while($row=$result->fetch_array()){
              if($rank+1 == 1){
                echo '<div class="align-center" style="position: relative;">
                <img src="icon/first.png" alt="medal" class="iconsize-small" style="position: absolute; margin-left: -4.5em;">
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }else if($rank+1 == 2){
                echo '<div class="align-center" style="position: relative;">
                <img src="icon/second.png" alt="medal" class="iconsize-small" style="position: absolute; margin-left: -4.5em;">
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }else if($rank+1 == 3){
                echo '<div class="align-center" style="position: relative;">
                <img src="icon/third.png" alt="medal" class="iconsize-small" style="position: absolute; margin-left: -4.5em;">
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }else {
                echo '<div>
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }
              echo '<h3 class="primary-color align-center innerlist-ranking ">',$row['user_name'],'</h3>';
              echo '<h3 class="primary-color align-center innerlist-ranking ">',$row['score'],'/5</h3>';
              $rank++;
            }
          }
        ?>
      </div>
      <br>
  </div>
  <!-- end table easy -->
  <!-- medium -->
  <div class="ranking-table">
    <div class="align-center" style="margin-bottom: 0px;">
      <img src="icon/medium.png" alt="medal" class="iconsize-medium">
      <h2 class="medium-color" style="margin: 25px;">Medium</h2>
      <img src="icon/medium.png" alt="medal" class="iconsize-medium">
    </div>
    <br>
    <div class="header-ranking">
      <h3 class="secondary-color align-center">Rank</h3>
      <h3 class="secondary-color align-center">Name</h3>
      <h3 class="secondary-color align-center">Score</h3>
    </div>
      <div class="list-ranking">
        <?php
          $query = "SELECT user.*, score.* FROM user, score WHERE user.user_id = score.user_id AND qset_id = 2 ORDER BY score.score DESC";
          $result = $mysqli->query($query);
          $rank = 0;
          if($result){
            while($row=$result->fetch_array()){
              if($rank+1 == 1){
                echo '<div class="align-center" style="position: relative;">
                <img src="icon/first.png" alt="medal" class="iconsize-small" style="position: absolute; margin-left: -4.5em;">
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }else if($rank+1 == 2){
                echo '<div class="align-center" style="position: relative;">
                <img src="icon/second.png" alt="medal" class="iconsize-small" style="position: absolute; margin-left: -4.5em;">
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }else if($rank+1 == 3){
                echo '<div class="align-center" style="position: relative;">
                <img src="icon/third.png" alt="medal" class="iconsize-small" style="position: absolute; margin-left: -4.5em;">
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }else {
                echo '<div>
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }
              echo '<h3 class="primary-color align-center innerlist-ranking ">',$row['user_name'],'</h3>';
              echo '<h3 class="primary-color align-center innerlist-ranking ">',$row['score'],'/5</h3>';
              $rank++;
            }
          }
        ?>
      </div>
      <br>
  </div>
  <!-- end table medium -->
  <!-- medium -->
  <div class="ranking-table">
    <div class="align-center" style="margin-bottom: 0px;">
      <img src="icon/hard.png" alt="medal" class="iconsize-medium">
      <h2 class="hard-color" style="margin: 25px;">Hard</h2>
      <img src="icon/hard.png" alt="medal" class="iconsize-medium">
    </div>
    <br>
    <div class="header-ranking">
      <h3 class="secondary-color align-center">Rank</h3>
      <h3 class="secondary-color align-center">Name</h3>
      <h3 class="secondary-color align-center">Score</h3>
    </div>
      <div class="list-ranking">
        <?php
          $query = "SELECT user.*, score.* FROM user, score WHERE user.user_id = score.user_id AND qset_id = 3 ORDER BY score.score DESC";
          $result = $mysqli->query($query);
          $rank = 0;
          if($result){
            while($row=$result->fetch_array()){
              if($rank+1 == 1){
                echo '<div class="align-center" style="position: relative;">
                <img src="icon/first.png" alt="medal" class="iconsize-small" style="position: absolute; margin-left: -4.5em;">
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }else if($rank+1 == 2){
                echo '<div class="align-center" style="position: relative;">
                <img src="icon/second.png" alt="medal" class="iconsize-small" style="position: absolute; margin-left: -4.5em;">
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }else if($rank+1 == 3){
                echo '<div class="align-center" style="position: relative;">
                <img src="icon/third.png" alt="medal" class="iconsize-small" style="position: absolute; margin-left: -4.5em;">
                <h3 class="primary-color align-center innerlist-ranking ">',$rank+1,'</h3>
                </div>';
              }else {
                echo '<div>
                <h3 class="primary-color align-center">',$rank+1,'</h3>
                </div>';
              }
              echo '<h3 class="primary-color align-center">',$row['user_name'],'</h3>';
              echo '<h3 class="primary-color align-center">',$row['score'],'/5</h3>';
              $rank++;
            }
          }
        ?>
      </div>
      <br>
  </div>
  <br><br>
  <!-- end table medium -->
</div>
<!-- button -->
<div class="align-center">
  <a href="/choose-level.php">
    <button class="btn-primary-color">Choose Level</button>
  </a>
</div>
<br><br>
</html>