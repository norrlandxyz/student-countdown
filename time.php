<?PHP
echo "<div id='time'>";
echo "<p> Idag är det </p>";
echo "<h1 class='tid'>"; 
$rem = strtotime('2023-06-16 13:00:00') - time();
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);
if($day) echo "$day Dagar ";
if($day==1) echo "$day Dag ";
if($hr) echo "$hr Timmar ";
if($hr==1) echo "$hr Timme ";
if($min) echo "$min Minuter ";
if($min==1) echo "$min Minut ";
if($sec) echo "$sec Sekunder ";
if($sec==1) echo "$sec Sekund ";
echo "</h1> <p>"; 
echo "tills studenten.</p>";
echo "</div>";
?>
