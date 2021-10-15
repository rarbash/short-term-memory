<html>
<link rel="stylesheet" href="admin-style.css">

<div class="nav">
    <a href="/admin-user-score.php">Users and Scores</a>
    <div class="vl"></div>
    <a href="">Question Sets</a>
</div>

<body class="body">
    <h2 class="font-text">Questions Sets</h2>
    <table>
        <!-- <col width="15%">
        <col width="30%">
        <col width="30%">
        <col width="20%">
        <col width="5%"> -->

        <tr>
            <th>Question Set ID</th> 
            <th>Question Set Name</th>
            <th>Description</th>
            <th>Edit</th>
        </tr>
        <?php
        $mysqli = new mysqli("localhost", "root", null, "css326_shortMemoryGame");

        if ($mysqli->connect_errno) {
            echo $mysqli->connect_error;
        }
        
        $query = "SELECT * FROM question_set";
        $result = $mysqli->query($query);
        if ($result){
            while($row=$result->fetch_array()){
            echo "<tr>";
            echo "<td>" . $row["qset_id"] . "</td>";
            echo "<td>" . $row["qset_name"] . "</td>";
            echo "<td>" . $row["qset_description"] . "</td>";       
            echo '<td class="icon"><a href="admin-edit-qset.php?qset_id='. $row['qset_id']. '">';
            echo '<img src="/icon/edit.png" alt="bin" class="icon">';
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