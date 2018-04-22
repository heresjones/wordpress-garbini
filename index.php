

<?php
/**
 *
 * Update New Services --> email the info
 * -- > Make the about section updatable
 *
 *
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Garbini_Ed
 * @since Garbini_Ed 1.0
 */

get_header();
?>

<section class=parallax-container style='height: 100vh;'>
    <img class='parallax pimg' data-center=0.5 data-intensity=100
         src='<?php bloginfo('template_directory'); ?>/img/lighthouse.jpg' alt="New London Lighthouse"/>
    <div class=container>
        <div class=row>
            <div class="col-sm-6 logo">
                <div class="animated fadeInDown delay-19s">
                    <div class=circle>
                        <img src="<?php bloginfo('template_directory'); ?>/img/garbini-borderless-logo-200.png"
                             width=200 height=200 alt="Scott Garbini">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 logo-title">
                <div class="teaser animated fadeInDown delay-09s dark-block"><h1>Garbini Education<br>
                        and Career
                        Consulting
                        LLC</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<header class="main-nav-outer navbar-inner" id=scroll>
    <div class=container>
        <div id=navigation>
            <ul class="main-nav nav-collapse garbini-collapse">
                <li><a class=res-nav_click href="#home"><img src="<?php bloginfo('template_directory'); ?>/img/garbini-borderless-logo-200.png" width=40 height=40 alt="Scott Garbini"></a></li>
                <li><a class=res-nav_click href="#services">Services</a></li>
                <li><a class=res-nav_click href="#testimonials">Testimonials</a></li>
                <li><a class=res-nav_click href="#about">About</a></li>
                <li><a class=res-nav_click href="#contact">Contact</a></li>
                <li><a href="https://www.instagram.com/garbinieducation/" target=_blank class=out><span class="fa fa-instagram"></span></a>
                    <a href="https://www.facebook.com/garbinieducationandcareerconsulting" target=_blank class=out><span class="fa fa-facebook"></span></a>
                    <a href="http://www.linkedin.com/profile/view?id=22048421&snapshotID=&authType=name&authToken=NZ0W&goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1&trk=NUS-body-member-name&sl=NPU_REG%3B2d45daaeec38018d13099131d51366d2%3B-1%3Bactivity%3A5834865457735045120%3B\" target=_blank class=out><span class=\"fa fa-linkedin\"></span></a>
                </li>
            </ul>
        </div>
    </div>
</header>

<section class=main-section id=home>
    <div class=container>

        <h2><span class=blue>Meet</span><span class=orange> Scott S. Garbini</span></h2>
        <h6>Educational consultant, career counselor, life coach, and student advocate. </h6>

        <div class=row>
            <div class="col-lg-5 col-sm-5 wow fadeIn delay-05s">
                <div class="team-leader-block clearfix">
                    <div class=team-leader-box>
                        <div class="team-leader wow fadeIn delay-06s">
                            <div class=team-leader-shadow></div>
                            <img src="<?php bloginfo('template_directory'); ?>/img/scott-portrait-500.jpg"
                                 alt="Scott Garbini">
                            <ul>
                                <li>
                                    <a href="https://www.linkedin.com/in/scott-s-garbini-m-ed-6054737/"
                                       target=_blank class=fa-linkedin></a></li>
                                <li><a href="https://www.facebook.com/garbinieducationandcareerconsulting" target=_blank
                                       class=fa-facebook></a></li>
                                <li><a href="https://www.instagram.com/scott_s_gar/" target=_blank
                                       class=fa-instagram></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-7 wow fadeInRight delay-05s">
                <div class=service-list>
                    <div class=service-list-col1>
                        <i class=fa-line-chart></i>
                    </div>
                    <div class=service-list-col2>
                        <?php
                        $post_id = 12;
                        $queried_post = get_post($post_id);
                        $title = $queried_post->post_title;
                        echo '<h3>' . $title . '</h3>';
                        echo '<p>' . $queried_post->post_content . '</p>';
                        ?>
                    </div>

                </div>
                <div class=service-list>
                    <div class=service-list-col1>
                        <i class="fa fa-users"></i>
                    </div>
                    <div class=service-list-col2>
                        <?php
                        $post_id = 16;
                        $queried_post = get_post($post_id);
                        $title = $queried_post->post_title;
                        echo '<h3>' . $title . '</h3>';
                        echo '<p>' . $queried_post->post_content . '</p>';
                        ?>
                    </div>
                </div>
                <div class=service-list>
                    <div class=service-list-col1>
                        <i class="fa fa-transgender-alt"></i>
                    </div>
                    <div class=service-list-col2>
                        <?php
                        $post_id = 18;
                        $queried_post = get_post($post_id);
                        $title = $queried_post->post_title;
                        echo '<h3>' . $title . '</h3>';
                        echo '<p>' . $queried_post->post_content . '</p>';
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <h2><span class=blue>Speaking </span><span class=orange>and Travel</span></h2>
        <h6>Upcoming Engagements </h6>

        <div class="row">
            <div id="primary" class="content-area">
                <main id="main" class="site-main oh-boy" role="main">
                    <?php
                    $post_id = 5;
                    $queried_post = get_post($post_id);
                    echo $queried_post->post_content;
                    ?>
                </main><!-- .site-main -->
            </div><!-- .content-area -->
        </div>
    </div>
