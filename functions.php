<?php

define('B_THEME_ROOT', get_template_directory_uri());
define('B_IMG_DIR', B_THEME_ROOT . '/assets/images');

add_action( 'wp_enqueue_scripts', 'strategy_assets' );
function strategy_assets()  {
    wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/style/css/style.min.css');

    wp_enqueue_style( 'mediacss', get_template_directory_uri() . '/assets/style/css/media.min.css');

    wp_enqueue_style( 'remplatescss', get_template_directory_uri() . '/assets/style/css/template-classes.min.css');

    wp_enqueue_style( 'splide-style', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css');

    wp_enqueue_style( 'font-style', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');

    wp_enqueue_style( 'intel-input-style', 'https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/css/intlTelInput.css');
    
    wp_enqueue_script( 'intel-input-script', 'https://cdn.jsdelivr.net/npm/intl-tel-input@19.5.6/build/js/intlTelInput.min.js', array(), '20151215', true);
    
    wp_enqueue_script( 'script-all', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true);
    
    wp_enqueue_script( 'script-slider', 'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js', array(), '20151215', true);



}

add_action('wp_ajax_callback_mail', 'callback_mail');
add_action('wp_ajax_nopriv_callback_mail', 'callback_mail');

function callback_mail() {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $pet = sanitize_text_field($_POST['pet']);
    $problemDescription = sanitize_textarea_field($_POST['problemDescription']);
    $petPhoto = sanitize_text_field($_POST['petPhoto']);
    $preferredContact = sanitize_text_field($_POST['preferredContact']);

    // Получение данных изображения
    $petPhoto = $_FILES['petPhoto'];

    // Обработка и сохранение изображения
    $upload_dir = wp_upload_dir();
    $upload_path = $upload_dir['path'] . '/' . basename($petPhoto['name']);
    move_uploaded_file($petPhoto['tmp_name'], $upload_path);

    $to = 'charity.pets.72@gmail.com';
    $subject = 'Subject';

    // Прикрепление изображения к письму
    $attachments = array($upload_path);

    // Создание сообщения
    $message = "Имя: $name<br>";
    $message .= "Email: $email<br>";
    $message .= "Телефон: $phone<br>";
    $message .= "Питомец: $pet<br>";
    $message .= "Описание проблемы: $problemDescription<br>";
    $message .= "Предпочтительный способ связи: $preferredContact<br>";



    remove_all_filters( 'wp_mail_from' );
    remove_all_filters( 'wp_mail_from_name' );

    $headers = array(
		'From:' . $name . ' <' . $email . '>',
		'content-type: text/html',
	);

	// Отправка письма с прикрепленным изображением
    wp_mail($to, $subject, $message, $headers, $attachments);

    // Удаление временного файла изображения
    unlink($upload_path);

    wp_die();
}

function add_favicon() {
    echo '<link rel="icon" href="' . get_stylesheet_directory_uri() . '/assets/images/icons/dogX.png" type="image/png">';
}
add_action('wp_head', 'add_favicon');