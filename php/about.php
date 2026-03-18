<?php
/* about.php - about page for ReDesign Home Staging website */

/* team members array - add or remove members here */
$team = [
    [
        'name'  => 'Realtor 1',
        'role'  => 'Role',
        'bio'   => 'Enter bio here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec',
        'photo' => '../images/placeholder-pfp.png',
        'alt'   => 'Realtor 1'
    ],
    [
        'name'  => 'Realtor 2',
        'role'  => 'Role',
        'bio'   => 'Enter bio here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec',
        'photo' => '../images/placeholder-pfp.png',
        'alt'   => 'Realtor 2'
    ],
    [
        'name'  => 'Realtor 3',
        'role'  => 'Role',
        'bio'   => 'Enter bio here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec',
        'photo' => '../images/placeholder-pfp.png',
        'alt'   => 'Realtor 3'
    ],
    [
        'name'  => 'Realtor 4',
        'role'  => 'Role',
        'bio'   => 'Enter bio here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec',
        'photo' => '../images/placeholder-pfp.png',
        'alt'   => 'Realtor 4'
    ],
    [
        'name'  => 'Realtor 5',
        'role'  => 'Role',
        'bio'   => 'Enter bio here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec',
        'photo' => '../images/placeholder-pfp.png',
        'alt'   => 'Realtor 5'
    ],
    [
        'name'  => 'Realtor 6',
        'role'  => 'Role',
        'bio'   => 'Enter bio here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec',
        'photo' => '../images/placeholder-pfp.png',
        'alt'   => 'Realtor 6'
    ],
];
?>

<!-- about.php - about page for ReDesign Home Staging website -->

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About | ReDesign Home Staging</title>
        <link rel="stylesheet" href="../css/base.css" />
        <link rel="stylesheet" href="../css/footer.css" />
        <link rel="stylesheet" href="../css/about.css" />
    </head>

    <body>

        <!-- navbar -->
        <nav id="navbar">
            <a href="index.php" id="brand">ReDesign Home Staging</a>

            <ul id="nav-links">
                <li><a href="../services.html">Services</a></li>
                <li><a href="../php/about.php" class="active">About</a></li>
                <li><a href="../consult.html" id="nav-book">Book A Consultation</a></li>
            </ul>

            <!-- hamburger menu for mobile responsiveness -->
            <button id="nav-toggle" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </nav>

        <!-- about page content -->
        <main id="page-body">

            <!-- page header -->
            <section class="about-header">
                <p id="about-title"><span class="gold">✦ ABOUT US</span></p>
                <h1>ReDesign Home Staging</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi, ut vehicula felis. Sed accumsan ipsum ac diam dignissim eget laoreet erat.</p>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam feugiat vitae ultricies eget tempor sit amet ante. Donec eu libero sit amet quam egestas semper aenean.</p>
            </section>

            <!-- meet the team -->
            <section class="about-team">
                <p><span class="gold">✦ OUR PEOPLE</span></p>
                <h2>Meet The <span class="italic gold">Team</span></h2>

                <div class="team-carousel">

                    <!-- prev arrow -->
                    <button class="carousel-btn prev" aria-label="Previous">&#8592;</button>

                    <!-- sliding track wrapper — clips overflow -->
                    <div class="carousel-track-wrapper">
                        <div class="carousel-track">
                            <?php foreach ($team as $member): ?>
                                <div class="team-member">
                                    <div class="team-photo">
                                        <img src="<?php echo $member['photo']; ?>" alt="<?php echo $member['alt']; ?>" />
                                    </div>
                                    <h3><?php echo $member['name']; ?></h3>
                                    <p class="team-role"><?php echo $member['role']; ?></p>
                                    <p class="team-bio"><?php echo $member['bio']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- next arrow -->
                    <button class="carousel-btn next" aria-label="Next">&#8594;</button>

                </div>
            </section>

        </main>

        <!-- footer -->
        <footer>
            <div class="footer-cta">
                <p class="footer-cta-label">✦ Ready To Sell?</p>
                <h2>Transform Your Home.<br><em>Maximize Your Sale.</em></h2>
                <a href="../consult.html" class="footer-cta-btn">Book A Consultation</a>
            </div>

            <div class="footer-lower">
                <div class="footer-grid">
                    <div>
                        <p class="footer-brand">ReDesign Home Staging</p>
                        <p class="footer-tagline">We transform homes buyers fall in love with before they step inside. Professional staging that elevates your listing.</p>
                    </div>
                    <div class="footer-col">
                        <h4>Services</h4>
                        <ul>
                            <li><a href="../services.html">Service 1</a></li>
                            <li><a href="../services.html">Service 2</a></li>
                            <li><a href="../services.html">Service 3</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Company</h4>
                        <ul>
                            <li><a href="index.php#portfolio">Portfolio</a></li>
                            <li><a href="../php/about.php">About Us</a></li>
                            <li><a href="index.php#testimonials">Testimonials</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Contact</h4>
                        <ul>
                            <li><a>(xxx) xxx-xxxx</a></li>
                            <li><a href="mailto:email@email.com">email@email.com</a></li>
                            <li><a href="https://www.realtor.com" target="_blank">Realtor.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-bottom">
                    <span>&copy; 2026 ReDesign Home Staging. All rights reserved.</span>
                    <span>Diego Silva &middot; Cole Prendeville &middot; Aarav Mehta</span>
                </div>
            </div>
        </footer>

        <script src="../js/navbar.js"></script>
        <script src="../js/about.js"></script>

    </body>
</html>