<?php

$data = $_POST;

if ($data) {

	if ($data['checkbox'] == 'on') {

    	$to = $data['email'];
		$subject = 'Запись на консультацию';
		$message = "
			<html>
			<head>
			  <title>Запись на консультацию</title>
			</head>
			<body>
			  <h1 style='text-align: center;'>Здравствуйте!</h1>
			  <p>" . $data['name'] . ", мы рады, что вы оставили заявку на консультацию. В скором времени с вами свяжется наш менеджер!</p>
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

} else {
	header("Location: ../index.php?errorsubmit"); 
}
?>