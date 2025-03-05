<?php
  include("./includes/nav-links-array.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/styles/styles.css">
  <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
  <!-- A Title -->
  <title><?php echo $nav_links[3]["title"]; ?></title>
  <!-- The Page Description -->
  <meta name="description" content="A short and precise description of your page (max 160 chars)">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Header -->
  <header class="header">
    <!-- Navigation -->
    <div class="nav-wrapper container-fluid bg-dark">
    <nav class="navbar navbar-expand-lg container bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">
          <img class="d-flex align-items-center" src="./assets/img/icons/hairdresser_beauty_hair_salon_icon-2.svg" alt="Logo">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNav"
        >
        <?php include("./includes/nav.php"); ?>
        </div>
      </div>
    </nav>
    </div>
      
    <!-- Slider -->
    <div class="slider">
      <?php include("./includes/slider.php"); ?>
    </div>
  </header>
  <!-- Main -->
  <main class="main">
    <div class="main-content container">
      <h2><?php echo $nav_links[3]["title"]; ?></h2>
      <div class="content-wrapper">
        <h3>Get in touch with us!</h3>
        <!-- Contact Form -->
        <div class="form-wrapper">
          <form method="post" action="" id="form">

            <label for="name">Your Name</label>
            <input type="text" id="name" name="name">

            <label for="email">Your Email</label>
            <input type="email" id="email" name="email">

            <label for="message">Your Message</label>
            <textarea id="message" name="message"></textarea>

            <input type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
            <label for="subscribe">Subscribe to newsletter</label>
            <input type="submit" name="submit-button" value="Send Message">
            
          </form>
        </div>
      </div>
    </div>
  </main>
  <!-- Footer -->
  <footer class="footer">
    <?php include("./includes/footer.php"); ?>
  </footer>
</body>
</html>