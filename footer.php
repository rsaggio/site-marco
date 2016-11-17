<?php if(isset($isLanding) && $isLanding) { ?>
<footer class="landing-footer-dash">

		<div class="container">
			<p class="landing-footer-information">
				IMPORTANT INFORMATION: This website and information material is provided solely as a matter of possible interest, demand analysis and subject to availability. The information provided is not intended to be and should not be construed as “advice” under Section 15B of the Securities Exchange Act of 1934 or the municipal advisory rules of the SEC, FINRA and/or MSRB. Undrland, a Delaware corporation is acting for its own account. Undrland is not a municipal advisor, financial advisor or agent and has no advisory, agency or fiduciary duty to any person pursuant to Section 15B of the Securities Exchange Act of 1934. Undrland  Inc. is neither a registered broker dealer and member of FINRA/SIPC nor is a funding portal or investment advisor.			
			</p>

			<span class="landing-footer-copyright">
				Copyright © 2016 Undrland, Inc. All Rights Reserved.
			</span>
		</div>

	<?php } else { ?>
	<footer>
	<?php } ?>
</footer>

<script src="js/jquery.js"></script>
<script src="js/hamburguer-animation.js"></script>
<script src="js/header.js"></script>
<script>
	$('.arrow').on('click', function(event){
	    event.preventDefault();
	    var main = $('main');

	    $('html, body').animate({
	        scrollTop: main.offset().top - 20
	    }, 500);
	});
</script>

</body>

</html>