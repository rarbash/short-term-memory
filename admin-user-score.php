<html>
  <link rel="stylesheet" href="admin-style.css">

  <div class="nav">
    <a href="">Users and Scores</a>
    <div class="vl"></div>
    <a href="/admin-question-set.php">Question Sets</a>
  </div>
  
  <body class="body">
    <h2 class="font-text">Users and Scores</h2>
    <table>
      <col width="15%">
      <col width="30%">
      <col width="30%">
      <col width="20%">
      <col width="5%">

      <tr>
          <th style="width: 8em;">Question Set Name</th> 
          <th style="width: 8em;">Username</th>
          <th style="width: 8em;">User ID</th>
          <th>Score</th>
          <th>Delete</th>
      </tr>
      <?php
        $mysqli = new mysqli("localhost", "root", null, "css326_shortMemoryGame");

        if ($mysqli->connect_errno) {
          echo $mysqli->connect_error;
        }
        
        $query = "SELECT * FROM (SELECT user_name, user.user_id, score, qset_id FROM user 
                  INNER JOIN score ON user.user_id = score.user_id) AS us 
                  INNER JOIN question_set ON us.qset_id = question_set.qset_id
                  ORDER BY us.qset_id, user_name";
        $result = $mysqli->query($query);
        if ($result){
          while($row=$result->fetch_array()){
            echo "<tr>";
            echo "<td style='width: 8em;'>" . $row["qset_name"] . "</td>";
            echo "<td style='width: 8em;'>" . $row["user_name"] . "</td>";
            echo "<td style='width: 8em;'>" . $row["user_id"] . "</td>";
            echo "<td>" . $row["score"] . "/5</td>";        
            echo '<td><a href="admin-delete-user.php?user_id='. $row['user_id']. '">';
            echo '<img src="/icon/bin.png" alt="bin" class="icon">';
            echo '</a></td>';
            echo '</tr>';
          }
        } else {
          echo "Error:" . $mysqli->error;
        }
      ?>  
    </table>
  </body>
</html>