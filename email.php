<!DOCTYPE html>
<html lang="en">
    <head>
        <!--These metas help with rendering issues-->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans&family=Montserrat&family=Sacramento&display=swap" rel="stylesheet">
        <link rel="icon" href="favicon.ico">
        
        <title>Delton Hughes</title>
    </head>
    <body>
        <header>
        <div class="navbar">
            <div class="logo"><a href="index.html"><img src="images/D.png" alt="dlogo" class="dLogo"></a></div>
                <ul class="links">
                    <li class="h--li"><a href="about.html" class="about"><i class="fa-solid fa-user"></i>About</a></li>
                    <li class="h--li"><a href="projects.html" class="project"><i class="fa-solid fa-briefcase"></i>Projects</a></li>
                    <li class="h--li"><a href="hobbies.html" class="hobby"><i class="fa-solid fa-golf-ball-tee"></i>Hobbies</a></li>
                  
                </ul>
            <a href="contacts.html" class="action_btn">Get in Touch</a>
            <div class="toggle_btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>

        <div class="dropdown_menu">
            <li><a href="about.html">About</a></li>
            <li><a href="projects.html">Projects</a></li>
            <li><a href="hobbies.html">Hobbies</a></li>
            <li><a href="contacts.html" class="action_btn">Get in Touch</a></li>
        </div>
        </header>
        <!-- Foundation for Email Forum -->
        <main class="background-shapes">
        <div class="random-shape"></div>
        <div class="random-shape"></div>
            <div id="forumWrapper">
                <form action="email.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Email:</label>
                 <input type="email" id="email" name="email" required><br><br>

                   <label for="message">Message:</label><br>
                    <textarea name="message" id="message" cols="50" rows="4"></textarea><br><br>

                    <input type="submit" value="submit">
                </form>
             <?php
                    // checks if there is a submission
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                       // we need to retrieve forum data
                        $name = $_POST['name']; 
                        $email = $_POST['email'];
                       $message = $_POST['message'];

                        // making to var equail to my email
                        $to = "hughesdelton1@gmail.com"; 

                        // Populating email subject and body
                        $subject = "New message from $name";
                        $body = "From: $name\nEmail: $email\nMessage:\n$message";

                        // Sending email 
                        if(mail($to, $subject, $body)){
                        // if email was sent, display message
                        echo "Email Sent Successfuly!";
                        } else {
                        // if email wasn't sent, failure message 
                        echo "Email Failed to Send.";
                        }
                    }
                ?>
            </div>
        </main>
        <script src="background-animation.js"></script>
        <script>
            const toggleBtn = document.querySelector('.toggle_btn')
            const toggleBtnIcon = document.querySelector('.toggle_btn i')
            const dropDownMenu = document.querySelector('.dropdown_menu')

            toggleBtn.onclick = function () {
                dropDownMenu.classList.toggle('open')
                const isOpen = dropDownMenu.classList.contains('open')

                toggleBtnIcon.classList = isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'
            }
        </script>
    </body>
    <footer>
        <h4 id="copyright">©2023 Made by Delton Hughes</h4>
    </footer>
</html>
