
<footer id="footer" class="style4">
    <div class="callout-box style2">
        <div class="container">
            <div class="col-sm-6">
              <form method="post" action="<?=base_url('Welcome/mailto');?>" >
                <div class="h2" id="contact">Contact</div>
                <div class="form-group">

                    <input required type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">

                    <input required type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Enter name">
                </div>
                <div class="form-group">
								<textarea required name="messege" class="form-control" placeholder="Messege" >

								</textarea>
                </div>

                <button type="submit" class="btn btn-default button">SEND</button>
                </form>
            </div>
            <div class="col-sm-6">
                <div class="post-content">
                    <h2 class="entry-title">abc Company</h2>
                    <p class="">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. </p>
                    <p><a class="btn btn-info btn-lg" href="#" role="button">Learn more</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-wrapper">

    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="copyright-area">

                <div class="copyright">
                    &copy; <?=date('Y');?>|| Developed <em>by</em> <a href="http://www.fb.com/aneesokhan">Anees ur rashd</a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Javascript -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/jquery.noconflict.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/modernizr.2.8.3.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>js/jquery-ui.1.11.2.min.js"></script>

<!-- Twitter Bootstrap -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/bootstrap.min.js"></script>

<!-- Magnific Popup core JS file -->
<script type="text/javascript" src="<?=base_url('assets/');?>components/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- parallax -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/jquery.stellar.min.js"></script>

<!-- waypoint -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/waypoints.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="<?=base_url('assets/');?>components/owl-carousel/owl.carousel.min.js"></script>

<script type="text/javascript" src="<?=base_url('assets/');?>components/jquery.sky.carousel/jquery.sky.carousel-1.0.2.js"></script><!-- load revolution slider scripts -->
<script type="text/javascript" src="<?=base_url('assets/');?>components/revolution_slider/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/');?>components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- plugins -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/jquery.plugins.js"></script>

<!-- load page Javascript -->
<script type="text/javascript" src="<?=base_url('assets/');?>js/main.js"></script>

<script type="text/javascript" src="<?=base_url('assets/');?>js/revolution-slider.js"></script>
</body>
</html>