<!doctype html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url('http://gmpg.org/xfn/11'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="tab-container">
            <div class="secondary-masthead">
                <div class="site-branding">
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
        		</div><!-- .site-branding -->
                    
        	    <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
		    <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'custom' ); ?>">
                <div id="toggle">
                        <span class="one"></span>
                        <span class="two"></span>
                        <span class="three"></span>
                    </div>
			    <?php
			    wp_nav_menu(
				    array(
					'theme_location' => 'menu-1',
					'menu_class'     => 'main-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				    )
			    );
			    ?>
		    </nav><!-- #site-navigation -->
	        <?php endif; ?>
            <?php if ( has_nav_menu( 'social' ) ) : ?>
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
	       <?php endif; ?>     
                <div class="tab-search-header">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <div style="display: none;" class="tab-search-form-header">
                        <?php get_search_form(); ?>
                    </div>
                    
                </div>
                    
            </div>
        </div>
	</header><!-- #masthead -->