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
                    <li><a href="#programs">Programs</a></li>
                    <li><a href="#partnerships">Partnerships</a></li>
                    <li><a href="#donations">Donations</a></li>
                    <li><a href="#board">Board</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="x-banner">
    <? if($_REQUEST['message'] == 'thanks') { ?>
        <div class="container">
            <h1 style="position:absolute;left:0;right:0;text-align:center;color:white">Thank you!</h1>
        </div>
    <? } ?>
    <img src="large/design_thinking.jpg"/>
</div>

<div id="purpose">
    <a name="purpose"></a>

    <div class="container" style="margin-bottom:45px;padding-top: 48px;">
        <h1>Mission and Purpose</h1>
        <?php include 'pages/mission.php'; ?>
    </div>
</div>

<div class="x-banner"><img src="large/large_group.jpg"/></div>

<div id="programs">
    <a name="programs"></a>

    <div class="container" style="margin-bottom:45px;padding-top: 48px;">
        <h1>Programs</h1>

        <div class="row">
            <div class="col-lg-8">
                <?php include 'pages/programs.php'; ?>
            </div>
            <div class="col-lg-4">
                <blockquote>
                    <p>
                        The merit of the junior youth spiritual empowerment program lies, first and foremost, in its
                        effectiveness at enhancing the power of expression and the quality of spiritual perception
                        within its participants and in assisting them to develop the capabilities necessary for a life
                        of meaningful service to their communities.
                    </p>
                    <small>
                        Universal House of Justice, November 14 2012
                    </small>
                </blockquote>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail" style="min-height:400px">
                    <img src="small/education.jpg" style="width:300px;" alt="Education">

                    <div class="caption">
                        <h3>Education</h3>

                        <p>The reading and discussions of stories focus on developing the power of expression as well as
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
 		<div class="row">
     		<div class="col-lg-4">
				<h4>Increase the Peace</h4>
				<p>Kids around California work together to bring social change by talking about and finding solutions on how to live in a safer and more connected community.</p>
			</div>
        	<div class="col-lg-8 text-center">
				<iframe width="560" height="315" src="//www.youtube.com/embed/zQQ_2kzaZ8c" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
    </div>
</div>
	
<div class="x-banner"><img src="large/bosch_group_picture.jpg"/></div>

<div id="partnerships">
    <a name="partnerships"></a>

    <div class="container" style="margin-bottom:45px;padding-top: 48px;">
        <h1>Partnerships</h1>

        <div class="row">
            <div class="col-lg-8">
                <?php include 'pages/partnerships.php'; ?>
            </div>
            <div class="col-lg-4">
                <blockquote>
                    <p>
                        Let them come to realize the full significance of their efforts to help young people form a
                        strong moral identity in their early adolescent years and empower them to contribute to the
                        well-being of their communities.
                    </p>
                    <small>
                        Universal House of Justice, October 20, 2008
                    </small>
                </blockquote>
            </div>
        </div>
    </div>
</div>

<div class="x-banner"><img src="large/classroom.jpg"/></div>

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
                        Universal House of Justice, February 8, 2013
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
            <div class="col-lg-4 text-center">
                <img src="small/Selena-Trotter.jpg" class="img-circle"/>

                <h2>
                    Selena Trotter
                </h2>
				<h4>
					Executive Director
				</h4>

                <!-- <p class="text-left">
                    <small>
                        <php include 'pages/board_selena.php'; ?>
                    </small>
                </p> -->
            </div>
            <div class="col-lg-4 text-center">
                <img src="small/Saman-Farid.jpg" class="img-circle"/>

                <h2>
                    Saman Farid
                </h2>
				<h4>
					Treasurer
				</h4>

<!--                <p class="text-left">
                    <small>
                        <php include 'pages/board_kevin.php'; ?>
                    </small>
                </p> -->
            </div>			
            
            <div class="col-lg-4 text-center">
                <img src="small/Milly-Farid.jpg" class="img-circle"/>

                <h2>
                    Amelia Farid
                </h2>
				<h4>
					Secretary
				</h4>	
			

                <!-- <p class="text-left">
                    <small>
                        <php include 'pages/board_oliver.php'; ?>
                    </small>
                </p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 text-center">
                <img src="small/Deanne-LaRue.jpg" class="img-circle"/>

                <h2>
                    Deanne LaRue
                </h2>
				<h4>
					Adviser
				</h4>

                <!-- <p class="text-left">
                    <small>
                        <php include 'pages/board_deanne.php'; ?>
                    </small>
                </p> -->
            </div>
            <div class="col-lg-6 text-center">
                <img src="small/Kevin-Trotter.jpg" class="img-circle"/>

                <h2>
                    Kevin Trotter
                </h2>

<!--                <p class="text-left">
                    <small>
                        <php include 'pages/board_kevin.php'; ?>
                    </small>
                </p> -->
            </div>
            
        </div>
    </div>
</div>

<div class="x-banner"><img src="large/lemonade_stand.jpg"/></div>

<div id="contact">
    <a name="contact"></a>

    <div class="well" style="border-radius:0; border:0 none;">
        <div class="container" style="margin-bottom:45px;padding-top: 48px;">
            <h1>Contact</h1>

            <div class="row">
                <div class="col-lg-4">
                    <?php
                    if (isset($_SESSION['notice'])) {
                        echo '<div class="alert alert-info">' . $_SESSION['notice'] . '</div>';
                        unset($_SESSION['notice']);
                    }
                    ?>
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
                        <li class="">
                            <span class="glyphicon glyphicon-earphone"></span>
                            (+1) (650) 999-0019
                        </li>
                        <li class="">
                            <span class="glyphicon glyphicon-envelope"></span>
                            <script type="text/javascript">
                                var username = "info", hostname = "meridianfoundation.org", linkText = username + "@" + hostname;
                                document.write("<a href='" + "mail" + "to:" + username + "@" + hostname + "'>" + linkText + "</a>");
                            </script>
                        </li>
                        <li class="">
                            <span class="glyphicon glyphicon-road"></span>
                            PO Box #1273, San Mateo, CA 94401
                        </li>
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
                            <a href="http://www.youtube.com/user/MeridianFoundation">YouTube</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <blockquote>
                        <p>
                            To every generation of young believers comes an opportunity to make a contribution to the
                            fortunes of humanity, unique to their time of life. For the present generation, the moment
                            has come to reflect, to commit, to steel themselves for a life of service from which
                            blessing will flow in abundance.
                        </p>
                        <small class="text-right">
                            Universal House of Justice, February 8, 2013
                        </small>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <footer>
        <p>&copy; Meridian Health Foundation 2013</p>
    </footer>
</div>

</body>
</html>
