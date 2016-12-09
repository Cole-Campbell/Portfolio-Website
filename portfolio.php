<?php
	$portfolio_id = $_GET['id'];
	$portfolio_name = $_GET['name'];

	$pagetitle=$portfolio_name;

	include_once('header.php');
?>

<div id="border">
	<div class="container-fluid">

<?php
	#Setting up the query to go through the database and pull the content for my portfolio. THe content will then be added to the HTML tags to be displayed to the user.

	$stmt = $conn->prepare("SELECT * FROM portfolio WHERE id = :id");

	$stmt->execute(array(
		':id'=> $portfolio_id));

	if ($stmt->rowCount() == 1){
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		$type = $row['type'];

		if($type == "video"){

		}

		echo "<h2>{$name}</h2>
				<div class=\"col-md-12 col-lg-12\">";

		if($type == "image"){
			echo "<img class=\"img-responsive img-center\" src=\"{$url}\" alt=\"{$name}\">
				</div>";
		} elseif ($type == "video"){
			echo "<video class=\"img-center img-responsive\" width=\"80%\" height=\"80%\" controls>
				    <source src=\"{$url}.mp4\" type=\"video/mp4\" />
				    <source src=\"{$url}.ogg\" type=\"video/ogg\" />
				</video>";
		} else {
			echo "<img class=\"img-responsive img-center\" src=\"{$url}.jpg\" ";
		}

			echo "<div class=\"col-md-12 col-lg-8 description\">
					<p>{$desc}</p>
				</div>
			</div>";

		}
		#While statement has closed
	}
	#If ($stmt->rowCount() == 1{}) statement has closed

?>

		<!--echo "<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery-item\">
					<a href=\"portfolio.php?id={$id}&name={$name}\">
						<img class=\"img-responsive\" src=\"{$url}\" onerror=\"imgError(this);\"/>
						<h4>{$name}</h4>
					</a>
				</div>";
	}-->



<hr>

<?php
	#Well, now that everything has been added, I will include the footer and finish off the page.
	include_once('footer.php');

	#Adding Google Analytics code to monitor traffic which is brought to my website.  This will help with identifying where people are who are viewing my website which will only used for myself and no other external or third party companies.
	include_once("analytics.php");
?>