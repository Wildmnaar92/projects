<!DOCTYPE HTML>
<html>
	<head>
		<title>NBA players</title>
	</head>
	
	
	<?php
$teamArray = array(

"Atlanta Hawks" => 1,
"Boston Celtics" => 2,
    "Brooklynn Nets" => 3,
"Charlotte Bobcats" => 4,
"Chicago Bulls" => 5,
"Cleveland Cavaliers" => 6,
"Dallas Mavericks" => 7,
"Denver Nuggets" => 8,
"Detroit Pistons" => 9,
"Golden State Warriors" => 10,
"Houston Rockets" => 11,
"Indiana Pacers" => 12,
"LA Clippers" => 13,
"LA Lakers" =>14,
"Memphis Grizzlies" => 15,
"Miami Heat" => 16,
"Milwaukee Bucks" => 17,
"Minnesota Timberwolves" => 18,
"New Orleans Hornets" => 19,
"New York Knicks" => 20,
"Oklahoma City Thunder" => 21,
"Orlando Magic" => 22,
"Philadelphia Sixers" => 23,
"Phoenix Suns" =>24,
"Portland Trail Blazers" =>25,
"Sacramento Kings" =>26,
"San Antonio Spurs" =>27,
"Toronto Raptors" => 28,
"Utah Jazz" => 29,
"Washington Wizards" => 30);
                    
            



?>

	<body>
	
		<form action="findCoach.php" method="POST">
			<h1>NBA Coaches</h1>
            <h3> Find a Coach by Team</h3>
			
        <select  name= "coach">
                   
        <?php
      
                foreach ($teamArray as $team => $value ){ 
                echo "<option value='$value'>$team</option>";
            }
      
         
         ?>       
           </select> 
                   
                   
                   
                   
                   <input type="submit" value = "Look Up"/>
                    
                    
                    </form>
		
        
        <?php
        $sql_link = new mysqli("localhost", "nba_admin", "nba", "nba");

        
        if ($_POST["coach"]) {
          $id = mysqli_escape_string($sql_link, $_POST["coach"]);
          
          $query = sprintf( "SELECT * FROM coach WHERE team_id LIKE '%s'", $id);
          
          }
          
          else {
          $query = "SELECT * FROM coach";
          
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