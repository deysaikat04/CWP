    <!--=============== portfolio holder ===============-->
    <div id="main portf ">
    <div id="wrapper">
        
            <!-- Column wrap  --> 
            <div class="column-wrap serv-column ">
                <!-- Content --> 
                <div class="content mt70">
                    <section class="portfolio_section ">
                        <div class="section-title welcome_text-portfolio">
                            <h1>Welcome In Our Portfolio</h1>
                            <div class="devider_2"></div>
                        </div>
                        <div class="fl-wrap ">
                             <!--<div class="row">
                                 <div class="col-md-8 col-md-offset-2 col-sm-8 welcome_text">
                                    <p>Its essential to create candid 'moments',
                                        but not only candid 'pictures'.
                                        And the difference between the two will be easy for you to understand,
                                        once you go through our album. And, other than wedding photography,
                                        our works extend to pre- wedding shoots, baby and lifestyle shoots too.
                                        We have a complete album based on all of them.
                                        We advise you to have a close look at all of them,
                                        because, think before you choose the best for yourself.</p>
                                </div>
                            </div>-->
                            <!--  filter -->    
                            <div class="inline-filter fl-wrap">
                                <div class="filter-button">Filter : </div>
                                <div class="gallery-filters">
                                    <a href="#" class="gallery-filter gallery-filter-active btn btn-isotope " data-filter="*">All</a>
                                    <a href="#" class="gallery-filter btn btn-isotope" data-filter=".PreWedding">Pre Wedding</a>
                                    <a href="#" class="gallery-filter btn btn-isotope " data-filter=".Wedding">Wedding</a>
                                    <a href="#" class="gallery-filter btn btn-isotope" data-filter=".Baby">Baby</a>
                                    <a href="#" class="gallery-filter btn btn-isotope" data-filter=".LifeStyle">Life Style</a>
                                </div>
                            </div>
                            <!--  filter end -->                                                                  
                             <!--  gallery-items -->
                    				<div class="gallery-items hid-port-info pad-btom-folio  ">
                    				<?php if ($portfolio_data) { ?>
               								<?php foreach ($portfolio_data as $img) { ?> 
                    				
															<!-- gallery-item -->
															<div class="gallery-item all <?php echo $img['category']; ?>">
																	<div class="grid-item-holder">
																			<img  src="<?php echo $admin.$img['path']; ?>"   alt="">
																			<a data-src="<?php echo $admin.$img['path']; ?>" class="single-popup-image slider-zoom">
																			<i class="fa fa-search"></i> 
																			</a>
																	</div>
															</div>
															<!-- gallery-item end -->		   
                           <?php } ?> 
               					<?php } ?> 
                                                       
                            </div>
                          
                        </div>
                    </section>
                </div>
                <!-- content end --> 
            </div>
            <!-- Column wrap  end--> 
    </div>
    </div>
    <!-- wrapper end -->
<!--==================END=====================-->