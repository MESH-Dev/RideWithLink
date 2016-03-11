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
							<div class="social-icon"><a class="go-contact"><i class="fa fa-envelope"></i></a></div>
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

	<!-- The Modal -->
	<div id="myModal" class="modal">

	  <!-- Modal content -->
	  <div class="modal-content">
			<span class="close">x</span>
			<a href="https://link.applicantpool.com/jobs/" target="_blank">
				<div class="modal-inner">
					<div class="modal-inner-primary">
			    	Become<br/> a driver<br/> in <span>Charleston</span>, WV.
					</div>
					<div class="modal-inner-secondary">
						Link is a <span>West Virginia</span> based company revolutionalizing transportation in the Mountain State and <span>beyond</span>.
					</div>
					<div class="modal-inner-image">
					</div>
				</div>
			</a>
	  </div>

	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
