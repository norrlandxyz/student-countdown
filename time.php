<?PHP
echo "<div id='time'>";
echo "<p> Idag är det </p>";
echo "<h1 class='tid'>"; 
$rem = strtotime('2023-06-16 13:00:00') - time();
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);
if($day==1) echo "$day Dag ";
elseif($day) echo "$day Dagar ";
if($hr==1) echo "$hr Timme ";
elseif($hr) echo "$hr Timmar ";
if($min==1) echo "$min Minut ";
elseif($min) echo "$min Minuter ";
if($sec==1) echo "$sec Sekund ";
elseif($sec) echo "$sec Sekunder ";

echo "</h1> <p>"; 
echo "tills studenten.</p>";
echo "</div>";
?>
