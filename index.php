<?php
	include("include/code/config.php");


	// Values for further changes
	$pageTitle = "Frontpage";
	$pageDescription = "This is a page";


	// Gets $_GET["page"] and puts it in $pageName
	if(!empty($_GET["page"])){
		$pageName = $_GET["page"];
	} else {
		$pageName = "default";
	}


	// Array for links in header
	// Format: Tab-name => Link/GET-name
	// OBS make the $_GET["page"] THE SAME as the tab-name
	$headerLinks = array(
		"projects" => "/?page=projects",
		"wordpress" => "/wordpress",
		"Programmering" => "/programmeringsopgave",
		"Client-Side" => "/clientsideopgave",
		"empty" => ""
	);
?>
<!DOCTYPE html>


<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="
		<?php
			echo $pageDescription; // Description of page, defined as $pageDescription in ROOT/index.php
		?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="apple-touch-icon image_src" href="apple-touch-icon.png">

		<title>
			<?php
				echo $pageTitle; // Title of page, defined as $pageTitle in ROOT/index.php
			?>
		</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/main.css">
	</head>
	<?php
		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - END OF HEAD
	?>
	<body>
		<header class="header_main">
			<div class="flex sb">
				<div class="header_logo">
					<a href="/?page=projects">
						<span>
							Peter Winther
						</span>
					</a>
				</div>
				<nav class="header_nav">
					<ul class="flex sb">
						<?php

							// Builds link to header from array $headerLinks, Styles from .header_nav

							$toEcho = "";
							foreach($headerLinks as $key => $value){
								$toEcho .= "<li><a ";
								if($pageName === $key){
									$toEcho .= "class='curr_page' ";
								}
								$toEcho .= "href='";
								$toEcho .= $value;
								$toEcho .= "'>";
								$toEcho .= $key;
								$toEcho .= "</a></li>";
							}
							echo $toEcho;
						?>
					</ul>
				</nav>

			</div>
		</header>
		<?php
			// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - END OF HEADER
		?>
		<main class="content_main">
			<?php

				// Gets Assignment boxes if page = projects
				if($pageName === "projects" || $pageName === "default"){
			?>
			<div class="main_assignment_wrap">
				<?php

					// Builds list with PHPclass listDir from listDir.php
					// Style wrapper with main_assignment_wrap
					// Style content with chosen classname in PHPclass>children
					//
					// 	<ul class='classname'>
					// 		<li>
					// 			<a href='Project Location'>
					// 				<span>
					// 					Project Name
					// 				</span>
					// 			</a>
					// 		</li>
					// 	</ul>

					$myList = new listDir("opgaver");
					echo $myList->createList("dateDesc", "main_assignment");
				?>
			</div><?php }
				// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - END OF CONTENT: PROJECTS
			?>

		</main>
		<?php
			// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - END OF MAIN
		?>
		<footer>

		</footer>
		<?php
			// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - END OF FOOTER
		?>
	</body>
</html>
