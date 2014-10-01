<?php Chunk::get('header'); ?>

	<div><?php Action::run('theme_pre_content'); ?></div>

		<div class="entrada">
			<?php echo Site::content(); ?>
			<div class="texto">
				<?php $pages = Page::lastChildrens(Page::slug()); ?>
				<?php foreach($pages as $page) { ?>
					<div class="noticia">
						<p class="tituloNoticia">
							<?php echo $page['title']; ?>
						</p>
						<?php echo Pages::content($page['slug']); ?>
					</div>
				<?php } ?>	
			</div>
		</div>
	<div><?php Action::run('theme_post_content'); ?></div>
		
<?php Chunk::get('footer'); ?>
