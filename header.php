<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup Screen 1</title>

	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/hamburguer-animation.css">
	<link rel="stylesheet" href="css/menu-cover.css">
	
	<link rel="stylesheet" href="css/commons.css">
	<link rel="stylesheet" href="css/buttons.css">
	
	<link rel="stylesheet" href="css/checkboxes.css">
	<link rel="stylesheet" href="css/form-commons.css">

	<link rel="stylesheet" href="css/signup.css">

	<!-- Loads especific CSS for a page -->
	<?php
	if(isset($especific_css)) {
		foreach ($especific_css as $css) {
			echo '<link rel="stylesheet" href="css/' . $css . '.css">';
		}
	}
	?>

</head>
<body>
<?php if(isset($lightOrDark) && isset($background_class)) { ?>
<div class="background-cover background-cover-<?= $lightOrDark; ?> <?= $background_class; ?>">
<?php } else {?>
<div class="background-cover-light">
<?php } ?>
<div class="page-header-wrapper container">
	<header>
		<h1>
			<a href="/">
			<?php if(isset($lightOrDark) && $lightOrDark === 'dark') { ?>
			<img src="img/logo-light.svg" alt="Undrland">
			<?php } else { ?>
			<img src="img/logo-dark.svg" alt="Undrland">
			<?php }?>
			</a>
		</h1>

		<nav class="mainMenu">
			<ul>
				<?php
				//apenas para teste
				$logIn = true;
				?>
				<?php if(!$logIn) { ?>
				<li class="mainMenu-item"><a href="about.php">About</a></li>
				<li class="mainMenu-item"><a href="login.php">Log in</a></li>
				<li class="mainMenu-item mainMenu-signup"><a href="signup-screen1.php">Sign Up</a></li>
				<?php } else { ?>
				<li class="mainMenu-item mainMenu-loggedIn">
					Marco
					<ul class="loggedIn-list">
						<li class="loggedIn-list-item loggedIn-logout">
							<a href="#">Log out</a>
						</li>
						<li class="loggedIn-list-item loggedIn-contact">
							<a href="contactUs.php">Contact us</a>
						</li>
					</ul>
				</li>

				<?php } ?>
			</ul>
		</nav>

		<div class="hamburguer-menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</header>

	<div class="menu-cover menu-cover-hidden">
		<ul class="menu-cover-list">
			<li><a href="about.php">About</a></li>
			<li class="header-link-capital"><a href="raisecapital.php">Raise Capital</a></li>
			<li class="header-link-invest"><a href="invest.php">Invest</a></li>
			<li class="header-link-impact"><a href="takeaction.php">Impact Investing</a></li>
			<li class="header-link-consultancy"><a href="helpfinancing.php">Consultancy</a></li>
			<li class="header-link-contactUs"><a href="contactUs.php">Contact Us</a></li>
		</ul>
	</div>

	<div class="page-header">
		<?php
		if(isset($especific_header)) {
			include_once('page-headers/' . $especific_header . '-header.php');
		}
		?>
	</div>

	

	</div>
	<a class="arrow" href="#"></a>
</div>