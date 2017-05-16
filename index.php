<?php
	#Contents of the landing page. I will first add in the header as that will contain most of the external content which is needed for the pages styling.
	include_once('header.php');
?>

<div id="border">
	<div class="container-fluid">
			<div class="col-xs-12 col-sm-4">
				<img class="img-responsive portrait" src="./media/portrait-cole.jpg">
			</div>
			<div class="col-xs-12 col-sm-8">
			<h2>Who Is Cole?</h2>
				<p>I am a creative and determined Multimedia Designer with a knack for coding and an eye for design and layout. I recently finished the Multimedia Design program at Durham College and graduated with an advanced diploma.</p>

				<p>My past work experience as a Multimedia Designer includes working for Durham College's Centre for Academic Faculty Enrichment as well as working for the Web Development company, Iconic Group, as an Administrator for the past year.</p>

				<p>Recently, I have decided to return to school to further my education and obtain my Bachelor of Science (Hons) in Creative Multimedia at Limerick Institute of Technology in Clonmel, Ireland.</p>

				<p>When I am not working on various assignments in college I can be found in Cork city. I enjoy going to various caf&eacute;s, taking in the sights, playing video games, or hanging out with my partner.</p>
			</div>
		</div>
		<hr>
		<div class="container-fluid">

		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery-item">
			<h2>Portfolio</h2>
			<p>A collection of my work through the academic and professional career. The works displayed on here represent me both as a designer and a developer. I hope you enjoy the work showcased in my portfolio as much as I do. If you wish to contact me, please email me at <a href="mailto:cole@colecampbell.design?subject=Hello%20Cole">cole@colecampbell.design</a> and I will get back to you when I can.</p>
		</div>

<?php
	#Setting up the query to go through the database and pull the content for my portfolio. THe content will then be added to the HTML tags to be displayed to the user.

	$stmt = $conn->prepare("SELECT * FROM portfolio");
	$stmt->execute();

	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
		extract($row);

		echo "<div class=\"col-xs-12 col-sm-6 col-md-4 col-lg-3 gallery-item\">
					<a href=\"portfolio.php?id={$id}\">
						<img class=\"img-responsive\" src=\"{$thumb}\" onerror=\"imgError(this);\"/>
						<h4>{$name}</h4>
					</a>
				</div>";
	}
?>
</div>
<hr>

<?php
	#Well, now that everything has been added, I will include the footer and finish off the page.
	include_once('footer.php');

	#Adding Google Analytics code to monitor traffic which is brought to my website.  This will help with identifying where people are who are viewing my website which will only used for myself and no other external or third party companies.
	include_once("../analytics.php");
?>