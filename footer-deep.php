</div><!-- #page -->

<footer class="site-footer <?php if( is_page_template('templates/homepage-fullscreen.php') ) { echo "footer-fullscreen"; } ?>">

	<div class="container">
		<div class="row">
			<div class="two columns">
				<div class="footer-logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo-color.png" />
				</div>
			</div>
			<div class="seven columns">
				<span class="footer-title">A new way to connect with your ride</span>
			</div><!-- End of Footer -->
			<div class="three columns">
				<div class="main-navigation">
					<ul>
						<li class="social">
							<div class="social-icon"><a href="https://instagram.com/ridewithlink/" target="_blank"><i class="fa fa-instagram"></i></a></div>
							<div class="social-icon"><a href="https://twitter.com/ridewithlink" target="_blank"><i class="fa fa-twitter"></i></a></div>
							<div class="social-icon"><a href="https://www.facebook.com/pages/Ridewithlink/1648007138747950" target="_blank"><i class="fa fa-facebook"></i></a></div>
							<div class="social-icon"><a class="contact-link" href="<?php echo esc_url( home_url( '/#contact' ) ); ?> "><i class="fa fa-envelope"></i></a></div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="five columns offset-by-seven">
				<div class="footer-mesh">
					Copyright <?php echo date("Y"); ?>, All rights reserved. Site by <a href="http://meshfresh.com" target="_blank">MESH</a>.
				</div>
			</div>
			<div class="five columns offset-by-seven">
				<div class="footer-tou">
					Read our <a href="<?php echo esc_url( home_url( '/terms-of-use' ) ); ?> ">Terms of Use</a>.
				</div>
			</div>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66206223-11', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
