<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
      <?php include 'userdata.php'; ?>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio Website</title>

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- Icons -->
  <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  /> 

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>

</style>
</head>

<body>

  <!-- ================= NAVBAR ================= -->

  <header>

    <nav class="navbar">
      <h2 class="logo">Abis.</h2>

      <ul class="nav-links">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>

      <div class="menu-btn">
        <i class="fa-solid fa-bars"></i>
      </div>
    </nav>
  </header>

  <!-- ================= HERO SECTION ================= -->

  <section class="hero" id="home"  id="home">

    <div class="hero-text">
      <h1>Hello, I'm <span>Muhammad Abis</span></h1>

      <h3>I am a <span class="typing"></span></h3>

      <p>
        Frontend Developer passionate about creating beautiful and responsive websites using HTML, CSS and JavaScript.
      </p>

      <div class="hero-buttons">
        <a href="mailto:abism952@gmail.com" class="btn">Hire Me</a>
        <a href="#" class="btn btn2" onclick="clk()">Download CV</a>
      </div>
    </div>

    <div class="hero-image">
      <img src="my_img.png" alt="" style="border-radius:5px;">
    </div>

  </section>

  <!-- ================= ABOUT ================= -->

  <section class="about" id="about">
    <a href="#home" class="arrow"><i class="fa-solid fa-angles-up" ></i></a>
    <h2 class="section-title">About Me*</h2>

    <div class="about-container">

      <div class="about-image">
        <img src="developer_illustration.jpg " style="border-radius:5px"; alt="">
      </div>

      <div class="about-text">
        <h3>Frontend Developer</h3>

        <p>
          I create modern and responsive websites with clean UI designs.
          I love coding and learning new technologies.
        </p>

        <div class="info">
          <p><strong>Name:</strong> Muhammad Abis</p>
          <p><strong>Email:</strong> abism952@gmail.com</p>
          <p><strong>Location:</strong> Karachi, Pakistan</p>
        </div>
      </div>

    </div>

  </section>

  <!-- ================= SKILLS ================= -->

  <section class="skills" id="skills">

    <h2 class="section-title">My Skills*</h2>

    <div class="skills-container">

      <div class="skill-card">
        <i class="fa-brands fa-html5"></i>
        <h3>HTML</h3>
        <div class="main-percentage">
          <div class="percentage">
            <div class="html"></div>
          </div>
            <strong>95%</strong>
         </div>
      </div>
      <div class="skill-card">
        <i class="fa-brands fa-css3-alt"></i>
        <h3>CSS</h3>
        <div class="main-percentage">
          <div class="percentage">
            <div class="css"></div>
          </div>
            <strong>90%</strong>
         </div>    
      </div>
      <div class="skill-card">
        <i class="fa-brands fa-js"></i>
        <h3>JavaScript</h3>
        <div class="main-percentage">
          <div class="percentage">
            <div class="javascript"></div>
          </div>
            <strong>65%</strong>
         </div>           
      </div>
    </div>

    <div class="skills-container">
      <div class="skill-card">
        <i class="fa-brands fa-php"></i>
        <h3>PHP</h3>
        <div class="main-percentage">
          <div class="percentage">
            <div class="php"></div>
          </div>
            <strong>65%</strong>
         </div>           
      </div>
      <div class="skill-card">
        <i class="fa-solid fa-database"></i>
        <h3>MySQL</h3>
        <div class="main-percentage">
          <div class="percentage">
            <div class="mysql"></div>
          </div>
            <strong>85%</strong>
         </div>          
      </div>
      <div class="skill-card">
        <i class="fa-brands fa-bootstrap"></i>
        <h3>BootStrap</h3>
        <div class="main-percentage">
          <div class="percentage">
            <div class="bootstrap"></div>
          </div>
            <strong>80%</strong>
         </div>           
      </div>  
      </div>

  </section>


  <!-- ================= EDUCATION ================= -->

  <section>
     <h2 class="section-title">Education*</h2>
     <div class="skills-container">
       <div class="skill-card">
         <div>Matric</div>
         <strong>October 2021</strong>
         <div style=" color:grey;">Success Schooling System</div>
      </div>
       <div class="skill-card">
         <div>Intermediate</div>
         <strong>May 2023</strong>
         <div style=" color:grey;">GOVT Degree College</div>
      </div>      
      </div>
      
      <div class="skills-container">
        <div class="skill-card">
          <div>DISM Diploma</div>
          <strong>May 2025 - Present</strong>
          <div style=" color:grey;">Aptech Learning</div>
       </div>
        <div class="skill-card">
          <div>Graphic Designing Diploma</div>
          <strong>January 2025</strong>
          <div style=" color:grey;">Korean Computer Academy

          </div>
       </div>      
      </div>      
  </section>








  <!-- ================= PROJECTS ================= -->

  <section class="projects" id="projects">

    <h2 class="section-title">Projects*</h2>

    <div class="projects-container">

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=1000" alt="">

        <div class="project-info">
          <h3>Bucker Website</h3>

          <p>Responsive bucker website using HTML CSS .</p>

          <a href="https://github.com/abism952/Bucker-website" target="blank" class="btn">View Project</a>
        </div>
      </div>

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1000" alt="">

        <div class="project-info">
          <h3>Portfolio Website</h3>

          <p>Responsive portfolio website using HTML CSS Javascript.</p>

          <a href="#" class="btn">View Project</a>
        </div>
      </div>

      <div class="project-card">
        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=1000" alt="">

        <div class="project-info">
          <h3>Landing Page</h3>

          <p>Modern landing page with responsive design.</p>

          <a href="https://github.com/abism952/Softy-Pinko-Website" class="btn">View Project</a>
        </div>
      </div>

    </div>

  </section>

  <!-- ================= CONTACT ================= -->

  <section class="contact" id="contact">

    <h2 class="section-title">Contact Me*</h2>

    <form action="" method="POST">

      <input type="text" placeholder="Your Name"  required name="name">

      <input type="email" placeholder="Your Email" required name="email">

      <textarea placeholder="Your Message" name="message" ></textarea>

      <button class="btn" name="btn1" id="btn1" onclick="btn2()">Send Message</button>


    </form>
    <div class="bodycolor">
    <input  id="clr" type="text" placeholder="change-color">
    <button id=""color onclick="changebg()">Submit</button>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->

  <footer>

    <p>© 2026 Muhammad Abis | All Rights Reserved</p>

    <div class="social-icons">
      <a href="http://www.facebook.com"target="blank"><i class="fa-brands fa-facebook"></i></a>
      <a href="http://www.instagram.com" target="blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="http://www.github.com" target="blank"><i class="fa-brands fa-github"></i></a>
      <a href="http://www.linkedin.com" target="blank"><i class="fa-brands fa-linkedin"></i></a>
    </div>

  </footer>

  

  <!-- JS -->
  <script src="script.js"></script>






</body>
</html>



