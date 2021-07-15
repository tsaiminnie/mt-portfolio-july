<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiscoveryFlix | Minnie Tsai</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon-16x16.png"/>
    <meta name="description" content="DiscoveryFlix Project Page of Minnie Tsai's Portfolio">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <script src="https://unpkg.com/scrollreveal"></script>
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
                <div class="hero-image">
                    <div class="hero-image-overlay"></div>
                    <div class="hero-text">
                        <div class="project-text">
                            <h2>React Movie Database</h2>
                            <h1>Discovery Flix</h1>
                            <p>DiscoveryFlix is a web application developed with React that draws data from a third party API and allows for a personalized user experience complete with a <strong>sorting</strong> and <strong>favourites</strong> feature.
                        </div>

                        <div class="project-details">
                            <ul>
                                <li class="details-label">Role</li>
                                <li class="details-info">Front-end developer</li>
                                <li class="details-label">Team</li>
                                <li class="details-info">Ainsley Marsh, Hunter Paulson, Minnie Tsai</li>
                                <li class="details-label">Tools</li>
                                <li class="details-info">React, TMDb API, jQuery, SASS, GitHub, Adobe XD</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="project-links">
                    <a href="/discoveryflix" target="_blank">Live Site</a>
                    <a href="https://github.com/tsaiminnie/movie-database" target="_blank">GitHub</a>
                </div>

                
            </section>

            <section class="project-features">
                <div class="feature-info">
                    <h3>Project Features</h3>

                    <div class="feature">
                        <div class="feature-video">
                                <video autoplay width="320" height="240" loop>
                                    <source src="videos/favouritesfeature2.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                        </div>
                        <div class="feature-text">
                            <h4>Favourites Feature</h4>
                            <p>This feature was developed so that users could customize their favourite movies list by clicking on the 'heart' icon on a specific movie, which would then add it to the 'Favourites' page.</p>
                        </div>
                    </div>

                    <div class="feature">
                        <div class="feature-video">
                            <video autoplay width="320" height="240" loop>
                                <source src="videos/sortingfeature2.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="feature-text">
                            <h4>Sorting Feature</h4>
                            <p>This sorting feature allows users to sort movies by <strong>now playing</strong>, <strong>popular</strong>, <strong>top rated</strong>, and <strong>upcoming</strong>, which is done by extracting movie data from the TMDb API using React.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="development">
                <h3>Development</h3>

                <div class="wireframes">
                    <h4>Wireframes</h4>
                    <img src="images/mobile-movie-wireframes.png" alt="Movie mobile wireframe" loading="lazy">
                    <img src="images/desktop-movie-wireframe.png" alt="Movie desktop wireframe" loading="lazy">
                </div>

                <div class="mockups">
                    <h4>Mockups</h4>
                    <img src="images/mobile-movie-mockup.png" alt="Movie mobile mockup" loading="lazy">
                    <img src="images/desktop-movie-mockup.png" alt="Movie desktop mockup" loading="lazy">
                </div>
            </section>

            <section class="project-takeaways">
                <h3>Project Takeaways</h3>

                <div class="takeaway">
                    <h4>Challenges</h4>
                    <p>During the development stages, we were curious to see how we could develop log in features for users to be able to have even more customization on the database. However, we decided to first prioritize the key features of the movie database which included the sorting and favourites feature. Moving forward, the next challenge would be to have a functional "My account" page for users to be able to login and customize the user experience even more by being able to add movies to a watchlist or write movie reviews.</p>
                </div>
            </section>

            <div class="more-project-link">
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