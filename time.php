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
if($hr) echo "$hr Timmar ";
if($min) echo "$min Minuter ";
if($sec) echo "$sec Sekunder ";
echo "</h1> <p>"; 
echo "tills studenten.</p>";
echo "</div>";
?>
