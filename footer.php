<footer class="footer_part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer_logo">
                    <a href="index.html" class="footer_logo_iner"> <img src="img/footer_logo.png" alt="#"> </a>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="single_footer_part">
                    <h4>About Us</h4>
                    <p>Heaven fruitful doesn't over lesser days appear creeping seasons so behold bearing days open</p>
                    <div class="footer_icon social_icon">
                        <ul class="list-unstyled">
                            <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                            <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single_footer_part">
                    <h4>Contact Info</h4>
                    <p>Address : Your address goes
                        here, your demo address.</p>
                    <p>Phone : +8880 44338899</p>
                    <p>Email : info@colorlib.com</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single_footer_part">
                    <h4>Important Link</h4>
                    <ul class="list-unstyled">
                        <li><a href=""> WHMCS-bridge</a></li>
                        <li><a href="">Search Domain</a></li>
                        <li><a href="">My Account</a></li>
                        <li><a href="">Shopping Cart</a></li>
                        <li><a href="">Our Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="single_footer_part">
                    <h4>Newsletter</h4>
                    <p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open
                    </p>
                    <div id="mc_embed_signup">
                        <form target="_blank"
                              action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                              method="get" class="subscribe_form relative mail_part" required>
                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                   class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '"
                                   required="" type="email">
                            <button type="submit" name="submit" id="newsletter-submit"
                                    class="email_icon newsletter-submit button-contactForm"><i
                                        class="far fa-paper-plane"></i></button>
                            <div class="mt-10 info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_text text-center">
                    <P><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></P>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--::footer_part end::-->

<!-- popper js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/bootstrap.min.js"></script>
<!-- magnific js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.magnific-popup.min.js"></script>
<!-- carousel js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/slick.min.js"></script>
<!-- easing js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.easing.min.js"></script>
<!--masonry js-->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/masonry.pkgd.js"></script>
<!--form validation js-->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.nice-select.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/contact.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.form.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.validate.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/mail-script.js"></script>
<!-- counter js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/waypoints.min.js"></script>
<!-- custom js -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/custom.js"></script>


<?php wp_footer(); ?>
</body>

</html>



<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dream
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dream' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'dream' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'dream' ), 'dream', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
