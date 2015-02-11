<!DOCTYPE HTML>
<html>
	<head>
		<title>Dancer List</title>
	</head>

	<body>
	
		<form action="listStats.php" method="POST">
			<h1>Player's Stats</h1>
            <h3> Player's Name</h3>
			<input type="text" name="stats"/>
                  <input type="submit" value = "Look Up"/>
                    </form>
		
        
        <?php
        $sql_link = new mysqli("localhost", "salsa_admin", "salsa", "salsa"); 

        
        if ($_POST["stats"]) {
          
            $player = mysqli_escape_string($sql_link, $_POST["stats"]);
            $query = sprintf("SELECT id FROM player_info WHERE name LIKE '%s'", $player); 
            
        $oneResult = mysqli_query($sql_link, $query);
            
          
              
            foreach ($oneResult as $row): ?>
      
      <h4> <?php echo $row["id"]; $playerId = $row["id"]; ?></h4>
      
      <?php endforeach;?>
            
            
            
          
     <?     $query = sprintf( "SELECT * FROM player_stats WHERE player_id LIKE '%d'", $playerId);
          
          }
          
          else {
          $query = "SELECT * FROM player_stats";
          }
            
		
            
            $result = mysqli_query($sql_link, $query);
            
      ?>
      
      <?php foreach ($result as $row): ?>
      
      <h4> <?php echo $row["points"]?></h4>
       <h4> <?php echo $row["assists"]?></h4>
      
      <?php endforeach;?>
            
        
      
        
        </body>
        
        <footer>
        <br>
    <a href="index.html">Home</a>
    </footer>
        </html>