<!DOCTYPE html>
<html>
	<head>
	<?php
		if(!isset($pagetitle)){
			echo '<title>Cole Campbell &middot; Multimedia Designer</title>';
		} else{
			echo '<title>'.$pagetitle.' &middot; Cole Campbell</title>';
		}
	?>
		<link rel="icon" type="image/png" href="./media/favicon.png">
	</head>

	<link rel="icon" href="./media/favicon.ico" >
	<link rel="apple-touch-icon" sizes="57x57" href="./media/apple/apple-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="./media/apple/apple-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="./media/apple/apple-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="./media/apple/apple-icon-144x144.png" />


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

	<script type="text/javascript">
		$(window).load(function() {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<!--Scripts which load in jQuery, Bootstrap and FontAwesome libraries-->
	<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
	
	<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>

	<script src=\"https://use.fontawesome.com/d016f5b83b.js\"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="stylesheet" href="./css/styles.min.css">

	<body>
		<div class="se-pre-con"></div>

		<?php
			include_once('db.php')
		?>