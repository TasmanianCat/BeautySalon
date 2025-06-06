<?php
  include("./includes/nav-links-array.php");
?>
<?php
  include("./includes/benefits-array.php");
?>
<?php
  include("./includes/booking.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/styles/styles.css">
  <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
  <!-- A Title -->
  <title><?php echo $nav_links[0]["title"]; ?></title>
  <!-- The Page Description -->
  <meta name="description" content="A short and precise description of your page (max 160 chars)">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Header -->
  <header class="header header--home">
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
      
    <!-- Slider -->
    <div class="slider">
      <?php include("./includes/slider.php"); ?>
    </div>
    <!-- Hero -->
    <div class="container-fluid header__hero px-3">
      <div class="container header__hero-content-wrapper rounded">
        <div class="header__hero-content p-4 rounded">
          <h1 class="text-center text-danger fw-bold">Подчеркиваем вашу красоту</h1>
          <p class="text-center fw-medium fs-4 text-dark  mb-0">Салон-парикмахерская "Татьяна" предлагает вам широкий спектр услуг высокого качества, которые помогут вашим ногтям, волосам, макияжу, бровям и ресницам выглядеть идеально!</p>
          <button type="button" class="btn btn-warning btn-lg text-uppercase text-dark fw-semibold d-block mt-4 mb-2 mx-auto" data-bs-toggle="modal" data-bs-target="#bookingModal">Записаться</button>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title fs-4" id="bookingModalLabel">Выбирите способ</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- WhatsApp -->
            <a class="fs-5 fw-light d-flex align-items-center mb-3 py-0" href="<?php echo $contacts["whatsapp_url"]; ?>"><img class="social-media-icon-modal" src="./assets/img/icons/whatsapp.svg" alt="WhatsApp"><span class="my-auto h-100 text-secondary">Написать в WhatsApp</span></a>
            <!-- Telegram -->
            <a class="fs-5 fw-light d-flex align-items-center mb-3 py-0" href="<?php echo $contacts["telegram_url"]; ?>"><img class="social-media-icon-modal" src="./assets/img/icons/telegram.svg" alt="Telegram"><span class="my-auto h-100 text-secondary">Написать в Telegram</span></a>
            <!-- Phone -->
            <a class="fs-5 fw-light d-flex align-items-center py-0" href="<?php echo $contacts["phone_url"]; ?>"><img class="social-media-icon-modal" src="./assets/img/icons/call.svg" alt="Phone Call"><span class="my-auto h-100 text-secondary">Позвонить на телефон</span></a>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Отмена</button>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main -->
  <main class="main">
    <!-- Welcome section -->
    <div class="container-fluid d-block py-4 bg-dark--gradient px-1">
      <div class="container py-5 px-1">
        <div class="container text-center col-11">
          <h2 class="text-warning">Добро наш в салон красоты!</h2>
          <p class="text-white mb-0">У нас вы найдете все, что касается красоты. В нашем салоне мы специализируемся на улучшении вашей естественной красоты с помощью широкого спектра салонных услуг.</p>
        </div>
      </div>
    </div>
    <!-- Cards -->
    <div class="container py-5">
      <!-- <h2 class="h2 display-4 fw-semibold pb-5"><?php echo $nav_links[0]["title"]; ?></h2> -->
      <div class="d-flex flex-row flex-wrap gap-5 container-fluid justify-content-center py-5 px-1">
        <!-- Card 1 -->
        <div class="d-flex flex-column flex-grow-1 shadow-lg border-opacity-10 border-secondary-subtle rounded col-lg-3">
          <div class="d-flex justify-content-center col py-4 px-2">
            <?php echo $benefits[0]["benefits_icon"]; ?>
          </div>
          <h3 class="text-center pt-2">
            <?php echo $benefits[0]["benefits_heading"]; ?>
          </h3>
          <p class="pb-4 px-4 text-center">
            <?php echo $benefits[0]["benefits_paragraph"]; ?>
          </p>
        </div>
        <!-- Card 2 -->
        <div class="d-flex flex-column flex-grow-1 shadow-lg border-secondary-subtle rounded col-lg-3">
          <div class="d-flex justify-content-center col py-4 px-2">
            <?php echo $benefits[1]["benefits_icon"]; ?>
          </div>
          <h3 class="text-center pt-2">
            <?php echo $benefits[1]["benefits_heading"]; ?>
          </h3>
          <p class="pb-4 px-4 text-center">
            <?php echo $benefits[1]["benefits_paragraph"]; ?>
          </p>
        </div>
        <!-- Card 3 -->
        <div class="d-flex flex-column flex-grow-1 shadow-lg border-secondary-subtle rounded col-lg-3">
          <div class="d-flex justify-content-center col py-4 px-2">
            <?php echo $benefits[2]["benefits_icon"]; ?>
          </div>
          <h3 class="text-center pt-2">
            <?php echo $benefits[2]["benefits_heading"]; ?>
          </h3>
          <p class="pb-4 px-4 text-center">
            <?php echo $benefits[2]["benefits_paragraph"]; ?>
          </p>
        </div>
      </div>
    </div>
    <!-- Gallery section -->
    <div class="container-fluid d-block py-4 bg-dark--gradient px-0">
      <div class="container py-5">
        <div class="container text-center col-11">
          <h2 class="text-warning">Шагните в мир красоты и релаксации</h2>
          <p class="text-white mb-0">От профессионального ухода за волосами до безупречных ногтей и макияжа, мы стремимся сделать так, чтобы вы чувствовали себя уверенно и сияюще.</p>
        </div>
      </div>
      <div class="d-flex flex-row flex-wrap container align-content-center gap-5 mb-5 px-3 pb-3">
        <div class="d-flex flex-column flex-grow-1 col-lg-2">
          <img class="d-block img-fluid rounded" src="./assets/img/home/client-8.jpg" alt="Client">
        </div>
        <div class="d-flex flex-column flex-grow-1 col-lg-2">
          <img class="d-block img-fluid rounded" src="./assets/img/home/client-9.jpg" alt="Client">
        </div>
      </div>
    </div>
    <!-- Feedback Carousel -->
    <div class="container-fluid d-block py-5 px-0">
      <h2 class="text-center pt-4">Популярные отзывы</h2>
      <div class="container py-5 px-3">
        <div id="feedbackCarousel" class="carousel shadow-lg border-opacity-10 border-secondary-subtle carousel-dark slide rounded">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#feedbackCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
          </div>
          <div class="carousel-inner">
            <!-- Feedback 1 -->
            <div class="carousel-item carousel-item--height active">
              <div class="row g-5 p-5 align-items-center justify-content-center rounded">
                <div class="col-lg-9">
                  <h3 class="text-center">Ольга</h3>
                  <?php include("./includes/stars.php"); ?>
                  <p class="card-text text-center fst-italic mt-3">Кристине огромная благодарность! За труд, профессионализм, ответственное отношение к работе, за красоту, подаренное прекрасное настроение. После её замечательных ручек, просто преображаешься. Хожу много уже много лет.</p>
                  <p class="text-center text-body-tertiary mb-0"><time datetime="2024-12-07">07.12.2024</time></p>
                </div>
              </div>
            </div>
            <!-- Feedback 2 -->
            <div class="carousel-item carousel-item--height">
              <div class="row g-5 p-5 align-items-center justify-content-center rounded">
                <div class="col-lg-9">
                  <h3 class="text-center">Станислав</h3>
                  <?php include("./includes/stars.php"); ?>
                  <p class="card-text text-center fst-italic mt-3">Классный салон! Очень приветливые сотрудники: обходительные администраторы, профессиональные мастера, постоянно повышающие квалификацию. Являюсь постоянным клиентом более 5 лет и очень доволен качеством услуг!</p>
                  <p class="text-center text-body-tertiary mb-0"><time datetime="2025-02-20">20.02.2025</time></p>
                </div>
              </div>
            </div>
            <!-- Feedback 3 -->
            <div class="carousel-item carousel-item--height">
              <div class="row g-5 p-5 align-items-center justify-content-center rounded">
                <div class="col-lg-9">
                  <h3 class="text-center">Вероника</h3>
                  <?php include("./includes/stars.php"); ?>
                  <p class="card-text text-center fst-italic mt-3">Задача была очень непростая, так как нужно было исправить свежий результат работы другого парикмахера (не очень удачное окрашивание недельной давности)! Татьяна с этим справилась блестяще! Чувствуется подход профессионала! Теперь обращаюсь только в этот салон!</p>
                  <p class="text-center text-body-tertiary mb-0"><time datetime="2022-08-11">11.08.2022</time></p>
                </div>
              </div>
            </div>
            <!-- Feedback 4 -->
            <div class="carousel-item carousel-item--height">
              <div class="row g-5 p-5 align-items-center justify-content-center rounded">
                <div class="col-lg-9">
                  <h3 class="text-center">Алексей</h3>
                  <?php include("./includes/stars.php"); ?>
                  <p class="card-text text-center fst-italic mt-3">Стригусь у Вадима уже несколько лет, всегда все на высшем уровне. Я очень требовательный клиент, у меня много нюансов в стрижке. Волосы отлично лежат, даже спустя 3 недели после посещения салона.</p>
                  <p class="text-center text-body-tertiary mb-0"><time datetime="2023-01-27">27.01.2023</time></p>
                </div>
              </div>
            </div>
            <!-- Feedback 5 -->
            <div class="carousel-item carousel-item--height">
              <div class="row g-5 p-5 align-items-center justify-content-center rounded">
                <div class="col-lg-9">
                  <h3 class="text-center">Людмила</h3>
                  <?php include("./includes/stars.php"); ?>
                  <p class="card-text text-center fst-italic mt-3">Я долго искала идеального мастера по маникюру и наконец-то нашла! Мадина чудесный специалист! Лёгкая рука, хорошее настроение и с легкостью подбирает
                  и цвет и форму ногтей, которые хочется. Спасибо большое за отличную работу!</p>
                  <p class="text-center text-body-tertiary mb-0"><time datetime="2025-04-02">02.04.2025</time></p>
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev carousel-control--width" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next carousel-control--width" type="button" data-bs-target="#feedbackCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
    <!-- Location -->
    <div class="contaner-fluid bg-dark--gradient px-0 pt-5 pb-0">
      <div class="container py-4 mb-5">
        <h2 class="text-center text-warning">Нас легко найти</h2>
        <address class="text-white text-center fs-5 m-0">Наш адрес: 445028, г. Тольятти, Автозаводский район, ул. Фрунзе, д. 35, под. 3.</address>
        <button type="button" class="btn btn-warning btn-lg text-uppercase text-dark fw-semibold d-block mt-4 mb-2 mx-auto" data-bs-toggle="modal" data-bs-target="#bookingModal">Записаться</button>
      </div>
      <!-- Map -->
      <div class="container-fluid p-0">
        <iframe class="m-0 p-0" src="https://yandex.ru/map-widget/v1/?um=constructor%3A97456bfd09a985de69f87d2e0db09b31edfe50ba3ef01dcb8817164401067dbb&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
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