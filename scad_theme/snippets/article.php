<?php defined('AUTOMAD') or die('Direct access not permitted!');?>


<?php
 
$parsed_url = parse_url(base_url());
$real_base_url = $parsed_url['scheme'] . "://" . $parsed_url['host'] ;
 
?>

<article class="container">
	<header>
		<h2>@{ title }</h2>
		<h3>Published @{ date | dateFormat ('D, j M Y')} by @{ author }</h3>
    </header>

	<section>
        <@ if @{ :currentPath } @>
            @{ text_main | markdown }
        <@ else @>
            @{ text_main | scad_theme/shortenmarkdown(3) | markdown }
        <@ end @>
	</section>

    <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?=$real_base_url?>@{url}" data-a2a-title="@{title}">
        <a class="a2a_button_facebook" target="_blank"></a>
        <a class="a2a_button_twitter" target="_blank"></a>
        <a class="a2a_button_email" target="_blank"></a>
        <a class="a2a_button_pinterest" target="_blank"></a>
        <a class="a2a_dd" href="https://www.addtoany.com/share" target="_blank"></a>

        <@ if not @{ :currentPath } @>
            <a class="read_more" href="@{ url }">Read More</a>
        <@ end @>
    </div>
</article>

<@ if not @{ :currentPath } @>
    <hr>
<@ end @>

