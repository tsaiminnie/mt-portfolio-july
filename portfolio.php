<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Minnie Tsai</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon-16x16.png"/>
    <meta name="description" content="Portfolio Project Page of Minnie Tsai's Portfolio">

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

        
        <div class="project-content">
            <section class="project">
                <div class="hero-image portfolio">
                    <div class="hero-image-overlay"></div>
                    <div class="hero-text">
                        <div class="project-text">
                            <h2>Personal Portfolio</h2>
                            <h1>Minnie Tsai</h1>
                            <p>My personal portfolio was created to display my projects in a unique way using HTML, CSS, and JavaScript.</p>
                        </div>

                        <div class="project-details">
                            <ul>
                                <li class="details-label">Role</li>
                                <li class="details-info">Front-End Developer</li>
                                <li class="details-label">Tools</li>
                                <li class="details-info">HTML, SASS, JavaScript</li>
                            </ul>
                        </div>
                    </div>
                </div>

                
            </section>

            <section class="project-features portfolio-features">
                <div class="brainstorm-container">
                <h3>Brainstorm</h3>

                <div class="feature p-feature">
                    <div class="feature-text p-feature-text">
                        <h4>Site Identity</h4>
                        <p>At the beginning of my brainstorming for my portfolio, I knew that I wanted a very minimalistic theme throughout my site, with one to two accent colours and for the main focus to be on the images of my site. I also wanted to incorporate a full screen menu that opened up when the mobile menu toggle was clicked. </p>
                    </div>

                    <div class="p-feature-img">
                        <img src="images/portfolio-styleguide2.png" alt="Portfolio Style Guide" loading="lazy">
                    </div>



                </div>

                    <div class="cta-style-guide">
                        <a href="resources/portfolio-style-guide.pdf" target="_blank">See Style Guide</a>
                    </div>
                </div>
            </section>

            <section class="planning">
                <h3>Planning</h3>

                <div class="wireframes p-wireframes">
                    <h4>Wireframes</h4>
                    <img src="images/portfolio-mob-wireframes.png" alt="Portfolio mobile wireframes"loading="lazy">
                    <img src="images/portfolio-desk-wireframes.png" alt="Portfolio desktop wireframes"loading="lazy">
                </div>

                <div class="mockups p-mockups">
                    <h4>Mockups</h4>
                    <img src="images/portfolio-mobile-mockup2.png" alt="Portfolio mobile mockups" loading="lazy">
                    <img src="images/portfolio-desktop-mockup2.png" alt="Portfolio desktop mockup"loading="lazy">
                </div>
            </section>

            <section class="project-takeaways">
                <h3>Project Takeaways</h3>

                <div class="takeaway">
                    <h4>Reflections</h4>
                    <p>The biggest struggle I had while creating my portfolio was wanting to change my site as I found more inspiration and therefore not being able to commit to finalizing my mockups. Although my wireframes and mockups went through several iterations, I am quite pleased with the end results of my Work pages. However, I think I will continuously be changing my portfolio as I find more inspiration and ideas to include.</p>
                </div>
            </section>

            <div class="cta-project cta-portfolio more-project-link">
                <a href="/#work">See More Work</a>
            </div>


        </main>
    </div>
</div>

    <?php include_once('footer.php'); ?>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
	        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
			crossorigin="anonymous"></script>
    <script src="scripts/script.js"></script>
</body>
</html>