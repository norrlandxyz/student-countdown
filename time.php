<?PHP
$rem = strtotime('2023-06-16 13:00:00') - time();
$day = floor($rem / 86400);
$hr  = floor(($rem % 86400) / 3600);
$min = floor(($rem % 3600) / 60);
$sec = ($rem % 60);
if($rem>0)
{
    $colors=getPastelColors($day,$hr,$min,$sec);
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
}elseif($hr==-1)
{
    $colors=getPastelColors($day,$hr,$min,$sec);
    echo"<p>✨Nu är det studenten!!!!🎉</p>";
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
}else
{
    echo "<p>studemnten 😔</p>";
}

function getPastelColors($day,$hr,$min,$sec) { 
    // Generate random number between 1-100 
    $sec+=86400*$day;
    $sec+=3600*$hr;
    $sec+=60*$min;
    if($day==0)
    {
        $sec+=hrtime(true)/10000000;
    }elseif($hr==-1)
    {
        $sec+=hrtime(true)/1000000;
    }
    $rand_numb1 = $sec+lcg_rand($day);

     // Set the minimum and maximum hue 
     $hmin = 0; 
     $hmax = 360; 
 
     // Calculate a color 
     $text_color = "hsl(" . strval(((360 - $hmax) - ($rand_numb1 % ($hmax - $hmin))) + $hmin). ", 40%, 50%)"; 
    // Calculate complementary color
    $rand_numb3 = 90 + $rand_numb1;
    $background_color = "hsl(" . strval(((360 - $hmax) - ($rand_numb3 % ($hmax - $hmin))) + $hmin). ", 75%, 20%)"; 
     
 
     // Return an array of colors 
     return array('text' => $text_color, 'background' => $background_color); 
 }
 function lcg_rand(int $seed = 1): int {
    return ($seed + 1) * 279470273 % 0xfffffffb;
    }
?>
