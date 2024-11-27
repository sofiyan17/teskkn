<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- tes style -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> -->

    <!--========== BOX ICONS ==========-->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />

    <!--========== CSS ==========-->
    <link rel="stylesheet" href="assets/css/styless.css" />

    <title>KKN 28 Universitas Hamzanwadi</title>
  </head>
  <body>
    <!--========== SCROLL TOP ==========-->
    <a href="#" class="scrolltop" id="scroll-top">
      <i class="bx bx-chevron-up scrolltop__icon"></i>
    </a>

    <!--========== HEADER ==========-->
    <header class="l-header" id="header">
      <nav class="nav bd-container">
        <a href="index.php" class="nav__logo">KKN 28 Universitas Hamzanwadi</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">

            <li><i class="bx bx-moon change-theme" id="theme-button"></i></li>
          </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-menu"></i>
        </div>
      </nav>
    </header>

    <main class="l-main">
      <!--========== CONTACT US ==========-->
      <section class="contact section bd-container" id="contact">
        <div class="contact__container">
          <div class="contact__data">
            <span class="section-subtitle">Pelayanan</span>
            <h2 class="section-title">Pelayanan Administratif Desa Kalijaga</h2>

          <!-- tes form contact -->

            <div class="row justify-content-center pt-4">
              <div class="col-12 col-md-8">
                <form action="login_process.php" method="POST">
                  <div class="row">
                    <div class="col">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                  </div>
  
                  <div class="row mt-4">
                    <div class="col">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
  
                  <div class="row mt-4">
                    <div class="col text-center">
                      <button type="submit" class="button">Login</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!--========== FOOTER ==========-->
    <footer class="footer section bd-container">
      <p class="footer__copy">Copyright &#169; 2024 KKN 28 Bina Desa Universistas Hamzanwadi</p>
    </footer>

    <!--========== SCROLL REVEAL ==========-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--========== MAIN JS ==========-->
    <script src="assets/js/main.js"></script>
  </body>
</html>
