<x-app-layout>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Website Template by freehtml5.co"/>
        <meta name="keywords"
              content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive"/>
        <meta name="author" content="freehtml5.co"/>

        <!--
        //////////////////////////////////////////////////////

        FREE HTML5 TEMPLATE
        DESIGNED & DEVELOPED by FreeHTML5.co

        Website: 		http://freehtml5.co/
        Email: 			info@freehtml5.co
        Twitter: 		http://twitter.com/fh5co
        Facebook: 		https://www.facebook.com/fh5co

        //////////////////////////////////////////////////////
         -->

        <!-- Facebook and Twitter integration -->
        <meta property="og:title" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content=""/>
        <meta property="og:site_name" content=""/>
        <meta property="og:description" content=""/>
        <meta name="twitter:title" content=""/>
        <meta name="twitter:image" content=""/>
        <meta name="twitter:url" content=""/>
        <meta name="twitter:card" content=""/>

        <link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

        <!-- Animate.css -->
        <link rel="stylesheet" href="{{asset("assets/css/animate.css")}}">
        <!-- Icomoon Icon Fonts-->
        <link rel="stylesheet" href="{{asset("assets/css/icomoon.css")}}">
        <!-- Bootstrap  -->
        <link rel="stylesheet" href="{{asset("assets/css/bootstrap.css")}}">

        <!-- Theme style  -->
        <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

        <!-- Modernizr JS -->
        <script src="{{asset("assets/js/modernizr-2.6.2.min.js")}}"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src="{{asset("assets/js/respond.min.js")}}"></script>
        <![endif]-->

        @vite(['resources/css/app.css','resources/scss/app.scss', 'resources/js/app.js'])
        {{--        {{vite_assets()}}--}}
    </head>

    <div class="fh5co-loader"></div>

    <div id="page">
        <header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner"
                style="background-image:url({{asset("assets/images/cover_bg_3.jpg")}});"
                data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t js-fullheight">
                            <div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
                                <div class="profile-thumb"
                                     style="background: url({{asset("assets/images/oubri-daouda.jpg")}});"></div>
                                <h1><span>Oubri Daouda</span></h1>
                                <h3><span>Full Stack Developer</span></h3>
                                <p>
                                <ul class="fh5co-social-icons">
                                    <li><a href="https://github.com/oubridaouda"><i class="icon-github2"></i></a></li>
                                    <li><a href="https://www.linkedin.com/in/oubri-daouda-a2158711a"><i
                                                class="icon-linkedin2"></i></a></li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="fh5co-about" class="animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>About Me</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="info">
                            <li><span class="first-block">Full Name:</span><span
                                    class="second-block">Oubri Daouda</span></li>
                            <li><span class="first-block">Phone:</span><span class="second-block"><a
                                        href="tel:+22677549528">+226 77549528</a></span>
                            </li>
                            <li><span class="first-block">Email:</span><span
                                    class="second-block">oubridaouda@gmai.com</span></li>
                            <li><span class="first-block">Address:</span><span class="second-block">Ouagadougou</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <h2>Hello There!</h2>
                        <p>The development profession has always fascinated me, as it enables me to use technology to
                            solve real-life problems, design innovative solutions and help simplify everyday life. My
                            commitment to this field is fueled by my desire to make a positive impact through the
                            creation of high-performance applications and IT systems. My goal is to continue evolving in
                            this field by exploring new technologies and constantly taking on stimulating challenges to
                            continue contributing to the technological advancement of our society.</p>
                        <ul class="fh5co-social-icons">
                            <li><a href="https://github.com/oubridaouda"><i class="icon-github2"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/oubri-daouda-a2158711a/"><i
                                        class="icon-linkedin2"></i></a></li>
                            {{--                            <li><a href="#"><i class="icon-twitter2"></i></a></li>--}}
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-resume" class="fh5co-bg-color">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>My curriculum vitae</h2>
                    </div>
                </div>
                <div class="text-center"><a target="_blank" href="{{asset("assets/pdf/Mon CV.pdf")}}"><b>Click here to Download my cv for more information</b></a></div>

                <div hidden="" class="row">
                    <div class="col-md-12 col-md-offset-0">
                        <ul class="timeline">
                            <li class="timeline-heading text-center animate-box">
                                <div><h3>Work Experience</h3></div>
                            </li>
                            <li class="timeline-unverted animate-box">
                                <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Mobile and web developer</h3>
                                        <span class="company">Barkalab - 2022 - 2023</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Far far away, behind the word mountains, they live in Bookmarksgrove right at
                                            the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="animate-box timeline-inverted">
                                <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Mobile and web developer internship</h3>
                                        <span class="company">Declic Africa - 2021 - 2022</span>
                                    </div>
                                    <div class="timeline-body">
                                        <ul>

                                            <li>
                                                Contribution au développement d'une application mobile de gestion des
                                                heures de travail des employés en entreprise avec React Native.
                                            </li>
                                            <li>
                                                Support et recueil des besoins des clients.
                                            </li>
                                            <li>

                                                Contribution aux phases de développement, de test fonctionnel et de mise
                                                en production des applications web pour les clients de l'entreprise.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-unverted animate-box">
                                <div class="timeline-badge"><i class="icon-suitcase"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Junior developer internship</h3>
                                        <span class="company">ADCT - 2020 - 2021</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p>Far far away, behind the word mountains, they live in Bookmarksgrove right at
                                            the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </li>

                            <br>
                            <li class="timeline-heading text-center animate-box">
                                <div><h3>Education</h3></div>
                            </li>
                            <li class="timeline-inverted animate-box">
                                <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Masters in Information Systems and Networks
                                            (SSI)</h3>
                                        <span
                                            class="company">Ecole Superieure des Techniques Avancees - 2021 - 2022</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p></p>
                                    </div>
                                </div>
                            </li>
                            <li class="timeline-unverted animate-box">
                                <div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h3 class="timeline-title">Licence in Information Systems and Networks
                                            (SIR)</h3>
                                        <span
                                            class="company">Ecole Superieure des Techniques Avancees - 2020 - 2021</span>
                                    </div>
                                    <div class="timeline-body">
                                        <p></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div hidden="" id="fh5co-features" class="animate-box">
            <div class="container">
                <div class="services-padding">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                            <h2>My Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <div class="feature-left">
							<span class="icon">
								<i class="icon-paintbrush"></i>
							</span>
                                <div class="feature-copy">
                                    <h3>Web Design</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 text-center">
                            <div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
                                <div class="feature-copy">
                                    <h3>Analytics</h3>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 text-center">

                            <div class="feature-left">
							<span class="icon">
								<i class="icon-bargraph"></i>
							</span>
                                <div class="feature-copy">
                                    <h3>Web Developent</h3>
                                    <p></p>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-3 text-center">
                            <div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
                                <div class="feature-copy">
                                    <h3>API Developent</h3>
                                    <p></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div hidden="" id="fh5co-skills" class="animate-box">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>Skills</h2>
                    </div>
                </div>
                {{--                <div class="row row-pb-md">--}}
                {{--                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">--}}
                {{--                        <div class="chart" data-percent="95"><span><strong>HTML5</strong>95%</span></div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">--}}
                {{--                        <div class="chart" data-percent="93"><span><strong>CSS3</strong>93%</span></div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">--}}
                {{--                        <div class="chart" data-percent="90"><span><strong>jQuery</strong>90%</span></div>--}}
                {{--                    </div>--}}

                {{--                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">--}}
                {{--                        <div class="chart" data-percent="89"><span><strong>PHP</strong>89%</span></div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">--}}
                {{--                        <div class="chart" data-percent="85"><span><strong>MySQL</strong>85%</span></div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">--}}
                {{--                        <div class="chart" data-percent="90"><span><strong>AngularJS</strong>90%</span></div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">--}}
                {{--                        <div class="chart" data-percent="85"><span><strong>Ruby</strong>85%</span></div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">--}}
                {{--                        <div class="chart" data-percent="90"><span><strong>Java</strong>90%</span></div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="progress-wrap">
                            <h3><span class="name-left">PHP</span><span class="value-right">80%</span></h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
                                     aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3><span class="name-left">Dart</span><span class="value-right">85%</span></h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
                                     aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3><span class="name-left">Design</span><span class="value-right">100%</span></h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-5 progress-bar-striped active" role="progressbar"
                                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="progress-wrap">
                            <h3><span class="name-left">React native</span><span class="value-right">70%</span></h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar"
                                     aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3><span class="name-left">Python</span><span class="value-right">85%</span></h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
                                     aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                </div>
                            </div>
                        </div>
                        <div class="progress-wrap">
                            <h3><span class="name-left">JavaScript</span><span class="value-right">75%</span></h3>
                            <div class="progress">
                                <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
                                     aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-work" class="fh5co-bg-dark">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <h2>My Work</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4 text-center col-padding animate-box">
                        <a target="_blank" href="https://www.seracom-bf.com/" class="work"
                           style="background-image: url({{asset("assets/images/Seracom.png")}});">
                            <div class="desc">
                                <h3>SERACOM</h3>
                                <span>Le site officiel de la Structure Rurale d’Appui aux Communautés</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center col-padding animate-box">
                        <a target="_blank" href="https://www.inove-tech-service.com/" class="work"
                           style="background-image: url({{asset("assets/images/inove-tech-service.png")}});">
                            <div class="desc">
                                <h3>Inove Tech Service</h3>
                                <span>Le site web de vente en ligne de produits informatique</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center col-padding animate-box" hidden="">
                        <a target="_blank" href="https://www.barkalab.com/" class="work"
                           style="background-image: url({{asset("assets/images/project-1.png")}});">
                            <div class="desc">
                                <h3>Barkalab</h3>
                                <span>Le site web d'accueil de Barkalab</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 text-center col-padding animate-box">
                        <a target="_blank" href="https://www.coinbestchange.com/" class="work"
                           style="background-image: url({{asset("assets/images/project-2.png")}});">
                            <div class="desc">
                                <h3>Coinbestchange</h3>
                                <span>Un comparateur de prix de crypto monnai pour le compte de Barkalab</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="fh5co-consult">
            <div class="video fh5co-video" style="background-image: url({{asset("assets/images/cover_bg_1.jpg")}});">
                <div class="overlay"></div>
            </div>
            <div class="choose animate-box">
                <h2>Contact</h2>
                <form>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <input type="text" id="fname" class="form-control mb-30" placeholder="Your firstname">
                        </div>
                        <div class="col-md-6">
                            <input type="text" id="lname" class="form-control" placeholder="Your lastname">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" id="email" class="form-control" placeholder="Your email address">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="text" id="subject" class="form-control"
                                   placeholder="Your subject of this message">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"
                                      placeholder="Say something about us"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>

                </form>
            </div>
        </div>

        <div id="map" class="fh5co-map"></div>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
    </div>


    <!-- jQuery -->
    <script src="{{asset("assets/js/jquery.min.js")}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset("assets/js/jquery.easing.1.3.js")}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
    <!-- Waypoints -->
    <script src="{{asset("assets/js/jquery.waypoints.min.js")}}"></script>
    <!-- Stellar Parallax -->
    <script src="{{asset("assets/js/jquery.stellar.min.js")}}"></script>
    <!-- Easy PieChart -->
    <script src="{{asset("assets/js/jquery.easypiechart.min.js")}}"></script>
    <!-- Google Map -->
    {{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>--}}
    <script src="{{asset("assets/js/google_map.js")}}"></script>

    <!-- Main -->
    <script src="{{asset("assets/js/main.js")}}"></script>

</x-app-layout>
