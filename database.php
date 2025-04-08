<?php
// Включаем отображение ошибок для отладки
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Параметры подключения к базе данных
$host = 'localhost';
$db_name = 'vovanikul3';
$username = 'vovanikul3';
$password = 'h1n$n84kAo3gu1kh';
$charset = 'utf8mb4';

try {
    // Создаем DSN для PDO
    $dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
    
    // Опции PDO для обработки ошибок и настройки соединения
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
    
    // Создаем экземпляр PDO
    $pdo = new PDO($dsn, $username, $password, $options);
    
    // Возвращаем объект подключения
    return $pdo;
} catch (PDOException $e) {
    // В случае ошибки выводим сообщение и прекращаем выполнение скрипта
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
    // Возвращаем null вместо прекращения выполнения скрипта
    return null;
}
?>

