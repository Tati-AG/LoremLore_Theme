</body>
<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>
	<nav class="navbar navbar-default" id="footer">
    <div class="container-fluid justify-content-center container-footer p-0">
      <div class="navbar-footer">
        <a class="navbar-brand" href="http://localhost/wordpress/index.php/home/">
          <img src="http://localhost/wordpress/wp-content/uploads/2020/07/JOIN.svg" alt="">
        </a>
        <p>© JOIN 2020 Todos Diretos Reservados</p>
      </div>
      <div class="categorias">
        <h5>Categorias</h5>
        <ul class="nav navbar-nav flex-row justify-content-center">
          <li><a href="http://localhost/wordpress/index.php/artigos/">Parceiros</a></li>
          <li><a href="http://localhost/wordpress/index.php/artigos/">Notícias</a></li>
          <li><a href="http://localhost/wordpress/index.php/artigos/">Imprensa</a></li>
          <li><a href="http://localhost/wordpress/index.php/artigos/">COVID-19</a></li>
          <li><a href="http://localhost/wordpress/index.php/home/">Sobre Nós</a></li>
      	</ul>
      </div>
      <div>
        <h5>Contato</h5>
        <p>+55 31 99571-0616<br>
          marinho@loremlore.com</p>
      </div>
      <div>
        <h5>Endereço</h5>
        <p>Av. Pres. Antônio Carlos, 6627 - Pampulha, Belo Horizonte - MG, 31270-901</p>
      </div>
    </div>
  </nav>
	</main><!-- #main -->

	<?php do_action( 'ocean_after_main' ); ?>

	<?php do_action( 'ocean_before_footer' ); ?>

</div><!-- #wrap -->

<?php do_action( 'ocean_after_wrap' ); ?>

</div><!-- #outer-wrap -->

<?php do_action( 'ocean_after_outer_wrap' ); ?>

<?php
// If is not sticky footer.
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
	get_template_part( 'partials/scroll-top' );
}
?>

<?php
// Search overlay style.
if ( 'overlay' === oceanwp_menu_search_style() ) {
	get_template_part( 'partials/header/search-overlay' );
}
?>

<?php
// If sidebar mobile menu style.
if ( 'sidebar' === oceanwp_mobile_menu_style() ) {

	// Mobile panel close button.
	if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
		get_template_part( 'partials/mobile/mobile-sidr-close' );
	}
	?>

	<?php
	// Mobile Menu (if defined).
	get_template_part( 'partials/mobile/mobile-nav' );
	?>

	<?php
	// Mobile search form.
	if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
		get_template_part( 'partials/mobile/mobile-search' );
	}
}
?>

<?php
// If full screen mobile menu style.
if ( 'fullscreen' === oceanwp_mobile_menu_style() ) {
	get_template_part( 'partials/mobile/mobile-fullscreen' );
}
?>

<?php wp_footer(); ?>
</body>
</html>
