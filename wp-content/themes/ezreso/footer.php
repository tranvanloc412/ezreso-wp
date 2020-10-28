
    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">
        <div class="footer-content-area">
            <div class="container">
                <div class="row">
                    <div class="copy-right mt-x text-center fadeInUp m-auto" data-wow-delay="0.3s">
                        <p> © 2020 copyright by idsolutions.com.vn</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->
</div>
<!-- ########## All JS ########## -->
<?php if(!is_front_page()) : ?>
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
<?php endif; ?>
    <!-- jQuery js -->
    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="<?php bloginfo('template_directory'); ?>/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="<?php bloginfo('template_directory'); ?>/js/dzsparallaxer.js"></script>

    <script src="<?php bloginfo('template_directory'); ?>/js/jquery.syotimer.min.js"></script>

    <!-- script js -->
    <script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>

</html>