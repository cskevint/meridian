<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Meridian Foundation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">

    <link rel="apple-touch-icon-precomposed" href="icons/icon_57.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="icons/icon_72.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="icons/icon_114.png"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="icons/icon_144.png"/>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/stylesheet.css">
    <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <script type="text/javascript" src="assets/javascript.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar">

<?php include_once("pages/analytics_tracking.php") ?>

<div id="home">
    <a name="home"></a>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="conditional-container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home">Meridian Health Foundation</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a href="http://meridianfoundation.tumblr.com">News</a></li>
                    <li><a href="#purpose">Purpose</a></li>
                    <li><a href="#eastbay">East Bay Lights</a></li>
                    <li><a href="#programs">Programs</a></li>
                    <!-- <li><a href="#partnerships">Partnerships</a></li> -->
                    <li><a href="#donations">Donations</a></li>
                    <li><a href="#board">Board</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="x-banner">
    <?php
        if (isset($_SESSION['notice'])) {
            echo '<div class="container" style="position:absolute;top: 12px;left:0;right:0;text-align:center;color:white"><div class="alert alert-info">' . $_SESSION['notice'] . '</div></div>';
            unset($_SESSION['notice']);
        }
    ?>
    <img src="large/children_in_field.jpg"/>
</div>

<div id="purpose">
    <a name="purpose"></a>

    <div class="container" style="margin-bottom:45px;padding-top: 48px;">
        <h1>Mission and Purpose</h1>
        <?php include 'pages/mission.php'; ?>
    </div>
</div>

<!-- <div class="x-banner"><img src="large/eastbay.jpg" alt=""></div> -->

<!-- <div id="eastbay">
    <a name="eastbay"></a>

    <div class="container" style="margin-bottom:45px;padding-top: 48px;">
        <h1>East Bay Lights Education Programs in Richmond, CA</h1>
        <div class="row">
            <div class="col-lg-12">
                <p>The East Bay Lights program was initiated in 2022 in response to the difficulties faced by students in the Richmond and San Pablo neighborhoods in the east bay. A key concern shapes the vision of the program: How can the immense potential latent within each young person be released and channeled towards the betterment of the world? To learn about this question, EBL gives special attention to the areas of education, career pathways, and service to the community.</p>
                <p>EBL offers after school language and math tutoring that goes beyond academic instruction to foster attitudes and habits that enable students to take charge of their own learning. EBL interns, local upperclassmen in high school (mainly Richmond High) and college students (mostly Contra Costa Community College), play a vital role in this space as tutors to those younger than themselves. These interns also receive special mentorship and support as they navigate the transition to tertiary education, take on greater financial responsibilities in their families, and begin work. An annual summer program has assisted students to enhance capabilities related to expression, scientific thinking, numeracy, and service.</p>
                <p>The tutorial space for middle schoolers emerged to address challenges posed by the pandemic. It began with one-on-one tutoring with middle schoolers in their homes, with a focus on improving their English language skills. With experience, it became clear that many youth needed assistance with basic math skills. The program then began to offer math tutoring for participants, as well as relevant training for tutors. A week-long winter break math camp was held in 2022 that gave us experience with group tutoring possibilities. Then in summer 2023, we held a six-week-long afternoon math and literacy tutorial program camp. The group tutorial space, which continued the model of one-on-one peer tutoring with the addition of collective math and word games, yielded such positive results that it has been continued on a weekly basis, serving around 30 middle school participants. The program currently supports 10 college and high school interns. </p>
                <p></p>For more information, see <a href="http://eastbaylights.us">eastbaylights.us</a></p>
            </div>
        </div>
    </div>
</div> -->

<div class="x-banner"><img src="large/large_group.jpg"/></div>

