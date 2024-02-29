<head>
      <?php
          $title = 'Главный'; 
          require 'includes/css.php';
          require 'includes/database.php';
      ?>
  </head>

      <?php require 'includes/header.php'; ?>
      <?php require 'includes/vk.php'; ?>

  <body>
    <main class="container">
    <div class="col-md-15">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Владимир Владимирович Путин</strong>
          <h6 class="mb-0">"Каждый ребенок может найти в Российском движении детей и молодежи то, что ему по душе. В этом есть и ключевой смысл движения, повторю еще раз, - помочь детям, подросткам, молодым людям раскрыть свои способности, сильные стороны, найти свой собственный путь в жизни. И именно в этом - залог успешного будущего нашей страны", - заявил Владимир Путин.</h6>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="assets/banners/putin.jpg" alt="Placeholder" width="250" height="250">
        </div>
      </div>
    </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://будьвдвижении.рф/">
          <img src="../assets/banners/rddm.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://большаяперемена.онлайн/">
          <img src="../assets/banners/bp.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
    <?php require 'includes/footer.php' ?>
    </main>
  </body>