</section>
<section class=parallax-container style='height: 80vh;'>
    <img class='parallax pimg2' data-center=0.4 data-intensity=100
         src='<?php bloginfo('template_directory'); ?>/img/graduation.jpg' alt=Graduation/>
    <div class=teaser>
        <div class=content style="height: auto; text-align: center">
            <div class=row></div>
            <div class="animated wow fadeIn delay-06s">
                <img src="http://hecaonline.org/Resources/Pictures/HECA-Logo-Web-200w.jpg" width=200 height=122
                     alt="HECA logo"/>
            </div>
        </div>
    </div>
</section>
<section class=main-section id=services>
    <h2><span class=blue>Services</span><span class=orange> Offered</span></h2><br><br>
    <div class=container>
        <div class="row wow animated fadeIn">
            <div class=col-sm-2></div>
            <div class="col-sm-8 h6-script">
                <span class="glyphicon glyphicon-road"></span> Garbini Education and Career Consulting LLC, has
                the resources and expertise to help you successfully navigate the process of finding the right
                college
                or career based on your unique needs.
            </div>
            <div class=col-sm-2></div>
        </div>
    </div>
    <div class=container>
        <div class="row db-padding-btm db-attached">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 wow animated fadeInUp">
                <div class=db-wrapper>
                    <div class="db-pricing-eleven db-bk-color-one">
                        <div class="price wow animated fadeIn delay-06s">
                            <h1>PACKAGE A</h1>
                            <small>up-to 25 hours</small>
                        </div>
                        <div class="type wow animated fadeIn delay-06s">
                            freshman-junior year
                        </div>
                        <ul>
                            <li><i class="glyphicon glyphicon-ok"></i>Create and organize students college binder</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Assistance with Common Application</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Formal and Informal Interview admissions interview
                                preparation
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Essay Review and Editing (not composition)</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Assist in Finding Summer Enrichment programs</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Plus many more options to help families navigate
                                the admissions and or post secondary process
                            </li>
                        </ul>
                        <div class=pricing-footer>
                            <a href="#contact-anchor" class="btn db-button-color-square btn-lg">REQUEST INFO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 wow animated fadeInUp">
                <div class=db-wrapper>
                    <div class="db-pricing-eleven db-bk-color-two popular">
                        <div class="price wow animated fadeIn delay-06s">
                            <h1>PACKAGE B</h1>
                            <small>up-to 25 hours</small>
                        </div>
                        <div class="type wow animated fadeIn delay-06s">
                            Senior Year
                        </div>
                        <ul>
                            <li><i class="glyphicon glyphicon-ok"></i>Create and organize students college binder</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Consult with student/family on college visit
                                itineraries
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Assistance with Common Application</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Essay Review and Editing (not composition)</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Formal and Informal Interview admissions interview
                                preparation
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>
                                Assist in Finding Summer Enrichment programs
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>
                                Review college applications
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Plus many more options to help families navigate
                                the admissions and or post secondary process
                            </li>
                        </ul>
                        <div class=pricing-footer>
                            <a href="#contact-anchor" class="btn db-button-color-square btn-lg">REQUEST INFO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class=db-wrapper>
                    <div class="db-pricing-eleven db-bk-color-three wow animated fadeInUp">
                        <div class="price wow animated fadeIn delay-06s">
                            <h1>LD PACKAGE</h1>
                            <small>up-to 25 hours</small>
                        </div>
                        <div class="type wow animated fadeIn delay-06s">
                            all grades
                        </div>
                        <ul>
                            <li><i class="glyphicon glyphicon-ok"></i>Assistance with Common Application</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Create and organize students college binder</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Assessment of student’s diagnostic testing
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Assessment of student academic records</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Formal and Informal Interview admissions interview
                                preparation
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Essay Review and Editing (not composition)</li>
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>
                                Assist in Finding Summer Enrichment programs
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>
                                Plus many more options to help families navigate the admissions and or post secondary
                                process
                            </li>
                        </ul>
                        <div class=pricing-footer>
                            <a href="#contact-anchor" class="btn db-button-color-square btn-lg">REQUEST INFO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class=db-wrapper>
                    <div class="db-pricing-eleven db-bk-color-six wow animated fadeInUp">
                        <div class="price wow animated fadeIn delay-06s">
                            <h1>BASIC PACKAGE</h1>
                            <small>up-to 14 hours</small>
                        </div>
                        <div class="type wow animated fadeIn delay-06s">
                            all grades
                        </div>
                        <ul>
                            <li><i class="glyphicon glyphicon-ok"></i>Assistance with applications and resume</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Create college list according to student profile
                            </li>
                            <li><i class="glyphicon glyphicon-ok"></i>Edit and review essays (NOT composition)</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Create and organize student binder</li>
                            <li><i class="glyphicon glyphicon-ok"></i>Use of “MY COLLEGE PLANNER PRO”- computer software
                                used for college planning
                            </li>
                        </ul>
                        <div class=pricing-footer>
                            <a href="#contact-anchor" class="btn db-button-color-square btn-lg">REQUEST INFO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=row></div>
        <div class=col-sm-2></div>
        <div class="col-sm-8 h6-script">
            <span class="glyphicon glyphicon-check"></span> In addition to the education packages here, Scott also
            offers career and life coaching. Please do not hesitate to <a href="#contact">contact</a> for more
            information.
        </div>
        <div class=col-sm-2></div>
    </div>