<div id="programs">
    <a name="programs"></a>

    <div class="container" style="margin-bottom:45px;padding-top: 48px;">
        <h1>Programs</h1>
        <div class="row">
            <div class="col-lg-12">
                <?php include 'pages/programs.php'; ?>
            </div>
            <!-- <div class="col-lg-4">
                <div class="bg-primary" style="padding: 12px;color: white;">
                    <h3 class="text-center">Get Involved</h4>
                    <div style="margin:6px;">
                        <em>Want to know more? Drop us a note and we'll get in touch with all the details.</em>
                    </div>   
                    <form>
                        <div class="form-group">
                            <label for="contactname">Name</label>
                            <input type="text" class="form-control" id="contactname" placeholder="What's your name?">
                        </div>
                        <div class="form-group">
                            <label for="contactmethod">Phone or Email</label>
                            <input type="text" class="form-control" id="contactmethod" placeholder="What is your phone number or email address?">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-default">Contact me!</button>
                        </div>
                    </form>
                    <div style="margin:6px;">
                        <em>* We will never share your information with third parties.</em>
                    </div> 
                </div>
            </div> -->
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail" style="min-height:400px">
                    <img src="small/education.jpg" style="width:300px;" alt="Education">

                    <div class="caption">
                        <h3>Education</h3>

                        <p>The reading and discussion of stories focus on developing the power of expression as well as
                            exposing junior youth to social concepts such as kindness and justice.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail" style="min-height:400px">
                    <img src="small/service.jpg" style="width:300px;" alt="Service">

                    <div class="caption">
                        <h3>Service</h3>

                        <p>Service projects utilize their energy to help the community or its members. Projects may
                            start small (e.g. picking up trash) but slowly increase in complexity as their capacity to
                            assess needs and plan effectively increases.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail" style="min-height:400px">
                    <img src="small/arts_drama.jpg" style="width:300px;" alt="Arts">

                    <div class="caption">
                        <h3>Arts</h3>

                        <p>Artistic projects enhance their ability to think creatively. Drawing and illustration can be
                            a weekly element in the group meeting. Music and dramatic presentations are also used
                            often.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail" style="min-height:400px">
                    <img src="small/health_soccer.jpg" style="width:300px;" alt="Health">

                    <div class="caption">
                        <h3>Health</h3>

                        <p>Healthy recreation, sports, and cooperative games reinforce the lesson plans. Nearby
                            neighborhood parks and schools offer open spaces for formal and informal games.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-8 text-center">
                <iframe src="https://player.vimeo.com/video/144407938" style="aspect-ratio: 16 / 9; width: 100%;"  frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
            <div class="col-lg-4">
				<h3>Diana's Junior Youth Group</h3>
				<p>Diana talks about how she became involved serving as an animator for the Junior Youth Spiritual Empowerment Program.</p>
			</div>
        </div>
        <!-- <hr>
 		<div class="row">
     		<div class="col-lg-4">
				<h3>Increase the Peace</h3>
				<p>Kids around California work together to bring social change by talking about and finding solutions on how to live in a safer and more connected community.</p>
			</div>
        	<div class="col-lg-8 text-center">
				<iframe style="aspect-ratio: 16 / 9; width: 100%;" src="//www.youtube.com/embed/zQQ_2kzaZ8c" frameborder="0" allowfullscreen></iframe>
			</div>
		</div> -->
    </div>
</div>
	
<!-- <div class="x-banner"><img src="large/exercise.jpg"/></div> -->

<!-- <div id="partnerships">
    <a name="partnerships"></a>

    <div class="container" style="margin-bottom:45px;padding-top: 48px;">
        <h1>Partnerships</h1>

        <div class="row">
            <div class="col-lg-12">
                <?php 
                #include 'pages/partnerships.php'; 
                ?>
            </div>
        </div>
        <hr>
        <div class="row well">
            <p class="lead">
                Badi Foundation
            </p>
            <div class="col-lg-4">
                <img src="small/badi-foundation.jpg" class="img-responsive"/>
            </div>
            <div class="col-lg-8">
                <p>
                    The <a href="http://www.badi-foundation.org/en/" target="_blank">Badi Foundation</a> implements capacity building initiatives that serve children in mainland China. Both Meridian and Badi believe that true development must emerge from within a local population and that capacity building must be long term beginning at the grassroots to formulate an approach to improve communities. This process is made systematic through an emphasis on collective learning from shared experience in the field. 
                </p>
                <p>
                    The rapidly changing social landscape in both China and the world leaves many, especially the young, questioning their identity, their future, and their place in society. Youth in particular seem to be searching for standards by which to govern their lives and decisions. Both of these organizations share the goal of working with junior youth for these reasons.
                </p>
            </div>
        </div>
    </div>
</div> -->

<div class="x-banner"><img src="large/high_school.jpg"/></div>

