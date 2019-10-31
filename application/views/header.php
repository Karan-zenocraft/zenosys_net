    <header class="Header">
        <div class="container">
            <div class="row">

                <div class="col-md-12 d-flex align-items-center HeaderInner">
                    <div class="Logo">
                        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" class="img-fluid"></a>
                    </div>

                    <!--
                    <nav class="HeaderNav">
                        <ul class="d-flex align-items-center justify-content-center">
                            <li data-toggle="collapse" data-target="#a1"><a href="#" >Solutions</a>
                            <ul id="a1" class="collapse">
                            <li data-toggle="collapse" data-target="#a2"><a>Enterprise Applications</a>
                                <ul id="a2" class="collapse">
                                <li><a href="">Emerging Technologies</a></li>
                            <li><a href="">Application Development</a></li>

                            </ul>


                            </li>
                            <li><a href="">Emerging Technologies</a></li>
                            <li><a href="">Application Development</a></li>
                            <li><a href="">Quality Engineering</a></li>
                            <li><a href="">Advance Analytics & Big Data</a></li>
                            <li><a href="">Cognitive TeChnologies</a></li>
                            <li><a href="">Managed Services</a></li>
                            <li><a href="">Mobile & Wireless</a></li>

                            </ul>


                            </li>
                            <li data-toggle="collapse" data-target="#demo1"><a href="#">Products</a>

                            <ul id="demo1" class="collapse">
                            <li><a href="">Company Profile</a></li>
                            <li><a href="">Our Process</a></li>
                            <li><a href="">Our Journey So Far</a></li>
                            <li><a href="">Team Engagements</a></li>
                            <li><a href="">We’re Hiring</a></li>
                            </ul>
                            </li>
                            <li><a href="">Engagement Models</a></li>
                            <li><a href="">Industries</a></li>
                            <li><a href="">Company</a></li>
                            <li><a href="">Careers</a></li>
                            <li><a href="">Contact Us</a></li>
                        </ul>
                    </nav>
-->


                    <nav class="HeaderNavigation">
                        <label for="drop" class="toggle Menubar">&#8801; Menu</label>
                        <input type="checkbox" id="drop" />


<!--
                <span class="Menu toggle" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                </span>
-->
                        <ul class="menu">
                            <li>

                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle">Solutions </label>
                                <a href="#" class="a arrow">Solutions</a>
                                <input type="checkbox" id="drop-2" />

<!-- this is for mobile device
      <ul class="InnerMenu InnerMenu2 InnerMenu3">


        <li>


          <label for="drop-3" class="toggle">Works </label>
          <a href="#">Works</a>
          <input type="checkbox" id="drop-3"/>
          <ul class="InnerDropdown onlysm">
            <li><a href="#">HTML/CSS</a></li>
            <li><a href="#">jQuery</a></li>
            <li><a href="#">Python</a></li>
          </ul>
        </li>









      </ul>
-->


        <ul class="OnlyMobile">

        <li>

          <!-- Second Tier Drop Down -->
          <label for="drop-3" class="toggle">Works +</label>
          <a href="#">Works</a>
          <input type="checkbox" id="drop-3"/>
          <ul>
            <li><a href="#">HTML/CSS</a></li>
            <li><a href="#">jQuery</a></li>
            <li><a href="#">Python</a></li>
          </ul>
        </li>
      </ul>

                                <ul class="InnerMenu InnerMenu2 InnerMenu3 Onlylg">
                                    <div class="Row">
                                    <div class="col-md-3 p-0">
                                    <label>Enterprise Applications</label>

                                    <li><a href="#">Oracle eBusiness Suite</a></li>
                                    <li><a href="#">SAP-S/4HANA / ECC</a></li>
                                    <li><a href="#">Odoo / Oracle Apex</a></li>


                                        </div>

                                    <div class="col-md-3 p-0">
                                    <label>Emerging Technologies</label>

                                    <li><a href="#">Internet Of Things</a></li>
                                    <li><a href="#">Block-Chain Technologies</a></li>
                                    <li><a href="#">Augmented Reality & Virtual Reality</a></li>


                                        </div>


                                    <div class="col-md-3 p-0">
                                    <label>Application Development</label>

                                    <li><a href="#">Custom Application Development</a></li>
                                    <li><a href="#">Application Integration</a></li>
                                    <li><a href="#">Legacy Application Transformation</a></li>


                                        </div>



                                        <div class="col-md-3 p-0">
                                    <label>Quality Engineering</label>

                                    <li><a href="#">Functional Engineering</a></li>
                                    <li><a href="#">Automation</a></li>
                                    <li><a href="#">Performance Engineering</a></li>


                                        </div>
                                        </div>




                                    <div class="Row">

                                    <div class="col-md-3 p-0">
                                    <label>COGNITIVE TECHNOLOGIES</label>

                                    <li><a href="#">Machine Learning</a></li>
                                    <li><a href="#"> Data Science</a></li>
                                    <li><a href="#">Deep Learning Technologies</a></li>
                                    <li><a href="#">Artificial Intelligence</a></li>
                                    <li><a href="#">Predictive Analytics</a></li>

                                        </div>



                                    <div class="col-md-3 p-0">
                                    <label>Advance Analytics & Big Data</label>

                                    <li><a href="#">Business Intelligence</a></li>
                                    <li><a href="#">SAP Cloud Analytics</a></li>
                                    <li><a href="#">Data Quality Management</a></li>
                                    <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>
                                    <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>


                                        </div>





                                        <div class="col-md-3 p-0">
                                    <label>MANAGED SERVICES</label>

                                    <li><a href="#">Application Management Services</a></li>
                                    <li><a href="#">Infrastructure Management Services</a></li>
                                    <li><a href="#">Database Management Services</a></li>
                                    <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>
                                    <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>

                                        </div>




                                        <div class="col-md-3 p-0">
                                    <label>Staffing Services</label>

                                    <li><a href="#">MSP (Mange Staffing Provider)</a></li>
                                    <li><a href="#">Consulting Work Force</a></li>
                                    <li><a href="#">Permanent Placement</a></li>
                                    <li><a href="#">Hybrid Model</a></li>
                                <li style="visibility: hidden"><a href="#">Data Quality Management</a></li>
                                        </div>
                                        </div>
                                </ul>



