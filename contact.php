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
                                <form id= "customer-form" action="https://formspree.io/f/mvodljak"
                              method="POST">
                                <input type="text" class="name" placeholder="Your Name" id="name" name="name">
                                <div class="statusN"></div>
                                <input type="text" class="subject" placeholder="Subject of Your Enquiry" id="subject" name="subject">
                                <div class="statusS"> </div>
                                <input type="text" class="email" placeholder="Your Email Address" id="email" name="email">
                                <div class="statusE"> </div>
                                <textarea name="message" class="message" id="message" placeholder="Message" style="height: 100px; font-size: 14px" ></textarea>
                                <div class="statusM"> </div>
                                <button type="submit" class="submit">Submit</button>
                            </form>
                            <br>
                    <div id="status"></div>
                    <br>
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
    </div>

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

window.onload = function() {
  document.getElementById("customer-form").reset();
};

/*contact form validation */
var name = null;
var subject = null;
var email = null;
var message = null;

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
    // var status = $(".status");
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

/*contact form sucess status*/
window.addEventListener("DOMContentLoaded", function () {
  // get the form elements defined in contact form

  var form = document.getElementById("customer-form");
  var status = document.getElementById("status");

  // Success and Error functions for after the form is submitted

  function success() {
    window.setTimeout(function(){location.reload()},10000);
    status.classList.add("success");
    status.innerHTML = "Thanks! Form Submitted Successfully";
  }

  function error() {
    status.classList.add("error");
    status.innerHTML = "Oops! There was a problem.";
  }

  // handle the form submission event

  form.addEventListener("submit", function (ev) {
    ev.preventDefault();
    var data = new FormData(form);
    ajax(form.method, form.action, data, success, error);
  });
});

// helper function for sending an AJAX request

function ajax(method, url, data, success, error) {
  var xhr = new XMLHttpRequest();
  xhr.open(method, url);
  xhr.setRequestHeader("Accept", "application/json");
  xhr.onreadystatechange = function () {
    if (xhr.readyState !== XMLHttpRequest.DONE) return;
    if (xhr.status === 200) {
      success(xhr.response, xhr.responseType);
    } else {
      error(xhr.status, xhr.response, xhr.responseType);
    }
  };
  xhr.send(data);
}


</script>

</html>
