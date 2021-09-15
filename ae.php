<?php 
    
    $json_file = file_get_contents("data.json");
    $json_data = json_decode($json_file, true);
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Australian Education</title>
    <link rel="stylesheet" href="style/css/bootstrap.css">
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
            <a href="about.php">About Us</a>
            <a class="active" href="ae.php">Australian Education</a>
            <a href="ea.php">Educational Agent</a>
            <a href="contact.php">Contact</a>
        </nav>


    </header>
    

    <div class="main">
       
       <img class="gallery" src="media/image/gallery/Adelaide.jpg" alt="">
       <div class="text">
           We do things differently! <br>
           <a href="contact.php">Get in touch today</a>
       </div>
       





   </div>

   <div class="course_data">
        <table class="table table-striped table-hover" id="data_table">
            <tr>
                <th>Course</th>
                <th>Desc</th>
                <th>College Name</th>
                <th>Code</th>
                <th>Id</th>
                <th>Price</th>

            </tr>
            <?php  
       
                    
                foreach($json_data['college'] as $college){
                    
                    foreach ($college['Course'] as $key ) {
                        print"
                        <tr> 
                        <td>".$key['Name']."</td>
                
                        <td>".$key['Desc']."</td>
                        
                        <td>".$college['Name']."</td>
                        
                        <td>".$key['Code']."</td> 
                        <td>".$key['ID']."</td>
                        <td>".$college['College ID']."</td>
                        </tr>";
                    }
                }
                
                    
            ?>
        </table>
            
        
   </div>

   <div class="course_info">
       <div class="course_img"></div>
       <div class="course_text1">
           <h2> Study Pathway- The Australian Qualification Framework </h2>
           <p>
           Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita similique ut, quod placeat at fuga corporis <br> libero, assumenda, totam dolor adipisci quidem esse non? Quos nisi id adipisci corporis?
           </p>
           
       </div>
       <div class="course_text2">
           <h2> Important Terms Used In Australian Higher Education </h2>
           <p>
                ipsum dolor sit, amet consectetur adipisicing elit. Qui quasi deserunt molestias animi quaerat ullam, perspiciatis, exercitationem ab libero totam tenetur voluptatum placeat veritatis, possimus doloribus ratione rerum ipsam. Totam!
            </p>
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
        
  
    </script>
</html>