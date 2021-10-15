<?php
  session_start();
?>
<html>
  <link rel="stylesheet" href="style.css">
  <div>
    <div style="display: flex; margin-top:3em;">
      <a href="/choose-level.php">
        <img src="icon/previous.png" alt="previous" class="iconsize-medium" style="margin-left:2em; position:absolute;">
      </a>
      <div class="align-center" style="width: 100%;">
        <h1 style="margin-right:0;">You Choose</h1>
        <?php
        $mode = $_POST["choose-level"];
        $_SESSION["choose-level"] = $mode;
        if($mode == "1"){
          echo "<h1 style='color: #90be6d'>Easy</h1>";
        }else if($mode == "2"){
          echo "<h1 style='color: #f9c74f'>Medium</h1>";
        }else if($mode == "3"){
          echo "<h1 style='color: #f94144'>Hard</h1>";
        }
        ?>
      </div>
    </div>
  <h1>Mode</h1>
  </div>
  <br><br><br>
  <form id="form" action="picture-page.php" method="POST">
  <div>
      <div class="user-input-grid">
      <h2 class="primary-color">Name</h2>
      <input id="input" type="Name" name="name" class="user-input">
      </div>
  </div>
  <br><br><br>
  <div class="user-input-grid">
    <h4 style="margin-bottom:0;" class="primary-color">Click to start the game</h4>
    <div class="align-center ">
        <button id="btn" class="btn-primary-color">Start</button>
  </div>
  </form>
  <script>
    document.getElementById("form").onsubmit = function(){
      if(!document.getElementById("input").value){
        alert("Please input Name!");
        return false;
      }
    }
  </script>
</div>
</html>
