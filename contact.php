<?php

include("inc/header.php");

?>


        <div>
            <h3><strong>Home</strong> / Our Offices</h3>   
        <div>

        <div>
            <h2>Our offices</h2>
        </div>



    <!-- office locations -->

    <div>

    </div>

    <!-- contact form -->

    <div>
        <form action="">

            <label for="name">Your Name <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
            <input id="contact-name" class="" name="contact-name" type="text" value="">

            <label for="company">Company Name</label>
            <input id="contact-company" class="" name="contact-company" type="text" value="">
            
            <label for="email">Your Email <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
            <input id="contact-email" class="" name="contact-email" type="text" value="">

            <label for="number">Your Telephone Number <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
            <input id="contact-name" class="" name="contact-number" type="text" value="">

            <label for="company">Message <i class="fa-solid fa-asterisk fa-2xs" style="color: #c60500;"></i></label>
            <textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
        </form>
    </div>


<?php

include("inc/newsletter.php");
include("inc/footer.php");

?>