<!DOCTYPE HTML>
<html>
	<head>
		<title>NBA players</title>
	</head>

	<body>
	
		<form action="listPlayers.php" method="POST">
			<h1>NBA Players</h1>
            <h3> Name</h3>
			<input type="text" name="look_up"/>
                  <input type="submit" value = "Look Up"/>
                    </form>
		
        
        <?php
        $sql_link = new mysqli("localhost", "nba_admin", "nba", "nba");

        
        if ($_POST["look_up"]) {
          $name = mysqli_escape_string($sql_link, $_POST["look_up"]);
          
          $query = sprintf( "SELECT * FROM player_info WHERE name LIKE '%%%s%%'", $name);
          
          }
          
          else {
          $query = "SELECT * FROM nba";
          
          }
           
            $result = mysqli_query($sql_link, $query);
    
      ?>
      
      <?php foreach ($result as $row): 
?>

        <h4> <?php echo  $row["name"]?></h4>

      <?php endforeach;?>
            
        
      
        
        </body>
    
    <footer>
        <br>
    <a href="index.html">Home</a></li> 
    </footer>
        </html>