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
  <title><?php echo $nav_links[2]["title"]; ?></title>
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
          <img class="header__sub-hero-content-img container-fluid d-block m-0 p-0" src="./assets/img/team/team-2.jpg" alt="Services">
        </div>
        <h1 class="text-center text-danger fw-bold"><?php echo $nav_links[2]["title"]; ?></h1>
        <p class="text-center fw-medium fs-4 text-dark mb-0">Полный спектр парикмахерских и косметических услуг</p>
      </div>
    </div>
  </header>
  <!-- Main -->
  <main class="main">
    <!-- Section 1 -->
    <div class="main-content main-content--bg-light container-fluid d-block py-5 px-1">
      <div class="container d-block mx-auto py-4">
        <div class="main-content-description d-block py-2">
          <div class="d-flex align-items-center flex-wrap gap-4 py-3">
            <div class="flex-grow-1 col-lg-2">
              <h2 class="text-center">Подготовительные процедуры</h2>
              <p class="text-center">Мытье головы необходимо перед окрашиванием волос. Процедура выполняется с наклоном головы назад в парикмахерской мойке с удобным креслом. Раковина мойки имеет выемку, дающую возможность клиенту плотно прижать к ней шею и таким образом защитить одежду от протекания.</p>
            </div>
            <div class="flex-grow-1 col-lg-2 rounded">
              <img class="container-fluid d-block mx-auto p-0 rounded" src="./assets/img/services/hair-whashing.jpg" alt="Hair washing">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 2 -->
    <div class="main-content main-content--bg-light container-fluid d-block py-5 px-1">
      <div class="container d-block mx-auto py-4">
        <div class="main-content-description d-block py-2">
          <div class="d-flex align-items-center flex-wrap flex-lg-row-reverse gap-4 py-3">
            <div class="flex-grow-1 col-lg-2">
              <h2 class="text-center">Завивка и Укладка</h2>
              <p class="text-center">Долговременная завивка волос, держится до полугода, локоны, кудри или эффект "пляжной волны". Добавляет объём вашим волосам, романтичности и стиля в образ, не требует сложного ухода, не повреждает волос. В работе используются препараты последнего поколения, современные техники и методики - всегда превосходный результат.</p>
            </div>
            <div class="flex-grow-1 col-lg-2 rounded">
              <img class="container-fluid d-block mx-auto p-0 rounded" src="./assets/img/services/hair-curling-styling.jpg" alt="Hair curling styling">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Section 3 -->
    <div class="main-content main-content--bg-light container-fluid d-block py-5 px-1">
      <div class="container d-block mx-auto py-4">
        <div class="main-content-description d-block py-2">
          <div class="d-flex align-items-center flex-wrap gap-4 py-3">
            <div class="flex-grow-1 col-lg-2">
              <h2 class="text-center">Маникюр и Педикюр</h2>
              <p class="text-center">Аппаратный маникюр и педикюр выравнивание ногтевой пластины. Покрытие ногтей гель-лаком, стразами, оригинальный дизайн, а также снятие гель-лака. Огромный выбор цветных гель-лаков (более 200 цветов). Все инструменты проходят трёх этапную дезинфекцию и стерилизацию.</p>
            </div>
            <div class="flex-grow-1 col-lg-2 rounded">
              <img class="container-fluid d-block mx-auto p-0 rounded" src="./assets/img/services/manicure-pedicure.jpg" alt="Hair curling styling">
            </div>
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