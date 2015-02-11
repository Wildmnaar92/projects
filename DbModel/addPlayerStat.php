<!DOCTYPE HTML>
<html>
	<head>
		<title>NBA Player DataBase</title>
	</head>

	<body>
        
        
 
    
<?php
$sql_link = new mysqli("localhost", "nba_admin", "nba", "nba");
			
	?>	

    
               
               <form action="registerPlayerStats.php" method="POST">
                <h1>Add an Nba Player</h1>
                
                <h3> Name</h3>
                <input type="text" name="Name"/>
                <h3> Points</h3>
                <input type="number" step="any" name ="totalPoints"/>
                 <h3> All Time Field Goal Percentage</h3>
                <input type="text" step="any" name="fg_percentage"/>
                <h3> All Time 3 Point Percentage</h3>
                <input type="number" step="any" name ="3p_percentage"/>
                <h3> All Time 2 Point Percentage</h3>
                <input type="number" step="any" name ="2p_percentage"/>
                <h3> All Time Field Throw Percentage</h3>
                <input type="number" step="any" name ="ft_percentage"/>
                <h3> Total Rebounds </h3>
                <input type="number" step="any" name ="trb"/>
                <h3> Total Assists </h3>
                <input type="number" step="any" name ="assists"/>
                   <h3> Total Blocks </h3>
                <input type="number" step="any" name ="blocks"/>
                   <h3> Total Steals </h3>
                <input type="number" step="any" name ="steals"/>
                   <h3> Total Turn Overs </h3>
                <input type="number" step="any" name ="turnovers"/>
                <br>

	<input type="submit" value = "register">
	
	</form>
	
	
	</body>
	
	<footer>
	    
 <a href="index.html" > Home</a>
	
	</footer>

<html>