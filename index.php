<!DOCTYPE html>
<html>
<head lang="pt-br">
	<meta charset="utf-8"/>
	<title>Mr Feedback</title>
	<meta name="viewport" content="width=device-width">
	<meta name="mobile-web-app-capable" content="yes">
	<script src="js/villa.js"></script>
	<link rel="stylesheet" href="css/villa-foundation.css"/>
	<link rel="stylesheet" href="css/villa-grid.css"/>
	<link rel="stylesheet" href="css/villa.css"/>
	<link rel="stylesheet" href="css/mowe.css"/>
	<link rel="stylesheet" href="css/mowe-ui-helpers.css"/>
	<link rel="stylesheet" href="css/mowe-inputs.css"/>
	<link rel="stylesheet" href="css/mowe-hero.css"/>
	<link rel="stylesheet" href="css/mowe-font.css"/>
	<link rel="stylesheet" href="css/mowe-navbar.css"/>
	<link rel="stylesheet" href="css/mowe-structure.css"/>
	<link rel="stylesheet" href="css/mowe-wow.css"/>
	<link rel="stylesheet" href="css/mowe-pricelist.css"/>
	<link rel="stylesheet" href="css/mowe-timeline.css"/>
	<link rel="stylesheet" href="css/wtal.css"/>
	<script src="js/jquery-2.1.1.min.js"></script>
	<?php
		if (isset($_GET['local'])) {
			echo "<script>";
			if ($_GET['local'] == 'mrrango') {
				echo "var local = 'mr rango'";
			} else {
				echo "var local = '" . $_GET['local'] . "';";
			}
			echo "</script>\n";
		};
	?>
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/material-colors.css"/>
	<script src="js/html5shiv.js"></script>
	<script src="js/html5shiv-printshiv.js"></script>
	<![endif]-->
</head>
<body class="grey-100 slide-1">

<style type="text/css">

	body {
		user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		/* To responsive, need to resize the font-size */
	}

	.slide {
		padding: 0;
		display: none;
	}

	.slide .about,
	.slide .about > .container {
		display: flex;
		flex-flow: row;
		flex-wrap: nowrap;
		justify-content: space-between;
		align-items: center;
	}

	.slide .about {
		background: url("img/misc/mrrango-background.png");
		box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.26);
		margin: 0;
	}

	.slide .about .bulb {
		border-radius: 50%;
		height: 10px;
		margin-left: 1em;
		min-width: 10px;
		width: 10px;
	}

	.online .slide .about .bulb {
		background-color: #4caf50;
	}

	.slide .about h1 {
		text-align: left;
		font-size: 2em;
		font-weight: 800;
		text-transform: uppercase;
		margin-left: .5em;
	}

	.slide .about img {
		width: 6em;
		height: 6em;
		margin: 0.75em 1.5em;
	}

	.slide-1 .slide:nth-of-type(1),
	.slide-2 .slide:nth-of-type(2),
	.slide-3 .slide:nth-of-type(3),
	.slide-4 .slide:nth-of-type(4) {
		display: block;
	}

	.card {
		align-content: center;
		align-items: stretch;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-around;
		margin-top: 1.3125em;
	}

	.star {
		align-content: center;
		align-items: center;
		/*border: solid 6px #3f51b5;*/
		color: #444444;
		display: flex;
		flex-wrap: wrap;
		flex-flow: column;
		font-weight: 600;
		justify-content: center;
		margin: 1.75em 0;
	}

	.star img {
		background-color: #ffffff;
		border-radius: 50%;
		box-shadow: -3px 3px 12px rgba(0,0,0,.4);
		padding: 3px;
		width: 90px;
	}

	.star .title {
		font-size: 1.3125em;
		margin-top: 0.75em;
		font-weight: 600;
		letter-spacing: -1px;
		text-transform: uppercase;
	}

	@media (min-width: 30em) {
		.star img {
			padding: 4px;
		}
	}

	@media (min-width: 43.75em) {
		.star img {
			padding: 5px;
			width: 100px;
		}
	}

	@media (min-width: 56.25em) {
		.card {
			margin-top: 60px;
		}

		.star img {
			padding:6px;
			width: 110px;
		}
	}

	@media (min-width: 70em) {
		.card {
			margin-top: 60px;
		}

		.star img {
			padding:7px;
			width: 140px;
		}
	}

	.star-1 .star:nth-child(1) img,
	.star-2 .star:nth-child(2) img,
	.star-3 .star:nth-child(3) img,
	.star-4 .star:nth-child(4) img {
		border-color: #3f51b5;
		background-color: #3f51b5;
		color: #e8eaf6;
	}

	.star-2 .star:nth-child(1),
	.star-3 .star:nth-child(1),
	.star-4 .star:nth-child(1),
	.star-1 .star:nth-child(2),
	.star-3 .star:nth-child(2),
	.star-4 .star:nth-child(2),
	.star-1 .star:nth-child(3),
	.star-2 .star:nth-child(3),
	.star-4 .star:nth-child(3),
	.star-1 .star:nth-child(4),
	.star-2 .star:nth-child(4),
	.star-3 .star:nth-child(4) {
		display: none;
	}

	.star-1 .intro,
	.star-2 .intro,
	.star-3 .intro,
	.star-4 .intro {
		display: none;
	}
	
	.thanks {
		display: none;
	}

	.star-1 .thanks,
	.star-2 .thanks,
	.star-3 .thanks,
	.star-4 .thanks {
		display: block;
	}

</style>

<div class="block slide">
	<div class="about red-900 font-yellow">
		<div class="container">
			<span class="bulb"></span>
			<h1 class="intro">Como está o restaurante hoje?</h1>
			<h1 class="thanks">Muito Obrigado!</h1>
			<img src="img/misc/mrrango-logo.png" alt=""/>
		</div>
	</div>

	<div class="card">
		<div class="star" distinct-attr="slide-2">
			<img src="img/emoji/Emoji%20Smiley-35.png" alt=""/>
			<span class="title">Péssimo</span>
		</div>
		<div class="star" distinct-attr="slide-2">
			<img src="img/emoji/Emoji%20Smiley-53.png" alt=""/>
			<span class="title">Ruim</span>
		</div>
		<div class="star">
			<img src="img/emoji/Emoji%20Smiley-04.png" alt=""/>
			<span class="title">Bom</span>
		</div>
		<div class="star">
			<img src="img/emoji/Emoji%20Smiley-07.png" alt=""/>
			<span class="title">Excelente</span>
		</div>
	</div>

</div>

<script src="js/app-mrfb.js"></script>
<script>

	$('.card .star').distinct({
		defaultClass: $('body').attr('class'),
		startName: 'star',
		targetData: true
	});
</script>

</body>
</html>