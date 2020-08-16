@extends('layouts.app')

@section('content')

        <!-- Hero -->
        <section class="section-header pb-7 pb-lg-11 bg-soft">
            <div class="container pt-5">
                <div class="row justify-content-between align-items-center mt-5 mt-md-0">
                    <div class="col-12 col-md-6 order-2 order-lg-1 mb-5 mb-md-0">
                        <img class="w-100"src="{{asset('images/grow-visual.svg')}}" alt="">
                    </div>
                    <div class="col-12 col-md-5 order-1 order-lg-2 mb-5 mb-md-0">
                            <h1 class="display-2 mb-3">Grow your traffic</h1>
                            <p class="lead font-weight-normal">Enrich your feeds, add links to drive traffic from Instagram</p>

                            @guest
                                <div class="mt-4">
                                    <a href="/register" class="btn btn-primary primary w-100">Create your account</a>
                                </div>
                            @endguest
                      </div>
                </div>
            </div>
            <div class="pattern bottom"></div>
        </section>

        <section class="section section-lg pt-6">
            <div class="container">
                <div class="row justify-content-center mb-5 mb-md-7">
                    <div class="col-12 col-md-8 text-center">
                        <h2 class="h1 font-weight-bolder mb-4">Meet Our Product</h2>
                        <p class="lead font-weight-normal">Feeds lets you add links on your posts and drive traffic to your website direct from your Instagram Bio.</p>
                    </div>
                </div>
                <div class="row row-grid align-items-center mb-5 mb-md-7">
                    <div class="col-12 col-md-5">
                        <h2 class="font-weight-bolder mb-4">How it works</h2>
                        <p class="lead font-weight-normal">Add a link of your articles and webpages in photos and videos you post on Instagram, and drive traffic from the Link in Bio. All posts that contain links will appear in the link that you post in your profile bio. This will help you enrich your posts and also increase the traffic to your website from Instagram.</p>
                        <!-- <a href="" class="btn btn-primary primary mt-3 animate-up-2">
                            Learn More
                            <span class="icon icon-xs ml-2">
                                <i class="fas fa-external-link-alt"></i>
                            </span>
                        </a> -->
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto mt-5 mt-md-0 d-flex justify-content-end pl-5 pr-5">
                        <img class="w-100" src="{{asset('images/mobile-feed.svg')}}" alt="">
                    </div>
                </div>


                <!-- <div class="row row-grid align-items-center mb-5 mb-md-7">
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
                        <img src="{{asset('images/feature-illustration-2.svg')}}" alt="">
                    </div>
                </div> -->

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


        <!-- Video Section  -->
        <!-- <section class="section section-lg pt-5 pb-5 bg-soft">
            <div class="container">
                <div class="row"> 
                    <div class="col-12 text-center">
                        <h2 class="mb-4">Faster growth starts with Impact</h2>
                        <p class="lead mb-5">Join over <span class="font-weight-bolder">300,000+</span> users</p>
                    </div>
                    <div class="col-12 text-center">
                        <a href="../../dashboard/pages/dashboards/dashboard.html" class="btn btn-secondary animate-up-2"><span class="mr-2"><i class="fas fa-hand-pointer"></i></span>Start 30-days trial</a>
                    </div>
                </div> 
            </div>    
        </section> -->


        <footer class="footer section pt-6 pt-md-8 pt-lg-10 pb-3 bg-primary text-white overflow-hidden">
            <!-- <div class="pattern pattern-soft top"></div> -->
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <a class="footer-brand mr-lg-5 d-flex" href="">
                            <img class="w-100" src="{{asset('images/feeds-logo-white.png')}}"  alt="Footer logo"> 
                        </a>
                        <p class="my-4">Make your Instagram posts more attractive and your website pages more reachable.</p>
                     
                    </div>
    
                    <div class="col-12 col-sm-6 col-lg-4">
                        <h6>Subscribe</h6>
                        <p class="font-small">To get our latest updates about new features.</p>
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
                    </div>
                </div>
                <hr class="my-4 my-lg-5">
                <div class="row">
                    <div class="col pb-4 mb-md-0">
                        <div class="d-flex text-center justify-content-center align-items-center">
                            <p class="font-weight-normal mb-0">© <a class="text-white" href="/">Feeds</a><span class="current-year"> {{ now()->year }}</span>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

       
@endsection