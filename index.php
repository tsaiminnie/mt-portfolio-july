<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minnie Tsai | Front-End Web Developer</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon-16x16.png"/>
    <meta name="description" content="Home page of Minnie Tsai's Portfolio">

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

    <div class="page-container">

        <div class="content-wrap">

        <?php include_once('header.php'); ?>

        <main>
            <section class="intro">
                <div class="intro-text">
                    <h2 class="home-about">
                        Hello, I'm a front-end web developer based in Vancouver, BC.
                    </h2>
                    <h1 class="name">
                        Minnie Tsai
                    </h1>
                </div>

                <picture class="intro-pic">
                    <source media="(max-width: 767px)" srcset="images/home-image-min.png">
                    <source media="(min-width: 768px)" srcset="images/tablet-minnie-finished.png">
                    <source media="(min-width: 1000px)" srcset="elva-800w.jpg">
                    <img src="images/home-image-min.png" alt="Girl in iphone, tablet, or desktop">
                </picture>
            
                <div class="scroll">
                    <img src="images/iconmonstr-mouse-4.svg" alt="Scroll icon">
                </div>

            </section>



            <section class="work-container" id="work">
                <div class="work-title">
                    <h2>Work</h2>
                </div>

                    <div class="movie work">
                        <a href="discoveryflix.php" class="work-image-wrapper">
                            <div class="img-container" id = "grayscale">
                                <img src="images/img-container-movie.png" alt="Movie project">
                                <div class="container-text">
                                    <h3>DiscoveryFlix</h3>
                                    <h4>Movie Database App</h4>
                                    <div class="view"> 
                                        <p class="view-case">View Case</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    



                    <div class="ftp work">
                        <a href="farmtoplate.php">
                            <div class="img-container" id = "grayscale">
                                <img src="images/img-container-ftp.png" alt="Farm to Plate project">
                                <div class="container-text">
                                    <h3>Farm to Plate</h3>
                                    <h4>WordPress <br> & WooCommerce Site</h4>
                                    <div class="view"> 
                                        <p class="view-case">View Case</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>



                    <div class="portfolio work">
                        <a href="portfolio.php">
                            <div class="img-container" id = "grayscale">
                                <img src="images/img-container-portfolio.png" alt="Portfolio project">
                                <div class="container-text">
                                    <h3>Portfolio</h3>
                                    <h4>Personal Portfolio Site</h4>
                                    <div class="view"> 
                                        <p class="view-case">View Case</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

            </section>

        </main>
    </div>

    <?php include_once('footer.php'); ?>
    
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
	        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="scripts/script.js"></script>
</body>
</html>