<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$db = mysqli_connect ("localhost","root","","test");
$name = $_SESSION['Name'];
if($_SESSION['Name']== "admin")
{Header("Location: Table.php");}
if ($_SESSION['Name']== TRUE)
{

echo <<< EOT

<!DOCTYPE html>

<head>

    <title>Spikizy</title>

    <link rel="stylesheet" href="css/base2.css">
    <link rel="stylesheet" href="css/main2.css">

    <!-- favicon
        ================================================== -->
    <link rel="shortcut icon" href="favicon.jpg">
    <link href='https://fonts.googleapis.com/css?family=Public Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>

    <script src="https://kit.fontawesome.com/69c62f68f1.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- header
    ================================================== -->
    <header>

        <div class="row">

            <nav id="nav-wrap">

                <ul id="nav" class="nav">
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#category">Category</a></li>
                    <li><a href="">About Us</a></li>
                    <li>
                        <div id="menuToggle">
                            
                            <input type="checkbox" />

                            <span></span>
                            <span></span>
                            <span></span>

                            <ul id="menu">
                                <a href="#">
                                    <li><i class="fa-solid fa-user"></i> $name</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa-solid fa-address-card"></i> About</li>
                                </a>
                                <a href="#">
                                    <li><i class="fa-solid fa-gear"></i> Settings</li>
                                </a>
                                <a href="log in.html">
                                    <li><i class="fa-solid fa-right-from-bracket"></i> Log Out</li>
                                </a>
                            </ul>
                        </div>
                    </li>
                </ul>


            </nav>
        </div>
    </header>

    <!-- homepage hero
    ================================================== -->
    <section id="hero">

        <div class="heroscreen">

            <form id="searchform">
                <input type="text" id="search" placeholder="What do want to learn?">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>

            <div>
                <h3>Learn a New Skill<br>
                    Everyday, Anytime,<br>
                    and Anywhere.
                </h3>
                <p><b>1000+</b> Courses covering all tech domains for you to<br>
                    learn and explore new opportunities. Learn from<br>
                    Industry Experts and land your Dream Job.</p>
            </div>

            <div class="container">
                <div id="column">
                    <h4 id="yellow">1000+</h4>
                    <h6>Courses to<br>
                        choose from</h6>
                </div>

                <div id="column">
                    <h4 id="green">5000+</h4>
                    <h6>Students <br>
                        Trained</h6>
                </div>

                <div id="column">
                    <h4 id="orange">200+</h4>
                    <h6>Professional<br>
                        Trainers</h6>
                </div>

            </div>

        </div> <!-- end container -->

        </div> <!-- end row -->

    </section>

    <!-- Statistic
    ================================================== -->
    <section id="Statistic">

        <div class="row">

            <div class="stat">

                <div class="container">
                    <div id="instructor" class="icons"><img id="icons" src="Elements/GraduationCap.png"></div>
                    <div>
                        <h4>300</h4>
                        <p>Instructor</p>
                    </div>
                </div>

                <div class="container">
                    <div id="student" class="icons"><img id="icons" src="Elements/Users.png"></div>
                    <div>
                        <h4>20,000+</h4>
                        <p>Student</p>
                    </div>
                </div>

                <div class="container">
                    <div id="video" class="icons"><img id="icons" src="Elements/VideoCamera.png"></div>
                    <div>
                        <h4>10,000+</h4>
                        <p>Video</p>
                    </div>
                </div>

                <div class="container">
                    <div id="users" class="icons"><img id="icons" src="Elements/UsersThree.png"></div>
                    <div class="column">
                        <div id="statGet">
                            <h4>999,999+</h4>
                            <p>Users</p>
                        </div>

                    </div> <!-- end container -->

                </div> <!-- end row -->

    </section>

    <!-- courses
    ================================================== -->
    <section id="courses">

        <div class="row">

            <div>
                <h5>Most <span>Popular Course</span></h5>
                <p>Various versions have evolved over the years, sometimes by accident,</p>
            </div>
        </div> <!-- end row -->
        <div class="feedgrid">

            <button class="leftbutton">
                < </button>
                    <a id="pack" href="coursepage1.html">
                        <div id="courseimage"><img src="Elements/image 8.png"></div>
                        <p>Various versions have evolve...</p>
                        <div class="container">
                            <p><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                (102)
                            </p>
                        </div>
                        <hr>
                        <h6>500$</h6>
                    </a>

                    <a id="pack" href="coursepage1.html">
                        <div id="courseimage"><img src="Elements/image 9.png"></div>
                        <p>Various versions have evolve...</p>
                        <div class="container">
                            <p><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                (102)
                            </p>
                        </div>
                        <hr>
                        <h6>500$</h6>
                    </a>

                    <a id="pack" href="coursepage1.html">
                        <div id="courseimage"><img src="Elements/image 7.png"></div>
                        <p>Various versions have evolve...</p>
                        <div class="container">
                            <p><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                (102)
                            </p>
                        </div>
                        <hr>
                        <h6>500$</h6>
                    </a>

                    <a id="pack" href="coursepage1.html">
                        <div id="courseimage"><img src="Elements/Mask group.png"></div>
                        <p>Various versions have evolve...</p>
                        <div class="container">
                            <p><i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                (102)
                            </p>
                        </div>
                        <hr>
                        <h6>500$</h6>
                    </a>
                    <button class="rightbutton">></button>
        </div> <!-- end container -->

    </section>

    <!-- category
    ================================================== -->
    <section id="category">

        <div class="row">

            <div>
                <h5>Most <span>Popular Category</span></h5>
                <p>Various versions have evolved over the years, sometimes by accident,</p>
            </div>
            <div class="column">

                <div class="container">

                    <a id="services" href="">
                        <div class="container"><img src="Elements/PenNib.png">
                            <div class="column">
                                <p>Design</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                    <a id="services" href="">
                        <div class="container"><img src="Elements/FileHtml.png">
                            <div class="column">
                                <p>Development</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle" href=""><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                    <a id="services" href="">
                        <div class="container"><img src="Elements/MicrophoneStage.png">
                            <div class="column">
                                <p>Marketing</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                    <a id="services" href="">
                        <div class="container"><img src="Elements/Briefcase.png">
                            <div class="column">
                                <p>Business</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                </div> <!-- end container -->

                <div class="container">

                    <a id="services" href="">
                        <div class="container"><img src="Elements/SunHorizon.png">
                            <div class="column">
                                <p>Lifestyle</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                    <a id="services" href="">
                        <div class="container"><img src="Elements/Camera.png">
                            <div class="column">
                                <p>Photography</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                    <a id="services" href="">
                        <div class="container"><img src="Elements/MusicNote.png">
                            <div class="column">
                                <p>Music</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                    <a id="services" href="">
                        <div class="container"><img src="Elements/Database.png">
                            <div class="column">
                                <p>Data Science</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                </div> <!-- end container -->

                <div class="container">

                    <a id="services" href="">
                        <div class="container"><img src="Elements/Lightbulb.png">
                            <div class="column">
                                <p>Personal Develop</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                    <a id="services" href="">
                        <div class="container"><img src="Elements/Heartbeat.png">
                            <div class="column">
                                <p>Health & Fitness</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                    <a id="services" href="">
                        <div class="container"><img src="Elements/Graph.png">
                            <div class="column">
                                <p>Finance</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                    <a id="services" href="">
                        <div class="container"><img src="Elements/Detective.png">
                            <div class="column">
                                <p>Teaching</p>
                                <p class="courseNum">Courses 145</p>
                            </div>
                        </div>
                        <div id="circle"><img class="Arr" src="Elements/ArrowUpRight.png">
                            <img class="ArrOr" src="Elements/ArrowUpRightOrrange.png">
                        </div>
                    </a>

                </div> <!-- end container -->

            </div><!-- end column -->

        </div> <!-- end row -->

    </section>

    <!-- staff
    ================================================== -->
    <section id="staff">

        <div class="row">

            <div>
                <h5>Our best <span>Instructor</span></h5>
                <p>Various versions have evolved over the years, sometimes by accident,</p>
            </div>
        </div> <!-- end row -->
        <div class="feedgrid">
            <button class="leftbutton">
                < </button>
                    <div id="pack">
                        <div id="courseimage"><img src="Elements/Rectangle 16.png"></div>
                        <h3>Kakashi Hatake</h3>
                        <p>UI UX Design Expert</p>
                    </div>

                    <div id="pack">
                        <div id="courseimage"><img src="Elements/Rectangle 17.png"></div>
                        <h3>Onizuka Eikichi</h3>
                        <p>Social Media Expert</p>
                    </div>

                    <div id="pack">
                        <div id="courseimage"><img src="Elements/Rectangle 18.png"></div>
                        <h3>Jeon Jungkook</h3>
                        <p>Business Idea Expert</p>
                    </div>

                    <div id="pack">
                        <div id="courseimage"><img src="Elements/Rectangle 19.png"></div>
                        <h3>Kim Taehyung</h3>
                        <p>Photograpy Expert</p>
                    </div>
                    <button class="rightbutton">></button>
        </div> <!-- end container -->



    </section>

    <!-- feedback
    ================================================== -->
    <section id="feedback">

        <div class="row">

            <div>
                <h5>Students <span>Feedback</span></h5>
                <p>Various versions have evolved over the years, sometimes by accident,</p>
            </div>
        </div> <!-- end row -->

        <div class="feedgrid">
            <button class="leftbutton">
                < </button>
                    <div id="feeds">
                        <div class="container">

                            <div><img class="ava" src="Elements/Rectangle 23.png"></div>
                            <div id="feedtext">
                                <h4>Elon Musk</h4>
                                <h5>UI UX Designer</h5>
                            </div>
                            <div><img id="quote" src="Elements/quote.png"></div>
                        </div>
                        <p>Hmm... I didn't know that Kazakhs are so gifted.
                         And from this you can decide that my companies
                          Tesla and Spaces need Kazakhs like them.</p>
                    </div>
                    <div id="feeds">
                        <div class="container">
                            <div><img class="ava" src="Elements/Rectangle 24.png"></div>
                            <div id="feedtext">
                                <h4>tokayev_online</h4>
                                <h5>UI UX Designer</h5>
                            </div>
                            <div><img id="quote" src="Elements/quote.png"></div>
                        </div>
                        <p>I am glad when the new generation of Kazakhstan
                         makes such cool products for our country. Do it ! 
                         We will always support you from the state side.</p>
                    </div>
                    <div id="feeds">
                        <div class="container">
                            <div><img class="ava" src="Elements/Rectangle 25.png"></div>
                            <div id="feedtext">
                                <h4 id="oljas">OlzhasKazhybayev</h4>
                                <h5>UI UX Designer</h5>
                            </div>
                            <div><img id="quote" src="Elements/quote.png"></div>
                        </div>
                        <p>
                        This project is very cool and I would be happy to put 101 out of 100. 
                        I believe in guys, I want them to achieve their goals.
                        </p>
                    </div>
                    <button class="rightbutton">></button>
        </div>

    </section>
    <!-- call
    ================================================== -->

    <section id="call">

        <div class="row">

            <div class="container">

                <div class="column">
                    <img id="rocket" src="Elements/Saly-1.png">
                    <img id="backell" src="Elements/Ellipse 18.png">
                </div><!-- end column -->


                <div class="column">
                    <div>
                        <h4>Join <span>World's largest</span> learning
                            platform today</h4>
                    </div>
                    <div>
                        <h6>Start learning by registering for free</h6>
                    </div>
                    <div>
                        <p>Ut pharetra ipsum nec leo blandit, sit amet tincidunt eros pharetra. Nam sed imperdiet<br>
                            turpis. In hac habitasse platea dictumst.<br>
                            Praesent nulla massa, hendrerit vestibulum gravida in, feugiat auctor felis.</p>
                    </div>
                    <a id="signup" href="sign up.html">Sign up for Free</a>

                </div><!-- end column -->

            </div><!-- end container -->

        </div><!-- end row -->

    </section>

    <!-- footer
    ================================================== -->
    <footer>

        <div class="row">

            <div class="container">
                <div>
                    <h3>LOGO</h3>
                </div>

            </div>

            <div class="footcon">

                <div class="column">

                    <div>
                        <p>Contact Us</p>
                    </div>

                    <div>
                        <p><span>Call : +7 708 312 0160<br>
                                Praesent nulla massa, hendrerit<br>
                                vestibulum gravida in, feugiat auctor felis.<br>
                                Email: mielesenn@gmail.com</span></p>
                    </div>
                    <div class="container">
                        <a href="https://www.instagram.com/nextgn_aio/" id="socials"><i class="fa-brands fa-instagram"></i></a>
                        <a href="" id="socials"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://t.me/TotaeAboutIT" id="socials"><i class="fa-brands fa-telegram"></i></a>
                        <a href="" id="socials"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>

                </div> <!-- end column -->

                <div class="column">

                    <div>
                        <p>Explore</p>
                    </div>

                    <div>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Course</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>

                </div><!-- end column -->

                <div class="column">

                    <div>
                        <p>Category</p>
                    </div>

                    <div>
                        <ul>
                            <li><a href="">Design</a></li>
                            <li><a href="">Development</a></li>
                            <li><a href="">Marketing</a></li>
                            <li><a href="">Business</a></li>
                            <li><a href="">Lifestyle</a></li>
                            <li><a href="">Photography</a></li>
                            <li><a href="">Music</a></li>
                        </ul>
                    </div>

                </div> <!-- end column -->

                <div class="column">

                    <div>
                        <p class id="foothead">Subscribe</p>
                    </div>

                    <div>
                        <p><span>Lorem Ipsum has been them an industry<br>
                                printer took a galley make book.</span></p>
                    </div>
                    <form id="contact">
                        <input type="text" id="contactform" placeholder="Email here">
                        <button>Subcribe Now</button>
                    </form>

                </div> <!-- end column -->

            </div> <!-- end footcon -->

        </div> <!-- end container -->

        </div> <!-- end row -->

    </footer>

</body>
EOT;

}
?>