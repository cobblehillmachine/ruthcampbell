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
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="mid-cont">
				<div class="table-row">
          <div class="table-cell" id="copyright">&copy; <?php echo date("Y") ?> ruth campbell designs</div>
          <div class="table-cell" id="social-cont">
            <a id="facebook" class="social-icon" target="_blank" href="https://www.facebook.com/pages/Ruth-Campbell-Interior-Styling/710966995595360"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a id="pinterest" class="social-icon" target="_blank" href="http://pinterest.com/ruthtcampbell/"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
            <a id="twitter" class="social-icon" target="_blank" href="https://twitter.com/@RCintstylist"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a id="instagram" class="social-icon" target="_blank" href="http://instagram.com/rcintstyling/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
          <div class="tel table-cell"><span>O</span><a href="tel:843-412-5641">843-412-5641</a></div>
          <div class="email-cont table-cell"><span>E</span><a class="email" href="mailto:ruth@ruthcampbelldesigns.com">ruth@ruthcampbelldesigns.com</a></div>
        </div>
				<div class="table-row">
          <div class="table-cell" id="site-credit">site by <a href="http://cobblehilldigital.com" target="_blank">cobble hill</a></div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
		(function() {
		    window.PinIt = window.PinIt || { loaded:false };
		    if (window.PinIt.loaded) return;
		    window.PinIt.loaded = true;
		    function async_load(){
		        var s = document.createElement("script");
		        s.type = "text/javascript";
		        s.async = true;
		        s.src = "http://assets.pinterest.com/js/pinit.js";
		        var x = document.getElementsByTagName("script")[0];
		        x.parentNode.insertBefore(s, x);
		    }
		    if (window.attachEvent)
		        window.attachEvent("onload", async_load);
		    else
		        window.addEventListener("load", async_load, false);
		})();
		</script>
		
<?php wp_footer(); ?>

</body>
</html> 