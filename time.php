<?PHP
$rem = strtotime('2023-06-16 13:00:00') - time();
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);
$colors=getPastelColors($day);
echo"<style>

p,h1
{
    color:".$colors['text']."
}
body
{
    background-color:".$colors['background']."
}
</style>";
echo "<div id='time'>";
echo "<p> Idag är det </p>";
echo "<h1 class='tid'>"; 
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

function getPastelColors($day) { 

    // Generate random number between 1-100 
     $rand_numb1 = lcg_rand($day);
     $rand_numb2 = lcg_rand($day);

     // Set the minimum and maximum hue 
     $hmin = 0; 
     $hmax = 360; 
 
     // Calculate a color 
     $color1 = "hsl(" . strval(((360 - $hmax) - ($rand_numb1 % ($hmax - $hmin))) + $hmin). ", 90%, 50%)"; 
    // Calculate complementary color
    $rand_numb3 = 180 + $rand_numb1;
    $color2 = "hsl(" . strval(((360 - $hmax) - ($rand_numb3 % ($hmax - $hmin))) + $hmin). ", 75%, 90%)"; 
     
     // Set text and background color 
     $text_color =  $color1; 
     $background_color = $color2; 
     
 
     // Return an array of colors 
     return array('text' => $text_color, 'background' => $background_color); 
 }
 function lcg_rand(int $seed = 1): int {
    return ($seed + 1) * 279470273 % 0xfffffffb;
    }
?>
