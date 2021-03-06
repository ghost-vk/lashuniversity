<?php $login_class = "";
if ( isset($_GET['login']) ) {
	if ($_GET['login'] === "true") {
		$login_class = "active"; // Show recovery popup if right pair login key
	}
} ?>
<div class="moroz-popup <?php echo $login_class; ?>" id="popup-login">
	<div class="moroz-popup__window" data-action="authentication">
		<div class="moroz-popup__close-container">
			<div class="moroz-popup__close-btn"></div>
		</div>
		<div class="moroz-popup__title">
			<p>ВХОД</p>
		</div>
		
		<div class="moroz-popup__form">
			<div class="moroz-popup__input-box">
				<input class="email-input" type="text" placeholder="Email" data-name="email">
				<span class="error">!Введите действительный email адрес</span>
			</div>
			<div class="moroz-popup__input-box">
				<input class="password-login-input" type="password" placeholder="Пароль" data-name="password">
				<span class="error">!Не правильный пароль</span>
				
				<svg class="cursor-pointer eye-toggler visible" width="19" height="6" viewBox="0 0 19 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.4246 1.0515L17.5539 0.969172C17.8056 0.801214 17.8648 0.469603 17.6905 0.228352C17.5148 -0.0150493 17.1691 -0.0699825 16.9226 0.0956798C8.29805 5.91294 2.01995 0.381967 1.7562 0.144302C1.53364 -0.0566439 1.18293 -0.0464608 0.975677 0.166964C0.767388 0.381249 0.777497 0.716448 0.997829 0.918111C1.00972 0.929012 1.20612 1.10242 1.56457 1.35902L0.459786 3.11676C0.302194 3.36747 0.384855 3.69478 0.644882 3.84811C0.733788 3.89974 0.834736 3.92571 0.932413 3.92571C1.1181 3.92571 1.29889 3.83463 1.404 3.67069L2.48425 1.95339C3.08994 2.3091 3.8666 2.69751 4.79193 3.02568L4.25954 4.74283C4.17137 5.02553 4.33625 5.32043 4.6275 5.40448L4.78628 5.42714C5.02163 5.42714 5.24166 5.27797 5.31332 5.04719L5.84051 3.35356C6.69463 3.57889 7.65014 3.73107 8.68133 3.76722V5.46802C8.68133 5.76234 8.92768 6 9.23275 6C9.53753 6 9.78403 5.76234 9.78403 5.46802V3.75775C10.6838 3.71013 11.6374 3.56082 12.633 3.28687L13.3117 5.01348C13.3963 5.22619 13.6059 5.35643 13.8273 5.35643L14.0224 5.32286C14.3071 5.21845 14.4514 4.91165 14.3432 4.63712L13.6823 2.95482C14.5889 2.62995 15.526 2.20224 16.4939 1.63483L17.3872 2.78529C17.4961 2.92427 17.6621 2.99886 17.8281 2.99886C17.9437 2.99886 18.0592 2.96501 18.1584 2.892C18.4028 2.71558 18.4522 2.38211 18.2702 2.14731L17.4246 1.0515Z" fill="#BDBDBD"/>
				</svg>
				<svg class="cursor-pointer eye-toggler hidden" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.8856 5.6338C17.7248 5.40371 13.8934 0 8.99992 0C4.10647 0 0.274852 5.40371 0.114223 5.63358C-0.0380743 5.85186 -0.0380743 6.14792 0.114223 6.3662C0.274852 6.59629 4.10647 12 8.99992 12C13.8934 12 17.7248 6.59625 17.8856 6.36638C18.0381 6.14814 18.0381 5.85186 17.8856 5.6338ZM8.99992 10.7586C6.26642 10.7586 3.81047 8.69603 2.38009 7.18782C1.74438 6.51753 1.74381 5.48116 2.37909 4.81047C3.80756 3.30238 6.26089 1.24137 8.99992 1.24137C11.7335 1.24137 14.1894 3.30387 15.6198 4.8122C16.2555 5.48248 16.256 6.51881 15.6208 7.18947C14.1923 8.69756 11.739 10.7586 8.99992 10.7586Z" fill="#333333"/>
					<path d="M8.99991 2.27588C7.03671 2.27588 5.43945 3.94657 5.43945 6.00003C5.43945 8.05349 7.03671 9.72418 8.99991 9.72418C10.9631 9.72418 12.5604 8.05349 12.5604 6.00003C12.5604 3.94657 10.9631 2.27588 8.99991 2.27588ZM8.99991 8.48277C7.69104 8.48277 6.6263 7.36904 6.6263 6.00003C6.6263 4.63102 7.69108 3.51729 8.99991 3.51729C10.3087 3.51729 11.3735 4.63102 11.3735 6.00003C11.3735 7.36904 10.3088 8.48277 8.99991 8.48277Z" fill="#333333"/>
				</svg>
			
			</div>
		</div>
		
		<div class="moroz-popup__forgot">
			<a class="gray-link open-binded" data-popup="popup-recovery" href="#">Восстановить пароль</a>
		</div>
		
		<div class="moroz-popup__submit">
			<a href="#" class="btnRed btn-big popup-submit">Войти</a>
			<div class="moroz-popup__loader">
				<i class="fas fa-spinner"></i>
			</div>
		</div>
	
	</div>