<!--
                                <ul class="InnerMenu InnerMenu2 InnerMenu3">

                                    <label>list</label>
                                    <li><a href="">one</a></li>
                                    <li><a href="">one</a></li>
                                    <li><a href="">one</a></li>


                                </ul>
-->



                            </li>
                            <li>
                                <!-- First Tier Drop Down -->
                                <label for="drop-1" class="toggle">Products </label>
                                <a href="#" class="a arrow">Products</a>
                                <!--      <input type="checkbox" id="drop-1"/>-->
                                <ul class="InnerMenu InnerMenu2">
                                    <li><a href="#">Ship From Store</a></li>
                                    <li><a href="#">Route Optimization</a></li>
                                    <li><a href="#">Market Intelligence</a></li>
                                    <li><a href="#">Image & Video analytics</a></li>
                                    <li><a href="#">Visual Quality Control</a></li>
                                    <li><a href="#">Ad Recommendation</a></li>
                                    <li><a href="#">Image Captioning</a></li>
                                    <li><a href="#">Text Analytics</a></li>
                                </ul>
                            </li>
                            <li>

                                <!-- First Tier Drop Down -->
                                <label for="drop-2" class="toggle">Engagement Models </label>
                                <a href="#" class="a arrow">Engagement Models</a>
                                <input type="checkbox" id="drop-2" />
                                <ul class="InnerMenu InnerMenu2">
                                    <li><a href="<?php echo base_url(); ?>models/onshore">Onshore Model</a></li>
                                    <li><a href="<?php echo base_url(); ?>models/bot">BOT Model Turnkey Model</a></li>
                                    <li><a href="<?php echo base_url(); ?>models/offshore">Offshore Model</a></li>
                                    <li><a href="<?php echo base_url(); ?>models/hybrid">Hybrid Model</a></li>

<!--
                                    <li>


                                        <label for="drop-3" class="toggle">Works </label>
                                        <a href="#">Works</a>
                                        <input type="checkbox" id="drop-3" />
                                        <ul>
                                            <li><a href="#">HTML/CSS</a></li>
                                            <li><a href="#">jQuery</a></li>
                                            <li><a href="#">Python</a></li>
                                        </ul>
                                    </li>
-->
                                </ul>
                            </li>
                            <li><a href="#" class="a">Industries</a></li>
                            <li><a href="<?php echo base_url(); ?>company" class="a">Company</a></li>
                            <li><a href="#" class="a">Careers</a></li>
                            <li><a href="#" class="a">Contact Us</a></li>
                        </ul>




<!--
                        <ul class="menu onlyMobile">
    <li><a href="#">Home</a></li>
    <li>

      <label for="drop-1" class="toggle">Service +</label>
      <a href="#">Service</a>

      <ul>
        <li><a href="#">Service 1</a></li>
        <li><a href="#">Service 2</a></li>
        <li><a href="#">Service 3</a></li>
      </ul>
    </li>
    <li>


      <label for="drop-2" class="toggle">Portfolio +</label>
      <a href="#">Portfolio</a>
      <input type="checkbox" id="drop-2"/>
      <ul>
        <li><a href="#">Portfolio 1</a></li>
        <li><a href="#">Portfolio 2</a></li>
        <li>


          <label for="drop-3" class="toggle">Works +</label>
          <a href="#">Works</a>
          <input type="checkbox" id="drop-3"/>
          <ul>
            <li><a href="#">HTML/CSS</a></li>
            <li><a href="#">jQuery</a></li>
            <li><a href="#">Python</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Submit</a></li>
    <li><a href="#">Contact</a></li>
    <li><a href="#">About</a></li>
  </ul>
-->
                    </nav>




                    <!--
                <span class="Menu" onclick="myFunction(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
                </span>
-->

                </div>
            </div>
        </div>

    </header>

    <section class="Slider">
        <div class="container-fluid">


            <div class="col-md-12 p-0 SliderInner">

                <img src="<?php echo base_url(); ?>assets/images/zmain.png" alt="" class="img-fluid SliderImg">
                <img src="<?php echo base_url(); ?>assets/images/zmain-sm.png" alt="" class="img-fluid SliderImg OnlySm">
                <div class="Caption">
                    <div class="CaptionBlock Bg-Dark">
                        <h1 class="TitleH1">Dedicated </h1>
                        <h1 class="TitleH1">Development Team <span class="typed-cursor">|</span> </h1>
                    </div>
                    <p>Professional a certified dedicated team in <br>
                        PHP, Java, .Net application development.</p>

                </div>
            </div>
        </div>
    </section>
