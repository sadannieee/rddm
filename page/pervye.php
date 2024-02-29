<html lang="ru" data-bs-theme="light">

<head>
    <?php
        $title = 'МО Движение Первых'; 
        require '../includes/css.php';
        require '../includes/database.php';
    ?>
</head>

    <?php require '../includes/header.php'; ?>
    <?php require '../includes/vk.php'; ?>

<body>
    <main class="container">
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://vk.com/mypervie_ui">
          <img src="../assets/banners/rddm_ui.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://vk.com/smc_ui">
          <img src="../assets/banners/ui_smc.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
       <?php require '../includes/footer.php' ?>
    </main>
</body>
</html>