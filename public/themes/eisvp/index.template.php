<?php Chunk::get('header'); ?>

	<div><?php Action::run('theme_pre_content'); ?></div>

		<div class="entrada">
			<div class="pizarra">
				<h2>
					Acceso Padres
				</h2>
				<img src="<?php echo Site::url(); ?>/img/muralConstruccion.png" alt="En Construcción"/>
			</div>
			<div class="textoPerfil">
				<?php echo Site::content(); ?>
			</div>
		</div>
	<div><?php Action::run('theme_post_content'); ?></div>
		
<?php Chunk::get('footer'); ?>