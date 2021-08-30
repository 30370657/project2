<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style/css/style.css">
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
            <a class="active" href="about.php">About Us</a>
            <a href="ae.php">Australian Education</a>
            <a href="ea.php">Educational Agents</a>
            <a href="contact.php">Contact</a>
        </nav>


    </header>

    <div class="main">
       
        <img class="gallery" src="media/image/gallery/Tasmania.jpg" alt="">
        <div class="text">
            We do things differently! <br>
            <a href="contact.php">Get in touch today</a>
        </div>
</div>

<!--Main content about us-->
        <div class = "content-selection">
<div class="content">
        <h1>About Us</h1>
</div>
        <div class = "about-content">
            
            <p>For students thinking about studying internationally, the prospect of taking the leap can be both exciting and challenging. Living abroad offers innumerable benefits for growth in both personal and career development. Studying or training in Australia will allow individuals to learn from a different perspective and have access to world-class education. 
Australia is known for its high-quality education, facilities and infrastructure. According to the Universities 21 (U21) Ranking of National Higher Education Systems 2019, the country was recognised as one of the best higher education systems in the world. Australian universities consistently rank in the top 100 universities of the world. 
An Australian qualification gives an edge to students providing more global career opportunities. In partnership with colleges and universities, CareerGro Australia (CGA) facilitates pathways to a diverse set of programs for students interested in studying or training in Australia.</p>
<h1>Our role in shaping your future </h1>
<h2><i>We do things differently. </i></h2>

    <span id="dots">...</span><span id="more"><p>
    At CGA, we aim to ensure you take advantage of the immense study opportunities to gain exposure and make a difference in their future. We conduct workshops assisting you in recognising key aspects of studying in Australia, as you establish ideas and develop approaches toward your career goals. You will be equipped with the knowledge of real world scenarios, enabling you to face and overcome challenges of international relocation. 
    We will help you achieve your ambition by defining what you are looking for in your career journey. You will feel connected and supported as your interests, values, strengths and apprehensions will be incorporated through CGA’s holistic approach.</p>
    
    <h2>The programs available are</h2> 
    <ul>
        <li>Certificate programs</li>
        <li>Diploma programs</li>
        <li>Undergraduate programs </li>
        <li>Postgraduate programs</li>
        <li>Special package programs </li>
    </ul>	 
    <p>
    In addition to the programs offered, we will provide individual information on pre-departure, airport arrivals, Australian customs and quarantine, accommodation and offer well-being support as you settle in. Additionally, complex issues such as schooling for young dependents, working while studying and complying visa conditions can be addressed as needed. </p>
    
<p>With our unique, flexible and collaborative approach, we help you make a well-informed decision at all levels to initiate your life changing experience. </p>

</span>
<button onclick="moreFunction()" id="moreBtn">READ MORE >></button>

<div class = "opening-hours">
    <h2> Our Opening Hours</h2>
    <br>
            <table>
            
            <tr><th>Monday</th><td>9am - 5pm</td></tr>
            <tr><th>Tuesday</th><td>9am - 5pm</td></tr>
            <tr><th>Wednesday</th><td>9am - 5pm</td></tr>
            <tr><th>Thursday</th><td>9am - 5pm</td></tr>
            <tr><th>Friday</th><td>9am - 5pm</td></tr>
            <tr><th>Saturday</th><td>Closed</td></tr>
            <tr><th>Sunday</th><td>Closed</td></tr>
            </table>
            <br>
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
<script>
    function moreFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("moreBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "READ MORE >>";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "<< READ LESS";
    moreText.style.display = "inline";
  }
} 
    </script>
</html>
