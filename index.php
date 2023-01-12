<!DOCTYPE html>
<html>
<head>
	<title>
		<?PHP
			include('dagar.php');
		?>
	</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div class="result"></div>
</body>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
    function refresh_time() {
        jQuery.ajax({
            url:'time.php',
            type:'POST',
            success:function(results) {
                jQuery(".result").html(results);
            }
        });
    }
    timer = setInterval(refresh_time,1000);
</script>
