    <!DOCTYPE HTML>
    <html>
        <head>
            <title>New Nba Player</title>
        </head>
    
     
        
      

<?php
$sql_link = new mysqli("localhost", "nba_admin", "nba", "nba"); 
                      
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

            <form action="registerPlayer.php" method="POST">
                <h1>Add an Nba Player</h1>
                <h3> Name</h3>
                <input type="text" name="Name"/>
                <h3> Age</h3>
                <input type="number" name ="Age"/>
                <h3> Weight (In lbs) </h3>
                <input type="number" name ="Weight"/>
                <h3> Height (In Inches) </h3>
                <input type="number" name ="Height"/>



                <h3> Position</h3>
                <input type= "radio" name = "Position" value ="Point Guard" checked> Point                     Guard
                <input type ="radio" name = "Position" value ="Shooting Guard" > Shooting                       Guard
                 <input type ="radio" name = "Position"  value ="Small Forward" > Small                         Forward
                 <input type ="radio" name = "Position"  value ="Power Forward" > Power                         Forward
                 <input type ="radio" name = "Position"  value ="Center" > Center <br>
                
              
              <h3> Team</h3>

              <select  name= "Team">
                   
<?php
      
                foreach ($teamArray as $team => $value ){ 
                echo "<option value='$value'>$team</option>";
            }
      
         
         ?>       
           </select>
            
            <input type="submit" value = "register">
            
            </form>

            </body>
        
        
            
            <footer>
             <br>
    <a href="index.html">Home</a></li> 
    </footer>
            </html>