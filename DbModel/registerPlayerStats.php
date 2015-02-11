<!DOCTYPE HTML>
<html>
	<head>
		<title>Player Stats Registration Form</title>
	</head>

	<body>
	
    
    <?php if ($_POST): ?>
    
        <?php   
       
   
   
   $sql_link = new mysqli("localhost", "nba_admin","nba", "nba"); 


$name = mysqli_escape_string($sql_link, $_POST["Name"]);

$query =  sprintf( "SELECT id FROM player_info WHERE name LIKE ''%%%s%%'", $name);

$playerValue = mysqli_query($sql_link, $query);

$playerId = $playerValue[0];
   
  foreach ($playerValue as $playerHolder): 
?>

    <h4> <?php echo $playerId = $playerHolder["name"]?></h4>

      <?php endforeach;?>
            




<?

$points = mysqli_escape_string($sql_link, $_POST["totalPoints"]);
$fg_percentage = mysqli_escape_string($sql_link, $_POST["fg_percentage"]);
 $threep_percentage= mysqli_escape_string($sql_link, $_POST["3p_percentage"]);
 $twop_percentage = mysqli_escape_string($sql_link, $_POST["2p_percentage"]);
        
$ft_percentage = mysqli_escape_string($sql_link, $_POST["ft_percentage"]);
     
 
        $rebounds = mysqli_escape_string($sql_link, $_POST["trb"]);
        $assists= mysqli_escape_string($sql_link, $_POST["assists"]);
        $blocks = mysqli_escape_string($sql_link, $_POST["blocks"]);
        $steals = mysqli_escape_string($sql_link, $_POST["steals"]);
       $turnovers = mysqli_escape_string($sql_link, $_POST["turnovers"]);


 $query = sprintf("INSERT INTO player_stats (player_id, points,fg_percentage,3p_percentage,2p_percentage,ft_percentage,trb,assists,blocks,steals,turnovers) 
VALUES ('%d', '%d', '%d','%d','%d','%d','%d','%d','%d','%d','%d')", $playerId, $points,          $fg_percentage,$threep_percentage,$twop_percentage,$ft_percentage,$rebounds,$assists,$blocks,$steals,$turnovers);

$result = mysqli_query($sql_link, $query);

 ?>
 <h1> Player <?php echo $_POST["Name"];?> Registered!</h1>
  <?php echo "Player : ", $name, '<br>';
        echo "Points :", $points, '<br>';
        echo "FG Percentage :",$fg_percentage, '<br>';
        echo " Three Point Percentage :", $threep_percentage, '<br>';
        echo "Two Point Percentage :" , $twop_percentage, '<br>';
        echo "Free Throw Percentage :" , $ft_percentage, '<br>';
        echo "Rebounds :",$rebounds,'<br>';
        echo "Assists :",$assists,'<br>';
        echo "Blocks :", $blocks, '<br>';
        echo "Steals :", $steals, '<br>';
        echo "Turnovers : ",$turnovers;
        
        ?>
    
    <?php else: ?>
    <h1> No Player Stats Provided</h1>
    
    <?php endif;?>
  
    	</body>
        
        <footer>
             <br>
    
    <a href="index.html">Home</a>
    </footer>
        
        
        </html>