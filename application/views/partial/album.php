    <!--=============== portfolio holder ===============-->
    <div id="main">
    <div id="black_album">
        <!--=============== content-holder ===============-->	
        <div class="content-holder scale-bg2 black_album">
            <div class="resize-carousel-holder no-padding">
                <!--p_horizontal_wrap -->
                <div class="p_horizontal_wrap res-protoc" data-csc="rgba(0,0,0,0.85)">
                    <div id="portfolio_horizontal_container"  class="onecolumn">
                        <!-- portfolio item -->
                        <!--<div class="portfolio_item">
                            <img  src="../assets/images/album/album/1.JPG" alt="">
                            <a data-src="../assets/images/album/album/1.JPG" class="single-popup-image slider-zoom">
                            <i class="fa fa-search"></i> 
                            </a>
                            <div class="thumb-info">
                                <h3><a href="#" class="ajax">Alone on Nature</a></h3>
                                <p>Here you can place an optional description of your  Project</p>
                            </div>
                        </div>-->
                        <!-- portfolio item end -->
                        <?php foreach($image_data as $img) { ?>
                            <div class="portfolio_item">
                                <img src="<?php echo $admin.$img['path']; ?>" alt="">
                                <a data-src="<?php echo $admin.$img['path']; ?>" class="single-popup-image slider-zoom">
                                <i class="fa fa-search"></i> 
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                    <!--portfolio_horizontal_container  end-->
                </div>
                <!--p_horizontal_wrap  end-->
            </div>
            <!--resize-carousel-holder  end-->
        </div>
        <!-- content-holder end -->
    </div>
    <!-- wrapper end -->