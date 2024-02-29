<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../auth/login.php');
    exit();
}

// Здесь ты можешь подключить свои файлы стилей и скриптов, если необходимо

// Вывод приветствия и информации о пользователе
$nickname = isset($_SESSION['user_nickname']) ? $_SESSION['user_nickname'] : 'Guest';
$role = isset($_SESSION['user_role']) ? $_SESSION['user_role'] : 'Unknown';

echo '<h1>Welcome to your Dashboard, ' . $nickname . '!</h1>';
echo '<p>Your Role: ' . $role . '</p>';

// В этой секции ты можешь добавить дополнительный функционал личного кабинета

// Пример: кнопка для выхода из учетной записи
echo '<form action="../logout.php" method="POST">';
echo '<button type="submit">Logout</button>';
echo '</form>';

// Здесь ты можешь добавить блоки для других функций личного кабинета

// ...

// Завершаем HTML-код
?>
