<?php defined('AUTOMAD') or die('Direct access not permitted!');

function base_url(){
  return sprintf(
      "%s://%s%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME'],
      rtrim($_SERVER['REQUEST_URI'], '/')
  );
}

function ini(){
  return parse_ini_file('app.ini');
}

function recaptch_site_key(){
  return ini()['recaptcha_site_key'];
}

function recaptch_secret_key(){
  return ini()['recaptcha_secret_key'];
}

function recipient_email(){
  return ini()['recipient_email'];
}

function sender_email(){
  return ini()['sender_email'];
}

function registrations_path(){
  return ini()['registrations_path'];
}

function is_valid_captcha(){
  if(isset($_POST['g-recaptcha-response'])){
    $captcha=$_POST['g-recaptcha-response'];
  }
  if(!$captcha){
    return FALSE;
  }

  $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode(recaptch_secret_key()) .  '&response=' . urlencode($captcha);
  $response = file_get_contents($url);
  $responseKeys = json_decode($response,true);

  if($responseKeys["success"]) {
    return TRUE;
  }

  return FALSE;
}

function join_paths() {
  $paths = array();

  foreach (func_get_args() as $arg) {
      if ($arg !== '') { $paths[] = $arg; }
  }

  return preg_replace('#/+#','/',join('/', $paths));
}

?>
