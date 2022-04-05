<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>

    <div id="team" class="container">
        <@ newPagelist { type: 'children'} @>

        <@~ foreach in pagelist @>
            <div class="row">
                <div class="col-4">
                    <@ img { file: '*.*' } @>
                </div>
                <div class="col-8">
                    <h1>@{ title }</h1>
                    @{ text | markdown }
                </div>
            </div>
        <@~ end @>
    </div>


    <@ snippets/javascript.php @>
    <@ snippets/footer.php @>