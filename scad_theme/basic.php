<?php defined('AUTOMAD') or die('Direct access not permitted!');
  require_once(__DIR__.'/snippets/functions.php');
?>
<@ snippets/header.php @>



<article>
	<section>
    <header>
  	    <h1>@{ title }</h1>
    </header>

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