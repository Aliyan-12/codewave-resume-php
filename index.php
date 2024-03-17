<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Resume - </title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/links.css">
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="stylesheet" href="assets/css/resume.css">
    <link rel="stylesheet" href="assets/css/services.css">
    <link rel="stylesheet" href="assets/css/contact.css">

    <!-- Scripts -->
    <script src="assets/script/navbar.js"></script>

</head>
<body>

    <header id="header">
        <div class="container">
            <h1><a href="/index.php">Aliyan Nasir</a></h1>
            <h2>I'm a passionate <span>Web Developer</span> from Islamabad, Pakistan</h2>

            <?php if(file_exists('content/navbar.php')) {
                include('content/navbar.php');
            } ?>

            <?php if(file_exists('content/links.html')) {
                include('content/links.html');
            } ?>            
        </div>
    </header>

    <section id="about" class="about">
        <?php if(file_exists('content/about.html')) {
            include('content/about.html');
        } ?>
    </section>

    <section id="resume" class="resume">
        <?php if(file_exists('content/resume.php')) {
            include('content/resume.php');
        } ?>
    </section>

    <section id="services" class="services">
        <?php if(file_exists('content/services.php')) {
            include('content/services.php');
        } ?>
    </section>

    <!-- <section id="portfolio" class="portfolio">

    </section> -->

    <section id="contact" class="contact">
        <?php if(file_exists('content/contact.php')) {
            include('content/contact.php');
        } ?>
    </section>

    <footer>
        <p>Designed by <a href="#">CodeCraft</a></p>
    </footer>
</body>
</html>