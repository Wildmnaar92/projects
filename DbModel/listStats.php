<!DOCTYPE HTML>
<html>
	<head>
		<title>Dancer List</title>
	</head>

	<body>
	
		
            
            
              <?php
                        $sql_link = new mysqli("localhost", "nba_admin", "nba", "nba");
                        $query =  sprintf( "SELECT id, name FROM player_info ORDER BY name ASC");
                        $players = mysqli_query($sql_link, $query);

                    ?>
            <form action="listStats.php" method="POST">
			<h1>Player's Stats</h1>
            
            <h3> Player's Name</h3>
			 <select name="player_id">
                    <?php foreach($players as $player):?>        
                        <option value="<?php echo $player['id'];?>"><?php echo $player['name'];?></option>
                    <?php endforeach;?>      
                    
                </select>
                  
                   
                   <input type="submit" value = "Look Up"/>
                    </form>
		
        
        <?php
           

        
        if ($_POST["player_id"]) {
          
            $player = mysqli_escape_string($sql_link, $_POST["player_id"]);
          //  $query = sprintf("SELECT id FROM player_info WHERE name LIKE '%s'", $player); 
            

            ?>
          
         
            
            
            
          
     <?php     $query = sprintf( "SELECT * FROM player_stats WHERE player_id LIKE '%d'", $player); 
          
          
          
          
            
		
            
            $result = mysqli_query($sql_link, $query);
            
      ?>
      
      <?php foreach ($result as $row): ?>
      
      <h4> <?php echo "Points: ", $row["points"],'<br>';?></h4>
       <h4> <?php echo "FG Percentage: ", $row["fg_percentage"],'<br>';?></h4>
       <h4> <?php echo "3P Percentage: ", $row["3p_percentage"],'<br>';?></h4>
       <h4> <?php echo "2P Percentage: ", $row["2p_percentage"],'<br>';?></h4>
        <h4> <?php echo "FT Percentage: ", $row["ft_percentage"],'<br>';?></h4>
        <h4> <?php echo "Total Rebounds: ", $row["trb"],'<br>';?></h4>
        <h4> <?php echo "Assists: ", $row["assists"],'<br>';?></h4>
        <h4> <?php echo "Blocks: ", $row["blocks"],'<br>';?></h4>
        <h4> <?php echo "Steals: ", $row["steals"],'<br>';?></h4>
        <h4> <?php echo "Turnovers: ", $row["turnovers"],'<br>';?></h4>
          
      <?php endforeach;?>
            
 <?php       }  ?>
      
        
        </body>
        
        <footer>
        <br>
    <a href="index.html">Home</a>
    </footer>
        </html>