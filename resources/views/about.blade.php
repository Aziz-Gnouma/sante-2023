@extends('layouts.app2')
@section('content')
<!DOCTYPE html>
<html lang="en">
 
    <body class="aboutPage">
         <!-- start preloader -->
        <div id="preloader">
            <div class="preloader-inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- end preloader -->


       


        <section style="margin-top:-10% ;" class="header-title">
            <h2 style="backgroud-color:red ;"  class="title">About Us</h2>
        </section> <!-- header-title -->



        <section class="pro-section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="wrapper-content">
<h3>Specializing in student health and well-being,<span class="color">the Student Health Hub</span>   offers a wide range of activities and features to support students'
	 physical and mental health throughout their academic journey.</h3>
                            <ul class="text-content">
                                <li>
                                    <span class="digit pull-left">1</span>
                                    <p>Health Services Integration</p>
                                </li>

                                <li>
                                    <span class="digit pull-left">2</span>
                                    <p>Mental Health Support</p>
                                </li>

                                <li>
                                    <span class="digit pull-left">3</span>
                                    <p>Health Education and Resources</p>
                                </li>
                            </ul> <!-- text-content -->
                        </div> <!-- wrapper-content -->
                    </div>

                    <div class="col-md-5 col-md-offset-1">
                        <div class="caption wow fadeInRight">
                            <img src="assetsAbout/images/pro.jpg" alt="">
                        </div> <!-- caption -->
                    </div>
                </div>
            </div>
        </section> <!-- pro-section -->



        <section class="video-section">
            <h2 class="hidden">title</h2>
            
            <div class="video-overlay">
                <video autoplay="" loop="" muted="">
                    <source src="assetsAbout/video/video.mp4" type="video/mp4" />
                 </video>
            </div>
        </section> <!-- video-section -->

        <section class="team-section section-padding">
            <div class="container">
                <div class="section-title text-left">
                    <h2>Executive Team</h2>
                    <p>First and foremost, our team of developers is highly skilled and experienced in their respective domains. They possess a deep understanding of various programming languages, frameworks, and technologies, allowing them to tackle complex challenges with efficiency and innovation.
                         Their technical expertise enables them to develop high-quality and robust solutions that
                          meet our clients' needs. <br><br>

In addition to technical proficiency, our developers embody strong teamwork and collaboration.
 They understand the value of working together, sharing knowledge, and leveraging each
  other's strengths to achieve collective goals. Collaboration within the team is fostered through open communication channels, regular meetings, and an environment that encourages creative problem-solving..</p>
                </div> <!-- section-title -->

                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="team-wrapper">
                            <div class="caption">
                                <img src="assetsAbout/images/team/1.jpg" alt="">

                                <div class="hover-view">
                                    <span class="icon icon-one"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                    <span class="icon icon-two"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                </div>
                            </div>

                            <div class="author">
                                <span class="title"><a href="#">Aziz Gnouma</a></span>
                                <span class="position">Développeur</span>
                            </div>
                        </div> <!-- team-wrapper -->
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="team-wrapper">
                            <div class="caption">
                                <img src="assetsAbout/images/team/2.jpg" alt="">

                                <div class="hover-view">
                                    <span class="icon icon-one"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                    <span class="icon icon-two"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                </div>
                            </div>

                            <div class="author">
                                <span class="title"><a href="#">Rania Chebi</a></span>
                                <span class="position">Développeuse</span>
                            </div>
                        </div> <!-- team-wrapper -->
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="team-wrapper">
                            <div class="caption">
                                <img src="assetsAbout/images/team/3.jpg" alt="">

                                <div class="hover-view">
                                    <span class="icon icon-one"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                    <span class="icon icon-two"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                </div>
                            </div>

                            <div class="author">
                                <span class="title"><a href="#">Firas Abidi</a></span>
                                <span class="position">Développeur</span>
                            </div>
                        </div> <!-- team-wrapper -->
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="team-wrapper">
                            <div class="caption">
                                <img src="assetsAbout/images/team/4.png" alt="">

                                <div class="hover-view">
                                    <span class="icon icon-one"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
                                    <span class="icon icon-two"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
                                </div>
                            </div>

                            <div class="author">
                                <span class="title"><a href="#">Amine juini </a></span>
                                <span class="position">Développeur</span>
                            </div>
                        </div> <!-- team-wrapper -->
                    </div>

                

                </div>
            </div>
        </section> <!-- team-section -->







        <script src="assetsAbout/js/jquery.js"></script>
        <script src="assetsAbout/bootstrap/js/bootstrap.min.js"></script>
        <script src="assetsAbout/js/wow.js"></script>
        <script src="assetsAbout/js/lightbox.js"></script>
        <script src="assetsAbout/slick-slider/slick.min.js"></script>
        <script src="assetsAbout/owl-carrosel/owl.carousel.min.js"></script>
        <script src="assetsAbout/js/script.js"></script>
    </body>
</html>
@endsection