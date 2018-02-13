	<footer id="main-footer" class="grid">
		<div class="container">
			<div class="row">
				<a href="tel:044 5964289" title="Klikkaa ja soita">
				<div class="footerkuvake text-center">
					<i class="fa fa-mobile-alt fa-3x"></i>
				</div>
				</a>
				<a href="tel:044 5964289" title="Klikkaa ja soita">
				<p>044 596 4289</p>
				</a>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<a href="mailto:uolevit@outlook.com" title="Klikkaa ja lähetä sähköpostia">
		  		<div class="text-center">
					<i class="fa fa-envelope fa-3x"></i>
				</div>
				</a>
				<a href="mailto:uolevit@outlook.com" title="Klikkaa ja lähetä sähköpostia">
				<p>uolevit@outlook.com</p>
				</a>
			</div>
		</div>
		<div class="container">
			<div class="row">
		  		<div class="text-center">
					<i class="fa fa-copyright fa-3x"></i>
				</div>
				<p>UolevIT | <?php echo Date('j.n.Y'); ?></p>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	<a href="javascript:" id="return-to-top"><i class="fa fa-angle-up fa-3x"></i></a>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/tether.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script>
		window.sr = ScrollReveal();
		sr.reveal('#showcase #cw', {
			duration: 1000,
			origin:'bottom',
			distance: '50px',
			mobile: false,
			scale: 0.5,
		});
		sr.reveal('#showcase #scbtn1', {
			duration: 1000,
			delay: 1000,
			origin:'bottom',
			distance: '50px',
			mobile: false,
			scale: 0.5,
		});
		sr.reveal('#showcase #scbtn2', {
			duration: 1000,
			delay: 1500,
			origin:'bottom',
			distance: '50px',
			mobile: false,
			scale: 0.5,
		});
		sr.reveal('#showcase #scbtn3', {
			duration: 1000,
			delay: 2000,
			origin:'bottom',
			distance: '50px',
			mobile: false,
			scale: 0.5,
		});
	</script>
<script async type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a706d408c965639"></script>
</body>
</html>