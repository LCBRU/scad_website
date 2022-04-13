<?php defined('AUTOMAD') or die('Direct access not permitted!');
    require_once(__DIR__.'/functions.php');

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
    
        header('Location: /get-involved/register/registered');
        die;
    }
?>
