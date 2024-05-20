<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получение данных из формы
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Установка адреса получателя и заголовков письма
    $to = "krainukovaleksandr@gmail.com";
    $subject = "Новое сообщение с контактной формы";
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "Content-Type: text/plain; charset=utf-8";

    // Текст письма
    $body = "Имя: $name\nEmail: $email\n\nСообщение:\n$message";

    // Отправка письма
    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено успешно.";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Некорректный метод запроса.";
}
?>
