<?php defined('AUTOMAD') or die('Direct access not permitted!');
    require_once(__DIR__.'/functions.php');
?>

<script type="text/javascript">
    var recaptchaOnloadCallback = function() {
        if (!!document.getElementById("recaptcha_placeholder")) {
            console.log('goodbye');
            grecaptcha.render('recaptcha_placeholder', {
                'sitekey' : '<?=recaptch_site_key();?>',
                'callback' : 'recaptchaCallback',
            });
        }
    };

    var recaptchaCallback = function() {
        if (document.getElementsByName("submit").length > 0) {
            document.getElementsByName("submit")[0].removeAttribute('disabled');
        }
    };

    if (document.getElementsByName("submit").length > 0) {
        document.getElementsByName("submit")[0].setAttribute('disabled', 'disabled');
    }
</script>
    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="/packages/scad_theme/js/site.js"></script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=recaptchaOnloadCallback&render=explicit" async defer></script>
