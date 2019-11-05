        <div class="container">
             <div class="slick-carousel row WhyZenosysInner d-flex align-items-center align-items-center">
                <div>
                    <div class="slide-content col-md-12 WhyZenosysInnerBox">
                    <img src="<?php echo base_url(); ?>assets/images/icon1.png" alt="" class="img-fluid">
                    <h6 class="TitleH6">RESPONSIBILITY</h6>
                    <p>Equipped with industry's leading page
                        builder & admin panel. With lifetime
                        support for any questions</p>

                </div>
                </div>
                <div>
                    <div class="slide-content col-md-12 WhyZenosysInnerBox">

                    <img src="<?php echo base_url(); ?>assets/images/icon2.png" alt="" class="img-fluid">

                    <h6 class="TitleH6">COMMITMENT</h6>
                    <p>Bunch of styles, features, elements &
                        samples give you an absolute design
                        freedom in creating webpages</p>
                </div>
                </div>
                <div>
                    <div class="slide-content col-md-12 WhyZenosysInnerBox">
                    <img src="<?php echo base_url(); ?>assets/images/icon3.png" alt="" class="img-fluid">

                    <h6 class="TitleH6">TEAM WORK</h6>
                    <p>With Scalia you will make beautiful
                        pixel perfect pages, with every element
                        precisely positioned</p>

                </div>
                </div>
                <div>
                    <div class="slide-content col-md-12 WhyZenosysInnerBox">
                    <img src="<?php echo base_url(); ?>assets/images/icon4.png" alt="" class="img-fluid">

                    <h6 class="TitleH6">INNOVATION</h6>
                    <p>Scalia is future-proof best-of-breed
                        premium theme with unlimited styling
                        customization options</p>

                </div>
                </div>


            </div>


            <div class="row">
                <div class="col-md-6 ContactBox WhyZenosysContent">
                    <h2 class="TitleH2">SEND US A MESSAGE</h2>


<!--
                    <form method="POST" id="registration" novalidate="novalidate" name="registration">
                <input type="hidden" name="_token" value="bhNpBNW6C2dpC7wQfP17HpZIaasphaPpiXx47cP7">
                <div class="group">
                    <input type="text" name="your_name" required="" aria-required="true">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="form-label"><sup class="top-new-text"><i class="fa fa-asterisk" aria-hidden="true"></i>
                    </sup>Your Name
                    </label>
                </div>
                <div class="group">
                    <input type="email" name="emailid" required="" aria-required="true">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="form-label"><sup class="top-new-text"><i class="fa fa-asterisk" aria-hidden="true"></i>
                    </sup>Your Email</label>
                </div>
                <div class="group">
                    <input type="number" name="subject" required="" aria-required="true" maxlength="10" minlength="10">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="form-label"><sup class="top-new-text"><i class="fa fa-asterisk" aria-hidden="true"></i>
                    </sup>Subject</label>
                </div>
                <div class="group">
                    <input type="text" name="message" required="" aria-required="true">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="form-label"><sup class="top-new-text"><i class="fa fa-asterisk" aria-hidden="true"></i>
                    </sup>Your Message</label>
                </div>




                        <div>
                        <div class="form-group captcha">
                            <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="">
                        <a type="submit" name="submit" value="submit" class="SendBtn">Send</a>
                        </div>

                            </div>
            </form>
