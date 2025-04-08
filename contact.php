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
    <div class="nav-wrapper container-fluid bg-dark px-1 fixed-top">
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
    <!-- Sub Hero -->
    <div class="header__sub-hero container-fluid py-5 d-block">
      <div class="header__sub-hero-content container d-flex flex-column align-items-center justify-content-center py-5">
        <div class="header__sub-hero-content-img-wrapper mb-3">
          <img class="header__sub-hero-content-img container-fluid d-block  m-0 p-0" src="./assets/img/contact/contact.jpg" alt="Contacts">
        </div>
        <h1 class="text-center text-danger fw-bold"><?php echo $nav_links[3]["title"];?></h1>
        <p class="text-center fw-medium fs-4 text-dark mb-0">Оставайтесь на связи с нами</p>
      </div>
    </div>
  </header>
  <!-- Main -->
  <main class="main bg-light--gradient">
    <div class="main-content container-fluid d-block py-4 px-1">
      <div class="container d-block mx-auto py-5">
        <div class="main-content-description d-block">
          <!-- Contact Form -->
            <div class="form-wrapper">
              <h2 class="text-center">Напишите нам ваш отзыв или задайте вопрос</h2>
              <form method="post" action="" id="form">
                <div class="d-flex flex-wrap gap-4">
                  <div class="flex-grow-1 col-lg-2">
                    <label class="d-block fs-5 form-label text-secondary" for="name">Ваше имя</label>
                    <input class="form-control fs-5" type="text" id="name" name="name">
                  </div>
                  <div class="flex-grow-1 col-lg-2">
                    <label class="d-block fs-5 form-label text-secondary" for="email">Ваш e-mail-адрес</label>
                    <input class="form-control fs-5" type="email" id="email" name="email">
                  </div>
                </div>

                <div class="d-flex flex-wrap gap-4">
                  <div class="flex-grow-1 col-lg-2">
                    <label class="d-block fs-5 form-label text-secondary" for="tel">Ваш номер телефона</label>
                    <input class="form-control fs-5" type="tel" id="tel" name="tel">
                  </div>
                  <div class="flex-grow-1 col-lg-2">
                    <label class="d-block fs-5 form-label text-secondary" for="topic">Тема письма</label>
                    <input class="form-control fs-5" type="text" id="topic" name="topic">
                  </div>
                </div>

                <div class="d-block">
                  <label class="fs-5 form-label text-secondary" for="message">Текст вашего сообщения</label>
                  <textarea class="form-control" id="message" name="message" rows="6"></textarea>
                </div>

                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="subscribe" name="subscribe" value="Subscribe">
                  <label class="form-check-label fs-6 text-secondary" for="subscribe">Оформить подписку, чтобы получать уведомления о скидках и спецпредложениях.</label>
                </div>

                <div class="d-block">
                  <button type="submit" class="btn btn-warning btn-lg text-uppercase text-dark fw-semibold d-block mt-4 mb-2 mx-auto">Отправить письмо</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Footer -->
  <footer class="container-fluid d-block py-4 bg-dark px-1 mt-auto">
    <div class="container d-block mx-auto">
      <p class="fw-light text-white-50 text-center mb-0"><?php include("./includes/footer.php"); ?></p>
    </div>
  </footer>
</body>
</html>