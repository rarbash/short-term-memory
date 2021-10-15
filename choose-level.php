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
    <a href="/user-name-input.php">
      <button class="btn-easy btn-easy-hover align-center" name="choose-level" value="1">
        <img src="icon/easy.png" alt="medal" class="iconsize-small">
        <strong class="margin-btn">Easy</strong>
        <img src="icon/easy.png" alt="medal" class="iconsize-small">
      </button>
    </a>
    <br><br><br>
    <!-- medium btn -->
    <a href="/user-name-input.php">
      <button class="btn-medium btn-medium-hover align-center" name="choose-level" value="2">
        <img src="icon/medium.png" alt="medal" class="iconsize-small">
        <strong class="margin-btn">Medium</strong>
        <img src="icon/medium.png" alt="medal" class="iconsize-small">
      </button>
    </a>
    <br><br><br>
    <!-- hard btn -->
    <a href="/user-name-input.php">
      <button class="btn-hard btn-hard-hover align-center" name="choose-level" value="3">
        <img src="icon/hard.png" alt="medal" class="iconsize-small">
        <strong class="margin-btn">Hard</strong>
        <img src="icon/hard.png" alt="medal" class="iconsize-small">
      </button>
    </a>
    </form>
</div>
</html>