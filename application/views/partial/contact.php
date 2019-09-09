<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function validateEmail(sEmail) {
        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (filter.test(sEmail)) {
            return false;
        }
        else {
            return true;
        }
    }
    function onSubmit(){
        var name = $('.name').val();
        var phone = $('.phone').val();
        var email = $('.email').val();
        var date = $('.date').val();
        var type = $('.type').find(":selected").text();;
        var service = $('.service').find(":selected").text();;
        var location = $('.location').val();
        var err = false;
        if(name === '') {
            err = true;
            $('.name_warning').show();
        } else if(phone === '') {
            err = true;
            $('.phone_warning').show();
        } else if(email === '') {
            err = true;
            $('.email_warning').show();
        } else if(date === '') {
            err = true;
            $('.date_warning').show();
        } else if(type === 'Choose...') {
            err = true;
            $('.type_warning').show();
        } else if(service === 'Choose...') {
            err = true;
            $('.service_warning').show();
        } else if(location === '') {
            err = true;
            $('.location_warning').show();
        } else {
           if (validateEmail(email)) {
                err = true;
                $('.emailVal_warning').show();
            }
        }
        if(err) {
        } else {
            $("#i-recaptcha").submit();
        }    
    }
</script>
<div id="main">
        <!--=============== wrapper ===============-->
        <div id="wrapper" class="mt50">
            <!--=============== content-holder ===============-->
            <div class="content-holder scale-bg2">
              <div class="container-fluid main_background">
                   <section class="section">                    
                        <div class="row">
                          <div class="col-md-12 col-sm-12 contact_black ">                              
                            <div class="col-md-5 col-sm-12  col-lg-5 custom_form visconform pull-right" id="contact-form">
                            <!-- Srccess MSG -->
                            <?php if ($this->session->flashdata('succ') === 'true') {?>
                            <div class="alert alert-success alert-dismissible show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Thank You!</strong> Your query has been submited. We'll get back to you shortly.
                            </div>
                            <?php } ?>
                            <!-- ERROR MSG -->
                            <?php if ($this->session->flashdata('vErr') === 'true') {?>
                            <div class="alert alert-danger alert-dismissible show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error!</strong> Your query couldn't be submited. Please try again later.
                            </div>
                            <?php } ?>
                            <div class="section-title indark">
                                <h2>Contact Us</h2>
                            </div>
                            <form action="<?php echo base_url();?>Page_Controller/feedback" method="POST" id="i-recaptcha">
                                <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group">
                                            <label for="">Name <span class="required">*</span></label>
                                            <input type="text" class="name" name="name" required>
                                            <span class="text-danger name_warning">This field is required!</span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="form-group">
                                            <label for="">Email <span class="required">*</span></label>
                                            <input type="text" class="email" name="email">
                                            <span class="text-danger email_warning">This field is required!</span>
                                            <span class="text-danger emailVal_warning">Invalid email provided!</span>
                                        </div>        
                                   </div>
                               </div>
                                <div class="form-group">
                                    <label for="">Phone <span class="required">*</span></label>
                                    <input type="text" class="phone" name="phone">
                                    <span class="text-danger phone_warning">This field is required!</span>
                                </div>
                                <div class="form-group">
                                    <label for="">Event Date <span class="required">*</span></label>
                                    <input type="text" class="date" name="date">
                                    <span class="form_helper">Please enter the date in (DD-MM-YYYY) format.</span>
                                    <span class="text-danger date_warning">This field is required!</span>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Event Type <span class="required">*</span>
                                            <span class="text-danger type_warning"> This field is required!</span></label>
                                            <select class="type" name="type">
                                                <option value="default">Choose...</option>
                                                <option value="Wedding">Pre Wedding</option>
                                                <option value="Engagement">Engagement</option>
                                                <option value="Portrait">Wedding</option>
                                                <option value="Family">Post Wedding</option>
                                                <option value="Family">Rice Ceremony / Baby Shoot</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Interested Services <span class="required">* </span>
                                            <span class="text-danger service_warning"> This field is required!</span></label>
                                            <select class="service" name="service">
                                                <option value="Choose...">Choose...</option>
                                                <option value="Photo and Cinema">Photo and Cinema</option>
                                                <option value="Photo Only">Photo Only</option>
                                                <option value="Cinema Only">Cinema Only</option>
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Event Location <span class="required">*</span></label>
                                            <input type="text" class="location" name="location">
                                            <span class="text-danger location_warning">This field is required!</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Additional Remark </label>
                                    <textarea name="remark" cols="3" rows="6" name="remark"></textarea>
                                </div>
                                <div class="text-center pb-10">
                                    <button id="submitBtn" type="button" class="g-recaptcha" data-sitekey="6LdVpkAUAAAAALWm8RUt3mFDca6HqQ-SmoLv79bJ" data-callback="onSubmit">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div> 
                        <!-- contact form left ends -->  
                          </div> 
                        </div>                   
                    </section>  
                </div>
                <div class="container-fluid" style="padding: 0px">
                    <div class="row">                    
                        <div class="col-md-12 mb-50">
                            <!-- <div class="section-title">
                                <h2>Map</h2>
                            </div> -->
                            <!-- <div id="map"></div> -->
                            <div class="">
                            <iframe width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJz07UbUB4AjoReUliDUBB_bE&key=AIzaSyBB8__0aZM-yFU8LSYmMVeNgYVmErhc-sQ" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- map holder end-->
            
        </div>
        <!-- content-holder end -->
        
    </div>
    <!-- wrapper end -->
    