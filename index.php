<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Victor Mba CV and Resume</title>
    <meta name="description" content="My Cv design using HTML,CSS,JavaScript,PHP">
    <meta name="keywords" content="CV,CV template,CV design,Resume builder,">
    <meta name="author" content="Victor Mba">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://lilvinco/github.io" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Main JS -->
    <script type="text/javascript" src="main.js"></script>
</head>

<body>
    <div class="row">
        <div class="sidecolumn">
            <!-- personal info start -->
            <div class="display-img">
                <!-- display picture from cloudinary -->
                <img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1566514194/ATE_2020_HBD_VICTOR_20190522_171139_hpkpa7.jpg" alt="Victor's Cvv display picture" width="250" height="250">
                <!-- my name & motto -->
                <div class="sidebar mb--45 mt--10">
                    <h1>Victor Mba</h1>
                    <h2><strong>Innovation Enthusiast</strong></h2>
                </div>
                <!-- intro end -->
                <!-- content start -->
                <div class="sidebar mb--120">
                    <h4 class="title">Content</h4>
                    <ul>
                        <li><a href="">EXPERIENCE</a></li>
                        <li><a href="">EDUCATION</a></li>
                        <li><a href="">SKILLS</a></li>
                    </ul>
                </div>
                <!-- content end -->
                <!-- contact start -->
                <span>
                    <div class="sidebar">
                        <h4 class="title">Contact</h4>
                        <h5><a href="tel:2348143280602">(+234) 8143280602</a></h5>
                        <h5>
                            <p><a href="mailto:victormba34@gmail.com">Victormba34@gmail.com</a></p>
                        </h5>
                        <div class="sidecolumn">
                            <div class="smallcol">
                                <a href="https://www.linkedin.com/in/victormba34/"><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1566524284/li_jokka0.jpg" alt="Connect on LinkedIn" width="25" height="25" style="float: left;"></a>
                            </div>
                            <div class="smallcol">
                                <a href="https://www.twitter.com/lilvinco"><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1566524274/twitter-icon_aaaz0m.png" alt="Follow on twitter" width="25" height="25" style="float: right;"></a>
                            </div>
                        </div>
                    </div>
                </span>
                <!-- contact end -->
            </div>
        </div>
        <div class="maincolumn">
            <!-- content-details-wrapper start -->
            <div class="cv-details-wrapper">
                <div class="rowside">
                    <center>
                        <p>A creative young engineering student passionate about learning, innovation and entreprenuership. He is a communications and networking expert also open to new opportunities in Software Development.</p>
                        <p> When he is not learning or working, he engages in sports, explores good music and eats delicious food.</p>
                    </center>
                    <div class="contact-form" style="">
                        <!--Button start -->
                        <button class="contact-btn" onclick="showForm()"><i></i> Get in touch</button>
                        <div class="contact-form-content" id="formbox">
                            <div class="dropdown-menu">
                                <div class="contact-title">
                                    <h3>SEND ME A MESSAGE</h3>
                                </div>
                                <form id="contact-form" action="main.php" onsubmit="return validateForm();" on method="POST">
                                    <div class="contact-page-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="fullname" type="text" placeholder="Full Name *" id="fullname" required="required" pattern=".{4,}" title="4 or more characters">
                                            </div>
                                            <div class="contact-inner">
                                                <input type="email" placeholder="Email *" id="email" name="email" required="required" title="email must be format: example@xxx.com">
                                            </div>
                                            <div class="contact-inner" style="width: 100%">
                                                <input name="subject" type="text" placeholder="Subject" id="subject" required="required">
                                            </div>
                                            <div class="contact-inner contact-message">
                                                <textarea name="message" placeholder="Message *" required="required" minlength="20" title="20 or more characters"></textarea>
                                            </div>
                                        </div>
                                        <div class="contact-submit-btn">
                                            <button class="submit-btn" type="submit">Send Email</button>
                                            <button class="close" onclick="closeBox()">Close</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rowmiddle">
                    <div class="content-wrapper">
                        <div class="content">
                            <div class="column">
                                <center>
                                    <h3>Kewalram Nigeria Limited</h3>
                                    <hr>
                                    <h6>Oct - Dec 2018</h6>
                                </center>
                                <ul>
                                    <li>Understand production lines</li>
                                    <li>Conduct quality assurance tests</li>
                                    <li>Use special computers to run tests on vehicles</li>
                                </ul>
                            </div>
                            <div class="column">
                                <center>
                                    <h3>Madsuite Technologies</h3>
                                    <hr>
                                    <h6>Port-Harcout, Rivers</h6>
                                </center>
                                <ul>
                                    <center>
                                        <li>Develop brand growth strategies</li>
                                    </center>
                                    <center>
                                        <li>Build strong teams and facilitate growth</li>
                                    </center>
                                    <center>
                                        <li>Develop awesome products for clients</li>
                                    </center>
                                </ul>
                            </div>
                            <div class="column">
                                <center>
                                    <h3>Lubrisac Oil</h3>
                                    <hr>
                                    <h6>Oct - Dec 2017</h6>
                                </center>
                                <ul>
                                    <li>Conduct quality tests on lubricants</li>
                                    <li>Record and report lab results</li>
                                    <li>Use special computers to run tests on lubricants</li>
                                </ul>
                            </div>
                        </div>
                        <div class="content mt--40">
                            <div class="column">
                                <center>
                                    <h3>F.U.T.O</h3>
                                    <hr>
                                    <h6>Mechanical Engineering</h6>
                                    <h5>2015 - 2020</h5>
                                </center>
                            </div>
                            <div class="column">
                                <center>
                                    <h3>Rolex Comprehensive College</h3>
                                    <hr>
                                    <h6>Ojo, Lagos</h6>
                                    <h5>2014</h5>
                                </center>
                            </div>
                            <div class="column">
                                <center>
                                    <h3>Udacity</h3>
                                    <hr>
                                    <h6>Android Basics ND</h6>
                                    <h5>2018</h5>
                                </center>
                            </div>
                        </div>
                        <div class="content mt--40">
                            <div class="col">
                                <center>
                                    <h5>HTML-CSS</h5>
                                </center>
                                <ul class="prof ml--110">
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                </ul>
                            </div>
                            <div class="col">
                                <center>
                                    <h5>JS-PHP</h5>
                                </center>
                                <ul class="prof ml--110">
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                </ul>
                            </div>
                            <div class="col">
                                <center>
                                    <h5>ANDROID</h5>
                                </center>
                                <ul class="prof ml--110">
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                </ul>
                            </div>
                            <div class="col">
                                <center>
                                    <h5>CAD</h5>
                                </center>
                                <ul class="prof ml--110">
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                </ul>
                            </div>
                            <div class="col">
                                <center>
                                    <h5>TEAM WORK</h5>
                                </center>
                                <ul class="prof ml--90">
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                    <li><img src="https://res.cloudinary.com/dprmplqfj/image/upload/v1567037571/gold-star_tzvcrc.png" height="10" width="10"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rowside">
                    <div class="footer">
                        <center>With ♥ from <italic>Victor Mba</italic></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main JS -->
    <script type="text/javascript src=" main.js"></script>
</body>
<!-- Main JS -->
<script type="text/javascript src=" main.js"></script>

</html>