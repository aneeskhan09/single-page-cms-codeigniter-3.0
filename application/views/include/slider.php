<div id="slideshow">
        <div class="revolution-slider">
            <ul>    <!-- SLIDE  -->
                <!-- Slide1 -->
                <?php foreach($slider as $row){?>
                <li data-transition="zoomin" data-slotamount="7" data-masterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="<?=base_url('assets/');?><?=$row->slider_img;?>"alt="">
                </li>
				<?php } ?>
            
            </ul>
        </div>
    </div>