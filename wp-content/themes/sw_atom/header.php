<?php $ya_box_layout = ya_options()->getCpanelValue('layout'); ?>	
<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=841499242639414";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="menu-top">
	<div class="container">
		<ul>
			<li><a href="http://cruz.simonsein.co/?page_id=751">Proyectos</a></li>
			<li><a href="http://cruz.simonsein.co/?page_id=3215">Puntos de experiencia</a></li>
			<li><a href="http://cruz.simonsein.co/?page_id=4277">Catálogos</a></li>			
			<li><a href="http://cruz.simonsein.co/?page_id=635">Conócenos</a></li>
			<li><a href="http://cruz.simonsein.co/?page_id=642">Contáctenos</a></li>
			<li><a href="http://cruz.simonsein.co/?page_id=4175&preview=true">Garantía</a></li>
			<li><a href="http://cruz.simonsein.co/?page_id=4379">Envío</a></li>
			<li><a href="http://cruz.simonsein.co/?page_id=4402">Compra</a></li>
		</ul> 
	<div class="top-social">
		<a href="https://www.facebook.com/Met%C3%A1licas-Cruz-212039442461429/?ref=bookmarks" target="_blank">
			<span class="fa fa-facebook icon-social"></span>
		</a>
		<a href="https://fb.com" target="_blank">
			<span class="fa  fa-twitter icon-social"></span>
		</a>
		<a href="https://plus.google.com/u/0/115231477183451786072/posts" target="_blank">
			<span class="fa fa-google-plus icon-social"></span>
		</a>
		<a href="https://fb.com" target="_blank">
			<span class="fa fa-linkedin icon-social"></span>
		</a>
		<a href="https://www.pinterest.com/metalicascruz/" target="_blank">
			<span class="fa fa-pinterest icon-social"></span>
		</a>
	</div>
	</div>
	
</div>
<div class="body-wrapper theme-clearfix<?php echo ( $ya_box_layout == 'boxed' )? ' box-layout' : '';?> ">
<?php 
	$ya_colorset = ya_options()->getCpanelValue('scheme');
	$ya_header_style = ya_options()->getCpanelValue('header_style');
if ($ya_header_style == 'default'){
?>

<header id="header" role="banner" class="header">

    <div class="header-msg">
        <div class="container">
        <?php if (is_active_sidebar_YA('top')) {?>
            <div id="sidebar-top" class="sidebar-top">
                <?php dynamic_sidebar('top'); ?>
            </div>
        <?php }?>
        </div>
    </div>
	<div class="container">
		<div class="top-header">			
			<div class="ya-logo pull-left">
				<a  href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php if(ya_options()->getCpanelValue('sitelogo')){ ?>
							<img src="<?php echo esc_attr( ya_options()->getCpanelValue('sitelogo') ); ?>" alt="<?php bloginfo('name'); ?>"/>
						<?php }else{
							if ($ya_colorset){$logo = get_template_directory_uri().'/assets/img/logo-'.$ya_colorset.'.png';}
							else $logo = get_template_directory_uri().'/assets/img/logo-default.png';
						?>
							<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php bloginfo('name'); ?>"/>
						<?php } ?>
				</a>
			</div>
			<?php if (is_active_sidebar_YA('top-header')) {?>
				<div id="sidebar-top-header" class="sidebar-top-header">
						<?php dynamic_sidebar('top-header'); ?>
				</div>
			<?php }?>
		</div>
	</div>
</header>

<?php if ( has_nav_menu('primary_menu') ) {?>
	<!-- Primary navbar -->
<div id="main-menu" class="main-menu">
	<nav id="primary-menu" class="primary-menu" role="navigation">
		<div class="container">
			<div class="mid-header clearfix">
				<a href="#" class="phone-icon-menu"></a>
				<div class="navbar-inner navbar-inverse">
						<?php
							$ya_menu_class = 'nav nav-pills';
							if ( 'mega' == ya_options()->getCpanelValue('menu_type') ){
								$ya_menu_class .= ' nav-mega';
							} else $ya_menu_class .= ' nav-css';
						?>
						<?php wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => $ya_menu_class)); ?>
				</div>
				<?php if (is_active_sidebar_YA('top-menu')) {?>
					<div id="sidebar-top-menu" class="sidebar-top-menu">
							<?php dynamic_sidebar('top-menu'); ?>
					</div>
				<?php }?>
			</div>
		</div>
	</nav>
</div>

	<!-- /Primary navbar -->


<?php 
	}
} else {
    echo '<div class="header-' . $ya_header_style . '">';
    get_template_part('templates/header', $ya_header_style);
    echo '</div>';
}	
?>

<div id="main" class="theme-clearfix" role="document">
<?php
	if (!is_front_page() ) {
		if (function_exists('ya_breadcrumb')){
			ya_breadcrumb('<div class="breadcrumbs theme-clearfix"><div class="container">', '</div></div>');
		} 
	} 

?>