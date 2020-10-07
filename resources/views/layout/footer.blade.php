<!-- =============================================
							FOOTER AND CAPTION
	============================================= -->

<footer data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-md-12 social" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="200" style="text-align: center;">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="#">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            <div class="col-md-12">
                <div class="foote-details" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400">
                    <p>©NADACA 2020 <span>|</span> All Rights Reserved <span>|
                        </span> <a href="" data-toggle="modal" data-target="#disclaimer">Disclaimer</a></p>
                    <p>NADACA.ORG, 3550 N, Lakeline Blvd, Ste 170, Leander, TX 78641</p>
                    <p>Email: info@nadaca.org</p>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-12">
                    <div id="divbar" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400"></div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400">
                <div class="col-lg-6">
                    <div class="subscrbe">
                        <div class="subscrbe-container">
                            <form method="post" action="https://sendfox.com/form/3o09v3/3z0zwm" class="sendfox-form" id="3z0zwm" data-async="true"><input type="email" placeholder="Email Subscription" name="email" required />

                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="a_password" tabindex="-1" value="" autocomplete="off" /></div><button type="submit">Submit</button></form>
                            <script src="https://sendfox.com/js/form.js"></script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="captionlinks">
                        <a href="#" data-id="8EoSXrHjjk0" data-toggle="modal" data-target=".bd-example-modal-xl">JOIN NOW</a>
                        <a href="/blog" data-toggle="modal" data-target="#privacyPolicy">ARCHIVES</a>
                        <a href="#" data-toggle="modal" data-target=".contactUsModel">CONTACT US</a>
                    </div>
                </div>

            </div>

        <!--             <div class="row">
                <div class="col-lg-12">
                    <div id="divbar" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400"></div>
                </div>
            </div>

            <div class="row" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="400">
                <div class="col-lg-12">
                    <div class="foote-caption">
                        <p>©AVO Realty 2020 <span>|</span> All Rights Reserved <span>|</span> IABS <span>|</span> Texas Real Estate Commission Notice</p>
                    </div>
                </div>
            </div> -->

    </div>
</footer>

<!-- =========================================== 
                        ALL-MODELS 
    ============================================= -->

