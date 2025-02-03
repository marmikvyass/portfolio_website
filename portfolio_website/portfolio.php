<?php

$showAlert = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

$connection = mysqli_connect($servername,$username,$password,$database);

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $email = $_POST["email"];
    $desc = $_POST["desc"];

    $sql = "INSERT INTO `portfolio` (`username`, `email`, `description`, `dateandtime`) VALUES ('$username', '$email', '$desc', current_timestamp())";
    $result = $connection->query($sql);
    if($result){
        $showAlert = true;
    }
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marmik Vyas - Portfolio</title>
    <link rel="stylesheet" href="portfolio.css">
    
</head>
<body>
    <div class="container">
        <nav class="navBar">
            <h2 class="header"><a href="">Marmik Vyas.</a></h2>
            <ul class="navLinks">
                <li><a href="portfolio.html">Home</a></li>
                <li><a href="#aboutSection">About</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="mailto:marmikvyas777@gmail.com">Email</a></li>
                <li><a href="https://www.linkedin.com/in/marmik-vyas-9b2b72220/#"><i class='bx bxl-linkedin'></i></a></li>
            </ul>
        </nav>

        <div class="about">
            <h3>Hi, I'm Marmik, I'm Full-Stack  </h3>
            <span>Software Developer</span>
            <p>I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences. <br> Well-organised person, problem solver, independent employee with high attention to detail. I have a strong passion <br> for developing apps and websites.</p>
        </div>
    </div>

    <div class="container2">
        <div class="aboutSection" id="aboutSection">
            <h3>About Me</h3>
            <div class="aboutDisc">
                <p>I am a Full-Stack Software Developer. I have serious passion for UI effects, animations and creating intuitive, dynamic user experiences. <br> Well-organised person, problem solver, independent employee with high attention to detail. I have a strong passion <br> for developing apps and websites.</p>
            </div>
            <div class="aboutSkills">
                    <p id="a1">Skills</p>
                    <p id="a2">Experience</p>
                    <p id="a3">Education</p>
            </div>
            <div class="skillContent">

                <div class="skillls active1">
                    <ul class="skillContentUL">
                        <li>
                        <span id="s1">Front-End</span><br>
                        <span class="s1">Javascript/React Js/Bootstrap/Angular/Jquery</span>
                        </li>
                        <li>
                            <span id="s1">Back-End</span><br>
                            <span class="s1">Node Js/Express Js/PHP</span>
                        </li>
                        <li>
                            <span id="s1">Database</span><br>
                            <span class="s1">MongoDB/MySQL/Postgre SQL</span>
                            
                        </li>
                    </ul>
                </div>
                <div class="skillls active2">
                    <ul class="skillContentUL">
                        <li>
                        <span id="s1">No Experience</span><br>
                        <span class="s1">Freelancer</span>
                        </li>
                        <li>
                            <span id="s1">Hands-On Experience</span><br>
                            <span class="s1">Javascript/React/Node Js/Express Js/MySQL/Postgre SQL/Mongo DB</span>
                        </li>
                        <!-- <li>
                            <span id="s1">Database</span><br>
                            <span class="s1">MongoDB/MySQL/Postgre SQL</span>
                        </li> -->
                    </ul>
                </div>
                
                <div class="skillls active3">
                    <ul class="skillContentUL">
                        <li>
                        <span id="s1">2023-2027</span><br>
                        <span class="s1">BTech Information-Technology</span>
                        </li>
                        <li>
                            <span id="s1">Back-End</span><br>
                            <span class="s1">Node Js/Express Js/PHP</span>
                        </li>
                        <li>
                            <span id="s1">Database</span><br>
                            <span class="s1">MongoDB/MySQL/Postgre SQL</span>
                        </li>
                    </ul>
                </div>
                
            </div>      
        </div>
    </div>
    <div class="container3">
        <h3>My Service</h3>
        <div class="serviceSection">
            <div class="design1">
                <h2>Web Design</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim suscipit ab voluptatum repudiandae officia maxime harum soluta quibusdam dignissimos at?</p>
            </div>
            <div class="design2"><h2>Web Developer</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim suscipit ab voluptatum repudiandae officia maxime harum soluta quibusdam dignissimos at?</p>
            </div>
            <div class="design3"><h2>UI/UX Design</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim suscipit ab voluptatum repudiandae officia maxime harum soluta quibusdam dignissimos at?</p>
            </div>
        </div>
    </div>

    <div class="container4">
        <h3>My Projects</h3>

        <div class="projects">
            
            <div class="project1">
            <h4>Video Streaming Platform</h4>
            <p>A responsive web application for seamless video streaming, built with HTML, CSS, JavaScript, PHP, and MySQL. Features include user authentication, categorized content, and smooth playback. Designed for optimal performance and accessibility across devices.</p>
            <i class='bx bx-link-external'></i>
            </div>

            <div class="project2">
            <h4>Women's Safety Web App</h4>
            <p>A feature-rich web application designed to enhance women's safety by providing emergency alerts, SMS notifications, and live location sharing. Built using HTML, CSS, JavaScript, PHP, and MySQL and API, the platform enables users to send distress signals to emergency contacts instantly. Integrated with the Infobip API for reliable SMS alerts</p>
            <i class='bx bx-link-external'></i>
            </div>

            <div class="project3">
            <h4>Ecomm-Website</h4>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae magnam obcaecati ducimus sunt officia reprehenderit iure ipsa quaerat? Tempore, aut? Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, tempore harum! Unde, obcaecati accusantium mollitia </p>
            <a href="#"><i class='bx bx-link-external' style='color:#ffffff' ></i></a>
            </div>
        </div>
    </div> 


    <div class="container5">

    <?php
    if($showAlert){
        echo '<span style="color: white; background-color: black;">Your response has been submitted. The owner will contact you soon for your work.</span>';
    }
    ?> 

        <h3 class="contact_me">Contact Me</h3>

        <div id="contact_me">
                
                <div class="emailing">
                    <p>Let's chat. <br> Tell me about your<br> project.</p>
                    <p id="text">Let's create something together</p>
                     <span>Email :
                        <a href="mailto:marmikvyas777@gmail.com">marmikvyas777@gmail.com</a>
                    </span>
                </div>
            
            <form action="/portfolio_website/portfolio.php" id="forms" method="post" >
                <h4>Send us message</h4>
                <div id="form">
                    <input type="text" id="username" placeholder="Full name*" name="username">

                    <input type="email" id="email" placeholder="Email*" name="email">
                </div>
                
                <p id="project_desc">Tell us about your project</p>
                
                <textarea id="desc" name="desc" placeholder="Description"></textarea>

                <input type="submit" class="submit" value="Send Message">
            </form>
        </div>
    </div>

    <script src="fortfolio.js"></script>
    
</body>

</html>