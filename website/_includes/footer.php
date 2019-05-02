<footer>
	<?php
		function ewd_copyright($startYear) {
			$currentYear = date('Y');
			if ($startYear < $currentYear) {
				$currentYear = date('y');
				return "&copy; $startYear&ndash;$currentYear";
			} else {
				return "&copy; $startYear";
			}
		}
	 ?>





<a class="show-cc" onClick="showSignUp(); return false;" href="fallback.html">try this</a>

<!-- Begin Constant Contact Active Forms -->
<script> var _ctct_m = "fec03c291dec1ef04deffafbd2b8ba1f"; </script>
<script id="signupScript" src="//static.ctctcdn.com/js/signup-form-widget/current/signup-form-widget.min.js" async defer></script>
<!-- End Constant Contact Active Forms -->


	<div id="sign-up-hidden">
		<div id="footer-sign-up">

			<div id="ctr-cc">
				<div id="close-cc"><a class="cc-x" onClick="hideSignUp(); return false;" href="fallback.html">close</a></div>
				<!-- Begin Constant Contact Inline Form Code -->
				<div class="ctct-inline-form" data-form-id="14a8ad96-ce01-43e3-82e8-ddbd6c63053a"></div>
				<!-- End Constant Contact Inline Form Code -->
			</div><!-- #ctr-cc -->


		</div><!-- #footer-sign-up -->
	</div><!-- #footer-sign-up -->









	<p class="copyright"><?= ewd_copyright(2017); ?> Evergreen Brewery | <a href="http://www.evergreenwebdesign.com" target="_blank">Evergreen Web Design</a></p>
</footer>