<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Minnie Tsai</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon-16x16.png"/>
    <meta name="description" content="About Page of Minnie Tsai's Portfolio">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet"> 
    
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Dummy script tag to prevent Flash of Unstyled Content on Firefox 
    https://stackoverflow.com/questions/21147149/flash-of-unstyled-content-fouc-in-firefox-only-is-ff-slow-renderer
    -->
    <script>0</script>

    <div class="page-container about-pg">

        <div class="content-wrap">

        <?php include_once('header.php'); ?>

        <main>


            <section class="about">

                <div class="about-subtitle">
                    <h1>Hi, I'm Minnie Tsai!</h1>
                    <h2> I'm a recent graduate from BCIT's Front-end Web Developer Program. </h2>
                </div>

                <img class="about-image" src="images/minnieAboutImage.png" alt="Minnie">

                <div class="about-content">
                    <p> My approach to design is to keep things simple and develop minimalistic yet appealing designs while allowing information to be easily accessible and comfortable to the human eye.</p>

                    <p>Before the COVID-19 pandemic, I was a flight attendant travelling all parts of the world. Travelling will always be one of my life pleasures but another one is creating art. I am passionate about the integration of design in the healthcare space and am excited to use my skills as a web developer to create great projects. </p>

                    <p>If you have learned something about me and would like to reach out, I would love to connect! </p>
                </div>
                </div>
            </section>



        </main>
    </div>

    <?php include_once('footer.php'); ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
	        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			crossorigin="anonymous"></script>
    <script src="scripts/script.js"></script>
</body>
</html>