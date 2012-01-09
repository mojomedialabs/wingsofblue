<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	</div><!-- #main -->
	<footer id="colophon" role="contentinfo">
		<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 * /
				get_sidebar( 'footer' );
				/* */
		?>
		<div id="colophon-sup">
			<div style="floa">
			<a href="#javascript" id="youtube" onclick="alert('Coming Soon.');arguments[0].preventDefault();">
				<img class="social" style="width: 45px;" src="<?php bloginfo('template_directory'); ?>/images/footer/youtubev2.png" alt="Youtube" />
			</a>
			<a href="http://twitter.com/#!/WingsofBlue1" id="twitter">
				<img class="social" style="width: 45px;" src="<?php bloginfo('template_directory'); ?>/images/footer/twitterv2.png" alt="Twitter" />
			</a>
			<a href="#javascript" id="facebook" onclick="alert('Coming Soon.');arguments[0].preventDefault();">
				<img class="social" style="width: 45px;" src="<?php bloginfo('template_directory'); ?>/images/footer/facebookv2.png" alt="Facebook" />
			</a>
			<a href="http://flickr.com/wingsofblue" id="flickr" class="colophon-left-pad">
				<img class="social" src="<?php bloginfo('template_directory'); ?>/images/footer/flickr.png" alt="Flickr Photo Album" />
			</a>
			<form class="colophon-left-pad" action="#wpcf7-f745-p28-o1" id="subscribe" method="post">
				<input type="hidden" name="_wpcf7" value="745">
				<input type="hidden" name="_wpcf7_version" value="3.0">
				<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f745-p28-o1">
				<label>Subscribe to our newsletter<br><input type="text" name="text-798" value=""placeholder="Email..."></label>
			</form>
			<div class="colophon-left-pad partner-links">
				<div class="partner-link">
					<a href="http://usairforce.com/" target="_blank" title="US Air Force">
						<img src="<?php bloginfo('template_directory'); ?>/images/footer/airforce.png" alt="US Air Force" /><br />
						<span>US Air Force</span>
					</a>
				</div>
				<div class="partner-link">
					<a href="http://www.academyadmissions.com/" target="_blank" title="USAFA Admissions">
						<img src="<?php bloginfo('template_directory'); ?>/images/footer/usafaseal.png" alt="USAFA Admissions" /><br />
						<span>USAFA Admissions</span>
					</a>
				</div>
				<div class="partner-link">
					<a href="http://www.usafa.af.mil/" target="_blank" title="USAF Academy">
						<img src="<?php bloginfo('template_directory'); ?>/images/footer/usafaseal.png" alt="USAF Academy" /><br />
						<span>USAF Academy</span>
					</a>
				</div>
			</div>
		</div>
		<ul id="colophon-sub">
			<li>
				<a href="<?php echo get_permalink(8); ?>">About</a>
			</li>
			<li>
				<a href="<?php echo get_permalink(24); ?>">Join Us</a>
			</li>
			<li>
			    <a href="<?php echo get_permalink(92); ?>">Events</a>
			</li>
			<li>
			    <a href="<?php echo get_permalink(32); ?>">Partners</a>
			</li>
			<li>
			    <a href="<?php echo get_permalink(34); ?>">W.O.B. Store</a>
			</li>
			<li>
			    <a href="<?php echo get_permalink(36); ?>">Blog</a>
			</li>
			<li>
			    <a href="<?php echo get_permalink(24); ?>">Contact</a>
			</li>
			<li>
			    <a href="<?php echo get_permalink(607); ?>">Terms of Use</a>
			</li>
			<li>
			    <a href="<?php echo get_permalink(609); ?>">Privacy Policy</a>
			</li>
			<li>
				&copy; 2011 Wings of Blue Association
			</li>
			<li>
				Designed by <a href="http://mojomedialabs.com/">Mojo Media Labs</a>.
			</li>
		</ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26781435-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
