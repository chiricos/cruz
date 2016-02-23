<?php if (is_active_sidebar_YA('above-footer')){ ?>

<div class="sidebar-above-footer theme-clearfix">
       <div class="container theme-clearfix">	   
		<?php dynamic_sidebar('above-footer'); ?>
	    </div>
</div>
<?php } ?>
<div class="condiciones">
	<ul>		
		<li><a href="http://cruz.simonsein.co/?page_id=4402"><img src="http://cruz.simonsein.co/wp-content/uploads/2016/02/icono-politicas.png">Políticas Cruz</a></li>
		<li><a href="http://cruz.simonsein.co/?page_id=5006"><img src="http://cruz.simonsein.co/wp-content/uploads/2016/02/icono-cuidados.png">Cuidado de tus muebles</a></li>		
		<li><a href="http://cruz.simonsein.co/?page_id=4379"><img src="http://cruz.simonsein.co/wp-content/uploads/2016/02/icono-envios.png">Envío</a></li>
		<li><a href="http://cruz.simonsein.co/?page_id=635"><img src="http://cruz.simonsein.co/wp-content/uploads/2016/02/icono-quienessomos.png">Quiénes somos</a></li>
		<li><a href="http://cruz.simonsein.co/?page_id=642"><img src="http://cruz.simonsein.co/wp-content/uploads/2016/02/icono-contacto.png">Contáctenos</a></li>
	</ul>
</div>
<footer>
	<div class="container">	
		<div class="mark">			
				<img src="http://cruz.simonsein.co/wp-content/uploads/2016/01/mediospago.png">									
		</div>
	</div>
	<div class="copy">
		<p>INDUSTRIAS METALICAS CRUZ (C) TODOS LOS DERECHOS RESERVADOS 2016 / <a href="">Términos y condiciones</a></p>
	</div>	
</footer>
<!--<footer class="footer theme-clearfix" >
	<div class="container theme-clearfix">
		<div class="footer-top">
			<div class="row">
				<?php if (is_active_sidebar_YA('footer')){ ?>
									
						<?php dynamic_sidebar('footer'); ?>
					
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="copyright theme-clearfix">
		<div class="container clearfix">
			<div class="col-lg-8 col-md-8 col-sm-8 pull-left clearfix">
				<div class="copyright-text pull-left">
					<p>&copy;<?php echo date('Y'); ?> <a href="http://www.smartaddons.com/wordpress/theme-showcase"><?php esc_html_e('Wordpress Theme ', 'yatheme'); ?></a><?php esc_html_e('SW Atom Store. All Rights Reserved. Designed by ','yatheme'); ?><a class="mysite" href="http://www.smartaddons.com/"><?php esc_html_e('Smartaddons.com','yatheme');?></a>.</p>
				</div>
			</div>
			<?php if (is_active_sidebar_YA('footer-copyright')){ ?>
				<div class="sidebar-copyright pull-right">
						<div class="col-md-12 theme-clearfix">
							<?php dynamic_sidebar('footer-copyright'); ?>
						</div>
				</div>
			<?php } ?>
		</div>
	</div>
</footer>-->
<?php if (is_active_sidebar_YA('floating') ){ ?>
<div class="floating theme-clearfix">
	<?php dynamic_sidebar('floating');  ?>
</div>
</div>
<?php } ?>
<?php if(ya_options()->getCpanelValue('back_active') == '1') { ?>
<a id="ya-totop" href="#" ></a>
<?php }?>
<?php wp_footer(); ?>
</body>
</html>