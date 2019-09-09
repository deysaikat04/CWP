<!-- Footer -->
<section>
    <div class="footer-bottom">
        <div class="container">
            <div class="row pt40">
                <div class="col-md-12">
                    <ul class="info">
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                        <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                        <li><a href="<?php echo base_url(); ?>faqs">FAQs</a></li>
                        <li><a href="<?php echo base_url(); ?>privacy">Privacy</a></li>
                        <li><a href="<?php echo base_url(); ?>terms">Terms</a></li>
                    </ul>
                </div>
            </div>
            <hr class="style-three">
            <div class="row ">
                <div class="col-md-12">
                    <ul>
                        <li><span class="footer_lable">Email :</span><span class="footer_data">info.cwpkolkata@gmail.com</span></li>
                    </ul>
                    <ul>
                        <li><span class="footer_lable">Phone :</span><span class="footer_data">+91 8013099620,</span> <span class="footer_data"> +91 9903134929</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.footer-bottom-->
    <div class="footer-bottom2">
        <div class="container">
            <span class="footer_data">Copyright © Candid Wedding Photography <script>document.write((new Date()).getFullYear());</script>. All right reserved.</span>
        </div>
    </div>
    <div class="footer-bottom3">
        <div class="container">
            <span class="footer_credit">Crafted with <span><i class="fa fa-heart fa-lg" aria-hidden="true"></i></span> by 
                <a href="http://ghostcatstudio.cf" target="_blank" >GhostCat Studio.</a>
            </span>

        </div>
    </div> 
    <!--/.footer-bottom-->
</section>
<script src="<?php echo base_url(); ?>assets/js/plugins.js" type="text/javascript">
</script>
<script src="<?php echo base_url(); ?>assets/js/core.js">
</script>
<script src="<?php echo base_url(); ?>assets/js/cwp.js">
</script><!-- scripts end -->


<!-- slider script starts-->
<!-- RS5.0 Core JS Files -->
<script src="<?php echo base_url(); ?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- RS5.0 Init  -->
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery(".materialize-slider").revolution({
            sliderType:"standard",
            sliderLayout:"fullscreen",
            delay:4000,
            navigation: {
                keyboardNavigation:"off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                onHoverStop:"off",
                /*arrows: {
                    style:"hebe",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                   tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div>    <div class="tp-arr-img-over"></div> <span class="tp-arr-titleholder">{{title}}</span> </div>',
                    left: {
                        h_align:"left",
                        v_align:"center",
                        h_offset:30,
                        v_offset:0
                    },
                    right: {
                        h_align:"right",
                        v_align:"center",
                        h_offset:30,
                        v_offset:0
                    }
                }*/
            },
            responsiveLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[700,600,500,500],
            parallax: {
                type:"mouse",
                origo:"slidercenter",
                speed:2000,
                levels:[2,3,4,5,6,7,12,16,10,50],
            },

        });
    });
</script>

<!--********************************** count starts*************************-->
<!-- Waypoints -->
<script src="<?php echo base_url(); ?>assets/js/js/jquery.waypoints.min.js"></script>
<!-- countTo -->
<script src="<?php echo base_url(); ?>assets/js/js/jquery.countTo.js"></script>
<!-- Main -->
<script src="<?php echo base_url(); ?>assets/js/js/main.js"></script>
<!--********************************** count ends*************************-->

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->

<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

<!-- owl-corousel -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/owl-carousel/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/owl-carousel/js/custom.js"></script>


</body>
</html>