</section>
<section class=parallax-container style='height: 80vh;'>
    <img class='parallax pimg2' data-center=0.40 data-intensity=100
         src='<?php bloginfo('template_directory'); ?>/img/college-5.jpg' alt=college/>
</section>
<section class="main-section alabaster" id=testimonials>
    <h2><span class=blue>Client</span><span class=orange> Testimonials</span></h2>
    <div class=container>
        <div class=row>
            <div class="col-md-2 hidden-sm"></div>
            <div class=col-md-8 id=main>
                <div class=panel-group id=accordion role=tablist aria-multiselectable=true>
                    <div class="panel panel-default wow animated slideInLeft delay-02">
                        <div class=panel-heading role=tab id=headingOne
                             style="background-color: rgb(30, 181, 197); box-shadow: 0 0 5px rgba(0, 0, 0, .5);">
                            <h4 class=panel-title>
                                <a role=button data-toggle=collapse data-parent="#accordion" href="#collapseOne"
                                   aria-expanded=true aria-controls=collapseOne>
                                    <div class=row>
                                        <div class=col-md-3>
                                            <div class=testimonial-circle>
                                                <img class=testimonial-img
                                                     src="<?php bloginfo('template_directory'); ?>/img/family-150.png"
                                                     height=146 width=150 alt="Scott Garbini"/>
                                            </div>
                                        </div>
                                        <div class="col-md-9 testimonial-text">
                                            <span class=sm-white>"A passionate educator" -parents</span> ...(click for
                                            more)
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div id=collapseOne class="panel-collapse collapse" role=tabpanel aria-labelledby=headingOne>
                            <div class=panel-body>
                                <ul>
                                    <li>
                                        Scott Garbini has been involved with education for most of his life. His
                                        commitment to those who learn differently, and the inspiration and hope that he
                                        offers to both them and their parents, goes far beyond what we have come to
                                        except from an educator. On the contrary, Scott is a passionate educator, who
                                        truly cares to the point that he
                                        lives his life for those students who have met resistance in many mainstream
                                        schools.
                                    </li>
                                    <li>He both challenges and inspires such students to seek out the right fit
                                        for their long-term educational and life goals. Scott has a real gift in
                                        communicating the strengths of a certain institution, and whether those
                                        strengths will match the strengths of the particular student.
                                    </li>
                                    Most of all, Scott
                                    continues to work with students and their parents after the student has accepted
                                    an offer from an educational institution and has enrolled, primarily to ensure
                                    that such
                                    students are fitting in well, and that they are on the path to success. The
                                    journey for these students and parents is
                                    long and arduous; however, Scott has the ability to both properly motivate and
                                    even console students at times, if necessary. Scott has and will continue to be
                                    an outstanding resource for so many, both students and parents, as he expands
                                    his educational consulting opportunities.
                                    </li>
                                    <li>From our standpoint as parents of a
                                        student who is happy and well adjusted, but who has sometimes struggled in
                                        school, Scott brought us to Mitchell. The journey is indeed hard and will
                                        continue to be hard, but our son loves Mitchell College and the opportunities
                                        being created for him. He has matured and is finally beginning to truly
                                        comprehend how important school is and will be, and he is now recognizing that
                                        hard work will indeed pay off and allow him to achieve his goals, both
                                        professionally and in life. We can never thank Scott enough, and parents would
                                        be wise to both invest and commit to Scott as an educational consultant on
                                        behalf of their child/student. You will be so pleased with your decision.
                                    </li>
                                    <li>The titles are block, so you don't have to click the text part to activate it
                                    </li>
                                    <li>Indicators for expand / collapsing items</li>
                                    <li>Removed title links' obnoxious :hover underlinings, and outlines.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default wow animated slideInLeft delay-04s">
                        <div class=panel-heading role=tab id=headingTwo
                             style="background-color: rgb(30, 181, 197); box-shadow: 0 0 5px rgba(0, 0, 0, .5);">
                            <h4 class=panel-title>
                                <a class=collapsed role=button data-toggle=collapse data-parent="#accordion"
                                   href="#collapseTwo" aria-expanded=false aria-controls=collapseTwo>
                                    <div class=row>
                                        <div class=col-md-3>
                                            <div class=testimonial-circle>
                                                <img class=testimonial-img
                                                     src="<?php bloginfo('template_directory'); ?>/img/student-150.png"
                                                     height=146 width=150 alt="Scott Garbini"/>
                                            </div>
                                        </div>
                                        <div class="col-md-9 testimonial-text">
                                            <span class=sm-white>"A role model" - student</span> ...(click for more)
                                        </div>
                                    </div>
                                </a>
                            </h4>
                        </div>
                        <div id=collapseTwo class="panel-collapse collapse" role=tabpanel aria-labelledby=headingTwo>
                            <div class=panel-body>
                                When I was at Thames Academy, I was extremely unsure and uncomfortable about going to
                                Mitchell College because it just didn't seem like the right fit for me. When it came
                                time for my interview for Mitchell College I thankfully had my interview with Scott
                                Garbini. I’m pretty sure that if I had it with anyone else I would have been more
                                nervous and unsure. Scott gave me information about Mitchell College that made me feel
                                comfortable about going
                                there, he helped ease my nerves and encouraged, and guided me throughout the process of
                                admissions and beyond. Also, I am a bisexual individual and think it is really hard to
                                function in life especially if you are part of the LGBT community because of all of the
                                hatred and dislike in society. Scott being openly gay and married has given me comfort
                                and confidence to know that it is possible to get a good job and have a good life and
                                not be tormented by what people say or think. And in that way I view Scott as a role
                                model. Also there have been times where I have been really stressed out and Scott is
                                always there to lend an ear to which is incredible.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default wow animated slideInLeft delay-06s">
                        <div class="panel panel-default">
                            <div class=panel-heading role=tab id=headingThree
                                 style="background-color: rgb(30, 181, 197); box-shadow: 0 0 5px rgba(0, 0, 0, .5);">
                                <h4 class=panel-title>
                                    <a class=collapsed role=button data-toggle=collapse data-parent="#accordion"
                                       href="#collapseThree" aria-expanded=false aria-controls=collapseThree>
                                        <div class=row>
                                            <div class=col-md-3>
                                                <div class=testimonial-circle>
                                                    <img class=testimonial-img
                                                         src="<?php bloginfo('template_directory'); ?>/img/girls-150.png"
                                                         height=146 width=150 alt="Scott Garbini"/>
                                                </div>
                                            </div>
                                            <div class="col-md-9 testimonial-text">
                                                <span class=sm-white>"Breath of fresh air" - mom</span> ...(click for
                                                more)
                                            </div>
                                        </div>
                                    </a>
                                </h4>
                            </div>
                            <div id=collapseThree class="panel-collapse collapse" role=tabpanel
                                 aria-labelledby=headingThree>
                                <div class=panel-body>
                                    Three years ago we were deep in the process of helping our twins find the “right”
                                    place
                                    for their post High School choice. Both girls have learning differences but more
                                    impacting is their extreme social anxiety. Where could they go that would support
                                    their
                                    academic journey as well as their need for acceptance and patience in their steps
                                    into
                                    the larger world? More importantly, how will they show what they are capable of if
                                    interviewing is a huge hurdle for them? This process was exhausting and often
                                    disappointing until we met Scott Garbini.
                                    Before actually meeting Scott, he spent many hours on the phone guiding us through
                                    the
                                    process of the pre-college program (prep school) we were looking at. His patience
                                    and
                                    guidance was the first “breath of fresh air” we had experienced in a long time -
                                    finally
                                    someone who understood our daughter’s challenges! But the real truth was to come as
                                    we
                                    drove our twins to meet with Scott and view the school. After arriving, they refused
                                    to
                                    get out of the car - their anxiety took over and nothing we could say or do helped.
                                    We
                                    were convinced this was the end of their chances of being accepted into this school.
                                    We
                                    went into the building to tell Scott the bad news. His reaction changed their lives!
                                    “No
                                    problem, I will just go out to them!”, was his answer. Scott not only went out the
                                    car
                                    to greet them but he got INTO the car. He shared his own struggles with school and
                                    anxiety with them - they immediately saw in him a person they could trust. The twins
                                    exited the car with him and after a tour and interview they were accepted into the
                                    school.
                                    That was the beginning of a new life for our girls and we owe it all to Scott.
                                    Scott’s ability to see through students’ differences and see their true potential is
                                    a
                                    gift he is sharing with the world. We are so grateful that we got to benefit from
                                    his
                                    gifts!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 hidden-sm"></div>
        </div>
    </div>
    <br><br>
    <div class="container content wow animated fadeInUp delay-06s">
        <h2><span class=blue>Praise</span></h2>
        <h6>via Linkedin</h6>
        <div class="row linkedin-box">
            <div id=carousel-example-generic class="carousel slide carousel-padding" data-ride=carousel>
                <ol class=carousel-indicators style="vertical-align: top">
                    <li data-target="#carousel-example-generic" data-slide-to=0 class=active></li>
                    <li data-target="#carousel-example-generic" data-slide-to=1></li>
                    <li data-target="#carousel-example-generic" data-slide-to=2></li>
                    <li data-target="#carousel-example-generic" data-slide-to=3></li>
                    <li data-target="#carousel-example-generic" data-slide-to=4></li>
                    <li data-target="#carousel-example-generic" data-slide-to=5></li>
                </ol>
                <div class=carousel-inner>
                    <div class="item active">
                        <div class=row>
                            <div class=col-xs-12>
                                <div class="thumbnail slider-border adjust1">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <img class="media-object img-rounded img-responsive"
                                             src="<?php bloginfo('template_directory'); ?>/img/linkedin2.png" width=100
                                             height=100 alt="Cheri Barad">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class=caption>
                                            <p class="text-info lead adjust2">"He knows his stuff!"</p>
                                            <p><span class="glyphicon glyphicon-thumbs-up"></span>"His excitement and
                                                passion for education consulting is infectious. I have referred Scott to
                                                families in his region and also recommended him to numerous college
                                                representatives so they can get to know him and his student population
                                                better. I value Scott's professionalism and friendship. " </p>
                                            <blockquote class=adjust2>
                                                <p>Cheri Barad</p>
                                                <small>
                                                    <cite title="Source Title">
                                                        <i class="glyphicon glyphicon-globe"></i>
                                                        http://cheribarad.com/
                                                    </cite>
                                                </small>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class=row>
                            <div class=col-xs-12>
                                <div class="thumbnail slider-border adjust1">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <img class="media-object img-rounded img-responsive"
                                             src="<?php bloginfo('template_directory'); ?>/img/recommendations/denise-braley.jpg"
                                             width=100 height=100 alt="Denise Braley">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class=caption>
                                            <p class="text-info lead adjust2">"Dedicated to his field."</p>
                                            <p><span class="glyphicon glyphicon-thumbs-up"></span>"He is dedicated to
                                                his field of working with students with challenges. He has now taken
                                                this experience and is on the Board of Education in New London, CT. He
                                                is also a wonderful life mentor to former students. I highly recommend
                                                Scott in his professional capacity of Life Coach and educator. " </p>
                                            <blockquote class=adjust2>
                                                <p>Denise Braley</p>
                                                <small>
                                                    <cite title="Source Title">
                                                        <i class="glyphicon glyphicon-globe"></i>
                                                        -Associate Prof. Mitchell College
                                                    </cite>
                                                </small>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class=row>
                            <div class=col-xs-12>
                                <div class="thumbnail slider-border adjust1">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <img class="media-object img-rounded img-responsive"
                                             src="<?php bloginfo('template_directory'); ?>/img/recommendations/jodi.jpg"
                                             width=100 height=100 alt="Jodi Martin">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class=caption>
                                            <p class="text-info lead adjust2">"Scott is resourceful and
                                                intelligent."</p>
                                            <p><span class="glyphicon glyphicon-thumbs-up"></span>"Scott adds value to
                                                any team and his work ethic is impeccable. He always volunteered to take
                                                the lead on a project and is great during presentations." </p>
                                            <blockquote class=adjust2>
                                                <p>Jodi Martin</p>
                                                <small>
                                                    <cite title="Source Title">
                                                        <i class="glyphicon glyphicon-globe"></i>
                                                        Constant Contact
                                                    </cite>
                                                </small>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class=row>
                            <div class=col-xs-12>
                                <div class="thumbnail slider-border adjust1">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <img class="media-object img-rounded img-responsive"
                                             src="<?php bloginfo('template_directory'); ?>/img/recommendations/zachary-hedden.jpg"
                                             width=100 height=100 alt="Zachary Hedden">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class=caption>
                                            <p class="text-info lead adjust2">"Scott is extremely talented and
                                                multi-faceted."</p>
                                            <p><span class="glyphicon glyphicon-thumbs-up"></span>"He posses[es] a
                                                unique
                                                ability to captivate his students as well as pass along the same passion
                                                and enthusiam he exudes onto them. He is well versed in his subject
                                                matter and always strives to further his knowledge base and become a
                                                better teacer. Scott knows that the success of his students is how we
                                                truly succeed as a university and as people." </p>
                                            <blockquote class=adjust2>
                                                <p>Zachary Hedden</p>
                                                <small>
                                                    <cite title="Source Title">
                                                        <i class="glyphicon glyphicon-globe"></i>
                                                        Culinary Professional
                                                    </cite>
                                                </small>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class=row>
                            <div class=col-xs-12>
                                <div class="thumbnail slider-border adjust1">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <img class="media-object img-rounded img-responsive"
                                             src="<?php bloginfo('template_directory'); ?>/img/recommendations/natascha-saunders.jpg"
                                             width=100 height=100 alt="Natascha F. Saunders">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class=caption>
                                            <p class="text-info lead adjust2">"Dedication..."</p>
                                            <p><span class="glyphicon glyphicon-thumbs-up"></span>"Scott S. Garbini
                                                possesses a level of intelligence unknown to many. Yet, he is very
                                                personable. Scott is always educating himself in areas that not only
                                                benefit him but gaining tools that he can deliver into the community at
                                                large. When speaking to Scott, you will learn something new, as he is
                                                always teaching others – and often not aware of it. Scott inspires me to
                                                always do my best and strive for perfection. " </p>
                                            <blockquote class=adjust2>
                                                <p>Natascha F. Saunders</p>
                                                <small>
                                                    <cite title="Source Title">
                                                        <i class="glyphicon glyphicon-globe"></i>
                                                        HR & Education Consultant
                                                    </cite>
                                                </small>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=item>
                        <div class=row>
                            <div class=col-xs-12>
                                <div class="thumbnail slider-border adjust1">
                                    <div class="col-md-2 col-sm-2 col-xs-12">
                                        <img class="media-object img-rounded img-responsive"
                                             src="<?php bloginfo('template_directory'); ?>/img/recommendations/marie-mcgovern-davis.jpg"
                                             width=100 height=100 alt="Marie McGovern Davis">
                                    </div>
                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                        <div class=caption>
                                            <p class="text-info lead adjust2">"Results Oriented"</p>
                                            <p><span class="glyphicon glyphicon-thumbs-up"></span>"His ambition and
                                                determination to reach and exceed his goals and expectations is
                                                reflective in all avenues of his work. He sets high expectations for
                                                himself and those around him, creating a winning environment in which
                                                all stakeholders benefit from his work. As an admissions representative
                                                Scott raised the bar in the industry going above and beyond for his
                                                clients to ensure a smooth transition into college for students and
                                                their parents." </p>
                                            <blockquote class=adjust2>
                                                <p>Marie McGovern Davis</p>
                                                <small>
                                                    <cite title="Source Title">
                                                        <i class="glyphicon glyphicon-globe"></i>
                                                        Recruiting Manager at Chipotle Mexican Grill
                                                    </cite>
                                                </small>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide=prev> <span
                        class="glyphicon glyphicon-chevron-left"></span> </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide=next> <span
                        class="glyphicon glyphicon-chevron-right"></span> </a></div>
        </div>
    </div>
