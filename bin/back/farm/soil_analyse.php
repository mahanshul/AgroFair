<?php 
require 'user.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="/bin/front/vendor/jquery.js"></script>
</head>
<body>

<script type="text/javascript">

<?php 

	echo 'var size = ' . $_GET['size'] . ';';
	echo 'var lat = ' . $_GET['lat'] . ';';
	echo 'var long = ' . $_GET['long'] . ';';

?>

</script>

	<script type="text/javascript" src="/bin/front/farm/js/soil_analyse.js"></script>
	<script type="text/javascript">
		var img = new Image();

		img.onload = function(){
			var color = getAverageColor(img);
			var soil = 0;
			if (color.g <= 76)
			{
				soil = 0;
			}
			else if (color.g <= 100)
			{
				soil = 1;
			}
			else
			{
				soil = 2;
			}

			$.post('set_soil.php?soil=' + soil, '' , function(){
				window.location.replace('gps_analyse.php?size=' + size + '&lat=' + lat + '&long=' + long);
			});

		};

		img.src = '<?php echo "/usr/" . $_GET['img']; ?>';
	</script>

</body>
</html>