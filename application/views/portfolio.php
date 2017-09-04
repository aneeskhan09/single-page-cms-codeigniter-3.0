<?php foreach($portfolio as $row){?>
<div class="page-title-container">
    <div class="page-title">
        <div class="container">
            <h1 class="entry-title"><?=$row->portfolio_name;?></h1>
        </div>
    </div>
    <ul class="breadcrumbs">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">PAGES</a></li>
        <li class="active">Portfolio</li>
    </ul>
</div>

<section id="content">
    <div class="container">
        <div id="main">
            <div class="post-wrapper">
                <div class="post-slider style3 owl-carousel box">
                    <a class="soap-mfp-popup" href="http://placehold.it/" style="width: 1170px; height:594px;">
                        <img alt="" src="<?=base_url('assets/');?><?=$row->portfolio_img;?>">
                    </a>
                   
                </div>
                <div class="portfolio-detail row">
                    <div class="col-sm-8 col-md-9">
                        <div class="portfolio-action">
                            <a href="#" class="btn btn-sm"><i class="fa fa-heart"></i>480</a>
                            <a href="#" class="btn btn-sm"><i class="fa fa-share"></i>Share</a>
                        </div>
                        <h5 class="portfolio-title">About This Project</h5>
                        <p><?=$row->portfolio_details;?> </p>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <div class="post-meta">
                            <h5>Clients</h5>
                            <p>Aliquam hendrerit a suscipit.</p>
                            <h5>Date</h5>
                            <p>20 December 2013</p>
                            <h5>Category</h5>
                            <p>Photography, Logo Design, Art</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="post-pagination">
                <a href="#" class="nav-prev disabled" onclick="return false;"></a>
                <div class="page-links">
					<span class="active">1</span>
                </div>
                <a href="#" class="nav-next" data-page-num="2"></a>
            </div>
        </div>
    </div>
</section>
<?php } ?>