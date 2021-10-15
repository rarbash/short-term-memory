<?php
  session_start();
?>

<html>
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- JS -->
  <script>
    let num = 1;
    let score = 0;
    let temp1 = 0;
    let temp2 = 0;
    let temp3 = 0;
    let temp4 = 0;

    function updateQuestion(qset_id_arg, question_num) {
      jQuery.ajax({
        type: "POST",
        url: 'question.php',
        dataType: 'json',
        data: {qset_id: qset_id_arg},
        success: function(result) {
          document.getElementById("qst_num_header").innerHTML = question_num+"/5";
          document.getElementById("qst_num").innerHTML = question_num+".";
          document.getElementById("qst").innerHTML = result[question_num-1].question_sentence;
          updateChioce(result[question_num-1].question_id);
          },
        error: function (request, error) {
          console.log(arguments);
          alert(error);
          }
      });
    } 

    function updateChioce(question_id_arg) {
      jQuery.ajax({
        type: "POST",
        url: 'choices.php',
        dataType: 'json',
        data: {question_id: question_id_arg},
        success: function(result) {
          document.getElementById("choice_btn0").innerHTML = result[0].answer;
          document.getElementById("choice_btn0").value = result[0].rightorwrong;
          temp1 = document.getElementById("choice_btn0").value;

          document.getElementById("choice_btn1").innerHTML = result[1].answer;
          document.getElementById("choice_btn1").value = result[1].rightorwrong;
          temp2 = document.getElementById("choice_btn1").value;

          document.getElementById("choice_btn2").innerHTML = result[2].answer;
          document.getElementById("choice_btn2").value = result[2].rightorwrong;
          temp3 = document.getElementById("choice_btn2").value;

          document.getElementById("choice_btn3").innerHTML = result[3].answer;
          document.getElementById("choice_btn3").value = result[3].rightorwrong;
          temp4 = document.getElementById("choice_btn3").value;
          },
        error: function (request, error) {
          console.log(arguments);
          alert(error);
          }
      });
    } 

    function changeQuestion(){
      num++;
      if(num == 5){
        updateQuestion(
          <?php 
          echo $_SESSION["choose-level"]; 
          ?>, num);

        document.getElementById("choice_btn0").onclick = function () {
          addScore(0);
          console.log(score);
          updateDatabase(score);
          location.href = "/complete.php";
        }
        document.getElementById("choice_btn1").onclick = function () {
          addScore(1);
          console.log(score);
          updateDatabase(score);
          location.href = "/complete.php";
        }
        document.getElementById("choice_btn2").onclick = function () {
          addScore(2);
          console.log(score);
          updateDatabase(score);
          location.href = "/complete.php";
        }
        document.getElementById("choice_btn3").onclick = function () {
          addScore(3);
          console.log(score);
          updateDatabase(score);
          location.href = "/complete.php";
        }
      } else {
        updateQuestion(
          <?php 
            echo $_SESSION["choose-level"]; 
            ?>, num);
          console.log(score);  
      };
    }

    function addScore(ans_num){
      if(ans_num == 0){
        score += parseInt(temp1);
      }else if(ans_num == 1){
        score += parseInt(temp2);
      }else if(ans_num == 2){
        score += parseInt(temp3);
      }else if(ans_num == 3){
        score += parseInt(temp4);
      }
      console.log(ans_num+" added");
    }

    function updateDatabase(score_arg) {
      console.log("<?php echo $_SESSION["user_name"] ?>");
      jQuery.ajax({
        type: "POST",
        url: 'update.php',
        data: {total_score: score_arg},
        success: function(result) {},
        error: function (request, error) {
          console.log(arguments);
          alert(error);
        }
      }); 
    }

    if(num == 1){
      updateQuestion(
      <?php
      echo $_SESSION["choose-level"];
      ?>
      , num);
      console.log(score);  
    }

  </script>

  <h1 style="justify-content: flex-start; margin-left: 2em;" id="qst_num_header">1/5</h1>
  <div class="align-center" style="margin-bottom: 2.5em;">
    <h1 id="qst_num">1.</h1>
    <h1 id="qst">Question Num1</h1>
  </div>
  <div class="align-center">
    <button id="choice_btn0" class="btn-choice" onClick="addScore(0), changeQuestion()">Choice</button>
  </div>
  <div class="align-center">
    <button id="choice_btn1" class="btn-choice" onClick="addScore(1), changeQuestion()">Choice</button>
  </div>
  <div class="align-center">
    <button id="choice_btn2" class="btn-choice" onClick="addScore(2), changeQuestion()">Choice</button>
  </div>
  <div class="align-center">
    <button id="choice_btn3" class="btn-choice" onClick="addScore(3), changeQuestion()">Choice</button>
  </div>
</html>
