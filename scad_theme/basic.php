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

    <@ snippets/share.php @>
</article>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>