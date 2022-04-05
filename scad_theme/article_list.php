<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>

    <article class="row">
        <div class="col-8 col-xl-9">
            <header>
                <h2>@{ title }</h2>
            </header>

            @{ text_main | markdown }
        </div>

        <div class="col-4 col-xl-3">
            <@ newPagelist {
                type: 'children',
                filter: @{ tag },
                sort: 'date desc',
            } @>

            <@ set { :group: 'fred' } @>

            <@~ with "/articles" @>
                <ul class="nav flex-column">
                    <@~ foreach in pagelist @>
                        <@ if @{ :group } != @{ date | dateFormat ('M Y') } @>
                            <@ set { :group: @{ date | dateFormat ('M Y') } } @>

                            <li class="nav-item">
                                <h3>@{ :group }</h3>
                            </li>
                        <@ end @>

                        <li class="nav-item">
                            <a class="nav-link" href="@{url}">@{title}</a>
                        </li>
                    <@~ end @>
                </ul>
            <@~ end @>
        </div>

    </article>

    <@ snippets/javascript.php @>
    <@ snippets/footer.php @>