</section>
<section class=parallax-container style='height: 80vh;'>
    <img class='parallax pimg2' data-center=0.40 data-intensity=100
         src='<?php bloginfo('template_directory'); ?>/img/college5.jpg' alt=college/>
    <div class=teaser>
        <div class=content>
        </div>
    </div>
</section>
<section class="main-section about" id=about>
    <h2><span class=blue>About</span><span class=orange> Scott</span></h2>
    <h6>Education and Career Counselor.</h6>
    <div class=container>
        <div class=row>
            <div class=col-md-4>
                <img class="animated wow fadeInLeft delay-06s"
                     src="<?php bloginfo('template_directory'); ?>/img/bio/scott-capital.jpg" width=300 height=299
                     alt="Scott Garbini">
                <img class="animated wow fadeInLeft delay-08s"
                     src="<?php bloginfo('template_directory'); ?>/img/bio/scott-radio.jpg" width=300 height=399
                     alt="Scott Garbini">
                <img class="animated wow fadeInLeft delay-10s"
                     src="<?php bloginfo('template_directory'); ?>/img/bio/scott-speaks.jpeg" width=300 height=225
                     alt="Scott Garbini">
            </div>
            <div class=col-md-8>
                <div class="card animated wow fadeInUp delay-06s">
                    <ul class="nav nav-tabs about-box" role=tablist>
                        <li role=presentation class=active><a href="#biography" aria-controls=biography role=tab
                                                              data-toggle=tab>BIOGRAPHY</a></li>
                        <li role=presentation><a href="#boards" aria-controls=boards role=tab data-toggle=tab>BOARDS &
                                COMMITTEES</a></li>
                        <li role=presentation><a href="#education" aria-controls=education role=tab data-toggle=tab>EDUCATION</a>
                        </li>
                        <li role=presentation><a href="#visits" aria-controls=visits role=tab data-toggle=tab>VISITS</a>
                        </li>
                    </ul>
                    <div class=tab-content>
                        <div role=tabpanel class="tab-pane active" id=biography><p>
                                <?php
                                $post_id = 20;
                                $queried_post = get_post($post_id);
                                echo '<p>' . $queried_post->post_content . '</p>';
                                ?>
                            </p>
                        </div>
                        <div role=tabpanel class=tab-pane id=boards><p>
                                New London Board of Education: Elected 2013, Re-elected 2015<br>
                                <br>
                                New London Public Schools Facilities and Design-Committee Chairman 2013-present<br>
                                <br>
                                New London Public Schools School Facilities and Design Committee member 2014-Present<br>
                                <br>
                                New London Parks and Recreation Liaison-By City Ordinance 2014-present<br>
                                <br>
                                OutCT youth program-Board Member 2014-present<br>
                                <br>
                                New London Community & Campus Coalition-Committee Member 2014-present<br>
                                <br>
                                Fish Tales, Tugs and Sails-Committee Member 2014<br>
                                <br>
                                Metrocast Advisory-Committee Vice Chairman Member 2014<br>
                                <br>
                                HECA-College/Vendor Fair Co-Committee Cincinnati, OH 2015<br>
                                <br>
                                HECA-College/Vendor Fair Committee Philadelphia, PA 2016<br>
                                <br>
                                HECA-20th Anniversary Conference Co-Chair Southern, CA 2017</p>
                        </div>
                        <div role=tabpanel class=tab-pane id=education><p>
                            <h3>Johnson and Wales University</h3>
                            M.Ed, Teaching and Learning
                            2006 – 2008
                            <br>
                            <br>
                            <h3>Johnson and Wales University</h3>
                            Bachelors of Science, Culinary Nutrition
                            1998 – 2002</p>
                            <img
                                src="<?php bloginfo('template_directory'); ?>/img/Johnson-Wales-University-Logo-300x224.jpg"
                                width=300 height=224 alt="Johnson & Wales"/>
                        </div>
                        <div role=tabpanel class=tab-pane id=visits><p>
                                Cincinnati, OH-June 2015<br>
                                Higher Education Consultants Association 18th Annual Conference<br>
                                University of Cincinnati<br>
                                Wethersfield, CT-February 2015<br>
                                Discipline and Discrimination Workshop<br>
                                St. Augustine, FL-April 2015<br>
                                Flagler College<br>
                                Washington, DC-February 2015<br>
                                NSBA Advocacy Institute<br>
                                Connecticut in the Capitol<br>
                                Meetings with Congressman Courtney and Himes and Senators Murphy and Blumenthal ​​<br>
                                Seoul, Korea-November 2014<br>
                                Phuket, Thailand-November 2014<br>
                                Anchorage, AK-October 2014<br>
                                University of Anchorage<br>
                                Alaska Pacific University<br>
                                Denver, CO-May 2014<br>
                                University of Denver<br>
                                Denver Universtiy<br>
                                Johnson & Wales University<br>
                                Metro State University<br>
                                Community College of Denver<br>
                                Stanford, CA-April 2014<br>
                                The Hoover Institution at Stanford University<br>
                                Stanford Univeristy<br>
                                Providence, RI-March 2014<br>
                                Johnson & Wales University<br>
                                Portland, OR-January 2014<br>
                                Portland State University<br>
                                ​University of Portland<br>
                                New London, CT-December 2013<br>
                                Thames Academy- Post Grad<br>
                                Mitchell College<br>
                                Minneapolis, MN-October 2013<br>
                                ​University of Minnesota-Twin Cities<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id=section-portfolio class="section-portfolio bgc-one">
    <div class=container>
        <h2><span class=blue>Photo </span><span class=orange> Gallery</span></h2>
        <div class="row portfolio animated wow fadeInUpBig delay-10s" style="margin-top: 30px">
            <div id=portfolio class="owl-carousel owl-theme">
                <div class=portfolio-images>
                    <a href="img/gallery/gallery1.jpg" data-lightbox-gallery=portfolio-gallery><img
                            src="<?php bloginfo('template_directory'); ?>/img/gallery/gallery1-b.jpg"
                            alt="Scott Garbini"></a>
                </div>
                <div class=portfolio-images>
                    <a href="img/gallery/gallery2.jpeg" data-lightbox-gallery=portfolio-gallery><img
                            src="<?php bloginfo('template_directory'); ?>/img/gallery/gallery2-b.jpeg"
                            alt="Scott Garbini"></a>
                </div>
                <div class=portfolio-images>
                    <a href="img/gallery/gallery3.jpeg" data-lightbox-gallery=portfolio-gallery><img
                            src="<?php bloginfo('template_directory'); ?>/img/gallery/gallery3-b.jpg"
                            alt="Scott Garbini"></a>
                </div>
                <div class=portfolio-images>
                    <a href="img/gallery/gallery4.jpg" data-lightbox-gallery=portfolio-gallery><img
                            src="<?php bloginfo('template_directory'); ?>/img/gallery/gallery4-b.jpg"
                            alt="Scott Garbini"></a>
                </div>
                <div class=portfolio-images>
                    <a href="img/gallery/gallery5.jpg" data-lightbox-gallery=portfolio-gallery><img
                            src="<?php bloginfo('template_directory'); ?>/img/gallery/gallery5-b.jpg"
                            alt="Scott Garbini"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class=parallax-container style='height: 70vh;'>
    <img class='parallax pimg2' data-center=0.40 data-intensity=100
         src='<?php bloginfo('template_directory'); ?>/img/college-8.jpeg' alt=college/>
    <div class=teaser>
        <div class=content>
        </div>
    </div>
