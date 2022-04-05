<?php defined('AUTOMAD') or die('Direct access not permitted!');
    require_once(__DIR__.'/snippets/functions.php');
session_start();

if(!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
    echo "<div class='alert alert-primary' role='alert'>$message</div>";
    $_SESSION['message'] = '';
}

if(isset($_POST['submit']) && is_valid_captcha()){
    $filepath = join_paths(registrations_path(), escapeshellcmd($_POST['registration_type']).'.jsonl');

    file_put_contents($filepath, json_encode($_POST)."\n", FILE_APPEND);

    $message = '';

    foreach ($_POST as $key => $value) {
        if (!in_array($key, ['submit', 'registration_type', 'g-recaptcha-response'])) {
            $field_name = ucwords(str_replace("_", " ", $key));
            $message .= "$field_name:\t$value\n\n";
        }
    }

    mail(
        recipient_email(),
        $_POST['registration_type']." Registration",
        $message,
        "From:" . sender_email(),
    );

    $_SESSION['message'] = 'Mail Sent. Thank you we will contact you shortly.';
    header('Location: '.$_SERVER['PHP_SELF']);
    die;
}
?>

<@ snippets/header.php @>

<article>
	<section>
		<h2>@{ title }</h2>
	</section>

	<section>
		@{ text | markdown }
	</section>

    <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?=base_url()?>@{url}" data-a2a-title="@{title}">
        <a class="a2a_button_facebook" target="_blank"></a>
        <a class="a2a_button_twitter" target="_blank"></a>
        <a class="a2a_button_email" target="_blank"></a>
        <a class="a2a_button_pinterest" target="_blank"></a>
        <a class="a2a_dd" href="https://www.addtoany.com/share" target="_blank"></a>
    </div>

</article>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>