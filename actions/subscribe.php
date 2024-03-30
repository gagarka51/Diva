<?php 

$data = $_POST;

if ($data['email']) {

   	$to = $data['email'];
	$subject = 'Подписка на рассылку';
	$message = "
			<html>
			<head>
			  <title>Подписка на рассылку</title>
			</head>
			<body>
			  <h1 style='text-align: center;'>Здравствуйте!</h1>
			  <p>Мы очень рады, что вы хотите быть в курсе новостей! Теперь на данную электронную почту вы будете получать новостные рассылки о скидках, акциях и т.д.</p>
			  <p>Если вы не хотите получать рассылку, перейдите по ссылке:</p>
			  <a href='' title='Ссылки нет, но вы держитесь..'>Отписаться</a>

			  <p>Всего доброго! Ваш салон красоты Diva!</p>
			</body>
			</html>
			";

			// Для отправки HTML-письма должен быть установлен заголовок Content-type
			$headers[] = 'MIME-Version: 1.0';
			$headers[] = 'Content-type: text/html; charset=utf-8';

			// Дополнительные заголовки
			$headers[] = 'To: ' . $data['email'];
			$headers[] = "From: Поддержка салона красоты Дива <support-diva@mail.ru>";

			// Отправляем
			mail($to, $subject, $message, implode("\r\n", $headers));
			header("Location: ../index.php?formsubmit"); 
} 
else {
	header("Location: ../index.php?errorsubmit"); 
}

?>