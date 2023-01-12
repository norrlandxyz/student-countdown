<?PHP
$rem = strtotime('2023-06-16 13:00:00') - time();
$day = floor($rem / 86400);

if ($day > 1) { 
	//skriver ut ett ! för varje dag kvar
	$tecken = "";
	for ($x = 1; $x <= $day; $x++) {
		$tecken .= "!";
	}
	echo "$day DAGAR$tecken";
} else if ($day == 1) {
	echo "SNNART SMÄLLER DET";
} else {
	echo "AAAAAAAAAAAAAAAAAAAAAAAAAA";
}
?>
