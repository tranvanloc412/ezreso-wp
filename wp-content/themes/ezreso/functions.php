  <?php

/******** ADD MENU AND POST THUMBNAILS ********/
	function theme_setup() {
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'menus' );
		register_nav_menus ( array (
      'top_menu' => __('Top Menu', 'theme'),
    ) );

	}	
	add_action ( 'init', 'theme_setup' );

  ?>

  