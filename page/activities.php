<html lang="ru" data-bs-theme="light">

<head>
    <?php
        $title = 'Активности'; 
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
          <strong class="d-inline-block mb-2 text-success-emphasis"></strong>
          <h6 class="mb-0">Не упусти шанс побывать на профильной смене! Тебя ждут новые знакомства, необыкновенные открытия, незабываемые мероприятия, увлекательные дискуссии и классные встречи. Спросишь ГДЕ? <br><br><br>ВДЦ  "АРТЕК", ВДЦ "ОРЛЕНОК", ВДЦ "СМЕНА", ВДЦ "ОКЕАН" и конечно РДЦ "ПЕРСЕЙ". <br><br><br>Участвуй, выигрывай, приезжай и приглашай друзей!</h6>
        </div>      
        <div class="col-auto d-none d-lg-block">
          <img src="../assets/activities/banner.jpg" alt="Placeholder" width="500" height="250">
        </div>
      </div>

    </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://artek.org">
          <img src="../assets/activities/artek.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://okean.org">
          <img src="../assets/activities/ocean.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://center-orlyonok.ru">
          <img src="../assets/activities/orlenok.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://xn--80ajufr.xn--d1acj3b">
          <img src="../assets/activities/smena.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
      <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
        <div class="col-lg-6 px-0">
          <a href="https://perseusirk.ru">
          <img src="../assets/activities/persey.jpg" style="width: 1200px; height:500px"></a>
        </div>
      </div>
       <?php require '../includes/footer.php' ?>
    </main>
</body>
</html>