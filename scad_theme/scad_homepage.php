<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/header.php @>
<@ snippets/message.php @>

    <div class="row">
        <div id="carouselHeadlines" class="carousel slide col p-0" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselHeadlines" data-slide-to="0" class="active"></li>
                <li data-target="#carouselHeadlines" data-slide-to="1"></li>
                <li data-target="#carouselHeadlines" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/packages/scad_theme/images/slide-image-3.jpg" alt="Get Involved">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>GET INVOLVED</h5>
                        <p>
                            SCAD is a rare disease. In order for us to study it, we need pro-active
                            SCAD survivors to continue to get involved in our research projects.
                        </p>
                        <a class="slide_readme" href="/get-involved/register">READ MORE</a>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/packages/scad_theme/images/slide-image-2.jpg" alt="SCAD Survivors">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>SCAD SURVIVORS</h5>
                        <p>
                            SCAD is a rare disease. In order for us to study it, we need pro-active
                            SCAD survivors to continue to get involved in our research projects.
                        </p>
                        <a class="slide_readme" href="/patients-and-family/stories">READ MORE</a>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/packages/scad_theme/images/slide-image-1.jpg" alt="About Us">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ABOUT US</h5>
                        <p>
                            Find out more about our team and the work we do at the University of
                            Leicester.                        </p>
                        <a class="slide_readme" href="/about-us/our-research">READ MORE</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselHeadlines" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselHeadlines" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div id="homepage_subheader" class="row text-center">
        <div class="col">
            <a href="/patients-and-family/what-is-scad">
                <img alt=" " src="/packages/scad_theme/images/Heart.png"style="height:94px; width:100px">
            </a>
            <h3>About SCAD</h3>
            <p>Spontaneous Coronary Artery Dissection (SCAD) is an unpredictable event
                with patients usually presenting with a sudden unexpected heart attack.
            </p>
            <p>Here you will be able to learn about SCAD and read the stories of
                others who have suffered from this condition.
            </p>
            <p><a class="slide_readme" href="/patients-and-family/what-is-scad">READ MORE</a></p>
        </div>
        <div class="col">
            <a href="/about-us/our-research">
                <img alt="" src="/packages/scad_theme/images/Lab.png" style="height:94px; width:100px">
            </a>
            <h3>Our Research</h3>
            <p>
                Our team at the Leicester Glenfield hospital is funded by
                <a href="http://beatscad.org.uk/" target="_blank">BeatSCAD</a>
                and from
                <a href="https://www.justgiving.com/campaigns/charity/uniofleicester/SCAD" target="_blank">public donations</a>
                and have previously received funded from the
                <a href="https://www.bhf.org.uk/" target="_blank">British Heart Foundation</a>
                and <a href="http://www.nihr.ac.uk/about/rare-diseases-translational-research-collaboration.htm" target="_blank">NIHR Rare diseases Translational Research Collaboration</a>.
            </p>
            <p>Dr David Adlam is the chief investigator for our research. We aim to investigate:</p>
            <ul>
                <li>The causes of SCAD</li>
                <li>How genetics influence SCAD</li>
                <li>The best way to treat this condition</li>
            </ul>
            <p><a class="slide_readme" href="/about-us/our-research">READ MORE</a></p>
        </div>
        <div class="col" style="padding-right: 0;">
            <a href="https://www.justgiving.com/UoLeicesterSCAD" target="_blank">
                <img alt="" src="/packages/scad_theme/images/Donate.png" style="height:94px; width:100px">
            </a>
            <h3>Donations</h3>
            <p>We are extremely grateful to SCAD-survivors, their family and friends who
                have generously donated or raised funding to support our research
            </p>
            <p>If you would like to contribute to SCAD research then please donate at ourjust giving page.</p>
            <p><a class="slide_readme" href="https://www.justgiving.com/campaigns/charity/uniofleicester/SCAD" target="_blank">DONATE</a></p>
        </div>
    </div>

    <@ newPagelist { 
        limit: 10,
        type: 'children',
        sort: 'date desc',
        page: @{ ?page | def(1) } 
    } @>

    <@~ with "/articles" @>
        <@~ foreach in pagelist @>
            <@ snippets/article.php @>
        <@~ end @>

        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <@ if @{ ?page | def(1) } = 1 @>
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                <@ else @>
                    <li class="page-item">
                        <a class="page-link" href="?<@ queryStringMerge { page: @{ ?page | def(1) | -1}  } @>" tabindex="-1">Previous</a>
                    </li>
                <@ end @>

                <@ for 1 to @{ :paginationCount } @>
                    <@ if @{ ?page | def(1) } = @{ :i } @>
                        <li class="page-item active">
                            <span class="page-link">@{ :i }<span class="sr-only">(current)</span></span>
                        </li>
                    <@ else @>
                        <li class="page-item">
                            <a class="page-link" href="?<@ queryStringMerge { page: @{ :i } } @>">@{ :i }</a>
                        </li>
                    <@ end @>

                <@ end @>

                <@ if @{ ?page | def(1) } = @{ :paginationCount } @>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                    </li>
                <@ else @>
                    <li class="page-item">
                        <a class="page-link" href="?<@ queryStringMerge { page: @{ ?page | def(1) | +1}  } @>">Next</a>
                    </li>
                <@ end @>
            </ul>
        </nav>
    <@~ end @>


    <@ snippets/javascript.php @>
    <@ snippets/footer.php @>