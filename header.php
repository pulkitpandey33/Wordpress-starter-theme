<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">

<header class="header-wrapper">
  <div class="header">
    <div class="logo">
       <?php if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){ ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php the_custom_logo(); ?></a>
        <?php } else{ ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo esc_html($description); /* WPCS: xss ok. */ ?></p>
            <?php
       		endif;
        }?>
    </div>
    <div class="nav-wrapper">
        <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'custom' ); ?>">
                <div class="mobile-menu-icon">
                    <div class="menu-icon" id="mobile-icon">
                     <span class="line"></span>
                     <span class="line"></span>
                     <span class="line"></span>
                    </div>
                </div>
                
			<?php
			    wp_nav_menu(
				    array(
					'theme_location' => 'menu-1',
                    'menu_class'     => 'main-menu',
                    'container_id' => 'user-nav',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				    )
			    );
			?>
		</nav><!-- #site-navigation -->
	        <?php endif; ?>
        <div class="search-wrapper header-search">
          <img src="" class="search-icon">
            <i class="fa fa-search" aria-hidden="true"></i>
                <div style="display: none;" class="tab-search-form-header">
                    <?php get_search_form(); ?>
                </div>
        </div> 
        <?php if ( has_nav_menu( 'social' ) ) : ?>  
        <div class="header-social">
            <nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'custom' ); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'social',
                        'menu_class'     => 'social-links-menu',
                        'link_before'    => '<span class="screen-reader-text">',
                        'link_after'     => '</span>' . custom_get_icon_svg( 'link' ),
                        'depth'          => 1,
                    )
                );
                ?>
		       </nav><!-- .social-navigation -->
        </div>
        <?php endif; ?>
    </div>
  </div>
</header>