-->


 <?php if (!empty($status)) {?>
    <div class="status <?php echo $status['type']; ?>"><?php echo $status['msg']; ?></div>
    <?php }?>

                   <form method="POST" id="contact" novalidate="novalidate" name="contact">
                <input type="hidden" name="_token" value="bhNpBNW6C2dpC7wQfP17HpZIaasphaPpiXx47cP7">
                <div class="group">
                    <input type="text" name="name" required="" aria-required="true" value="<?php echo !empty($postData['name']) ? $postData['name'] : ''; ?>">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="form-label"><sup class="top-new-text"><i class="fa fa-asterisk" aria-hidden="true"></i>
                    </sup>Name
                    </label>
                    <?php echo form_error('name', '<p class="field-error error ">', '</p>'); ?>
                </div>
                <div class="group">
                    <input type="email" name="email" required="" aria-required="true" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="form-label"><sup class="top-new-text"><i class="fa fa-asterisk" aria-hidden="true"></i>
                    </sup>Email Id</label>
                    <?php echo form_error('email', '<p class="field-error error">', '</p>'); ?>
                </div>
                <div class="group">
                    <input type="text" name="subject" required="" aria-required="true" value="<?php echo !empty($postData['subject']) ? $postData['subject'] : ''; ?>">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="form-label"><sup class="top-new-text"><i class="fa fa-asterisk" aria-hidden="true"></i>
                    </sup>Subject</label>
                    <?php echo form_error('subject', '<p class="field-error error">', '</p>'); ?>
                </div>
                <div class="group">
                    <input type="text" name="message" required="" aria-required="true" value="<?php echo !empty($postData['message']) ? $postData['message'] : ''; ?>">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label class="form-label"><sup class="top-new-text"><i class="fa fa-asterisk" aria-hidden="true"></i>
                    </sup>Message</label>
                    <?php echo form_error('message', '<p class="field-error error">', '</p>'); ?>

                </div>

                        <div class="form-group captcha">
                            <div class="g-recaptcha" data-sitekey="6LdtG8EUAAAAAOPhY_b0YK_QZ6TTkZ9ImOKUcC30" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>

                        <button name="contactSubmit" class="SendBtn" value="Validate">SEND</button>


            </form>
                </div>
                <div class="col-md-6 ContactBox WhyZenosysContent LocationBox">
                    <div class="row">
                    <h2 class="TitleH2">OFFICE/DEVELOPMENT CENTERS</h2>
                    </div>
                    <div class="row">
                    <div class="col-md-6">

                   <div class="LocationBoxs">
                       <img src="<?php echo base_url(); ?>assets/images/location1.jpg" alt="" class="rounded-circle">
                       <h3 class="TitleH3">USA Office</h3>
                       <p>3084 State Route 27, Suite 12, Kendall Park,NJ 08824, USA</p>
                       <a href="tel:+1 7329674783" class="Phone">+1 7329674783</a>
                        <a href="mailto:test@zenosys.net"><i class="fa fa-envelope"></i> test@zenosys.net</a>
                    </div>

                    </div>


                    <div class="col-md-6">

                   <div class="LocationBoxs">
                       <img src="<?php echo base_url(); ?>assets/images/location2.jpg" alt="" class="rounded-circle">
                       <h3 class="TitleH3">India Office</h3>
                       <p>22, Second Floor, Magnet Corporate Park S.G Road, Ahmedabad-380054</p>
                       <a href="tel:+1 7329674783" class="Phone">+91 7447389292</a>
                        <a href="mailto:test@zenosys.net"><i class="fa fa-envelope"></i> mail@zenocraft.com</a>
                    </div>


                    </div>
                    </div>



                    <div class="row CustomeRow">
                    <div class="col-md-6">

                   <div class="LocationBoxs">
                       <img src="<?php echo base_url(); ?>assets/images/location1.jpg" alt="" class="rounded-circle">
                       <h3 class="TitleH3">USA Office</h3>
                       <p>103 Carnegie Center, Suite 300 Princeton, New Jersey 08540, USA</p>
                       <a href="tel:+1 7329674783" class="Phone">+1 732 967 4783</a>
                        <a href="mailto:test@zenosys.net"><i class="fa fa-envelope"></i> test@zenosys.net</a>
                    </div>

                    </div>


                    <div class="col-md-6">

                   <div class="LocationBoxs">
                       <img src="<?php echo base_url(); ?>assets/images/location1.jpg" alt="" class="rounded-circle">
                       <h3 class="TitleH3">Canada Office</h3>
                       <p>10665 Jasper Avenue, 14th Floor, Edmonton, Alberta, T5J 3S9, Canada</p>
                       <a href="tel:+1 7329674783" class="Phone">+91 7447389292</a>
                        <a href="mailto:test@zenosys.net"><i class="fa fa-envelope"></i> mail@zenocraft.com</a>
                    </div>


                    </div>
                    </div>

                 </div>

            </div>



        </div>
