<?php
  session_start();
?>

<html>
  <link rel="stylesheet" href="style.css">
  <div class="align-center" style="flex-direction:column;">
    <h1 class="primary-color ">Please Memorize</h1>
    <h1 class="primary-color ">the Picture</h1>
  </div>
  <br><br>
  <?php
    $_SESSION["user_name"] = $_POST["name"];
    if($_SESSION["choose-level"] == 1){
      echo '<div class="align-center">
      <img src="icon/easy-pic.png" alt="easy-pic" class="pic-level">
      </div>';
    }else if($_SESSION["choose-level"] == 2){
      echo '<div class="align-center">
      <img src="icon/medium-pic.png" alt="medium-pic" class="pic-level">
      </div>';
    }else if($_SESSION["choose-level"] == 3){
      echo '<div class="align-center">
      <img src="icon/hard-pic.png" alt="hard-pic" class="pic-level">
      </div>';
    }
  ?>
  <br><br>

  <script>
    setTimeout(() => {
      window.location.replace("/questionhtml.php");
    }, 2000);
  </script>

  <?php
  ob_implicit_flush(true);
  ob_end_flush();
  for ($i = 3;$i >= 0;$i--){
    if($i == 60){
      echo  "<h1 style='position:absolute; background-color:white; width:100%;'>01:00 minutes</h1>";
    }else if($i >= 10){
      echo "<h1 style='position:absolute; background-color:white; width:100%;'>00:".$i." minutes</h1>";
    }else {
      echo "<h1 style='position:absolute; background-color:white; width:100%;'>00:0".$i." minutes</h1>";
    }
    sleep(1);
  }
  ?>
  
</html>