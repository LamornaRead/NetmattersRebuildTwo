<?php

include ('inc/header.php');
include ('inc/connect.php');

$name = $company = $email = $telephone = $comment = $marketing =  "";
$errors = [];
$inputs = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = test_input($_POST['contact-name']);
    $company = test_input($_POST['contact-company']);
    $email = test_input($_POST['contact-email']);
    $telephone = test_input($_POST['contact-number']);
    $comment = test_input($_POST['contact-message']);
    $marketing = (isset($_POST['marketing']) and $_POST['marketing'] == true) ? true : false;

    // marketing 
    if ($marketing === true) {
        $marketing = 'accepted';
    } else {
        $marketing = 'declined';
    }
    // adding company
    if ($company === '') {
        $company = 'NA';
    }

    //validate name
    if ($name === "") {
        $errors['name'] = 'Please fill in name!';
    } else {
        $inputs['name'] = $name;
    }


    // validate email 
    if ($email === "") {
        $errors['email'] = 'Please fill in email!';
    } else {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if($email === false) {
            $errors['email'] = 'Please enter a valid email!';
        } else {
            $inputs['email'] = $email;
        }
    }

    //validate number
    if($telephone === "") {
        $errors['telephone'] = 'Please fill in telephone number!';
    } else {
        $inputs['telephone'] = $telephone;
    }

    //validate message 
    if ($comment === "") {
        $errors['message'] = 'Please fill out a message for us!';
    } else {
        $inputs['message'] = $comment;
    }

    if(count($errors) === 0 && count($inputs) >= 4) {
        $sql = "INSERT INTO messages (fullname, company, email, telephone, comment, marketing) VALUES";
        $sql .= "('$name', '$company', '$email', '$telephone', '$comment', '$marketing')";
    
        $conn->query($sql);
    
        $_POST = [] ;
      }
  }
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
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
                                <p class="phone-link"><a href="#">01603 70 40 20</a></p>
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
        
            <div id="my-form">
                <div class="container contact-section">
                    <div class="buisness-info">
                        <p class="buisness-info-text">Email us on:</p>
                        <p class="sales-email"><a href="#">sales@netmatters.com</a></p>
                        <p class="buisness-info-text">Buisness Hours:</p>
                        <p class="buisness-info-text">Monday - Friday 07:00 - 18:00</p>
                        <p class="buisness-info-text"><a class="out-of-hours" href="">Out of Hours IT Support <i class="fa-solid fa-angle-down"></a></i></p>
                        <div class="critical-support">
                            <p class="hours-text">Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                            <p>
                                <strong>Monday - Friday 18:00 - 22:00</strong>
                                <strong>Saturday 08:00 - 16:00</strong>
                                <br>
                                <strong>Sunday 10:00 - 18:00</strong>
                            </p>
                            <p class="hours-text">To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#my-form" onsubmit="return validateForm()">

                            <div class="input-box">
                                <div class="col-1">
                                    <label class="label" for="contact-name">Your Name <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
                                    <input class="input-field" id="contact-name" name="contact-name" type="text" value="<?php if(isset($_POST['contact-name'])) { echo htmlentities ($_POST['contact-name']); }?>">
                                </div>
                                <div class="col-1">
                                    <label class="label" for="contact-company">Company Name</label>
                                    <input class="input-field" id="contact-company" name="contact-company" type="text" value="<?php if(isset($_POST['contact-company'])) { echo htmlentities ($_POST['contact-company']); }?>">
                                </div>
                                <div class="col-1">
                                    <label class="label" for="contact-email">Your Email <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
                                    <input class="input-field" id="contact-email" name="contact-email" type="text" value="<?php if(isset($_POST['contact-email'])) { echo htmlentities ($_POST['contact-email']); }?>">
                                </div>
                                <div class="col-1">
                                    <label class="label" for="contact-email">Your Telephone Number <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
                                    <input class="input-field" id="contact-number" name="contact-number" type="text" value="<?php if(isset($_POST['contact-number'])) { echo htmlentities ($_POST['contact-number']); }?>">
                                </div>
                            </div>

                            <div>
                                <label class="label" for="contact-message">Message <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
                                <textarea class="input-field con-mess" name="contact-message" id="contact-message"><?php if(isset($_POST['contact-message'])) { echo htmlentities ($_POST['contact-message']); }?></textarea>
                            </div>
        

                            <div class="preference">
                                <label class="marketing-checkbox">
                                    <input class="check-box" id="send-marketing-info" name="marketing" type="checkbox" value="false" <?= $marketing ? 'checked' : '' ?> />
                                    <span class="media">Please tick this box if you wish to recieve marketing information from us. Please see our <a href="#" target="_blank">Privacy Policy</a> for more information on how we keep your data safe.</span>
                                </label>
                            </div>
                            
                            <div class="form-bottom">
                                <button class="btn btn-primary" id="send-enquiry">Send Enquiry</button>
                                <p class="require-text"><i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i> Fields required</p>
                            </div>

                            <p id="success"></p>

                            <?php 
                            
                                if(count($errors) === 0 && count($inputs) >= 4) {
                                    echo '<div class="success-box">';
                                    echo '<p class="success-message">Submit Successful!</p>';
                                    echo '</div>';
                                    
                                } else {
                                    foreach($errors as $err) {
                                        echo '<div class="error-box">';
                                        echo '<p class="error-message">' . $err . '</p>';
                                        echo '</div>';
                                    }
                                }

                            ?>
                        </form>
                    </div>
                </div>
            </div>
            

<?php

include('inc/newsletter.php');
include('inc/footer.php');


?>
