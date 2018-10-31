<?php
	include("include/code/config.php");

	$pageTitle = "Frontpage";
	$pageDescription = "This is a page";

	$loggedIn = TRUE;

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="
		<?php
			echo $pageDescription;
		?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon image_src" href="apple-touch-icon.png">

		<title>
			<?php
				echo $pageTitle;
			?>
		</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<header class="header_main">
			<div class="flex sb">
				<div class="header_logo">
					<a href="/">
						<span>
							Peter Winther
						</span>
					</a>
				</div>
				<nav class="header_nav">
					<ul class="flex sb">
						<li>
							<a href="/">
								Projects
							</a>
						</li>
						<li>
							<a href="/wordpress">
								Wordpress
							</a>
						</li>
						<li>
							<a href="/">
								Empty
							</a>
						</li>
						<li>
							<a href="/">
								Empty
							</a>
						</li>
						<li>
							<a href="/">
								Empty
							</a>
						</li>
						<li>
							<a href="/">
								Empty
							</a>
						</li>
					</ul>
				</nav>

			</div>
		</header>
		<main class="content_main">
			<div class="main_assignment_wrap">
				<?php
					$myList = new listDir("opgaver");
					echo $myList->createList("dateDesc", "main_assignment");
				?>
			</div>
		</main>
		<footer>

		</footer>
	</body>
</html>
