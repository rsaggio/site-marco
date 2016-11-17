<?php 
	$especific_css[] = 'about';
	$background_class = 'about-cover';
	$especific_header = 'about';
	$lightOrDark = 'dark';
	require_once('header.php');
?>

<main class="container">
	<h2 class="page-title">It is all about you.</h2>
	<h3 class="page-subtitle">We created an unique online platform that allows:</h3>

	<ol class="about-allowList">
		<li class="about-allowList-item allowList-item-investor">
			Investors to diversy their portfolio and fund energy, education, urban development, and infrastructure projects that, in addition to beating traditional fixed income products, offer the change to have an impact in cities and change the world. 
		</li>

		<li class="about-allowList-item allowList-item-citizen">
			Citizens, students, alumni, and parents to engage in their local communities by launching, funding and investing in their communties, schools, colleges and universities through social and civic projects promoting economic development.
		</li>

		<li class="about-allowList-item allowList-item-developer">
			Project developers, sponsors and LPs to raise capital and finance their energy, urban development or infrastructure project, tailor their financial structures increasing return on investement and acessing a large pool of investors like never before. You can also refinance expensive loans, increase tenor, or adjust risk and increase value in your project portfolio.
		</li>

		<li class="about-allowList-item allowList-item-privatePublic">
			Public-Private Partnerships, States, Municipalities and Districts to customize capital raising transaction to address an especifc need and sell those secutitities to local investors who are willing to change their lives and their neighboorhood.
		</li>
	</ol>

	<a href="#" class="button learnHow-button">Learn how</a>
</main>


<?php
	$isLanding = true;
	require_once('footer.php');
?>
