<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Diva</title>
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/media.css">
</head>
<body>
	<!-- Шапка !-->
	<div class="header">
		<div class="logo-block">
			<a href="index.php" class="logo">
					Diva
			</a>
		</div>
		<ol class="menu">
			<div class="home">
				<li><a href="#main">Главная</a></li>
			</div>
			<div class="about-us">
				<li><a href="#about">О нас</a></li>
			</div>	
			<div class="service">
				<li><a href="#our-service">Наши услуги</a></li>
			</div>
		</ol>
		<div class="btn-menu">
			<button><img src="assets/images/icon-burger.png" alt="иконка меню гамбургера"></button>
			<!-- Иконка взята с сайта https://icons8.com !-->
		</div>
		<div class="but">
			<input type="submit" value="Заказать звонок" class="calling" id="modal-button">
		</div>
	</div>

	<!-- Поп-ап (модальное окно) !-->
	<div id="modal-back" class="modal">
		<div class="modal-window">
			<div class="modal-header">
				<span class="close">×</span>
				<h2>Diva</h2>
			</div>
			<div class="modal-container">
				<form action="actions/send.php" class="form-contact" method="post">
					<div class="name-field">
						<div class="name-label">
							<label for="">Ваше имя:</label>
						</div>
						<div class="name-input">
							<input type="text" class="input" placeholder="Напишите ваше имя" name="name" id="name" required>
						</div>
					</div>
					<div class="phone-field">
						<div class="phone-label">
							<label for="">Ваш номер телефона:</label>
						</div>
						<div class="phone-input">
							<input type="tel" class="input" placeholder="Напишите ваш номер телефона" name="phone" id="phone" pattern="+7-[0-9]{3}-[0-9]{3}\s[0-9]{2}\s[0-9]{2}" required>
						</div>
					</div>
					<div class="email-field">
						<div class="email-label">
							<label for="">Ваш e-mail:</label>
						</div>
						<div class="email-input">
							<input type="email" class="input" placeholder="Напишите вашу электронную почту" name="email" required>
						</div>
					</div>
					<div class="access">
						<div class="access-checkbox">
							<input type="checkbox" name="checkbox" id="check" required>
							<label for="check">я согласна на <a href="assets/file/user_agreement.txt" download="Пользовательское соглашение">обработку персональных данных</a></label>
						</div>
					</div>
					<div class="btn-form">
						<input type="submit" class="btn-send" value="Отправить">
					</div>
				</form>
				<?php
					if(isset($_GET['formsubmit'])) echo "<script>
						alert('Форма была отправлена!');
						baseUrl = window.location.href.split('?')[0];
						window.history.pushState('name', '', baseUrl);
						</script>";
					if (isset($_GET['errorsubmit'])) echo "<script>
						alert('Форма не была отправлена!');
						baseUrl = window.location.href.split('?')[0];
						window.history.pushState('name', '', baseUrl);
						</script>";
				?>
			</div>
		</div>
	</div>

	<!-- Основная информация !-->
	<div class="container">
		<div class="block-lady">
			<div class="img-lady">
				<img src="assets/images/girl.png" alt="Изображение от lookstudio на Freepik" class="lady">
			</div>
			
			<div class="lady-info">
				<h1 id="main">НАШ САЛОН ЭТО НЕ ПРОСТО <span>СХОДИЛА</span> И <span>ПОТРАТИЛА</span> ДЕНЬГИ</h1>
				<p class="information">В первую очередь, это профессионалы своего дела с 50-тилетним стажем. А уже потом, классное место для времяпровождения со своими подружками. </p>
				<p class="maybe-inform">Вы ещё не уверены, что хотите стать счастливой? Листайте дальше</p>
				<div class="button">
					<input type="submit" value="Записаться на консультацию" class="button-call" id="modal-btn">
				</div>
			</div>
		</div>

		<div class="small-about">
			<h2 id="about">Мы — это</h2>
			<div class="about-info">
				<img src="assets/images/team.jpg" alt="Два стилиста">
				<p>Восхитительный коллектив с сотрудниками, профессиональные качества которых помогают достичь хорошего результата. Мы, словно большая дружная семья, где любой почувствует себя в надежных руках.</p>
			</div>
			<div class="about-info two-block">
				<p>Каждый член нашей команды знает свою роль и ответственно подходит к своему делу, стараясь довести его с успехом до конца. </p>
				<img src="assets/images/teammate.jpg" alt="Девушка стилист и клиентка">
			</div>
		</div>
	</div>

	<div class="advantages-back">
			<h3>Наши преимущества</h3>
			<div class="advantages">
				<div class="advantage">
					<img src="assets/images/quality.png" alt="Качество">
					<p>Качество</p>
				</div>
				<div class="advantage">
					<img src="assets/images/speed.png" alt="Скорость">
					<p>Скорость</p>
				</div>
				<div class="advantage">
					<img src="assets/images/motivation.png" alt="Кулак">
					<p>Профессионализм</p>
				</div>
				<div class="advantage">
					<img src="assets/images/love.png" alt="Добро">
					<p>Доброжелательность</p>
				</div>
			</div>
	</div>

	<div class="services">
		<h3 id="our-service">Наши услуги</h3>
		<div class="services-blocks">
			<div class="service-block">
				<img src="assets/images/massage.jpg" alt="picture engin akyurt massage">
				<p>Массаж</p>
			</div>
			<div class="service-block">
				<img src="assets/images/epilation.jpg" alt="picture vlad egorov epilation">
				<p>Эпиляция</p>
			</div>
			<div class="service-block right-block">
				<img src="assets/images/manicure.jpg" alt="picture giorgio trovato epilation">
				<p>Маникюр и педикюр</p>
			</div>
			<div class="service-block">
				<img src="assets/images/parikmaher.jpg" alt="picture Giselle Lazcano">
				<p>Парикмахерские услуги</p>
			</div>
			<div class="service-block">
				<img src="assets/images/peeling.jpg" alt="picture Raphael Lovaski">
				<p>Пилинг</p>
			</div>
			<div class="service-block right-block">
				<img src="assets/images/aromatherapy.jpg" alt="picture volant">
				<p>Ароматерапия</p>
			</div>
		</div>
		<div class="more">
			<button class="more-btn" id="btn-more">Подробнее..</button>
		</div>
	</div>

	<!-- Окно Услуг !-->

	<div id="services-modal" class="modal-services">
		<div class="services-window">
			<div class="modal-header service-window">
				<span class="close-services">×</span>
				<h2>Diva</h2>
			</div>
			<div class="services-modal-container">
				<h3>Наши услуги</h3>
				<div class="services-list">
					<div class="massage">
						<h4>Массаж</h4>
						<div class="service-point">
							<p>Классический</p>
							<p>600</p>
						</div>
						<div class="service-point">
							<p>Антицеллюлитный</p>
							<p>800</p>
						</div>
						<div class="service-point">
							<p>Детский</p>
							<p>300</p>
						</div>
					</div>

					<div class="epilation">
						<h4>Эпиляция</h4>
						<div class="service-point">
							<p>Подмышечки</p>
							<p>500</p>
						</div>
						<div class="service-point">
							<p>Бикини</p>
							<p>600/800/1000</p>
						</div>
						<div class="service-point">
							<p>Живот</p>
							<p>150/500</p>
						</div>
						<div class="service-point">
							<p>Руки</p>
							<p>1100</p>
						</div>
						<div class="service-point">
							<p>Голени/Бедра</p>
							<p>2000</p>
						</div>
						<div class="service-point">
							<p>Ноги полностью</p>
							<p>3500</p>
						</div>
					</div>
					
					<div class="manicure">
						<h4>Маникюр</h4>
						<div class="service-point">
							<p>Классический</p>
							<p>400</p>
						</div>
						<div class="service-point">
							<p>Комбинированный</p>
							<p>600</p>
						</div>
						<div class="service-point">
							<p>С покрытием гель-лак</p>
							<p>800</p>
						</div>
						<div class="service-point">
							<p>Дизайн ногтей (за ед.)</p>
							<p>50</p>
						</div>
						<div class="service-point">
							<p>Покрытие чем угодно</p>
							<p>200</p>
						</div>
						<div class="service-point">
							<p>Ремонт (за ед.)</p>
							<p>50</p>
						</div>
						<div class="service-point">
							<p>Снятие покрытия</p>
							<p>200</p>
						</div>
					</div>
					
					<div class="pedicure">
						<h4>Педикюр</h4>
						<div class="service-point">
							<p>Классический</p>
							<p>800</p>
						</div>
						<div class="service-point">
							<p>Комбинированный</p>
							<p>1000</p>
						</div>
						<div class="service-point">
							<p>Аппаратный</p>
							<p>800</p>
						</div>
						<div class="service-point">
							<p>Вросший ноготь</p>
							<p>300</p>
						</div>
						<div class="service-point">
							<p>Удаление мозолей</p>
							<p>200</p>
						</div>
						<div class="service-point">
							<p>Ремонт (за ед.)</p>
							<p>50</p>
						</div>
						<div class="service-point">
							<p>Снятие покрытия/Покрытие покрытием</p>
							<p>500</p>
						</div>
					</div>

					<div class="hairdressing-services">
						<h4>Парикмахерские услуги</h4>
						<div class="service-point">
							<p>Мелирование</p>
							<p>900</p>
						</div>
						<div class="service-point">
							<p>Окрашивание</p>
							<p>800</p>
						</div>
						<div class="service-point">
							<p>Тонирование</p>
							<p>800</p>
						</div>
						<div class="service-point">
							<p>Женская стрижка</p>
							<p>от 400</p>
						</div>
						<div class="service-point">
							<p>Детская стрижка</p>
							<p>от 200</p>
						</div>
						<div class="service-point">
							<p>Стрижка челки</p>
							<p>от 50</p>
						</div>
						<div class="service-point">
							<p>Укладка волос после стрижки</p>
							<p>от 250</p>
						</div>
						<div class="service-point">
							<p>Укладка волос средней длины</p>
							<p>700</p>
						</div>
						<div class="service-point">
							<p>Укладка коротких волос</p>
							<p>300</p>
						</div>
					</div>

					<div class="peeling">
						<h4>Пилинг</h4>
						<div class="service-point">
							<p>Миндальный</p>
							<p>1000</p>
						</div>
						<div class="service-point">
							<p>Гликолевый</p>
							<p>1200</p>
						</div>
						<div class="service-point">
							<p>Молочный</p>
							<p>1200</p>
						</div>
						<div class="service-point">
							<p>Ретиноевый</p>
							<p>2500</p>
						</div>
						<div class="service-point">
							<p>Салициловый</p>
							<p>1000</p>
						</div>
						<div class="service-point">
							<p>Джесснера</p>
							<p>2500</p>
						</div>
					</div>

					<div class="aromatherapy">
						<h4>Ароматерапия</h4>
						<div class="service-point">
							<p>Аромасауна</p>
							<p>1500</p>
						</div>
						<div class="service-point">
							<p>Аромамассажная процедура</p>
							<p>1200</p>
						</div>
						<div class="service-point">
							<p>Ароматерапевтический массаж</p>
							<p>1200</p>
						</div>
						<div class="service-point">
							<p>Уход за волосами аромамаслами</p>
							<p>1450</p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<p>Появились вопросы? <br>Мы с радостью на них ответим: +7 (000) 000 00-00</p>
			</div>
		</div>
	</div>

	<div class="call-block">
		<h3>Становитесь лучше с нами</h3>
        <div class="connection-back">
           <p>Подпишитесь на рассылку, чтобы быть в курсе событий</p>
            <form class="connection" action="actions/subscribe.php" method="post">
			    	<div class="connect-input">
				 	   <input type="text" placeholder="Напишите свой e-mail" name="email">
			    	</div>
			    	<div class="connect-button">
				 	   <input type="submit" value="Отправить" name="connect-btn">
			    	</div>
		    	</form>
        </div>        
		
	</div>
	<!-- Подвал !-->
	<div class="footer">
		<div class="footer-info">
			<div class="footer-menu">
				<ul class="menu-footer">
					<div class="home-footer">
						<li><a href="#main">Главная</a></li>
					</div>
					<div class="service-footer">
						<li><a href="#about">О нас</a></li>
					</div>	
					<div class="about-us-footer">
						<li><a href="#our-service">Наши услуги</a></li>
					</div>
				</ul>
			</div>
			
		
			<div class="contacts-footer">
				<div class="address">
					<h4>Вы можете найти нас по адресу:</h4>
					<p>г. Воронеж, ул. Пешестрелецкая, д. 25</p>
				</div>
				<div class="call-number">
					<h4>Или связаться по телефону:</h4>
					<p>+7 (000) 000 00-00</p>
				</div>
			</div>
		</div>
	</div>
	<script defer src="assets/js/script.js"></script>
	<script defer src="assets/js/menu.js"></script>
	<script defer src="assets/js/validation-form.js"></script>
	<script defer src="assets/js/services.js"></script>
</body>
</html>