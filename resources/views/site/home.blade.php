@extends('site.layouts.master')
@section('title')
  page title
@endsection
@section('header')
  
@endsection
    @section('content')
    <!-- Home Section
    ================================================== -->
    <div id="tf-home" class="slider">
      <div class="overlay"> <!-- Overlay Color -->
          <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="4"></li>
              </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                      <img src="modules/site/img/bg/web-dev.jpg" alt="...">
                      <div class="carousel-caption">
                          <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                            <img src="modules/site/img/bg/web-development.png" alt="...">
                          </div><!-- End Input Your Home Content Here -->
                      </div>
                  </div>

                    <div class="item">
                        <img src="modules/site/img/bg/mobile-app.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <img src="modules/site/img/bg/mob-app-development.png" alt="...">
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>
  
                    <div class="item">
                        <img src="modules/site/img/bg/deg-mar.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <img src="modules/site/img/bg/digital-marketing.png" alt="...">
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>
  
                    <div class="item">
                        <img src="modules/site/img/bg/iot.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <img src="modules/site/img/bg/iot.png" alt="...">
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>
                        
                    <div class="item">
                        <img src="modules/site/img/bg/art-int.jpg" alt="...">
                        <div class="carousel-caption">
                            <div class="content-heading text-center"> <!-- Input Your Home Content Here -->
                                <img src="modules/site/img/bg/artificial-intelligence.png" alt="...">
                            </div><!-- End Input Your Home Content Here -->
                        </div>
                    </div>

                </div>
          </div>
      </div><!-- End Overlay Color -->
  </div>

  <!-- Intro Section
  ================================================== -->
  <div id="tf-intro" class="slider">
      <div class="container"> <!-- container -->
          <div class="row"> <!-- row -->
              <div class="col-md-8 col-md-offset-2"> 
                  <img src="modules/site/img/iso-tag.png" class="intro-logo img-responsive" alt="free-template"> <!-- Your company logo in white -->
                  <h2><strong>AN ISO 9001:2015</strong> CERTIFIED COMPANY</h2>
                  <p>We Are Recognized As Most Promising Software Solution Provider In The Market.</p>
              </div>
          </div><!-- end row -->
      </div><!-- end container -->
  </div>