<div id="donations">
    <a name="donations"></a>

    <div class="container" style="margin-bottom:45px;padding-top: 48px;">
        <h1>Donations</h1>

        <div class="row">
            <div class="col-lg-8">
                <?php include 'pages/donations.php'; ?>
            </div>
            <div class="col-lg-4">
                <blockquote>
                    <p>
                        To every generation of young believers comes an opportunity to make a contribution to the
                        fortunes of humanity, unique to their time of life. For the present generation, the moment has
                        come to reflect, to commit, to steel themselves for a life of service from which blessing will
                        flow in abundance.
                    </p>
                    <small>
                        Universal House of Justice
                    </small>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<div class="x-banner"><img src="large/children_on_couch.jpg"/></div>

<div id="board">
    <a name="board"></a>

    <div class="container" style="margin-bottom:45px;padding-top: 48px;">
        <h1>Board</h1>

        <div class="row">
            <div class="col-lg-3 text-center">
                <img src="small/Milly-Farid.jpg" class="img-circle"/>
                <h2>
                    Amelia Farid
                </h2>
				<h4>
                    Exeucutive Director
				</h4>	
            </div>
            <div class="col-lg-3 text-center">
                <img src="small/Saman-Farid.jpg" class="img-circle"/>
                <h2>
                    Saman Farid
                </h2>
                <h4>
                    President
                </h4>
            </div>			
            <div class="col-lg-3 text-center">
                <img src="small/Parham-Aghdasi.jpg" class="img-circle"/>
                <h2>
                    Parham Aghdasi
                </h2>
                <h4>
                    Treasurer
                </h4>
            </div>
            <div class="col-lg-3 text-center">
                <img src="small/Deanne-LaRue.jpg" class="img-circle"/>
                <h2>
                    Deanne LaRue
                </h2>
				<h4>
					Adviser
				</h4>
            </div>
        </div>
    </div>
</div>

<div class="x-banner"><img src="large/neighborhood_service.jpg"/></div>

<div id="contact">
    <a name="contact"></a>

    <div class="well" style="border-radius:0; border:0 none;">
        <div class="container" style="margin-bottom:45px;padding-top: 48px;">
            <h1>Contact</h1>

            <div class="row">
                <div class="col-lg-4">
                    <h4>Send us a note:</h4>

                    <form id="contact_us" action="mail.php" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" value="" placeholder="Name" required/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" value="" placeholder="Email"
                                   required/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-6 col-sm-6">
                                <input class="form-control" type="reset" value="Reset"/>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <input class="form-control btn-primary" type="submit" value="Send"/>
                            </div>
                        </div>
                    </form>
                    <div style="margin-bottom: 10px">&nbsp;</div>
                </div>
                <div class="col-lg-4">
                    <h4>Contact Details</h4>
                    <ul id="contact_details">
                        <!-- <li class="">
                            <span class="glyphicon glyphicon-earphone"></span>
                            (+1) (650) 999-0019
                        </li> -->
                        <li class="">
                            <span class="glyphicon glyphicon-envelope"></span>
                            <script type="text/javascript">
                                var username = "info", hostname = "meridianfoundation.org", linkText = username + "@" + hostname;
                                document.write("<a href='" + "mail" + "to:" + username + "@" + hostname + "'>" + linkText + "</a>");
                            </script>
                        </li>
                        <!-- <li class="">
                            <span class="glyphicon glyphicon-road"></span>
                            14020 San Pablo Ave. San Pablo CA 94806
                        </li> -->
                        <li class="">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <a href="http://www.facebook.com/pages/Meridian-Foundation/249104004919?ref=nf">Facebook</a>
                        </li>
                        <li class="">
                            <span class="glyphicon glyphicon-bullhorn"></span>
                            <a href="https://twitter.com/MeridianFNDTN">Twitter</a>
                        </li>
                        <li class="">
                            <span class="glyphicon glyphicon-facetime-video"></span>
                            <a href="https://www.youtube.com/@MeridianFoundationSF">YouTube</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <blockquote>
                        <p>
                            The future of today’s society will depend to a great extent on the manner in which educational programs and methods are designed to release the latent potential of youth and prepare them for the world they will inherit. 
                        </p>
                        <small class="text-right">
                            Bah&aacute;'&iacute; International Community <a href="https://www.bic.org/statements/youth-and-adolescents-education-service-community#mEH2xWLAGGsXMqLE.99">statement</a>
                        </small>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <footer>
        <p>&copy; Meridian Health Foundation - A <a href='http://www.bahai.org/'>Bah&aacute;'&iacute;</a>-inspired organization</p>
    </footer>
</div>

</body>
</html>
