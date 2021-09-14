<?php
if(!empty($_POST["send"])) {
	$name = $_POST["FullName"];
	$email = $_POST["Email"];
	$content = $_POST["message"];

	$toEmail = "lokeshgurung889@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <header>
        <img src="media/image/logo.jpg" alt="Logo" class="logo">
        <div class="moto">
            <h3>CareerGro Australia</h3> <br>
            <h4> 
                Plan For Better Future <br> 
                Educational Consultants
            </h4>
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="ae.php">Australian Education</a>
            <a href="ea.php">Educational Agents</a>
            <a class="active" href="contact.php">Contact</a>
        </nav>


    </header>

    <div class="main">
       
        <img class="gallery" src="media/image/gallery/Sydney.jpg" alt="">
        <div class="text">
            We do things differently! <br>
            <a href="contact.php">Get in touch today</a>
        </div>
        
    </div>




    <div class= "contact">
        <div class="contact-presentation">
            <div class="contact-title">
    
                <h1>Get in Touch </h1>
                <p>Got a question? We would love to hear from you and
                    we’ll respond as soon as possible.</p>
            </div>
            <div class="contact-form" >
                                <form id= "clear" action="https://formspree.io/laxmisapkotachhetri@students.federation.edu.au"
                              method="POST">
                                <input type="text" class="name" placeholder="Your Name" id="name" name="name">
                                <div class="statusN"></div>
                                <input type="text" class="subject" placeholder="Subject of Your Enquiry" id="subject" name="subject">
                                <div class="statusS"> </div>
                                <input type="text" class="email" placeholder="Your Email Address" id="email" name="email">
                                <div class="statusE"> </div>
                                <textarea name="message" class="message" id="message" placeholder="Message" style="height: 100px; font-size: 16px" ></textarea>
                                <div class="statusM"> </div>
                                <button type="submit" class="submit">Submit</button>
                            </form>
                    <div class="status"></div>
            </div>
    </div>
    <div class="contact-details">
        <div class="contact-content">
            <h1>Contact Us</h1>
            <p></p>
        </div>

        <div class = "contact-container">
            <div class = "contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>1 Nicolas Street, Keysborough,<br> VIC 3713, Australia</p>
                    </div> 
                </div>
                
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>0431 531 697</p>
                    </div>

                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Careergroaustralia@gmail.com</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    


<div class ="ContactForm">
    <form id="contactphp" method="post" action="contact.php">
        <h2>Message</h2>

        <div class ="inputBox">
            <input type="text" name="FullName" required="required">
            <span>Full Name</span>
    </div>

    <div class ="inputBox">
                <input type="text" name="Email" required="required">
                <span>Email</span>
    </div> 

    <div class ="inputBox">
                <textarea name ="Message" required = "required"></textarea>
                <span>Type your message</span>
    </div>

    <div class ="inputBox">
                <input type="submit" name="" value="send">
            
    </div>
    </form>

    </div>




=======
    </div>

>>>>>>> 7158913b6ddcd2fa6aa49c648588e5f5fb7851a0
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>CarrerGro Australia</h4>
                    <ul>
                    <li><a href="index.php">home</a></li>
                        <li><a href="about.php">about us</a></li>
                        <li><a href="ea">educational agent</a></li>
                        <li><a href="ae"> Australian education</a></li>
                        <li><a href="contact"> contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-touch">
                    <h4>Get in touch with us</h4>
                    <ul>
                    <li>Career Gro Australia</li>
                        <li>1 Nicolas Street, Keysborough, VIC 3713, Australia.</li>
                        <li>0431 531 697</li>
                        <li> Australian education</li>
                        <li>careergroaustralia@gmail.com</li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <a href="#">Copyright Info</a>
            </div>
        
  </footer>
        
</body>
<!-- importing jquery to run the JS code -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script>
/*contact form validation */
var name = null;
var subject = null;
var email = null;
var message = null;

window.onload = function() {
  document.getElementById("clear").reset();
};
$(document).ready(function() {
  $(".submit").click(function(event) {
    var name = $(".name").val();
    var subject = $(".subject").val();
    var email = $(".email").val();
    var message = $(".message").val();

    var statusN = $(".statusN");
    var statusS = $(".statusS");
    var statusE = $(".statusE");
    var statusM = $(".statusM");
    var status = $(".status");
    statusN.empty();
    statusE.empty();
    statusS.empty();
    statusM.empty();

    if (name.length < 3) {
      event.preventDefault();
      statusN.append(
        "<div>&#9888 Name usually has more characters</div>"
      );
    }

    if (email.length > 5 && email.includes("@") && email.includes(".")) {
    } else {
      event.preventDefault();
      statusE.append("<div>&#9888 Email is not valid</div>");
    }

    if (subject.length <= 2) {
      event.preventDefault();
      statusS.append("<div>&#9888 Subject is not valid</div>");
    }
    if (message.length <= 5) {
      event.preventDefault();
      statusM.append(
        "<div>&#9888 Please enter a valid message</div>"
      );
    }
  });
});
</script>

</html>