</div>  <!-- end fullwidth gray background -->
  <!-- Service Section
  ================================================== -->


  <!-- About Us Section
  ================================================== -->
  <div id="tf-about">
      <div class="container"> <!-- container -->
          <div class="section-header">
              <h2>What To Know Us <span class="highlight"><strong>Better</strong></span></h2>
              <h5><em>We design and build functional and beautiful websites</em></h5>
              <div class="fancy"><span><img src="modules/site/img/favicon.ico" alt="..."></span></div>
          </div>
      </div><!-- end container -->

      <div class="gray-bg"> <!-- fullwidth gray background -->

          {{-- <div class="container"><!-- container -->
              <div class="row"> <!-- row -->

                  <div class="col-md-6"> <!-- left content col 6 -->
                      <div class="about-left-content text-center">
                          <div class="img-wrap"> <!-- profile image wrap -->
                              <div class="profile-img"> <!-- company profile details -->
                                  <img src="http://placehold.it/800x650" class="img-responsive" alt="Image"> <!-- change link to your image for your company profile -->
                                  <ul class="list-inline social"> 
                                      <li><a href="#" class="fa fa-facebook"></a></li> <!-- facebook link here -->
                                      <li><a href="#" class="fa fa-twitter"></a></li> <!-- twitter link here -->
                                      <li><a href="#" class="fa fa-google-plus"></a></li> <!-- google plus link here -->
                                  </ul>
                              </div>
                          </div><!-- end profile image wrap -->
                          <h2><span class="small">Developing</span> Amazing Things <br><span class="small">with Passion since 2012.</span></h2>
                      </div>
                  </div><!-- end left content col 6 -->

                  <div class="col-md-6"><!-- right content col 6 -->
                      <div class="about-right-content"> <!-- right content wrapper -->

                          <h4><strong>Professional Profile</strong></h4>
                          <p>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent.</p>
                          
                          <div class="skills"> <!-- skills progress bar -->
                              <div class="skillset"> <!-- skill #1 -->
                                  <p>UI/UX Design</p>
                                  <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                          <span class="sr-only">90% Complete</span>
                                      </div>
                                  </div>
                              </div><!-- end skill #1 -->

                              <div class="skillset"> <!-- skill #2 -->
                                  <p>HTML5, CSS3, SASS</p>
                                  <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                                          <span class="sr-only">85% Complete</span>
                                      </div>
                                  </div>
                              </div><!-- end skill #2 -->

                              <div class="skillset"> <!-- skill #3 -->
                                  <p>WordPress</p>
                                  <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 99%;">
                                          <span class="sr-only">99% Complete</span>
                                      </div>
                                  </div>
                              </div> <!-- end skill #3 -->

                              <div class="skillset"> <!-- skill #4 -->
                                  <p>Graphic Design</p>
                                  <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                          <span class="sr-only">70% Complete</span>
                                      </div>
                                  </div>
                              </div> <!-- end skill #4 -->

                              <div class="skillset"> <!-- skill #5 -->
                                  <p>Marketing</p>
                                  <div class="progress">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                          <span class="sr-only">50% Complete</span>
                                      </div>
                                  </div>
                              </div><!-- end skill #4 -->
                          </div> <!-- end skills progress bar -->

                      </div><!-- end right content wrapper -->
                  </div><!-- end right content col 6 -->

              </div> <!-- end row -->
          </div><!-- end container --> --}}

          <div id="tf-counter" class="text-center">
              <div class="container">
                  <div class="row"> <!-- Row -->

                      <div class="counter"> 

                        <div class="col-xs-6 col-sm-4 col-md-2 col-md-offset-1 facts"><!-- counter #2 -->
                            <div class="count-box">
                                <i class="fa fa-user"></i>
                                <h4 class="">98%</h4>
                                <p class="small">Client Statisfaction</p>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-2 col-md-2 facts"><!-- counter #1 -->
                            <div class="count-box">
                                <i class="fa fa-desktop"></i>
                                <h4 class="count">1253</h4>
                                <p class="small">People Participated</p>
                            </div> 
                        </div><!-- end counter #1 -->

                        <div class="col-xs-6 col-sm-4 col-md-2 facts"> <!-- counter #3 -->
                            <div class="count-box"> 
                                <i class="fa fa-thumbs-up"></i>
                                <h4 class="">24/7</h4>
                                <p class="small">Design Consultancy</p>
                            </div> 
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-2 facts"> <!-- counter #4 -->
                          <div class="count-box">
                            <i class="fa fa-trophy"></i>
                            <h4 class="count">9</h4>
                            <p class="small">Award Winning Designers</p>
                          </div>
                        </div>

                        <div class="col-xs-6 col-sm-4 col-md-2 facts"> <!-- counter #5 -->
                          <div class="count-box last">
                            <i class="fa fa-line-chart"></i>
                            <h4 class="">97%</h4>
                            <p class="small">Repeating Customers</p>
                          </div>
                        </div>

                      </div>

                    </div> <!-- End Row -->
              </div>
          </div>

      </div> <!-- end fullwidth gray background -->
  </div>

  <!-- Why Us/services Section
  ================================================== -->
  <div id="tf-services">

      <div class="container">
          <div class="section-header">
            <h2>TRANSFORMING TECHNOLOGY TO <span class="highlight"><strong>SOLUTIONS</strong></span></h2>
            <h5><em>Imparting excellence in every project we do & every task we undertake With Exceptional Expertise & Years Of Experience, We Dig Deep To Develop Robust Solutions</em></h5>
            <div class="fancy"><span><img src="modules/site/img/favicon.ico" alt="..."></span></div>
          </div>
      </div>

      <div id="feature" class="gray-bg"> <!-- fullwidth gray background -->
          <div class="container"> <!-- container -->
              <div class="row" role="tabpanel"> <!-- row -->
                  <div class="col-md-4 col-md-offset-1"> <!-- tab menu col 4 -->

                      <ul class="features nav nav-pills nav-stacked" role="tablist">
                          <li role="presentation" class="active">  <!-- feature tab menu #1 -->
                              <a href="#f1" aria-controls="f1" role="tab" data-toggle="tab">
                                  <span class="fa fa-desktop"></span>
                                  Web Development<br><small>sub title here</small>
                              </a>
                          </li>
                          <li role="presentation"> <!-- feature tab menu #2 -->
                              <a href="#f2" aria-controls="f2" role="tab" data-toggle="tab">
                                  <span class="fa fa-pencil"></span>
                                  Web Designing<br><small>sub title here</small>
                              </a>
                          </li>
                          <li role="presentation"> <!-- feature tab menu #3 -->
                              <a href="#f3" aria-controls="f3" role="tab" data-toggle="tab">
                                  <span class="fa fa-automobile"></span>
                                  Mobile App Development<br><small>sub title here</small>
                              </a>
                          </li>
                          <li role="presentation"> <!-- feature tab menu #4 -->
                              <a href="#f4" aria-controls="f4" role="tab" data-toggle="tab">
                                  <span class="fa fa-space-shuttle"></span>
                                  Digital Marketing (SEO)<br><small>sub title here</small>
                              </a>
                          </li>
                          <li role="presentation"> <!-- feature tab menu #5 -->
                              <a href="#f5" aria-controls="f5" role="tab" data-toggle="tab">
                                  <span class="fa fa-institution"></span>
                                  UI/UX Design<br><small>sub title here</small>
                              </a>
                          </li>
                      </ul>

                  </div><!-- end tab menu col 4 -->

                  <div class="col-md-6"> <!-- right content col 6 -->
                      <!-- Tab panes -->
                      <div class="tab-content features-content"> <!-- tab content wrapper -->
                          <div role="tabpanel" class="tab-pane fade in active" id="f1"> <!-- feature #1 content open -->
                              <h4>Web Development</h4>
                              <p>Kick Start Your Business With Highly Interactive Web Applications PHP Web Applications B2B & B2C Portal Developments.</p>
                              <img src="modules/site/img/tab01.png" class="img-responsive" alt="...">
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="f2"> <!-- feature #2 content -->
                              <h4>Web Designing</h4>
                              <p>we develop designs which stay in the mind of your customers Html5 Css3 Jquery,Javascript Responsive Web Designing.
                            </p>
                              <img src="modules/site/img/tab02.png" class="img-responsive" alt="...">
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="f3"> <!-- feature #3 content -->
                              <h4>Mobile App Development</h4>
                              <p>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent.</p>
                              <img src="modules/site/img/tab03.png" class="img-responsive" alt="...">
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="f4"> <!-- feature #4 content -->
                              <h4>Digital Marketing (SEO)</h4>
                              <p>Take the lead of online space with SEO services, Social media marketing Search engine marketing Social engine optimization.</p>
                              <img src="modules/site/img/tab04.png" class="img-responsive" alt="...">
                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="f5"> <!-- feature #5 content -->
                              <h4>UI/UX Design</h4>
                              <p>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec, tempor cursus vitae sit aliquet neque purus. Ultrices lacus proin conubia dictum tempus, tempor pede vitae faucibus, sem auctor, molestie diam dictum aliquam. Dolor leo, ridiculus est ut cubilia nec, fermentum arcu praesent.</p>
                              <img src="modules/site/img/tab05.png" class="img-responsive" alt="...">
                          </div>
                      </div> <!-- end tab content wrapper -->
                  </div><!-- end right content col 6 -->

              </div> <!-- end row -->
          </div> <!-- end container -->
      </div><!-- end fullwidth gray background -->
  </div>

  <!-- Works Section
  ================================================== -->
  <div id="tf-works">
      <div class="container">
          <div class="section-header">
              <h2>Our Work is <span class="highlight"><strong>Incredible</strong></span></h2>
              <h5><em>We design and build functional and beautiful websites</em></h5>
              <div class="fancy"><span><img src="modules/site/img/favicon.ico" alt="..."></span></div>
          </div>

          <div class="text-center">
              <ul class="list-inline cat"> <!-- Portfolio Filter Categories -->
                  <li><a href="#" data-filter="*" class="active">All</a></li>
                  <li><a href="#" data-filter=".web">Web</a></li>
                  <li><a href="#" data-filter=".ios">IOS</a></li>
                  <li><a href="#" data-filter=".android">Android</a></li>
                  <li><a href="#" data-filter=".others">Others</a></li>
              </ul><!-- End Portfolio Filter Categories -->
          </div>

      </div><!-- End Container -->

      <div class="container-fluid"> <!-- fluid container -->
           <div id="itemsWork" class="row text-center"> <!-- Portfolio Wrapper Row -->

              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding ios others"> <!-- Works #1 col 3 -->
                  <div class="box"> 
                      <div class="hover-bg">
                          <div class="hover-text off">
                              <a title="Logo Identity Design" href="modules/site/img/portfolio/01@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="modules/site/img/portfolio/01@2x.jpg">
                                  <i class="fa fa-expand"></i>
                              </a>
                              <a href="#"><i class="fa fa-chain"></i></a> <!-- change # with your url to link it to another page -->
                          </div> 
                          <img src="modules/site/img/portfolio/01.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                      </div>
                  </div>
              </div><!-- end Works #1 col 3 -->

              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding android "> <!-- Works #2 col 3 -->
                  <div class="box">
                      <div class="hover-bg">
                          <div class="hover-text off">
                              <a title="Mobile Application" href="modules/site/img/portfolio/124.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="modules/site/img/portfolio/124.jpg">
                                  <i class="fa fa-expand"></i>
                              </a>
                              <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                          </div>
                          <img src="modules/site/img/portfolio/124.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                      </div>
                  </div>
              </div><!-- end Works #2 col 3 -->

              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding others ios"><!-- Works #3 col 3 -->
                  <div class="box">
                      <div class="hover-bg">
                          <div class="hover-text off">
                              <a title="Freedom Project #1" href="modules/site/img/portfolio/03@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="modules/site/img/portfolio/03@2x.jpg">
                                  <i class="fa fa-expand"></i>
                              </a>
                              <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                          </div>
                          <img src="modules/site/img/portfolio/03.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                      </div>
                  </div>
              </div><!-- end Works #3 col 3 -->

              {{-- <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 nopadding others web"> <!-- Works #4 col 3 -->
                  <div class="box">
                      <div class="hover-bg">
                          <div class="hover-text off">
                              <a title="Freedom Project #1" href="modules/site/img/portfolio/04@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="modules/site/img/portfolio/04@2x.jpg">
                                  <i class="fa fa-expand"></i>
                              </a>
                              <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                          </div>
                          <img src="modules/site/img/portfolio/04.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                      </div>
                  </div>
              </div> <!-- end Works #4 col 3 --> --}}

              <div class="col-xs-12 col-sm-6 col-md-3 nopadding android others"> <!-- Works #5 col 3 -->
                  <div class="box">
                      <div class="hover-bg">
                          <div class="hover-text off">
                              <a title="Freedom Project #1" href="modules/site/img/portfolio/05@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="modules/site/img/portfolio/05@2x.jpg">
                                  <i class="fa fa-expand"></i>
                              </a>
                              <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                          </div>
                          <img src="modules/site/img/portfolio/05.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                      </div>
                  </div>
              </div> <!-- end Works #5 col 3 -->

              <div class="col-xs-12 col-sm-6 col-md-3 nopadding android">  <!-- Works #6 col 3 -->
                  <div class="box">
                      <div class="hover-bg">
                          <div class="hover-text off">
                              <a title="Freedom Project #1" href="modules/site/img/portfolio/06@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="modules/site/img/portfolio/06@2x.jpg">
                                  <i class="fa fa-expand"></i>
                              </a>
                              <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                          </div>
                          <img src="modules/site/img/portfolio/06.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                      </div>
                  </div>
              </div><!-- end Works #6 col 3 -->

              <div class="col-xs-12 col-sm-6 col-md-3 nopadding ios"><!-- Works #7 col 3 -->
                <div class="box">
                    <div class="hover-bg">
                        <div class="hover-text off">
                            <a title="Freedom Project #1" href="modules/site/img/portfolio/07@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="modules/site/img/portfolio/07@2x.jpg">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                        </div>
                        <img src="modules/site/img/portfolio/07.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                    </div>
                </div>
            </div><!-- end Works #7 col 3 -->

            <div class="col-xs-12 col-sm-6 col-md-3 nopadding ios"><!-- Works #7 col 3 -->
                <div class="box">
                    <div class="hover-bg">
                        <div class="hover-text off">
                            <a title="Freedom Project #1" href="modules/site/img/portfolio/112.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="modules/site/img/portfolio/07@2x.jpg">
                                <i class="fa fa-expand"></i>
                            </a>
                            <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                        </div>
                        <img src="modules/site/img/portfolio/112.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                    </div>
                </div>
            </div><!-- end Works #7 col 3 -->

              <div class="col-xs-12 col-sm-6 col-md-3 nopadding android"> <!-- Works #8 col 3 -->
                  <div class="box"> 
                      <div class="hover-bg">
                          <div class="hover-text off">
                              <a title="Freedom Project #1" href="modules/site/img/portfolio/08@2x.jpg" data-lightbox-gallery="gallery1" data-lightbox-hidpi="modules/site/img/portfolio/08@2x.jpg">
                                  <i class="fa fa-expand"></i>
                              </a>
                              <a href="#"><i class="fa fa-chain"></i></a><!-- change # with your url to link it to another page -->
                          </div>
                          <img src="modules/site/img/portfolio/08.jpg" class="img-responsive" alt="Image"> <!-- Portfolio Image -->
                      </div> 
                  </div>
              </div> <!-- end Works #8 col 3 -->
              
          </div> <!-- End Row -->

      </div> <!-- End Container-Fluid -->
  </div>


  {{-- <!--  Blog Section
  ================================================== -->
  <div id="tf-blog">
      <div class="container"> <!-- container -->
          <div class="section-header">
              <h2>Latest from the <span class="highlight"><strong>Blog</strong></span></h2>
              <h5><em>We design and build functional and beautiful websites</em></h5>
              <div class="fancy"><span><img src="modules/site/img/favicon.ico" alt="..."></span></div>
          </div>
      </div>

      <div id="blog-post" class="gray-bg"> <!-- fullwidth gray background -->
          <div class="container"><!-- container -->

              <div class="row"> <!-- row -->
                  <div class="col-md-6"> <!-- Left content col 6 -->

                      <div class="post-wrap"> <!-- Post Wrapper -->
                          <div class="media post"> <!-- post wrap -->
                              <div class="media-left"> 
                                  <a href="#"> <!-- link to your post single page -->
                                    <img class="media-object" src="http://placehold.it/120x150" alt="..."> <!-- Your Post Image -->
                                  </a>
                              </div>
                              <div class="media-body">
                                  <p class="small">January 14, 2015</p>
                                  <a href="#">
                                      <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                  </a>
                                  <p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio. Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed, dapibus </p>
                              </div>
                          </div><!-- end post wrap -->
                          
                          <div class="post-meta"> <!-- Meta details -->
                              <ul class="list-inline metas pull-left"> <!-- post metas -->
                                  <li><a href="#">by Rudhi Design</a></li> <!-- meta author -->
                                  <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                  <li><a href="#">Read More</a></li> <!-- read more link -->
                              </ul>
                              <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                  <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                  <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                              </ul>
                          </div><!-- end Meta details --> 
                      </div><!-- end Post Wrapper -->

                      <div class="post-wrap"> <!-- Post Wrapper -->
                          <div class="media post"> <!-- post wrap -->
                              <div class="media-left"> 
                                  <a href="#"> <!-- link to your post single page -->
                                    <img class="media-object" src="http://placehold.it/120x150" alt="..."> <!-- Your Post Image -->
                                  </a>
                              </div>
                              <div class="media-body">
                                  <p class="small">January 14, 2015</p>
                                  <a href="#">
                                      <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                  </a>
                                  <p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio. Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed, dapibus </p>
                              </div>
                          </div><!-- end post wrap -->
                          
                          <div class="post-meta"> <!-- Meta details -->
                              <ul class="list-inline metas pull-left"> <!-- post metas -->
                                  <li><a href="#">by Rudhi Design</a></li> <!-- meta author -->
                                  <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                  <li><a href="#">Read More</a></li> <!-- read more link -->
                              </ul>
                              <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                  <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                  <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                              </ul>
                          </div><!-- end Meta details --> 
                      </div><!-- end Post Wrapper -->

                      <div class="post-wrap"> <!-- Post Wrapper -->
                          <div class="media post"> <!-- post wrap -->
                              <div class="media-left"> 
                                  <a href="#"> <!-- link to your post single page -->
                                    <img class="media-object" src="http://placehold.it/120x150" alt="..."> <!-- Your Post Image -->
                                  </a>
                              </div>
                              <div class="media-body">
                                  <p class="small">January 14, 2015</p>
                                  <a href="#">
                                      <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                  </a>
                                  <p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio. Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed, dapibus </p>
                              </div>
                          </div><!-- end post wrap -->
                          
                          <div class="post-meta"> <!-- Meta details -->
                              <ul class="list-inline metas pull-left"> <!-- post metas -->
                                  <li><a href="#">by Rudhi Design</a></li> <!-- meta author -->
                                  <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                  <li><a href="#">Read More</a></li> <!-- read more link -->
                              </ul>
                              <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                  <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                  <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                              </ul>
                          </div><!-- end Meta details --> 
                      </div><!-- end Post Wrapper -->

                  </div> <!-- end Left content col 6 -->

                  <div class="col-md-6"> <!-- right content col 6 -->

                      <div class="post-wrap"> <!-- Post Wrapper -->
                          <div class="media post"> <!-- post wrap -->
                              <div class="media-left"> 
                                  <a href="#"> <!-- link to your post single page -->
                                    <img class="media-object" src="http://placehold.it/120x150" alt="..."> <!-- Your Post Image -->
                                  </a>
                              </div>
                              <div class="media-body">
                                  <p class="small">January 14, 2015</p>
                                  <a href="#">
                                      <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                  </a>
                                  <p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio. Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed, dapibus </p>
                              </div>
                          </div><!-- end post wrap -->
                          
                          <div class="post-meta"> <!-- Meta details -->
                              <ul class="list-inline metas pull-left"> <!-- post metas -->
                                  <li><a href="#">by Rudhi Design</a></li> <!-- meta author -->
                                  <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                  <li><a href="#">Read More</a></li> <!-- read more link -->
                              </ul>
                              <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                  <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                  <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                              </ul>
                          </div><!-- end Meta details --> 
                      </div><!-- end Post Wrapper -->

                      <div class="post-wrap"> <!-- Post Wrapper -->
                          <div class="media post"> <!-- post wrap -->
                              <div class="media-left"> 
                                  <a href="#"> <!-- link to your post single page -->
                                    <img class="media-object" src="http://placehold.it/120x150" alt="..."> <!-- Your Post Image -->
                                  </a>
                              </div>
                              <div class="media-body">
                                  <p class="small">January 14, 2015</p>
                                  <a href="#">
                                      <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                  </a>
                                  <p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio. Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed, dapibus </p>
                              </div>
                          </div><!-- end post wrap -->
                          
                          <div class="post-meta"> <!-- Meta details -->
                              <ul class="list-inline metas pull-left"> <!-- post metas -->
                                  <li><a href="#">by Rudhi Design</a></li> <!-- meta author -->
                                  <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                  <li><a href="#">Read More</a></li> <!-- read more link -->
                              </ul>
                              <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                  <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                  <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                              </ul>
                          </div><!-- end Meta details --> 
                      </div><!-- end Post Wrapper -->

                      <div class="post-wrap"> <!-- Post Wrapper -->
                          <div class="media post"> <!-- post wrap -->
                              <div class="media-left"> 
                                  <a href="#"> <!-- link to your post single page -->
                                    <img class="media-object" src="http://placehold.it/120x150" alt="..."> <!-- Your Post Image -->
                                  </a>
                              </div>
                              <div class="media-body">
                                  <p class="small">January 14, 2015</p>
                                  <a href="#">
                                      <h5 class="media-heading"><strong>Vel donec et scelerisque vestibulum. Condimentum aliquam, mollit magna velit nec</strong></h5>
                                  </a>
                                  <p>Tempor vestibulum turpis id ligula mi mattis. Eget arcu vitae mauris amet odio. Diam nibh diam, quam elit, libero nostra ut. Pellentesque vehicula. Eget sed, dapibus </p>
                              </div>
                          </div><!-- end post wrap -->
                          
                          <div class="post-meta"> <!-- Meta details -->
                              <ul class="list-inline metas pull-left"> <!-- post metas -->
                                  <li><a href="#">by Rudhi Design</a></li> <!-- meta author -->
                                  <li><a href="#">20 Comments</a></li> <!-- meta comments -->
                                  <li><a href="#">Read More</a></li> <!-- read more link -->
                              </ul>
                              <ul class="list-inline meta-detail pull-right"> <!-- user meta interaction -->
                                  <li><a href="#"><i class="fa fa-heart"></i></a> 50</li> <!-- like button -->
                                  <li><i class="fa fa-eye"></i> 110</li> <!-- no. of views -->
                              </ul>
                          </div><!-- end Meta details --> 
                      </div><!-- end Post Wrapper -->

                  </div><!-- end right content col 6 -->
              </div><!-- end row -->

              <div class="text-center">
                  <a href="#" class="btn btn-primary tf-btn color">Load More</a>
              </div>                
          </div><!-- end container -->
      </div> <!-- end fullwidth gray background -->
  </div> --}}


  <!-- Process Section
  ================================================== -->
</div>
<div id="tf-process">
    <div class="container"> <!-- container -->
        <div class="section-header">
            <h2>Our Best <span class="highlight"><strong>WorkFlow</strong></span></h2>
            <h5><em>atlantis Technologies encourages innovation, out-of-the-box thinking & continual learning. We follow a systematic and standard process to ensure flaw-less project completion.</em></h5>
            <div class="fancy"><span><img src="modules/site/img/favicon.ico" alt="..."></span></div>
        </div>
        <div class="row"> <!-- row -->
            <div class="col-md-6 text-right">  <!-- Left Content Col 6 -->
                <div class="media service"> <!-- Service #1 -->
                    <div class="media-body">
                        <h4 class="media-heading">Strategy / Research</h4>
                        <p>we develop designs which stay in the mind of your customers Html5 Css3 Jquery,Javascript Responsive Web Designing.</p>
                    </div>
                    <div class="media-right media-middle">
                        <i class="fa fa-globe"></i>
                    </div>
                </div><!-- End Service #1 -->
                <div class="media service"> <!-- Service #2 -->
                    <div class="media-body">
                        <h4 class="media-heading">Design</h4>
                        <p>After finalizing the strategy, our veteran designers creates a prototype of your project as per specificationss.</p>
                    </div>
                    <div class="media-right media-middle">
                        <i class="fa fa-magic"></i>
                    </div>
                </div><!-- End Service #2 -->

                <div class="media service"> <!-- Service #3 -->
                    <div class="media-body">
                          <h4 class="media-heading">Develop</h4>
                          <p>Once designs are finalized & approved, we move forward with development to ensure excellence.</p>
                    </div>
                    <div class="media-right media-middle">
                        <i class="fa fa-camera-retro"></i>
                    </div>
                </div> <!-- End Service #3 -->
            </div> <!-- End Left Content Col 6 -->

            <div class="col-md-6"> <!-- Right Content Col 6 -->
                <div class="media service"> <!-- Service #4 -->
                    <div class="media-left media-middle">
                        <i class="fa fa-bicycle"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Testing and Refine</h4>
                        <p>Before rolling out the project, we ensure quality of your web or mobile apps project with Q&A testing.</p>
                    </div>
                </div><!-- end Service #4 -->

                <div class="media service"> <!-- Service #5 -->
                    <div class="media-left media-middle">
                        <i class="fa fa-android"></i>
                    </div>
                    <div class="media-body">
                          <h4 class="media-heading">Deliver</h4>
                          <p>Our design & development teams offer you very high quality projects to make your business develop.</p>
                    </div>
                </div> <!-- end Service #5 -->

                <div class="media service"> <!-- Service #6 -->
                    <div class="media-left media-middle">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div class="media-body">
                          <h4 class="media-heading">Digital Marketing (SEO)</h4>
                          <p>Take the lead of online space with SEO services, Social media marketing Search engine marketing Social engine optimization.</p>
                    </div>
                </div> <!-- end Service #6 -->
            </div><!-- end Right Content Col 6 -->
            
        </div><!-- end row -->

    </div><!-- end container -->
</div>
  <!-- Contact Section
  ================================================== -->
  <div id="tf-contact">
      <div class="container"> <!-- container -->
          <div class="section-header">
              <h2>Feel Free to <span class="highlight"><strong>REQUEST CUSTOM QUOTE</strong></span></h2>
              <h5><em>Planning to launch website for your dream company? Or require a mobile app for your well-established business? Or looking for internet marketing services? You have landed at right place, we’re here to listen carefully to each of your requirements and make them happen. All you need to do is just fill the form below. Quote now!!!</em></h5>
              <div class="fancy"><span><img src="modules/site/img/favicon.ico" alt="..."></span></div>
          </div>
      </div><!-- end container -->

      {{-- <div id="map"></div>  <!-- google map --> --}}

      <div class="container"><!-- container -->
          <div class="row"> <!-- outer row -->
              <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                  <div class="row"> <!-- nested row -->

                      <!-- contact detail using col 4 -->
                      <div class="col-md-4">  
                          <div class="contact-detail">
                              <i class="fa fa-map-marker"></i>
                              <h4>Jl. Pahlawan VII No.247-D Sidoarjo-Surabaya-Indonesia</h4> <!-- address -->
                          </div>
                      </div>
                      <!-- contact detail using col 4 -->
                      <div class="col-md-4">
                          <div class="contact-detail">
                              <i class="fa fa-envelope-o"></i>
                              <h4>shahab_08@yahoo.com</h4><!-- email add -->
                          </div>
                      </div>

                      <!-- contact detail using col 4 -->
                      <div class="col-md-4">
                          <div class="contact-detail">
                              <i class="fa fa-phone"></i>
                              <h4>+613 0000 0000</h4> <!-- phone no. -->
                          </div>
                      </div>

                  </div> <!-- end nested row -->
              </div> <!-- end col 10 with offset 1 to centered -->
          </div><!-- end outer row -->

          <div class="row text-center"> <!-- contact form outer row with centered text-->
              <div class="col-md-10 col-md-offset-1"> <!-- col 10 with offset 1 to centered -->
                  <form id="contact-form" class="form" name="sentMessage" novalidate> <!-- form wrapper -->

                      <div class="row"> <!-- nested inner row -->

                          <!-- Input your name -->
                          <div class="col-md-4">
                              <div class="form-group"> <!-- Your name input -->
                                  <input type="text" autocomplete="off" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>

                          <!-- Input your email -->
                          <div class="col-md-4">
                              <div class="form-group"> <!-- Your email input -->
                                  <input type="email" autocomplete="off" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>

                          <!-- Input your Phone no. -->
                          <div class="col-md-4">
                              <div class="form-group"> <!-- Your email input -->
                                  <input type="text" autocomplete="off" class="form-control" placeholder="Your Phone No. *" id="phone" required data-validation-required-message="Please enter your phone no.">
                                  <p class="help-block text-danger"></p>
                              </div>
                          </div>

                      </div><!-- end nested inner row -->

                      <!-- Message Text area -->
                      <div class="form-group"> <!-- Your email input -->
                          <textarea class="form-control" rows="7" placeholder="Share Your Requirements..." id="message" required data-validation-required-message="Please enter a message."></textarea>
                          <p class="help-block text-danger"></p>
                          <div id="success"></div>
                      </div>
                      <button type="submit" class="btn btn-primary tf-btn color">Send Message</button> <!-- Send button -->

                  </form><!-- end form wrapper -->
              </div><!-- end col 10 with offset 1 to centered -->
          </div> <!-- end contact form outer row with centered text-->

      </div><!-- end container -->

  </div>
  @endsection
    
  @section('footer')
  
  @endsection
    