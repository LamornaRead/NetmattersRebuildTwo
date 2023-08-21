<?php

include ('inc/header.php');

?>
            <div class="page-title-container">
                <div class="container">
                    <h3 class="page-title"><span class="bold">Home</span> / Our Offices</h3>  
                </div>
            </div>

        
            <div class="title-container">
                <div class="container">
                    <h2 class="title">Our Offices</h2>
                </div>
            </div>  
       
            <!-- office locations -->
        
            <div class="office-section">
                <div class="container offices">
                    <!-- london -->
                    <div class="location">
                        <div class="border-box">
                            <div class="building-image-con">
                                <img class="building-image" src="img/buildings/london.jpg" alt="london office">
                            </div>
                            <div class="office-info">
                                <h3 class="office-name">London Office</h3>
                                <p class="office-address">
                                    Unit G6,<br>
                                    Pixel Business Centre,<br>
                                    110 Brooker Road, Waltham Abbey,<br>
                                    London,<br>
                                    EN9 1JH 
                                </p>
                                <p class="phone-link"><a href="#">02045 397354</a></p>
                                <button class="btn view-more-btn">View More</button>
                            </div>
                        </div>
                        <div>
                            <img class="map-image" src="img/buildings/london-map.png" alt="london map of office">
                        </div>
                    </div>
                    <!-- Cambridge -->
                    <div class="location">
                        <div class="border-box">
                            <div class="building-image-con">
                                <img class="building-image" src="img/buildings/cambridge.jpg" alt="cambridge office">
                            </div>
                            <div class="office-info">
                                <h3 class="office-name">Cambridge Office</h3>
                                <p class="office-address">
                                    Unit 1.31,<br>
                                    St John's Innovation Centre,<br>
                                    Cowley Road, Milton,<br>
                                    Cambridge,<br>
                                    CB4 0WS 
                                </p>
                                <p class="phone-link"><a href="#">01223 37 57 72</a></p>
                                <button class="btn view-more-btn">View More</button>
                            </div>
                        </div>
                        <div>
                            <img class="map-image" src="img/buildings/cambridge-map.png" alt="cambridge map of office">
                        </div>
                    </div>

                    <div class="location">
                        <div class="border-box">
                            <div class="building-image-con">
                                <img class="building-image" src="img/buildings/wymondham.jpg" alt="wymondham office">
                            </div>
                            <div class="office-info">
                                <h3 class="office-name">Wymondham Office</h3>
                                <p class="office-address">
                                    Unit 15,<br>
                                    Penfold Drive,<br>
                                    Gateway 11 Business Park,<br>
                                    Wymondham, Norfolk,<br>
                                    NR18 0WZ  
                                </p>
                                <p class="phone-link"><a href="#">001603 70 40 20</a></p>
                                <button class="btn view-more-btn">View More</button>
                            </div>
                        </div>
                        <div>
                            <img class="map-image" src="img/buildings/wyn-map.png" alt="wymondham map of office">
                        </div>
                    </div>

                    <div class="location">
                        <div class="border-box">
                            <div class="building-image-con">
                                <img class="building-image" src="img/buildings/yarmouth-2.jpg" alt="great yarmouth office">
                            </div>
                            <div class="office-info">
                                <h3 class="office-name">Great Yarmouth Office</h3>
                                <p class="office-address">
                                    Suite F23,<br>
                                    Beacon Innovation Centre,<br>
                                    Beacon Park, Gorleston,<br>
                                    Great Yarmouth, Norfolk,<br>
                                    NR31 7RA 
                                </p>
                                <p class="phone-link"><a href="#">01493 60 32 04</a></p>
                                <button class="btn view-more-btn">View More</button>
                            </div>
                        </div>
                        <div>
                            <img class="map-image" src="img/buildings/yar-map.png" alt="great yarmouth map of office">
                        </div>
                    </div>

                </div>
            </div>
        
            <!-- contact form -->
        
            <div>
                <div class="container contact-section">
                    <div class="buisness-info">
                        <p class="buisness-info-text">Email us on:</p>
                        <p class="sales-email"><a href="#">sales@netmatters.com</a></p>
                        <p class="buisness-info-text">Buisness Hours:</p>
                        <p class="buisness-info-text">Monday - Friday 07:00 - 18:00</p>
                        <p class="buisness-info-text">Out of Hours IT Support <i class="fa-solid fa-angle-down"></i></p>
                    </div>
                    <div class="contact-form">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <?php
                                $name = $company = $email = $telephone = $message = "";
                            ?> 
                            <div class="input-box">
                                <div class="col-1">
                                    <label class="label" for="contact-name">Your Name <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
                                    <input class="input-field" id="contact-name" class="" name="contact-name" type="text" value="">
                                </div>
                                <div class="col-1">
                                    <label class="label" for="contact-company">Company Name</label>
                                    <input class="input-field" id="contact-company" class="" name="contact-company" type="text" value="">
                                </div>
                                <div class="col-1">
                                    <label class="label" for="contact-email">Your Email <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
                                    <input class="input-field" id="contact-email" class="" name="contact-email" type="text" value="">
                                </div>
                                <div class="col-1">
                                    <label class="label" for="contact-email">Your Telephone Number <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
                                    <input class="input-field" id="contact-number" class="" name="contact-number" type="text" value="">
                                </div>
                            </div>
                    
                                <label class="label" for="contact-message">Message <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
                                <textarea class="input-field con-mess" name="contact-message" id="contact-message">Hi, I am interested in discussing a Our Offices solution, could you please give me a call or send me an email?
                                </textarea>
                            
                   
    
                            <div class="preference">
                                <div class="marketing-checkbox">
                                    <label id="checkbox"></label>
                                    <input class="check-box" id="send-marketing-info" type="checkbox" value="">
                                    <span class="media">Please tick this box if you wish to recieve marketing information from us. Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we keep your data safe.</span>
                                </div>
                            </div>
                            
                            <div class="form-bottom">
                                <button class="btn btn-primary">Send Enquiry</button>
                                <p class="require-text"><i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i> Fields required</p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            

<?php

include('inc/newsletter.php');
include('inc/footer.php');

?>