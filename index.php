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

<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
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
    timer = setInterval(refresh_time,100);
</script>
