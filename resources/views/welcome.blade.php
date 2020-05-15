@extends('layouts.app')

@section('content')

        <!-- Hero -->
        <section class="section-header pb-7 pb-lg-11 bg-soft">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-12 col-md-6 order-2 order-lg-1">
                        <img src="{{asset('storage/images/hero-illustration.svg')}}" alt="">
                    </div>
                    <div class="col-12 col-md-5 order-1 order-lg-2 mb-5 mb-md-0">
                          <h1 class="display-2 mb-3">Tools to grow your traffic</h1>
                          <p class="lead">Impact helps you learn why your competitors rank so high and what you need to do to outrank them.</p>
                          <div class="mt-4">
                            <button class="btn btn-primary w-100" type="submit">Create your account</button>

                          </div>
                      </div>
                </div>
            </div>
            <div class="pattern bottom"></div>
        </section>

        <section class="section section-lg pt-6">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-md-7">
                    <div class="col-12 col-md-8 text-center">
                        <h2 class="h1 font-weight-bolder mb-4">Meet our intuitive platform</h2>
                        <p class="lead">Self-Service Analytics or ad hoc reporting gives users the ability to develop rapid reports, empowering users to analyze their data.</p>
                    </div>
                </div>
                <div class="row row-grid align-items-center mb-5 mb-md-7">
                    <div class="col-12 col-md-5">
                        <h2 class="font-weight-bolder mb-4">Site Audit</h2>
                        <p class="lead">Site Audit crawls all the pages it finds on your website – then provides an overall SEO health score, visualises key data in charts, flags all possible SEO issues and provides recommendations on how to fix them.</p>
                        <p class="lead">Have a huge website? Not an issue.</p>
                        <a href="./about.html" class="btn btn-primary mt-3 animate-up-2">
                            Learn More
                            <span class="icon icon-xs ml-2">
                                <i class="fas fa-external-link-alt"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <img src="{{asset('storage/images/feature-illustration.svg')}}" alt="">
                    </div>
                </div>
                <div class="row row-grid align-items-center mb-5 mb-md-7">
                    <div class="col-12 col-md-5 order-md-2">
                        <h2 class="font-weight-bolder mb-4">Rank Tracker</h2>
                        <p class="lead">We track your desktop and mobile keyword rankings from any location and plot your full ranking history on a handy graph.</p>
                        <p class="lead">You can set up automated ranking reports to be sent to your email address, so you’ll never forget to check your ranking progress.</p>
                        <a href="./about.html" class="btn btn-primary mt-3 animate-up-2">
                            Rank Tracker Tool
                            <span class="icon icon-xs ml-2">
                                <i class="fas fa-external-link-alt"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 mr-lg-auto">
                        <img src="{{asset('storage/images/feature-illustration-2.svg')}}" alt="">
                    </div>
                </div>

                <!-- ToDo When we get real clients show numbers -->

                <!-- <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">98%</h2>
                                <span>Average satisfaction rating received in the past year</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">24/7</h2>
                                <span> Our support team is a quick chat or email away — 24 hours a day</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card border-light p-4">
                            <div class="card-body">
                                <h2 class="display-2 mb-2">220k+</h2>
                                <span>Extension installs from the two major mobile app stores</span>
                            </div>
                        </div>
                    </div> -->



                </div>
            </div>
        </section>


        
        <section class="section section-lg pb-5 bg-soft">
            <div class="container">
                <div class="row"> 
                    <div class="col-12 text-center mb-5">
                        <h2 class="mb-4">Faster growth starts with Impact</h2>
                        <p class="lead mb-5">Join over <span class="font-weight-bolder">300,000+</span> users</p>
                    </div>
                    <div class="col-12 text-center">
                        <a href="../../dashboard/pages/dashboards/dashboard.html" class="btn btn-secondary animate-up-2"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span>Start 30-days trial</a>
                    </div>
                </div> 
            </div>    
        </section>


        <footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 bg-primary text-white overflow-hidden">
            <div class="pattern pattern-soft top"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <a class="footer-brand mr-lg-5 d-flex" href="">
                            <img src="" height="35" class="mr-3" alt="Footer logo">
                        </a>
                        <p class="my-4">Create, prototype, collaborate and turn your ideas into incredible products with the definitive platform for digital design.</p>
                     
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4 mb-4 mb-lg-0 text-center">
                        <h6>Themesberg</h6>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="https://themesberg.com/blog?ref=creativetim">Blog</a></li>
                     
                        </ul>
                    </div>
                    <!-- <div class="col-6 col-sm-3 col-lg-2 mb-4 mb-lg-0">
                        <h6>Creative Tim</h6>
                        <ul class="links-vertical">
                            <li><a target="_blank" href="https://themesberg.com/blog?ref=creativetim">Blog</a></li>
                     
                        </ul>
                    </div> -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <h6>Subscribe</h6>
                        <p class="font-small">The latest Impact news, articles, and resources, sent straight to your inbox every month.</p>
                        <form action="#">
                            <div class="form-row">
                                <div class="col-8">
                                    <input type="email" class="form-control mb-2" placeholder="Email Address" name="email" required>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-secondary btn-block"><span>Subscribe</span></button>
                                </div>
                            </div>
                        </form>
                        <small class="mt-2 form-text">We’ll never share your details. See our <a href="#" class="font-weight-bold text-underline">Privacy Policy</a></small>
                    </div>
                </div>
                <hr class="my-4 my-lg-5">
                <div class="row">
                    <div class="col pb-4 mb-md-0">
                        <div class="d-flex text-center justify-content-center align-items-center">
                            <p class="font-weight-normal mb-0">© <a href="https://themesberg.com?ref=creativetim*" target="_blank">Themesberg</a> & <a href="https://creative-tim.com">Creative Tim</a> <span class="current-year"></span>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

       
@endsection