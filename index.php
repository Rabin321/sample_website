<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png" />
            </a>

            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Technology Menia</h1>
            <p class="parag">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> <br>
           <p>  Aliquam voluptas fugit, ducimus sint reprehenderit quisquam doloribus delectus quae, nihil, quos magni eius nulla deleniti similique consequatur quo est optio. Voluptas.</p>
           <a class="main-btn" href="#">Contact</a>
        </div>
    </section>
    <section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png" width="240px", height="240px" />
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Web Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam amet iste vero, quas.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>

             <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png" width="240px", height="240px"/>
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>App Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam amet iste vero, quas.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            

            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png" width="240px", height="240px"/>
                </div>
                <div class="f-text">
                    <h4>Internet of things</h4>
                    <p>Iot Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam amet iste vero, quas.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about-img">
            <img src="images/about.png" />
        </div>
        <div class="about-text">
            <h2>A well established company</h2>
            <p>Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Dolorem, earum excepturi. 
            Aperiam, perspiciatis ullam illo laborum possimus voluptates inventore.
            Delectus laborum ipsa eum quaerat aliquam ducimus quasi libero at vero.</p>
                 <a href="#" class="main-btn">Read more...</a>
        </div>
    </section>

    <section class="contact">

    <div class="contact-heading">
        <h1>Contact Us</h1>
        <p>For all enquiries, please contact us using the form below</p>
    </div>
    <form action="userinfo.php" method="post">

    <input type="text" name="user" placeholder="Enter your name"/>
    <input type="email" name="email" placeholder="Enter your email"/>
    <textarea type="message" name="message" placeholder="Enter your message"></textarea><br>
    <button class="main-btn" type="submit">Submit</button>

    </form>
    </section>
</body>
</html>