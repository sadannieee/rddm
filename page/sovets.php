<html lang="ru" data-bs-theme="light">

<head>
    <?php
        $title = 'Копилка советника ВР'; 
        require '../includes/css.php';
        require '../includes/database.php';
    ?>
</head>

    <?php require '../includes/header.php'; ?>
    <?php require '../includes/vk.php'; ?>

<body>
<main class="container">
<div class="col-md-15">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">Уважаемые Советники ВР! </strong>
          <h6 class="mb-0">Материалы для работы с детьми и молодежью Вы можете найти нажав картинку "Навигаторы детства" День Единых Действий (ДЕД) </h6>
        </div>
        <div class="col-auto d-none d-lg-block">
            <a href="../assets/sovets/sovets.rar">
          <img src="../assets/sovets/sovets.jpg" width="500" height="250">
        </div>
      </div>
    </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://orlyatarussia.ru/">
          <img src="../assets/sovets/orlyata.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://razgovor.edsoo.ru/">
          <img src="../assets/sovets/speak.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
       <?php require '../includes/footer.php' ?>
    </main>
</body>
</html>