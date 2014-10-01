      
				</div>
			</div>
			<footer>
				<div id="pieColegioIzqSombra">
					<img src="<?php echo Site::url(); ?>/img/pieColegioIzqSombra.png" alt="Pie Colegio Izquierda Sombra"/>
				</div>
				<div id="pieNubeDerSombra">
					<img src="<?php echo Site::url(); ?>/img/pieNubeDerSombra.png" alt="Pie Nube Derecha Sombra"/>
				</div>
				<div id="pieColegioIzqBlanco">
					<img src="<?php echo Site::url(); ?>/img/pieColegioIzqBlanco.png" alt="Pie Colegio Izquierda Blanco"/>
				</div>
				<div id="pieNubeDerBlanca">
					<img src="<?php echo Site::url(); ?>/img/pieNubeDerBlanca.png" alt="Pie Nube Derecha Blanca"/>
				</div>
				<div id="pieColegioIzqRojo">
					<img src="<?php echo Site::url(); ?>/img/pieColegioIzqRojo.png" alt="Pie Colegio Izquierda Rojo"/>
				</div>
				<div id="pieNubeDerAzul">
					<img src="<?php echo Site::url(); ?>/img/pieNubeDerAzul.png" alt="Pie Nube Derecha Azul"/>
				</div>
				<div id="pieSanVicente">
					<img src="<?php echo Site::url(); ?>/img/pieSanVicente.png" alt="Pie San Vicente"/>
				</div>
			</footer>
		</div>

		<?php Action::run('theme_footer'); ?>

		<script type="text/javascript">
			var paginaActual = "<?php echo Site::title(); ?>";
		</script>

		<?php echo Snippet::get('google-analytics'); ?>


	</body>

</html>
