<!DOCTYPE HTML>
<html>
	<head>
		<title>Player Registration Form</title>
	</head>

	<body>
	
    
    <?php if ($_POST): ?>
    
        <?php
        
        $sql_link = new mysqli("localhost", "nba_admin", "nba", "nba"); 
        
        $name = mysqli_escape_string($sql_link, $_POST["Name"]);
        
        $age = mysqli_escape_string($sql_link, $_POST["Age"]);
        
        $weight = mysqli_escape_string($sql_link, $_POST["Weight"]);
        $height= mysqli_escape_string($sql_link, $_POST["Height"]);
        $position = mysqli_escape_string($sql_link, $_POST["Position"]);
        $team = mysqli_escape_string($sql_link, $_POST["Team"]);
        
        $query = sprintf("INSERT INTO player_info (name, team_id, weight,height,age,position) 
				VALUES ('%s', '%d', '%d','%d','%d','%s')", $name, $team, $weight,$height,$age,$position);
			$result = mysqli_query($sql_link, $query);
?>
        
    <h1> Player <?php echo $_POST["Name"];?> Registered!</h1>
    <?php echo $name;"<br>";
        echo $age; echo '<br>';
        echo $weight; echo "<br>";
        echo $height; echo "<br>";
        echo $position; echo "<br>";
        echo $team;
        
        ?>
    <?php else: ?>
    <h1> No Player Provided</h1>
    
    <?php endif;?>
  
    	</body>
        
        <footer>
             <br>
    <a href="index.html">Home</a>
    </footer>
        </html>