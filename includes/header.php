<!DOCTYPE html>
<html lang="ru" data-bs-theme="light">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="preload" as="image" href="../assets/logotype/ui.jpg">
<title><?php echo isset($title) ? $title : 'По умолчанию'; ?></title>

<div class="container">
  <header class="border-bottom lh-1 py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
    <div class="col-4 pt-1">
        <img src="../assets/logotype/ui.jpg" alt="Логотип" style="max-height: 60px;">
        <img src="../assets/logotype/pervye.jpg" alt="Логотип" style="max-height: 60px;"> 
        <img src="../assets/logotype/orlyata.jpg" alt="Логотип" style="max-height: 40px;">
        <img src="../assets/logotype/rdc.jpg" alt="Логотип" style="max-height: 60px;"> 
        <img src="../assets/logotype/prosv.png" alt="Логотип" style="max-height: 60px;"> 
        <img src="../assets/logotype/detstvo.jpg" alt="Логотип" style="max-height: 60px;"> 
    </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-body-emphasis text-decoration-none" href="#"><h2>Юность Илима - <br>надежда будущего</h2></a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="../dashboard/dashboard.php">Личный кабинет</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link link-body-emphasis" href="../index.php">Главная</a>
      <a class="nav-item nav-link link-body-emphasis" href="../../page/pervye.php">МО Движение Первых</a>
      <a class="nav-item nav-link link-body-emphasis" href="../../page/media.php">Медиа-центры Илима</a>
      <a class="nav-item nav-link link-body-emphasis" href="../../page/volounteer.php">Волонтеры Илима</a>
      <a class="nav-item nav-link link-body-emphasis" href="../../page/bp.php">Большая Перемена</a>
      <a class="nav-item nav-link link-body-emphasis" href="../../page/activities.php">Активности</a>
      <a class="nav-item nav-link link-body-emphasis" href="../../page/sovets.php">Копилка Советника ВР</a>
    </nav>
  </div>
</div>