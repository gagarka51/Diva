let btn_menu = document.querySelector('.btn-menu');
let menu = document.querySelector('.menu');
let body = document.querySelector('body');
	console.log(body)

	btn_menu.addEventListener('click', function() {

		menu.classList.toggle('open');
		btn_menu.classList.toggle('active');
	})