</section>
<span id=contact-anchor></span>
<section class="main-section contact" id=contact>
    <h2><span class=blue>Contact</span><span class=orange> Scott</span></h2>
    <h6>Get in touch.</h6>
    <div class=container>
        <div class=row>
            <div class="col-lg-3 col-sm-3"></div>
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                <div class="contact-info-box address clearfix">
                    <h3><i class=" icon-map-marker"></i>Address:</h3>
                    <span>P.O. Box 1130<br>Waterford, CT 06385, USA</span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class=fa-phone></i>Phone or Text:</h3>
                    <span><a href=tel:18608570038">+1.8608570038</a></span>
                </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class=fa-pencil></i>email:</h3>
                    <span><a href="mailto:scott@garbinied.com">Scott@garbinied.com</a></span>
                </div>
                <div class="contact-info-box hours clearfix">
                    <h3><i class=fa-clock-o></i>Hours:</h3>
                    <span>
<strong>Monday:</strong> 9am - 9pm<br>
<strong>Tuesday:</strong> 9am - 9pm<br>
<strong>Wednesday:</strong> 9am - 9pm<br>
<strong>Thursday:</strong> 9am - 9pm<br>
<strong>Friday:</strong> 9am - 9pm<br>
</span>
                </div>
            </div>
            <div class="col-lg-3 col-sm-2"></div>
        </div>
    </div>
</section>
<section class=parallax-container style='height: 50vh;'>
    <img class='parallax pimg2' data-center=0.40 data-intensity=100
         src='<?php bloginfo('template_directory'); ?>/img/conn-coll.jpg' alt=college/>
    <div class=teaser>
        <div class=content>
        </div>
    </div>
</section>
<!--	</main><!-- .site-main -->
<!--</div>-->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
