<?php defined('AUTOMAD') or die('Direct access not permitted!');
  require_once(__DIR__.'/snippets/functions.php');
?>
<@ snippets/header.php @>



<article>
	<section>
		<h2>@{ title }</h2>
	</section>

	<section>
        @{ +gallery }
	</section>

  <@ snippets/share.php @>

</article>

<@ snippets/javascript.php @>
<@ snippets/footer.php @>