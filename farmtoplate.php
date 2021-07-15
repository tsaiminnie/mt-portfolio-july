<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm to Plate | Minnie Tsai</title>
    <link rel="shortcut icon" type="image/jpg" href="images/favicon-16x16.png"/>
    <meta name="description" content="Farm to Plate Project Page of Minnie Tsai's portfolio">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


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
                <div class="hero-image hero-farm">
                    <div class="hero-image-overlay"></div>
                    <div class="hero-text">
                        <div class="project-text">
                            <h2>WordPress & WooCommerce Site</h2>
                            <h1>Farm to Plate</h1>
                            <p>Farm to Plate is a meal delivery business site created using WordPress and WooCommerce. <strong>Custom ACF fields</strong> were created to output various information and media. 
                        </div>

                        <div class="project-details">
                            <ul>
                                <li class="details-label">Role</li>
                                <li class="details-info">WordPress developer, UX/UI developer</li>
                                <li class="details-label">Team</li>
                                <li class="details-info">Kara Lu, Yingying Feng, Sriram Sharma, Minnie Tsai</li>
                                <li class="details-label">Tools</li>
                                <li class="details-info">WordPress, SASS, ACF, WooCommerce, GitHub, Adobe XD</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="project-links farm-links">
                    <a href="https://farmtoplate.bcitwebdeveloper.ca/" target="_blank">Live Site</a>
                    <a href="https://github.com/tsaiminnie/capstoneproject" target="_blank">GitHub</a>
                </div>

                
            </section>

            <section class="project-features project-farm-features">
                <div class="feature-info farm-feature-info">
                    <h3>Project Features</h3>

                    <article class="feature farm-feature">
                        <div class="feature-text farm-feature-text">
                            <div class="acf-intro">
                            <h4>Advanced Custom Fields</h4>
                            <p>Advanced Custom Fields were used to allow clients to have easier accessibility to input content onto the site. The ACFs allow us to display consistent information across the site. As well, it allows for easier updates and maintenance. If there is a change that needs to be made, we can just change information on a custom field rather than having to edit each post individually.  </p>
                        </div>

                        <div class="sub-acf-container">
                        <article class="acf-steps" data-aos="fade-up">
                            <img src="images/acf-home-one.png" alt="Wordpress homepage custom field page" loading="lazy">
                            <p>First, we created a custom field group to display on the homepage. We added various custom fields such as banner image, banner text area, and banner link. To make sure the field group displays on the correct page, we added a rule group to show this field group when the page is equal to the homepage.</p>
                        </article>
                       
                        <article class="acf-steps" data-aos="fade-up">
                            <img src="images/acf-home-two.png" alt="Wordpress homepage" loading="lazy">
                            <p>Once we navigated to the homepage, we could see and easily edit the custom fields that we created in the homepage field group.</p>
                        </article>

                        <article class="acf-steps" data-aos="fade-up">
                            <img src="images/acf-home-code.png" alt="Wordpress homepage custom field code" loading="lazy">
                            <p>To make the content show on the front end, we have to output code in the frontpage.php file.</p>
                        </article>
                        </div>
                        </div> 
                    </article>

                    <article class="feature footer-logo-feature">

                        <div class="feature-text farm-feature-text ">
                            <h4>Footer Logo</h4>
                            <p>We wanted to display two different site logos - one on the header and another on the footer. To do this, we uploaded the header logo onto the site identity field of WordPress. Then, we created a custom field for the footer logo and outputted the code to display the logo in our footer.php file. </p>
                        </div>

                        <div class="feature-img farm-feature-img">
                            <img data-aos="fade-right" src="images/header-logo-ftp.png" alt="Farm to Plate Header">
                            <img data-aos="fade-left" src="images/footer-logo-ftp.png" alt="Farm to Plate Footer">
                        </div>

                        <div class="feature-code">
                        <iframe height="300" style="width: 100%;" scrolling="no" title="" src="https://codepen.io/minnietsai/embed/rNmMdKy?default-tab=html" frameborder="no" loading="lazy" allowtransparency="true" allowfullscreen="true">
                        </iframe>
                        </div>
                </article>
            </section>

            <section class="development">
                <h3>Development</h3>
                <p>Wireframes and high fidelity mockups were created using Adobe XD, then we proceeded to code the PHP in Visual Studio Code and used GitHub for version control. We also used Trello to keep each member updated on the progress of our tasks.</p>

                <div class="mockups ftp-mockups">
                    <h4>Mockups</h4>
                    <img data-aos="fade-right"src="images/ftp-mockup-desktop.png" alt="Farm to Plate Desktop Mockup" loading="lazy">
                    <img data-aos="fade-left" src="images/ftp-mobile-mockup.png" alt="Farm to Plate Mobile Mockup" loading="lazy">
 
                </div>
            </section>

            <section class="project-takeaways">
                <h3>Project Takeaways</h3>

                <div class="takeaway">
                    <h4>Reflection</h4>
                    <p>There were many steps to building a fully functional meal delivery website that I felt were challenging. We first had to make sure all the PHP code was accurately displaying what we wanted on the front end of the site. The most challenging part was making sure the archive menu page displayed the previous menus. We had to find the current week in PHP format then perform the calculations to output previous week's menus. After the PHP coding was done for all our pages, we were able to style the pages according to our mockups. Throughout this project, I learned that it was crucial to keep group members updated on what task you were working on via a project management tool such as Trello, so that we could all be progressing towards our goal in an efficient manner. </p>
                </div>
            </section>

            <div class="more-project-link more-farm-link">
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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

    <script src="scripts/script.js"></script>
</body>
</html>