</div>

<div class="moroz-popup" id="popup-recovery">
	<div class="moroz-popup__window" data-action="send_reset_link">
		<div class="moroz-popup__close-container">
			<div class="moroz-popup__close-btn"></div>
		</div>
		<div class="moroz-popup__title">
			<p>ВОССТАНОВЛЕНИЕ<br />ПАРОЛЯ</p>
		</div>
		
		<div class="moroz-popup__form">
			<div class="moroz-popup__input-box">
				<input class="email-input" type="text" placeholder="Email" data-name="email">
				<span class="error">!Введите ваш email</span>
			</div>
		</div>
		
		<div class="moroz-popup__submit">
			<a href="#" class="btnRed btn-big popup-submit">Отправить</a>
			<div class="moroz-popup__loader">
				<i class="fas fa-spinner"></i>
			</div>
		</div>
	</div>
</div>

<?php $popup_class = "";
if ( isset($_GET['action']) ) {
	if ( $_GET['action'] == "rp" ) {
		$key = $_GET['key'];
		$login = $_GET['login'];
		
		$is_ok = check_password_reset_key($key, $login);
		
		if ( ! is_wp_error($is_ok) ) {
			$popup_class = "active"; // Show recovery popup if right pair login key
		}
	}
} ?>
<div class="moroz-popup <?php echo $popup_class; ?>" id="popup-new-password">
	<div class="moroz-popup__window" data-action="reset_password">
		<div class="moroz-popup__close-container">
			<div class="moroz-popup__close-btn"></div>
		</div>
		<div class="moroz-popup__title">
			<p>ИЗМЕНЕНИЕ<br />ПАРОЛЯ</p>
		</div>
		
		<div class="moroz-popup__form">
			<div class="moroz-popup__input-box">
				<input class="password-input" type="password" placeholder="Новый пароль" data-name="password">
				<span class="error">!Пароль должен содержать минимум 8 символов</span>
				<svg class="cursor-pointer eye-toggler visible" id="" width="19" height="6" viewBox="0 0 19 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.4246 1.0515L17.5539 0.969172C17.8056 0.801214 17.8648 0.469603 17.6905 0.228352C17.5148 -0.0150493 17.1691 -0.0699825 16.9226 0.0956798C8.29805 5.91294 2.01995 0.381967 1.7562 0.144302C1.53364 -0.0566439 1.18293 -0.0464608 0.975677 0.166964C0.767388 0.381249 0.777497 0.716448 0.997829 0.918111C1.00972 0.929012 1.20612 1.10242 1.56457 1.35902L0.459786 3.11676C0.302194 3.36747 0.384855 3.69478 0.644882 3.84811C0.733788 3.89974 0.834736 3.92571 0.932413 3.92571C1.1181 3.92571 1.29889 3.83463 1.404 3.67069L2.48425 1.95339C3.08994 2.3091 3.8666 2.69751 4.79193 3.02568L4.25954 4.74283C4.17137 5.02553 4.33625 5.32043 4.6275 5.40448L4.78628 5.42714C5.02163 5.42714 5.24166 5.27797 5.31332 5.04719L5.84051 3.35356C6.69463 3.57889 7.65014 3.73107 8.68133 3.76722V5.46802C8.68133 5.76234 8.92768 6 9.23275 6C9.53753 6 9.78403 5.76234 9.78403 5.46802V3.75775C10.6838 3.71013 11.6374 3.56082 12.633 3.28687L13.3117 5.01348C13.3963 5.22619 13.6059 5.35643 13.8273 5.35643L14.0224 5.32286C14.3071 5.21845 14.4514 4.91165 14.3432 4.63712L13.6823 2.95482C14.5889 2.62995 15.526 2.20224 16.4939 1.63483L17.3872 2.78529C17.4961 2.92427 17.6621 2.99886 17.8281 2.99886C17.9437 2.99886 18.0592 2.96501 18.1584 2.892C18.4028 2.71558 18.4522 2.38211 18.2702 2.14731L17.4246 1.0515Z" fill="#BDBDBD"/>
				</svg>
				<svg class="cursor-pointer eye-toggler hidden" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.8856 5.6338C17.7248 5.40371 13.8934 0 8.99992 0C4.10647 0 0.274852 5.40371 0.114223 5.63358C-0.0380743 5.85186 -0.0380743 6.14792 0.114223 6.3662C0.274852 6.59629 4.10647 12 8.99992 12C13.8934 12 17.7248 6.59625 17.8856 6.36638C18.0381 6.14814 18.0381 5.85186 17.8856 5.6338ZM8.99992 10.7586C6.26642 10.7586 3.81047 8.69603 2.38009 7.18782C1.74438 6.51753 1.74381 5.48116 2.37909 4.81047C3.80756 3.30238 6.26089 1.24137 8.99992 1.24137C11.7335 1.24137 14.1894 3.30387 15.6198 4.8122C16.2555 5.48248 16.256 6.51881 15.6208 7.18947C14.1923 8.69756 11.739 10.7586 8.99992 10.7586Z" fill="#333333"/>
					<path d="M8.99991 2.27588C7.03671 2.27588 5.43945 3.94657 5.43945 6.00003C5.43945 8.05349 7.03671 9.72418 8.99991 9.72418C10.9631 9.72418 12.5604 8.05349 12.5604 6.00003C12.5604 3.94657 10.9631 2.27588 8.99991 2.27588ZM8.99991 8.48277C7.69104 8.48277 6.6263 7.36904 6.6263 6.00003C6.6263 4.63102 7.69108 3.51729 8.99991 3.51729C10.3087 3.51729 11.3735 4.63102 11.3735 6.00003C11.3735 7.36904 10.3088 8.48277 8.99991 8.48277Z" fill="#333333"/>
				</svg>
			</div>
			<div class="moroz-popup__input-box">
				<input class="password-repeat-input" type="password" placeholder="Повторите пароль" data-name="password-repeat">
				<span class="error">!Указанные пароли не совпадают</span>
				<svg class="cursor-pointer eye-toggler visible" width="19" height="6" viewBox="0 0 19 6" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.4246 1.0515L17.5539 0.969172C17.8056 0.801214 17.8648 0.469603 17.6905 0.228352C17.5148 -0.0150493 17.1691 -0.0699825 16.9226 0.0956798C8.29805 5.91294 2.01995 0.381967 1.7562 0.144302C1.53364 -0.0566439 1.18293 -0.0464608 0.975677 0.166964C0.767388 0.381249 0.777497 0.716448 0.997829 0.918111C1.00972 0.929012 1.20612 1.10242 1.56457 1.35902L0.459786 3.11676C0.302194 3.36747 0.384855 3.69478 0.644882 3.84811C0.733788 3.89974 0.834736 3.92571 0.932413 3.92571C1.1181 3.92571 1.29889 3.83463 1.404 3.67069L2.48425 1.95339C3.08994 2.3091 3.8666 2.69751 4.79193 3.02568L4.25954 4.74283C4.17137 5.02553 4.33625 5.32043 4.6275 5.40448L4.78628 5.42714C5.02163 5.42714 5.24166 5.27797 5.31332 5.04719L5.84051 3.35356C6.69463 3.57889 7.65014 3.73107 8.68133 3.76722V5.46802C8.68133 5.76234 8.92768 6 9.23275 6C9.53753 6 9.78403 5.76234 9.78403 5.46802V3.75775C10.6838 3.71013 11.6374 3.56082 12.633 3.28687L13.3117 5.01348C13.3963 5.22619 13.6059 5.35643 13.8273 5.35643L14.0224 5.32286C14.3071 5.21845 14.4514 4.91165 14.3432 4.63712L13.6823 2.95482C14.5889 2.62995 15.526 2.20224 16.4939 1.63483L17.3872 2.78529C17.4961 2.92427 17.6621 2.99886 17.8281 2.99886C17.9437 2.99886 18.0592 2.96501 18.1584 2.892C18.4028 2.71558 18.4522 2.38211 18.2702 2.14731L17.4246 1.0515Z" fill="#BDBDBD"/>
				</svg>
				<svg class="cursor-pointer eye-toggler hidden" width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.8856 5.6338C17.7248 5.40371 13.8934 0 8.99992 0C4.10647 0 0.274852 5.40371 0.114223 5.63358C-0.0380743 5.85186 -0.0380743 6.14792 0.114223 6.3662C0.274852 6.59629 4.10647 12 8.99992 12C13.8934 12 17.7248 6.59625 17.8856 6.36638C18.0381 6.14814 18.0381 5.85186 17.8856 5.6338ZM8.99992 10.7586C6.26642 10.7586 3.81047 8.69603 2.38009 7.18782C1.74438 6.51753 1.74381 5.48116 2.37909 4.81047C3.80756 3.30238 6.26089 1.24137 8.99992 1.24137C11.7335 1.24137 14.1894 3.30387 15.6198 4.8122C16.2555 5.48248 16.256 6.51881 15.6208 7.18947C14.1923 8.69756 11.739 10.7586 8.99992 10.7586Z" fill="#333333"/>
					<path d="M8.99991 2.27588C7.03671 2.27588 5.43945 3.94657 5.43945 6.00003C5.43945 8.05349 7.03671 9.72418 8.99991 9.72418C10.9631 9.72418 12.5604 8.05349 12.5604 6.00003C12.5604 3.94657 10.9631 2.27588 8.99991 2.27588ZM8.99991 8.48277C7.69104 8.48277 6.6263 7.36904 6.6263 6.00003C6.6263 4.63102 7.69108 3.51729 8.99991 3.51729C10.3087 3.51729 11.3735 4.63102 11.3735 6.00003C11.3735 7.36904 10.3088 8.48277 8.99991 8.48277Z" fill="#333333"/>
				</svg>
			</div>
		</div>
		
		<div class="moroz-popup__submit">
			<a href="#" class="btnRed btn-big popup-submit">Сменить пароль</a>
			<div class="moroz-popup__loader">
				<i class="fas fa-spinner"></i>
			</div>
		</div>
	</div>
</div>

<div class="moroz-popup moroz-popup-response" id="popup-response">
	<div class="moroz-popup__window">
		<div class="moroz-popup__close-container">
			<div class="moroz-popup__close-btn"></div>
		</div>
		<div class="moroz-popup__response-wrapper">
			<picture>
				<source type="image/svg+xml" srcset="<?php echo get_template_directory_uri(); ?>/img/icons/letter_response.svg" />
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/letter_response.png" />
			</picture>
			<p class="response-main mb-0 fs-5"></p>
		</div>
	</div>
</div>