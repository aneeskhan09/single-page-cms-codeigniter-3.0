<section id="content " >
   <div class="section container has-border">
        <div class="row same=height">
                        <div class="heading-box">
                            <?php foreach($about as $row){?>
                            <h2 class="box-title"><?=$row->company_name;?></h2>

                            <p><?=$row->company_details;?></p>
                            <?php } ?>
                        </div>
	   </div>               
	</div>                
    <div class="section container has-border" id="services">
		<div class="heading-box"><h2>Our Services</h2></div>
        <div class="row same-height">
            <?php foreach($services as $row){?>
            <div class="col-sm-4">
                <div class="icon-box style-side-7 block animated" data-animation-type="fadeInDown" data-animation-delay="0">
                    <i class="fa fa-eye"></i>
                    <div class="box-content">
                        <h4 class="box-title"><a href="#"><?=$row->services;?></a></h4>
                        <p><?=$row->services_details;?></p>
                    </div>
                </div>
            </div>
           <?php } ?>
        </div>
    </div>-->
    <div class="section container has-border overflow-hidden" id="portfolio">
        <h2>Portfolio</h2>
        <div class="post-wrapper post-slider style7 owl-carousel" data-itemsPerDisplayWidth="[[0, 1], [480, 1], [768, 2], [992, 3], [1200, 4]]" data-items="4">
           <?php foreach($portfolio as $row){?>
            <article class="post">
                <figure><img src="<?=base_url('assets/');?><?=$row->portfolio_img;?>" alt=""></figure>
                <div class="portfolio-hover-holder style1">
                    <div class="portfolio-text">
                        <div class="portfolio-text-inner">
                            <div class="st-td">
                                <h5 class="portfolio-title"><?=$row->portfolio_name;?></h5><span class="portfolio-category"><?=$row->category;?></span>
                            </div>
                            <!--<div class="st-td">
                                <a href="#" class="portfolio-like btn btn-sm"><i class="fa fa-heart"></i>480</a>
                            </div>-->
                        </div>
                    </div>
                            <span class="portfolio-action">
                                <a class="soap-mfp-popup" href="<?=base_url('assets/');?>images/recent_work/1.png"><i class="fa fa-chain has-circle"></i></a>
                                <a href="<?=base_url('Welcome/portfolio_details/');?><?=$row->portfolio_id;?>"><i class="fa fa-eye has-circle"></i></a>
                            </span>
                </div>
            </article>
			<?php } ?>
          
        </div>
    </div>
    <div class="section has-border container">
        <div class="row">
            <div class="col-md-12 animated" data-animation-type="fadeInLeft">
                <h2>Testimonails</h2>
                <div class="testimonials style4 owl-carousel box-lg" data-transitionstyle="fade">
                   <?php foreach($testimonials as $row){?>
                    <div class="testimonial style4">
                        <div class="testimonial-image">
                            <img src="<?=base_url('assets/');?><?=$row->testimonials_pic;?>" alt="">
                        </div>
                        <div class="testimonial-content">
                            <?=$row->testimonials_details;?>
                        </div>
                        <div class="testimonial-author">
                            <span class="testimonial-author-name"><?=$row->testimonials_name;?></span> - <!--<span class="testimonial-author-job">CEO</span>-->
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--<div class="col-md-6 animated" data-animation-type="fadeInRight">
                <h3>Why Choose Use</h3>
                <div class="tab-container full-width style2">
                    <ul class="tabs clearfix">
                        <li><a href="#tab4-1" data-toggle="tab">Web Design</a></li>
                        <li class="active"><a href="#tab4-2" data-toggle="tab">Retina Ready Display</a></li>
                        <li><a href="#tab4-3" data-toggle="tab">Branding</a></li>
                        <li><a href="#tab4-4" data-toggle="tab">photoshop</a></li>
                    </ul>
                    <div id="tab4-1" class="tab-content">
                        <div class="tab-pane">
                            <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo.</p>
                            <p>Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrices condimentum, leo massa mollis estiegittis miristum nulla.</p>
                        </div>
                    </div>
                    <div id="tab4-2" class="tab-content in active">
                        <div class="tab-pane">
                            <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo.</p>
                            <p>Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrices condimentum, leo massa mollis estiegittis miristum nulla.</p>
                        </div>
                    </div>
                    <div id="tab4-3" class="tab-content">
                        <div class="tab-pane">
                            <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo.</p>
                            <p>Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrices condimentum, leo massa mollis estiegittis miristum nulla.</p>
                        </div>
                    </div>
                    <div id="tab4-4" class="tab-content">
                        <div class="tab-pane">
                            <p>Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrs condmentum leo massa mollis estiegittis miristum nulla sed fringilla Donec vitae orci dignissim, faucibus tellus volutpat, rhoncus leo.</p>
                            <p>Mauris in quam tristique, dignissim urna in, molestie felis. Fusce tristique, elit nec vehicula imperdiet, eros est egestas odio, at aliquet elit nulla sed massa. Ut cursus massa at urnaaculis estie. Sed aliquamellus vitae ultrices condimentum, leo massa mollis estiegittis miristum nulla.</p>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <!--<div class="parallax box-lg parallax-image1" data-stellar-background-ratio="0.5">
                    <div class="testimonials style2">
                        <div class="container">
                            <h2 class="testimonials-title">Buyers Feedback</h2>
                            <div class="sky-carousel testimonial-carousel">
                                <div class="sky-carousel-wrapper">
                                    <ul class="sky-carousel-container">
                                       <?php foreach($testimonials as $row){?>
                                        <li>
                                            <img src="<?=base_url('assets/');?><?=$row->testimonials_pic;?>" width="92" height="92" alt="" />
                                            <div class="sc-content">
                                                <h2 class="testimonial-author"><?=$row->testimonials_name;?>
                                                <p class="team-member-desc">
													<em><?=$row->testimonials_details;?></em>
                                                </p>
                                            </div>
                                        </li>
                                     	<?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->
                <br><br>	
    <div class="section container overflow-hidden" id="team">
        <h2>Our Creative Team</h2>
        <div class="post-slider style7 owl-carousel" data-itemsPerDisplayWidth="[[0, 1], [480, 1], [768, 2], [992, 3], [1200, 4]]" data-items="4">
           <?php foreach($team as $row){?>
            <div class="team-member style-colored">
                <div class="image-container">
                    <img alt="" src="<?=base_url('assets/');?><?=$row->member_pic;?>">
                    <div class="team-member-social">
                        <div class="social-icons style1 size-sm">
                            <a title="" data-placement="top" data-toggle="tooltip" class="social-icon" href="<?=$row->twiter_link;?>" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" class="social-icon" href="<?=$row->fb;?>" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" class="social-icon" href="<?=$row->gplus;?>" data-original-title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            <a title="" data-placement="top" data-toggle="tooltip" class="social-icon" href="<?=$row->linkedin;?>" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="team-member-author">
                    <h4 class="team-member-name"><?=$row->member_name;?></h4>
                    <span class="team-member-job"><?=$row->member_designation;?></span>
                </div>
                <div class="team-member-desc">
                    <p><?=$row->member_details;?></p>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    </div>
</section>