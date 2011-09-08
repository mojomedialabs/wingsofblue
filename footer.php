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
        <a href="http://youtube.com/channels/USERNAMEHERE" id="youtube">
            <img src="<?php bloginfo('template_directory'); ?>/images/footer/youtube.png" alt="Youtube" />
        </a>
        <a href="http://twitter.com/#!/USERNAMEHERE" id="twitter">
            <img src="<?php bloginfo('template_directory'); ?>/images/footer/twitter.png" alt="Twitter" />
        </a>
        <a href="http://facebook.com/URLTOPAGEHERE" id="facebook">
            <img src="<?php bloginfo('template_directory'); ?>/images/footer/facebook.png" alt="Facebook" />
        </a>
        <a href="http://flickr.com/URLTOPAGEHERE" id="flickr" class="colophon-left-pad">
            <img src="<?php bloginfo('template_directory'); ?>/images/footer/flickr.png" alt="Flickr Photo Album" />
        </a>
        <form action="/subscription/create" method="POST" id="subscription" class="colophon-left-pad">
            <label for="subscribe[email]">Subscribe to our newsletter</label>
			<br />
            <input type="text" name="subscribe[email]" value="" placeholder="Email..." />
        </form>
		<a href="http://www.airforce.com/" class="colophon-left-pad">
		    <img src="<?php bloginfo('template_directory'); ?>/images/footer/usaf.png" alt="USA Air Force" />
		</a>
		<a href="http://UNKNOWNRUL/" class="colophon-left-pad">
		    <img src="<?php bloginfo('template_directory'); ?>/images/footer/usafatheletic.png" alt="USAF Athletic Dept." />
		</a>
		<a href="http://UNKNOWNURL/" class="colophon-left-pad">
		    <img src="<?php bloginfo('template_directory'); ?>/images/footer/usafa.png" alt="" />
		</a>
      </div>
      <ul id="colophon-sub">
        <li>
            <a href="<?php echo get_permalink(7); ?>">About</a>
        </li>
		<li>
		    <a href="<?php echo get_permalink(26); ?>">Join Us</a>
		</li>
		<li>
		    <a href="<?php echo get_permalink(32); ?>">Events</a>
		</li>
		<li>
		    <a href="<?php echo get_permalink(34); ?>">Partners</a>
		</li>
		<li>
		    <a href="<?php echo get_permalink(36); ?>">W.O.B. Store</a>
		</li>
		<li>
		    <a href="<?php echo get_permalink(53); ?>">W.O.B. Blog</a>
		</li>
		<li>
		    <a href="<?php echo get_permalink(90); ?>">Contact</a>
		</li>
		<li>
		    <a href="<?php echo get_permalink(92); ?>">Terms of Use</a>
		</li>
		<li>
		    <a href="<?php echo get_permalink(94); ?>">Privacy Policy</a>
		</li>
		<li>&copy; 2011 Wings of Blue</li>
		
      </ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
