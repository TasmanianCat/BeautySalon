<?php
  include("./includes/nav-links-array.php");
?>

<?php
  include("./includes/team-members-array.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/styles/styles.css">
  <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
  <!-- A Title -->
  <title><?php echo $nav_links[1]["title"]; ?></title>
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
          <img class="header__sub-hero-content-img container-fluid d-block  m-0 p-0" src="./assets/img/team/team.jpg" alt="Team">
        </div>
        <h1 class="text-center text-danger fw-bold"><?php echo $nav_links[1]["title"]; ?></h1>
        <p class="text-center fw-medium fs-4 text-dark mb-0">Уникальные в своем стиле и технике, преданные своему делу мастера позаботятся о вашей внешности</p>
      </div>
    </div>
  </header>
  <!-- Main -->
  <main class="main">
    <div class="main-content main-content--bg-light container-fluid d-block py-4 px-1">
      <div class="container d-block mx-auto py-5">
        <div class="main-content-description d-block mb-5">
          <!-- <h2 class="text-center fw-bold mb-2"><?php echo $nav_links[1]["title"]; ?></h2> -->
          <p class="text-center">Наша команда опытных профессионалов стремится предоставлять высококачественные услуги по уходу за внешностью и уходу за собой. Благодаря многолетнему опыту в парикмахерском деле, маникюре и дизайне ногтей мы гарантируем, что каждый клиент получит исключительный уход и последние тенденции в области красоты.</p>
        </div>

        <div class="d-flex flex-wrap gap-4">
          <?php
            foreach($team_members as $team_member) {
          ?>
            <div class="d-flex flex-column flex-grow-1 shadow-lg col-lg-2 border-secondary-subtle rounded overflow-hidden">
              <div class="d-block container-fluid g-0 mb-4 p-0">
                <img class=" d-block container-fluid g-0 m-0 p-0" src="./assets/img/avatars/<?php echo $team_member["photograph"]; ?>" alt="<?php echo $team_member["name"]; ?>">
              </div>
              <h3 class="text-center mb-1 px-4"><?php echo $team_member["name"]; ?></h3>
              <p class="text-center fw-bold text-secondary mb-4 px-4"><?php echo $team_member["position"]; ?></p>
              <p class="text-center mb-4 px-4"><?php echo $team_member["experience"]; ?></p>
              <!-- Social Medea Icons -->
              <div class="social-media mt-auto mb-4 px-4">
                <div class="social-media-icon">
                  <a href="<?php echo $team_member["vk_url"]; ?>">
                    <img class="social-media-icon-img" src="./assets/img/icons/vk-2.svg" alt="VKontakte">
                  </a>
                </div>
                <div class="social-media-icon">
                  <a href="<?php echo $team_member["whatsapp_url"]; ?>">
                    <img class="social-media-icon-img" src="./assets/img/icons/whatsapp.svg" alt="WhatsApp">
                  </a>
                </div>
                <div class="social-media-icon">
                  <a href="<?php echo $team_member["telegram_url"]; ?>">
                    <img class="social-media-icon-img" src="./assets/img/icons/telegram.svg" alt="Telegram">
                  </a>
                </div>
                <div class="social-media-icon">
                  <a href="<?php echo $team_member["phone_url"]; ?>">
                    <img class="social-media-icon-img" src="./assets/img/icons/call.svg" alt="Phone Call">
                  </a>
                </div>
              </div>
            </div>
            
          <?php
            }
          ?>
        </div>

        <div class="main-content-description d-block mt-5">
          <h3 class="text-center">Эксперты по волосам</h3>
          <p class="text-center mb-4">От стильных повседневных стрижек до элегантных свадебных причесок и профессионального окрашивания волос - наши опытные парикмахеры привносят креативность и точность в каждый прием. Будь то мужская, женская или детская стрижка, мы адаптируем каждую услугу в соответствии с вашим уникальным стилем.</p>
          <h3 class="text-center">Специалисты по ногтям</h3>
          <p class="text-center mb-4">Имея большой опыт в аппаратном маникюре, нанесении гель-лака и креативном дизайне ногтей, наши талантливые специалисты по ногтям здесь, чтобы придать вашим рукам безупречный и модный вид.</p>
          <h3 class="text-center">Мастера депеляции и эпиляции</h3>
          <p class="text-center mb-4">Мастера постоянно посещают мастер-классы и совершенствуют свои навыки. Всегда работают на качество и результат, а также имеют медицинское образование.</p>
          <p class="text-center mb-0">В нашем салоне мы объединяем страсть, мастерство и новейшие методики, чтобы помочь вам выглядеть и чувствовать себя наилучшим образом!</p>
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