<div class="footer-bg">
    <!-- ##### Testimonial Area Start ##### -->
    <section class="clients_testimonials_area bg-img section-padding-100-0" id="test">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <div class="top-sec-h wow fadeInUp" data-wow-delay="0.2s">Phản hồi từ Quý khách hàng
                        </div>
                        <h2 class="d-blue bold bl-text wow fadeInUp" data-wow-delay="0.3s">Khách hàng nói gì về
                        chúng tôi</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.4s">
                        Tài sản quý giá nhất là những lời khen và góp ý chân thực từ khách hàng. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="cotainer-fluid">
            <div class="row justify-content-center wow fadeInUp" data-wow-delay="0.4s">
                <div class="col-12 col-md-10 col-xs-10 offset-xs-1">
                    <div class="client_slides owl-carousel">

                        <?php  
                            $post   = get_post( 9 );
                            $output =  apply_filters( 'the_content', $post->post_content ); 
                            echo $output;
                        ?>

                         <?php  
                            $post2   = get_post( 15 );
                            $output2 =  apply_filters( 'the_content', $post2->post_content ); 
                            echo $output2;
                        ?>

                         <?php  
                            $post3   = get_post( 18 );
                            $output3 =  apply_filters( 'the_content', $post3->post_content ); 
                            echo $output3;
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area bg-img">

        <!-- ##### Contact Area Start ##### -->
            <!-- <div class="contact_us_area section-padding-100-0" id="contact">
                <div class="container">
                    <div class="call-us-sec">
                        <div class="row align-items-center">
                            <div class="col-12 col-lg-9">
                                <div class= "text-left">
                                    <h3 class="g-text fadeInUp" data-wow-delay="0.3s">So What is Next?</h3>
                                    <h2 class="bold w-text mb-0">Are You Ready? Let’S Work!</h2>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <a class="btn dream-btn more-btn fadeInUp" data-wow-delay="0.6s" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div> -->
            <!-- ##### Contact Area End ##### -->

            <!-- <div class="footer-content-area spec">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-lg-4 col-md-6">
                            <div class="footer-copywrite-info">
                                <div class="copywrite_text fadeInUp" data-wow-delay="0.2s">
                                    <div class="footer-logo">
                                        <a href="#"><img src="img/core-img/logo.png" alt="logo"> Bondoka </a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit ducimus voluptatibus neque illo id repellat quisquam? Autem expedita earum quae laborum ipsum ad.</p>
                                </div>
                                <div class="footer-social-info fadeInUp" data-wow-delay="0.4s">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="contact_info_area d-sm-flex justify-content-between">
                                <div class="contact_info mt-x text-center fadeInUp" data-wow-delay="0.3s">
                                    <h5>PRIVACY & TOS</h5>
                                    <a href="#"><p>Advertiser Agreement</p></a>
                                    <a href="#"><p>Acceptable Use Policy</p></a>
                                    <a href="#"><p>Privacy Policy</p></a>
                                    <a href="#"><p>Technology Privacy</p></a>
                                    <a href="#"><p>Developer Agreement</p></a>
                                </div>
                            </div>
                          
                        <div class="col-12 col-lg-2 col-md-6 ">
                            <div class="contact_info_area d-sm-flex justify-content-between">
                                <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.2s">
                                    <h5>NAVIGATE</h5>
                                    <a href="#"><p>Advertisers</p></a>
                                    <a href="#"><p>Developers</p></a>
                                    <a href="#"><p>Resources</p></a>
                                    <a href="#"><p>Company</p></a>
                                    <a href="#"><p>Connect</p></a>
                                </div>
                            </div>
                        </div>
                        

                        <div class="col-12 col-lg-3 col-md-6 ">
                            <div class="contact_info_area d-sm-flex justify-content-between">
                                <div class="contact_info mt-s text-center fadeInUp" data-wow-delay="0.4s">
                                    <h5>CONTACT US</h5>
                                    <p>Mailing Address:xx00 E. Union Ave</p>
                                    <p>Suite 1100. Denver, CO 80237</p>
                                    <p>+999 90932 627</p>
                                    <p>support@yourdomain.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    
            </div> -->
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
    <!-- jQuery js -->
    <script src="/ezreso-wordpress/wp-content/themes/ezreso/js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="/ezreso-wordpress/wp-content/themes/ezreso/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/ezreso-wordpress/wp-content/themes/ezreso/js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/ezreso-wordpress/wp-content/themes/ezreso/js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="/ezreso-wordpress/wp-content/themes/ezreso/js/dzsparallaxer.js"></script>

    <script src="/ezreso-wordpress/wp-content/themes/ezreso/js/jquery.syotimer.min.js"></script>

    <!-- script js -->
    <script src="/ezreso-wordpress/wp-content/themes/ezreso/js/script.js"></script>

    <?php wp_footer(); ?>
</body>

</html>