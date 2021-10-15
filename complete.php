<?php
  session_start();
?>

<html>
<link rel="stylesheet" href="style.css">
<br><br>
<h1>Your Score On</h1>
<?php
  $mode = $_SESSION["choose-level"];
  $total_score = $_SESSION["total_score"];
  if($mode == 1){
    echo '<div class="align-center">
    <h1 style="color: #90be6d">Easy</h1>
    <h1 style="margin-left:0;">Mode</h1>
    </div>
    <br><br>';
  }else if($mode == 2){
    echo '<div class="align-center">
    <h1 style="color: #f9c74f">Medium</h1>
    <h1 style="margin-left:0;">Mode</h1>
    </div>
    <br><br>';
  }else if($mode == 3){
    echo '<div class="align-center">
    <h1 style="color: #f94144">Hard</h1>
    <h1 style="margin-left:0;">Mode</h1>
    </div>
    <br><br>';
  }

  if($total_score == 5){
    echo '<h1 style="font-size: 3em;">'.$total_score.'/5</h1>
    <br>
    <h1>You Are the Master !!</h1>
    <br>
    <div class="align-center">
    <img src="icon/best.png" alt="best" style="width: 6em; height:6em;">
    </div>';
  }else if($total_score == 4){
    echo '<h1 style="font-size: 3em;">'.$total_score.'/5</h1>
    <br>
    <h1>Amazing Work !!</h1>
    <br>
    <div class="align-center">
    <img src="icon/goodjob.png" alt="goodjob" style="width: 6em; height:6em;">
    </div>';
  }else if($total_score == 3 || $total_score == 2){
    echo '<h1 style="font-size: 3em;">'.$total_score.'/5</h1>
    <br>
    <h1>Not Bad !!</h1>
    <br>
    <div class="align-center">
    <img src="icon/good.png" alt="good" style="width: 6em; height:6em;">
    </div>';
  }else if($total_score == 1 || $total_score == 0){
    echo '<h1 style="font-size: 3em;">'.$total_score.'/5</h1>
    <br>
    <h1>Better Luck Next Time !!</h1>
    <br>
    <div class="align-center">
    <img src="icon/bad.png" alt="bad" style="width: 6em; height:6em;">
    </div>';
  }
  
?>
<br><br>
<div class="align-center">
  <a href="/home.php">
    <button class="btn-primary-color">Ranking</button>
  </a>
</div>

</html>