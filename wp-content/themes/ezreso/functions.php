  <?php
/**
  @ Thiết lập các hằng dữ liệu quan trọng
  @ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
  @ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
  **/
  define( 'THEME_URL', get_stylesheet_directory() );
  define( 'CORE', THEME_URL . '/core' );

  /**
  @ Load file /core/init.php
  @ Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
  **/
  require_once( CORE . '/init.php' );

  /**
 @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
 **/
 if ( ! isset( $content_width ) ) {
       /*
        * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
        */
       $content_width = 620;
   }

  /**
  @ Thiết lập các chức năng sẽ được theme hỗ trợ
  **/
  if ( ! function_exists( 'ezreso_theme_setup' ) ) {
        /*
         * Nếu chưa có hàm thachpham_theme_setup() thì sẽ tạo mới hàm đó
         */
        function ezreso_theme_setup() {
        	/*
		* Thiết lập theme có thể dịch được
		*/
		$language_folder = THEME_URL . '/languages';
		load_theme_textdomain( 'ezreso', $language_folder );

			/*
			* Tự chèn RSS Feed links trong <head>
			*/
			add_theme_support( 'automatic-feed-links' );

			/*
			* Thêm chức năng post thumbnail
			*/
			add_theme_support( 'post-thumbnails' );

			/*
			* Thêm chức năng title-tag để tự thêm <title>
			*/
			add_theme_support( 'title-tag' );

			/*
			* Thêm chức năng post format
			*/
			add_theme_support( 'post-formats',
				array(
					'image',
					'video',
					'gallery',
					'quote',
					'link'
				)
			);

			/*
			* Thêm chức năng custom background
			*/
			$default_background = array(
				'default-color' => '#e8e8e8',
			);
			add_theme_support( 'custom-background', $default_background );

			/*
			* Tạo menu cho theme
			*/
			register_nav_menu ( 'primary-menu', __('Primary Menu', 'ezreso') );

		}	
		add_action ( 'init', 'ezreso_theme_setup' );

	}

	/**
	@ Chèn CSS và Javascript vào theme
	@ sử dụng hook wp_enqueue_scripts() để hiển thị nó ra ngoài front-end
	**/
	function ezreso_styles() {
	  /*
	   * Hàm get_stylesheet_uri() sẽ trả về giá trị dẫn đến file style.css của theme
	   * Nếu sử dụng child theme, thì file style.css này vẫn load ra từ theme mẹ
	   */
	  /******* CSS *******/
	  wp_register_style( 'style', get_template_directory_uri() . '/style.css', 'all' );
	  wp_enqueue_style( 'style' );

	   wp_register_style( 'core-style', get_template_directory_uri() . '/css/style.css', 'all' );
	  wp_enqueue_style( 'core-style' );

	   wp_register_style( 'responsive-style', get_template_directory_uri() . '/css/responsive.css', 'all' );
	  wp_enqueue_style( 'responsive-style' );

	}
	add_action( 'wp_enqueue_scripts', 'ezreso_styles' );


	/********* HEADER **********/
	if ( ! function_exists( 'ezreso_logo' ) ) {
		function ezreso_logo() {?>
			<a class="nav-brand" href="#"> EZRESO </a>
		<?php }
	}

	if ( ! function_exists( 'ezreso_navbar_toggler' ) ) {
		function ezreso_navbar_toggler() {?>
			<div class="classy-navbar-toggler">
				<span class="navbarToggler"><span></span><span></span><span></span></span>
			</div>
		<?php }
	}

	if ( ! function_exists( 'ezreso_menu' ) ) {
		function ezreso_menu() {?>
			<div class="classy-menu">

				<!-- close btn -->
				<div class="classycloseIcon">
					<div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
				</div>

				<!-- Nav Start -->
				<div class="classynav">
					<ul id="nav">
						<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
						<li><a href="<?php echo (get_home_url() . '/roadmap'); ?>">Road map</a></li>
                    <!-- <li><a href="services.html">Demo</a></li>
                    	<li><a href="faq.html">Download</a></li> -->
                    <!-- <li><a href="pricing.html">Pricing</a></li>
                    	<li><a href="contact-us.html">Contact</a></li> -->
                    </ul>

                    <!-- Button -->
                    <!-- <a href="#" class="btn login-btn ml-50">Log in</a> -->
                </div>
                <!-- Nav End -->
            </div>
        <?php }
    }

    /********* FOOTER **********/
    if ( ! function_exists( 'ezreso_single_testimonal' ) ) {
    	function ezreso_single_testimonal($testimonial_text, $imgNo, $admin_name, $admin_role) {?>
    		<!-- Single Testimonial -->
    		<div class="single-testimonial text-center">
    			<!-- Testimonial Image -->
    			<div class="testimonial_image">
    				<img src="<?php echo (get_template_directory_uri() . '/img/test-img/' . $imgNo . '.jpg') ?>" alt="">
    			</div>
    			<!-- Testimonial Feedback Text -->
    			<div class="testimonial-description">
    				<div class="testimonial_text">
    					<p><?php echo $testimonial_text ?></p>
    				</div>

    				<!-- Admin Text -->
    				<div class="admin_text">
    					<h5><?php echo $admin_name ?></h5>
    					<p><?php echo $admin_role ?></p>
    				</div>
    			</div>
    		</div>
    	<?php }
    }

    function wpb_widgets_init() {

    	register_sidebar( array(
    		'name'          => 'Custom Footer Widget Area',
    		'id'            => 'custom-footer-widget',
    	) );

    }
    add_action( 'widgets_init', 'wpb_widgets_init' );