<div class="allmodel-wrapper">

    <div class="help-form modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 left">
                            <div class="wrapper">

                            <div id="validationErrors">
                                                       </div>
                            {{ Form::open(array('url' => '/help/mail', 'class' => 'mt-4 sendMail', 'name' => 'contactForm', 'files' => 'false', 'enctype' => 'multipart/form-data')) }}
                                <p>Please fill in the following information to speak with an advocate for help about your individual situation.</p>
                                <!-- if there are login errors, show them here -->
                                <div class="form-group">
                                    {{ Form::label('service', 'Service') }}
                                    {{ Form::textarea('service', Input::old('service'), array('placeholder' => '', 'class' => 'form-control customInput', 'required' => 'required' )) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('state', 'Choose a State') }}
                                    {{ Form::select('state',array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
) , 
Input::old('state'), 
array(
    'class'       => 'form-control', 'required' => 'required'
)) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('zipcode', 'Zipcode') }}
                                    {{ Form::text('zipcode', Input::old('zipcode'), array('placeholder' => '', 'class' => 'form-control customInput', 'required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('yourname', 'Your Name') }}
                                    {{ Form::text('yourname', Input::old('yourname'), array('placeholder' => '', 'class' => 'form-control customInput', 'required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('youremail', 'Your Email') }}
                                    {{ Form::text('youremail', Input::old('youremail'), array('placeholder' => '', 'class' => 'form-control customInput', 'required' => 'required')) }}
                                </div>
                                <div class="form-group">
                                    {{ Form::label('telephone', 'Telephone') }}
                                    {{ Form::text('telephone', Input::old('telephone'), array('placeholder' => '', 'class' => 'form-control customInput', 'required' => 'required')) }}
                                </div>
                                <p  id="mail-btn">{{ Form::submit('Submit', ['class' => 'btn oval-btn sendMail']) }}</p>
                                {{ Form::close() }}
                            </div>
                        </div>
                        <div class="col-md-6 right">
                            <div class="wrapper">
                                <p>Are you having difficulty repaying your credit card bills? Are you being harassed by a debt collector or attorney? Are you having any debt or credit related challenges?</p>
                                <p>An NADACAmember advocate can help you with multiple financial issues that may be causing stress to you and your loved ones. NADACA member advocates are held to strict standards, ensuring the compliance to our code of ethics and that you, the consumer, get the help you need.</p>
                                <p>All NADACA Advocatesmember referrals are experiencedand highly successfully credit and debt professionals who will prepare an analysis of your current financial situation and help you on the road to financial well-being and peace of mind.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Team One -->
    <div class="modal fade" id="teamOne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <h3>Misti Bruton</h3>
                    <p>Misti was born and raised in the Central Texas area, she grew up in a small town just west of Austin. Her small town upbringing instilled in her the importance of community and relationships. Misti found her passion for real estate
                        early in life, originally licensed in 1994. Since then, she has spent time in other industries, including pursuing a master's degree in counseling. The experiences she gained along the way have increased her appreciation and
                        compassion for others. Misti's core is built on sharing those experiences and helping others achieve their goals. She's a mom to 4, and works hard everyday to build a legacy she plans to pass on to them and generations to come.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Three -->
    <div class="modal fade" id="teamThree" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <h3>Ron Eddie</h3>
                    <p>Ron, like many Texans, did not come from Texas, but got here as soon as he could. His background goes the full spectrum from farm boy to billions dollar corporate world. Remaining constant is Ron's work ethic, integrity and enjoyment
                        of working with others to achieve a common goal. What has been truly rewarding in real estate is helping others achieve one of their major personal goals which in many cases includes finding their dream home. Ron and</p>
                    <p>AVO Realty are a perfect fit with common view of vision and purpose. AVO was born out of a vision to help others achieve their dreams. Our deepest purpose as an organization is to inspire optimism and happiness in those we come
                        in contact with every day, through creative thinking, friendly, helpful attitudes and by building relationships with our clients, team members and other business organizations. Our common mission is to seamlessly connect buyers
                        and sellers together and to bring extreme value to the home buying and selling experience.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Four -->
    <div class="modal fade" id="teamFour" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <h3>Omar Colin</h3>
                    <p>I was born and raised in Mexico City. One of my best decisions in life, was to choose San Antonio as my new home. I enjoy spending time with family and friends. Hiking, spending an evening playing board games with my kids, barbecuing
                        and drinking a glass of wine with my beautiful wife, are just some of my favorite things in life.</p>
                    <p>I have been an active member of the Hispanic Chamber of Commerce in San Antonio. This has allowed me to meet a lot of people, make great friends, be involved in the community and increase my leadership skills.</p>
                    <p>With over 18 years of experience working in high caliber luxury hotels, I have learned to provide service with high levels of excellence by paying attention to every detail and by making my goal to ensure every client is satisfied.
                        As a Director of the rooms division, I accomplished high guest satisfaction scores during many years. With this knowledge and passion to help, my clients will not only find a perfect home, but also, they will have a great experience
                        during the process.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- IABS  -->
    <div class="modal fade" id="Iabs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <h3>Information About Brokerage Services (IABS)</h3>
                    <iframe src="images/fillable-IABS.pdf" width="100%" height="600px"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Texas Real Estate Commission Notice -->
    <div class="modal fade" id="Trecn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body" style="text-align: center; text-transform: uppercase;">

                    <h3>TEXAS REAL ESTATE COMMISSION</h3>
                    <p style="font-weight: bold;"><br> P.O. BOX 12188<br> AUSTIN, TEXAS 78711-2188<br> (512) 936-3000</p>
                    <br>
                    <p>
                        THE TEXAS REAL ESTATE COMMISSION (TREC) REGULATES
                        <br>REAL ESTATE BROKERS AND SALES AGENTS, REAL ESTATE INSPECTORS,
                        <br>HOME WARRANTY COMPANIES, EASEMENT AND RIGHT-OF-WAY AGENTS AND TIMESHARE INTEREST PROVIDERS
                        <br>YOU CAN FIND MORE INFORMATION AND
                        <br>CHECK THE STATUS OF A LICENSE HOLDER AT
                        <br><a href="http://www.trec.texas.gov/" style="font-size: x-large; margin: 10px 0px 0px; display: inline-block;"><strong>WWW.TREC.TEXAS.GOV</strong></a>
                        <br>--------------------------------------------------------------------------
                        <br>YOU CAN SEND A COMPLAINT AGAINST A LICENSE HOLDER TO TREC
                        <br>A COMPLAINT FORM IS AVAILABLE ON THE TREC WEBSITE
                        <br>
                        <br>----------------------------------------------------------------------------
                        <br>TREC ADMINISTERS TWO RECOVERY FUNDS WHICH MAY BE USED TO
                        <br>SATISFY A CIVIL COURT JUDGMENT AGAINST A BROKER, SALES AGENT,
                        <br>REAL ESTATE INSPECTOR, OR EASEMENT OR RIGHT-OF-WAY AGENT,
                        <br>IF CERTAIN REQUIREMENTS ARE MET
                        <br>
                        <br>----------------------------------------------------------------------------
                        <br>
                        <br>IF YOU HAVE QUESTIONS OR ISSUES ABOUT THE ACTIVITIES OF A LICENSE HOLDER, THE COMPLAINT PROCESS OR THE RECOVERY FUNDS, PLEASE VISIT THE WEBSITE OR CONTACT TREC AT
                        <br>
                        <br>
                        <img src="images/trec-logo.png" width="150px" alt="TREC Logo">
                        <br>TEXAS REAL ESTATE COMMISSION<br> P.O. BOX 12188<br> AUSTIN, TEXAS 78711-2188<br> (512) 936-3000</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Four -->
    <div class="modal fade" id="sucessAlert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close" onclick="base_url()"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <h3 style="text-align: center;">Thank You!</h3>
                    <p id="message" style="text-align: center;">Your Form has been submitted successfully. We will be in touch soon</p>

                    <div class="teamLists" style="float: none; margin-top: 80px;">
                        <div class="team-pict"><img src="images/team/misti-bruton.jpg" alt="Misti Bruton"></div>
                        <br><br>
                        <p class="teamDetails">Discover your best life | Join our community <strong>Today</strong> <br> <br> Click below to Speak NOW or or schedule an appointment</p>

                        <a href="https://calendly.com/mistibruton" target="_blank" class="team-btn">Book Now</a>
                        <a href="tel:8442024800" class="team-btn">Call Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Four -->
    <div class="modal fade" id="failedAlert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close" onclick="base_url()"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <h3>ERROR</h3>
                    <p id="message">Your form is not submitted, please try again.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Privacy Policy -->
    <div class="modal fade" id="disclaimer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <p>NADACA does not provide legal services or advice. The information on NADACA.org is for informational purposes only and is not legal advice or a substitute for legal counsel. The information contained on NADACA.org may or may not reflect the most current legal developments. </p>
                    <p>NADACA provides links to attorneys, organizations, and governmental entities that promote justice for consumers with the mission to protect against predatory business practices. We do not intend such links or referrals to be endorsements of the linked entities.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- TOC -->
    <div class="modal fade" id="TOC" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="modal-body">
                    <h3>Terms of Use</h3>
                    <p><b>Read This Terms of Use Agreement Before Accessing Website. </b></p>
                    <p>Effective Date: This Terms of Use Agreement was last updated on March 29th, 2020.</p>
                    <p>Avovirtual is a service of AvoRealty LLC. ("AvoRealty"). This Terms of Use Agreement sets forth the standards of use of the AvoRealty Service. By using the AvoRealty service you (the "Customer") agree to these terms and conditions
                        and consent to the use and disclosure of your personally identifiable information and other practices described in our privacy policy statement. If you do not agree to the terms and conditions of this agreement and the privacy
                        policy statement, you should immediately cease all usage of the service. We reserve the right, at any time, to modify, alter, or update the terms and conditions of this agreement without prior notice. Modifications shall become
                        effective immediately upon being posted on the slydial.com website. Your continued use of the Service after amendments are posted constitutes an acknowledgment and acceptance of the Agreement and its modifications. Except as
                        provided in this paragraph, this Agreement may not be amended.</p>
                    <p>1. Description of Service</p>
                    <p>Avovirtual is a service of AvoRealty LLC (the "Service"), accessible via the phone, mobile phone, web browser, text messaging, email, links created by 3rd parties, and any 3rd party applications which incorporate the AvoRealty
                        Service via paid Application Programming Interfaces (APIs). </p>
                    <p>2. Disclaimer of Warranties</p>
                    <p>The site is provided by AvoRealty on an "as is" and on an "as available" basis. To the fullest extent permitted by applicable law, AvoRealty makes no representations or warranties of any kind, express or implied, regarding the
                        use or the results of this web site in terms of its correctness, accuracy, reliability, or otherwise. AvoRealty shall have no liability for any interruptions in the use of this Website. AvoRealty disclaims all warranties with
                        regard to the information provided, including the implied warranties of merchantability and fitness for a particular purpose, and non-infringement. Some jurisdictions do not allow the exclusion of implied warranties, therefore
                        the above-referenced exclusion is inapplicable. </p>
                    <p>3. Limitation of Liability</p>
                    <p>AvoRealty shall not be liable for any damages whatsoever, and in particular AvoRealty shall not be liable for any special, indirect, consequential, or incidental damages, or damages for lost profits, loss of revenue, or loss of
                        use, arising out of related to this web site or the information contained in it, whether such damages arise in contract, negligence, tort, under statute, in equity, at law, or otherwise, even if AvoRealty has been advised of
                        the possibility of such damages. Some jurisdictions do not allow for the limitation of exclusion of liability for incidental or consequential damages, therefore some of the above limitations is inapplicable. </p>
                    <p>4. Indemnification</p>
                    <p>Customer agrees to indemnify and hold AvoRealty, its parents, subsidiaries, affiliates, officers and employees, harmless from any claim or demand, including reasonable attorneys' fees and costs, made by any third party due to or
                        arising out of Customer's use of the Service, the violation of this Agreement, or infringement by Customer, or other user of the Service using Customer's computer, of any intellectual property or any other right of any person
                        or entity. </p>
                    <p>5. Modifications and Interruption to Service</p>
                    <p>AvoRealty reserves the right to modify or discontinue the Service with or without notice to the Customer. AvoRealty shall not be liable to Customer or any third party should AvoRealty exercise its right to modify or discontinue
                        the Service. Customer acknowledges and accepts that AvoRealty does not guarantee continuous, uninterrupted or secure access to our website and operation of our website may be interfered with or adversely affected by numerous
                        factors or circumstances outside of our control.</p>
                    <p>6. Contact Policy</p>
                    <p>Please direct all inquiries regarding Avovirtual to admin@avorealty.com or call (844) 202-4800.</p>
                    <p>7. Third-Party Sites</p>
                    <p>Our website may include links to other sites on the Internet that are owned and operated by online merchants and other third parties. You acknowledge that we are not responsible for the availability of, or the content located on
                        or through, any third-party site. You should contact the site administrator or webmaster for those third-party sites if you have any concerns regarding such links or the content located on such sites. Your use of those third-party
                        sites is subject to the terms of use and privacy policies of each site, and we are not responsible therein. We encourage all Customers to review said privacy policies of third-parties' sites.</p>
                    <p>8. Disclaimer Regarding Accuracy of Vendor Information</p>
                    <p>Product specifications and other information have either been provided by the Vendors or collected from publicly available sources. While AvoRealty makes every effort to ensure that the information on this website is accurate,
                        we can make no representations or warranties as to the accuracy or reliability of any information provided on this website.</p>
                    <p>AvoRealty makes no warranties or representations whatsoever with regard to any product provided or offered by any Vendor, and you acknowledge that any reliance on representations and warranties provided by any Vendor shall be at
                        your own risk.</p>
                    <p>9. Governing Jurisdiction of the Courts of Massachusetts</p>
                    <p>Our website is operated and provided in the State of Texas. As such, we are subject to the laws of the State Texas, and such laws will govern this Terms of Use, without giving effect to any choice of law rules. We make no representation
                        that our website or other services are appropriate, legal or available for use in other locations. Accordingly, if you choose to access our site you agree to do so subject to the internal laws of the State of Texas.</p>
                    <p>10. Compliance with Laws.</p>
                    <p>Customer assumes all knowledge of applicable law and is responsible for compliance with any such laws. Customer may not use the Service in any way that violates applicable state, federal, or international laws, regulations or other
                        government requirements. Customer further agrees not to transmit any material that encourages conduct that could constitute a criminal offense, give rise to civil liability or otherwise violate any applicable local, state,
                        national, or international law or regulation.</p>
                    <p>10. Copyright and Trademark Information</p>
                    <p>All content included or available on this site, including site design, text, graphics, interfaces, and the selection and arrangements thereof is © 2020 AvoRealty, with all rights reserved, or is the property of AvoRealty and/or
                        third parties protected by intellectual property rights. Any use of materials on the website, including reproduction for purposes other than those noted above, modification, distribution, or replication, any form of data extraction
                        or data mining, or other commercial exploitation of any kind, without prior written permission of an authorized officer of AvoRealty is strictly prohibited. Customers agree that they will not use any robot, spider, or other
                        automatic device, or manual process to monitor or copy our web pages or the content contained therein without prior written permission of an authorized officer of AvoRealty.</p>
                    <p>Avovirtuall is proprietary marks of AvoRealty. AvoRealty's trademarks may not be used in connection with any product or service that is not provided by AvoRealty, in any manner that is likely to cause confusion among customers,
                        or in any manner that disparages or discredits AvoRealty. </p>
                    <p>All other trademarks displayed on this website are the trademarks of their respective owners, and constitute neither an endorsement nor a recommendation of those Vendors. In addition, such use of trademarks or links to the web
                        sites of Vendors is not intended to imply, directly or indirectly, that those Vendors endorse or have any affiliation with MobileSphere.</p>
                    <p>11. Notification of Claimed Copyright Infringement</p>
                    <p>Pursuant to Section 512(c) of the Copyright Revision Act, as enacted through the Digital Millennium Copyright Act, AvoRealty designates the following individual as its agent for receipt of notifications of claimed copyright infringement.</p>
                    <p>By Mail </p>
                    <p>AVO Realty</p>
                    <p>12034 Research Blvd, Ste. 3 <br> Austin, TX, 78759, LLC </p>
                    <p>12. Botnets</p>
                    AvoRealty retains the right, at our sole discretion, to terminate any accounts involved with botnets and related activities. If any hostnames are used as command and control points for botnets, AvoRealty, reserves the right to direct the involved hostnames
                    to a honeypot, loopback address, logging facility, or any other destination at our discretion.</p>
                    <p>13. Other Terms</p>
                    <p>If any provision of this Terms of Use Agreement shall be unlawful, void or unenforceable for any reason, the other provisions (and any partially-enforceable provision) shall not be affected thereby and shall remain valid and enforceable
                        to the maximum possible extent. You agree that this Terms of Use Agreement and any other agreements referenced herein may be assigned by AvoRealty, in our sole discretion, to a third party in the event of a merger or acquisition.
                        This Terms of Use Agreement shall apply in addition to, and shall not be superseded by, any other written agreement between us in relation to your participation as a Customer. </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="modal fade contactUsModel" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-lg" role="document">
            <div class="modal-content">
                <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="contact-wrapper">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-details">
                                <ul>
                                    <li>
                                        <div class="formlogo">
                                            <img src="images/avo-logo.png" alt="AVO Logo">
                                        </div>
                                    </li>
                                    <li>
                                        <span>EMAIL</span> Concierge@avorealty.com
                                    </li>
                                    <li>
                                        <span>PHONE</span> (844) 202-4800
                                    </li>
                                    <li>
                                        <span>ADDRESS</span> AVO Realty, 12034 Research Blvd, Ste. 3 Austin, TX, 78759
                                    </li>
                                    <li>
                                        <span>WEBSITE</span> avovirtual.com
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="form-pannel">
                                <h2>We'd love to hear from you!</h2>
                                <p>Kindly submit your details, we will get back to you shortly.</p>

                                <!-- FORM START -->
                                <div class="contactFrom">
                                    <div class="row">
                                        <form name="leadform" method="post" action="send_form_email.php">
                                            <div class="form-group col-md-6 fieldone">
                                                <input type="test" class="form-control" id="first_name" name="first_name" placeholder="First Name" required>
                                            </div>
                                            <div class="form-group col-md-6 fieldtwo">
                                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                                            </div>
                                            <div class="form-group col-md-6 fieldthree">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            </div>
                                            <div class="form-group col-md-6 fieldfour">
                                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Phone" required>
                                            </div>
                                            <div class="form-group col-md-12 fieldfive">
                                                <textarea style="resize: none;" class="form-control" rows="3" id="details" name="details" placeholder="Message" required></textarea>
                                            </div>
                                            <div class="form-group col-md-12"><button type="submit" class="btn btnsubmit">LET'S GO!</button></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- FORM ENDS -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Agent Model -->
    <div class="modal fade" id="agentModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="modal-header close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 id="myModalLabel" class="semi-bold">AVO Virtual Promo</h4>
                </div>
                <div class="modal-body">
                    Modal Content
                </div>
            </div>
        </div>
    </div>




</div>
<!-- ModelEnds -->