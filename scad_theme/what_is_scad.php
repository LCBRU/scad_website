<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>

    <article class="row">
        <div class="col-8 col-xl-10">
            <header>
                <h2>@{ title }</h2>
            </header>

            @{ text_main | markdown }
        </div>

        <div class="col-4 col-xl-2">
            <h2>What is SCAD?</h2>

            <@ newPagelist { type: 'children' } @>

            <@~ with "/patients-and-family/what-is-scad" @>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="/patients-and-family/what-is-scad">What is SCAD?</a>
                    </li>
                    <@~ foreach in pagelist @>
                        <li class="nav-item">
                            <a class="nav-link" href="@{url}">@{title}</a>
                        </li>
                    <@~ end @>
                </ul>
            <@~ end @>
        </div>

        <@ snippets/share.php @>
    </article>

    <@ snippets/javascript.php @>
    <@ snippets/footer.php @>