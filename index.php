<?php
$conn = mysqli_connect('localhost', 'root','','contact_db') or die('connection failed');
if(isset($_POST['send'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number ='$number' AND message = '$msg'" ) or die('query failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form`(name,email,number,message) VALUES('$name','$email','$number','$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complete Resposive Personal Portfolio Website Design</title>
    <!-- Font awesome cdn link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
     <!-- aos css link -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
     <!-- custom css file link -->
      <link rel="stylesheet" href="style.css">
    <style>
    .sent_message {
        font-size: 1.5rem;
        position: sticky;
        top: 2rem;
        max-width: 800px;
        margin: 0 auto;
        background-color: #ffcc0d;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 2rem;
    }
    .sent_message i{
        cursor: pointer;
    }
    </style>

</head>
<body>
    <?php
    if(isset($message)){
        foreach($message as $msg){
            echo '
            <div class="sent_message" data-aos="zoom-out">
                <span>' .$msg. '</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
    ?>
    <!-- header section starts  -->
    <header class="header">
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#home" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>  
        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>    
            <a href="#" class="fab fa-github"></a>
        </div>
    </header>
     <!-- header section ends  -->
      <!-- home section starts  -->
       <section class="home" id="home">
        <div class="image" data-aos="fade-right">
            <img src="demophoto.jpg" alt="user-photo" >
        </div>
        <div class="content">
            <h3 data-aos="fade-up">Hi, I'm Ishrat Binte Ahmed</h3>
            <span data-aos="fade-up">Web Developer & developer</span>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et illum architecto magni. Accusantium, aliquam quas officiis necessitatibus nam enim. Molestiae officia consequatur eum? Laudantium distinctio neque dolorem eius officiis ut.</p>
            <a data-aos="fade-up" href="#about" class="btn">About Me</a>
       </section>
       <!-- home section ends  -->
        <!--about section starts-->
        <section class="about" id="about">
            <h1 class="heading" data-aos="fade-up"><span>biography</span></h1>
            <div class="biography">

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo repellat id recusandae eligendi corrupti suscipit quaerat tempore? Aperiam, vero ipsum!</p>
                <div class="bio">
                    <h3 data-aos="zoom-in"><span>name: </span>Ishrat Binte Ahmed</h3>
                    <h3 data-aos="zoom-in"><span>email: </span>ishratbinteahmed@gmail.com</h3>
                    <h3 data-aos="zoom-in"><span>address: </span>Banani,Dhaka</h3>
                    <h3 data-aos="zoom-in"><span>phone: </span>+8801962466299</h3>
                </div>
                <a href="#" class="btn" data-aos="fade-up">Download Resume</a>
            </div>
            <div class="skills" data-aos="fade-up">
                <h1 class="heading"><span>Skills</span></h1>
                <div class="progress">
                    <div class="bar" data-aos="fade-left"><h3><span>HTML</span><span>95%</span></h3></div>
                    <div class="bar" data-aos="fade-right"><h3><span>CSS</span><span>80%</span></h3></div>
                    <div class="bar" data-aos="fade-left"><h3><span>JavaScript</span><span>65%</span></h3></div>
                    <div class="bar" data-aos="fade-right"><h3><span>PHP</span><span>80%</span></h3></div>
                </div>
            </div>
            <div class="edu-exp">
                <h1 class="heading" data-aos="fade-up"><span>Education & Experience</span></h1>
                <div class="row">
                    <div class="box-container">
                        <h3 class="title" data-aos="fade-right">Education</h3>
                        <div class="box" data-aos="fade-right">
                            <span>(2019-20)</span>
                            <h3>Web Designer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, provident perspiciatis! Voluptatibus veritatis eius magni!</p>
                        </div>
                        <div class="box" data-aos="fade-right">
                            <span>(2020-21)</span>
                            <h3>Web Developer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, provident perspiciatis! Voluptatibus veritatis eius magni!</p>
                        </div>
                        <div class="box" data-aos="fade-right">
                            <span>(2021-22)</span>
                            <h3>Graphic Designer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, provident perspiciatis! Voluptatibus veritatis eius magni!</p>
                        </div>
                    </div>
                    <div class="box-container">
                        <h3 class="title" data-aos="fade-left">Experience</h3>
                        <div class="box" data-aos="fade-left">
                            <span>(2020-21)</span>
                            <h3>Front-End Developer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, provident perspiciatis! Voluptatibus veritatis eius magni!</p>
                        </div>
                        <div class="box" data-aos="fade-left">
                            <span>(2021-22)</span>
                            <h3>Back-End Designer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, provident perspiciatis! Voluptatibus veritatis eius magni!</p>
                        </div>
                        <div class="box" data-aos="fade-left">
                            <span>(2021-22)</span>
                            <h3>Full-Stack Designer</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, provident perspiciatis! Voluptatibus veritatis eius magni!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--about section ends-->
        <!--services section starts-->
        <section class="services" id="services">
            <h1 class="heading" data-aos="fade-up"><span>services</span></h1>
            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-code"></i>
                    <h3>web development</h3>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sequi consequuntur ipsa error veritatis tempore.</p>
                </div>
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-paint-brush"></i>
                    <h3>Graphic design</h3>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sequi consequuntur ipsa error veritatis tempore.</p>
                    
                </div>
                <div class="box" data-aos="zoom-in">
                    <i class="fab fa-bootstrap"></i>
                    <h3>bootstrap</h3>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sequi consequuntur ipsa error veritatis tempore.</p>
                    
                </div>
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-chart-line"></i>
                    <h3>seo marketing</h3>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sequi consequuntur ipsa error veritatis tempore.</p>
                    
                </div>
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-bullhorn"></i>
                    <h3>digital marketing</h3>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sequi consequuntur ipsa error veritatis tempore.</p>
                    
                </div>
                <div class="box" data-aos="zoom-in">
                    <i class="fab fa-wordpress"></i>
                    <h3>wordpress</h3>    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit sequi consequuntur ipsa error veritatis tempore.</p>
                    
                </div>
            </div>
        </section>
        <!--services section ends-->
        <!--portfolio section starts-->
        <section class="portfolio" id="portfolio">
            <h1 class="heading" data-aos="fade-up" data-aos="zoom-in"><span>portfolio</span></h1>
            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <img src="web_development.jpg" alt="portfolio1">
                    <h3>web developement</h3>
                    <span>( 2020 - 2022 )</span>
                </div>
                <div class="box" data-aos="zoom-in">
                    <img src="graphic_design.jpg" alt="portfolio2">
                    <h3>web developement</h3>
                    <span>( 2020 - 2022 )</span>
                </div>
                <div class="box" data-aos="zoom-in">
                    <img src="for_now.jpg" alt="portfolio3">
                    <h3>web developement</h3>
                    <span>( 2020 - 2022 )</span>
                </div>
                <div class="box" data-aos="zoom-in">
                    <img src="vi.jpg" alt="portfolio4">
                    <h3>web developement</h3>
                    <span>( 2020 - 2022 )</span>
                </div>
                <div class="box" data-aos="zoom-in">
                    <img src="isha.avif" alt="portfolio5">
                    <h3>web developement</h3>
                    <span>( 2020 - 2022 )</span>
                </div>
                <div class="box" data-aos="zoom-in">
                    <img src="Ekko-and-Powder-Arcane-Season-2.jpg" alt="portfolio6">
                    <h3>web developement</h3>
                    <span>( 2020 - 2022 )</span>
                </div>
            </div>
        </section>
        <!--portfolio section ends-->
        <!--contact section starta-->
        <section class="contact" id="contact">
            <h1 class="heading" data-aos="fade-up"><span>contact me</span></h1>
            <form action="" method="post">
                <div class="flex">
                    <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
                    <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
                </div>
                <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
                <textarea data-aos="fade-up" name="message" placeholder="enter your message" class="box" required cols="30" rows="10"></textarea>
                <input data-aos="zoom-in" type="submit" value="Send message" name="send" class="btn">
            </form>
            <div class="box-container">
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-phone"></i>
                    <h3>phone</h3>
                    <p>+8801962466299</p>
                </div>
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-envelope"></i>
                    <h3>email</h3>
                    <p>ishratbinteahmed@gmail.com</p>
                </div>
                <div class="box" data-aos="zoom-in">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>address</h3>
                    <p>ADE Hostel,Banani,Dhaka</p>
                </div>
            </div>
        </section>
        <!--contact section ends-->
        <div class="credit">&copy; copyright @ <?php echo date('Y') ?> by <span>Ishrat Binte Ahmed</span></div>
    <script src="script.js"></script>
    <!--aos js link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            delay: 300
        });
    </script>
</body>
</html>