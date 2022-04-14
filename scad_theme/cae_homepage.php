<?php defined('AUTOMAD') or die('Direct access not permitted!');?>
<@ snippets/registrate.php @>
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
                        <h5>CORONARY ARTERY ECTASIA</h5>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/packages/scad_theme/images/slide-image-2.jpg" alt="SCAD Survivors">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>GET INVOLVED</h5>
                        <p>
                            Coronary Artery Ectasia (CAE) and Coronary aneurysms are rare.
                            In order for us to study these conditions we need pro-active survivors
                            and healthy volunteers.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                <img class="d-block w-100" src="/packages/scad_theme/images/slide-image-1.jpg" alt="About Us">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>ABOUT US</h5>
                        <p>
                            Find out more about our team and the work we do at the University of
                            Leicester.
                        </p>
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
            <img alt=" " src="/packages/scad_theme/images/Heart.png"style="height:94px; width:100px">
            <h3>About CAE</h3>
            <p>
                Coronary Artery Ectasia (CAE) is defined as abnormal diffuse dilatation of 1 or
                more segments of a coronary artery that has a diameter of more than 1.5 times
                the normal adjacent segments. It can either be diffuse, affecting the entire
                length of the coronary artery, or localised. There are other definitions based
                on the shape and the extent of involvement of coronary arteries but they
                are rarely used in clinical practice. Coronary artery aneurysm. On the other
                hand is defined as localised coronary dilatation that exceeds >2 times the
                diameter of normal adjacent segments.
            </p>
        </div>
        <div class="col">
            <img alt="" src="/packages/scad_theme/images/Lab.png" style="height:94px; width:100px">
            <h3>Our Research</h3>
            <h4>"A deep phenotyping study of Coronary Artery Aneurysms/ Ectasia (CAE)"</h4>
            <p>
                aims to extend our current research into rare phenotypes of coronary artery disease
                focusing on aneurysm/ ectasia.
            </p>
            <p>
                In addition a national UK registry, the first of its kind in the UK and Europe will
                be constructed from currently collaborating centres (Cambridge, Bristol, Oxford, and
                the Royal Free Hospital). The data will then be used to aid our understanding of the
                epidemiology of CAE and investigate the current management and prognosis of patients
                presenting with acute coronary syndromes secondary to CAE.
            </p>
        </div>
        <div class="col" style="padding-right: 0;">
            <img alt="" src="/packages/scad_theme/images/Donate.png" style="height:94px; width:100px">
            <h3>Get Involved</h3>
            <p>
                If you are a patient diagnosed with CAE/ coronary aneurysms, a healthy volunteer
                or a health professional wanting to make a referral please complete this form.
            </p>
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

    <article>
        <h1>Get Involved</h1>

        <div class="alert alert-warning text-center" role="alert">
            No clinical history please
        </div>

        <form action="" method="post" class="container">
            <input type="hidden" name="registration_type" value="cae_registrations">
            <div class="form-row justify-content-center">
                <div class="form-group required col-sm-4">
                    <label for="your_first_name">Your Name</label>
                    <input type="text" class="form-control" id="your_first_name" name="your_first_name" placeholder="Your First Name" required>
                </div>
                <div class="form-group col-sm-4 offset-sm-1">
                    <label for="your_last_name">Your Last Name</label>
                    <input type="text" class="form-control" id="your_last_name" name="your_last_name" placeholder="Your Last Name">
                </div>
            </div>
            <div class="form-row justify-content-center">
                <div class="form-group required col-sm-4">
                    <label for="email">Email Address</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group required col-sm-4 offset-sm-1">
                    <label for="your_date_of_birth">Your Date of Birth</label>
                    <input type="date" class="form-control" id="your_date_of_birth" name="your_date_of_birth" placeholder="Your Date of Birth" required>
                </div>
                <div class="form-group required col-sm-4">
                    <label for="telephone">Telephone Number</label>
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone Number" required>
                </div>
                <div class="form-group col-sm-4 offset-sm-1">
                    <label for="alternative_telephone">Alternative Telephone Number</label>
                    <input type="text" class="form-control" id="alternative_telephone" name="alternative_telephone" placeholder="Alternative Telephone Number">
                </div>
                <div class="col-sm-6">
                    <div class="form-group required">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" placeholder="Address" required></textarea>
                    </div>
                    <div class="form-group required">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
                    </div>
                    <div class="form-group required">
                        <label for="county">County / Region</label>
                        <input type="text" class="form-control" id="county" name="county" placeholder="County / Region" required>
                    </div>
                    <div class="form-group required">
                        <label for="post_code">Post Code</label>
                        <input type="text" class="form-control" id="post_code" name="post_code" placeholder="Post Code" required>
                    </div>
                    <div class="form-group">
                        <label for="questions">Any questions you have about CAE research</label>
                        <textarea class="form-control" id="questions" name="questions" placeholder="Any questions you have about CAE research"></textarea>
                    </div>
                    <div id="recaptcha_placeholder"></div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </article>




    <@ snippets/javascript.php @>
    <@ snippets/footer.php @>