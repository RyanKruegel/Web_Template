
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Web Template Project</title>
</head>
<body style = "background-color: darkslateblue;">
	<?php include("inc_header.html"); ?>

	<div style = "background-color: cornsilk; width: 20%;text-align: center; float: left">
		<?php include("inc_buttonnav.html"); ?>
	</div>	
	<!-- Start of Dynamic Content Section -->
	<?php
		if(isset($_GET["content"])){
			// We are here because one of the three buttons has been clicked. Now lets check to see which one was clicked.
			switch($_GET["content"]) {
				case "About":
					include("inc_about.html");
					break;
				case "Contact Me":
					include("inc_contact.html");
					break;
				case "Home":
				default:
					include("inc_home.html");
					break;
			}
		}
		else {
			// We are on this branch when no button has been clicked on
			include("inc_home.html");
		}
	?>
	<!-- End of Dynamic Content Section -->
	<?php include("inc_footer.php"); ?>

</body>
</html>