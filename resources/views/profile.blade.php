<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.ico')}}"/>
    <title>Feeds.social</title>

    <!-- Styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>
<body>

<header>
    <div class="bg-light pb-2 pt-2 mb-1 fixed-top">
        <div class="container">
            <div class="row justify-content-between align-items-center"> 
                <div class="profile col-6">
                    @if($user->profile->logo)
                        <img class="rounded-circle" src="{{asset('storage')}}/{{$logo}}" alt="">
                    @endif
                </div>
                @if($user->profile->website_url)
                    <div class="goto col-6 text-right">
                        <a href="{{$user->profile->website_url}}">Visit website</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="row">
            @foreach($articles as $article)
                <div class="card col-4">
                    <a href="{{$article->url}}">
                        <div class="news" style="background: url('{{asset('storage')}}/{{$article->image}}') center / cover;">

                            @if($article->video == "on")
                                <div class="card-icon">
                                    <i class="fas fa-play text-light"></i>
                                    <!-- <img src="{{asset('storage/images/video.png') }}" alt=""> -->
                                </div>
                            @elseif($article->type_name == "GraphSidecar")
                                <div class="card-icon">
                                    <!-- <i class="far fa-images text-light"></i> -->
                                    <img src="{{asset('storage/images/stack.png') }}" alt="">

                                </div>
                            @endif

                            @if($article->title)
                                <h5 class="card-title text-dark">{{$article->title}}</h5>
                            @endif
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
    
    <div style="width: 100%; text-align:center; position:fixed; bottom:0;">
       <a style="background-color:white; padding: 20px; border-radius: 50%;" href="/"><i class="fas fa-2x fa-angle-double-up"></i></a> 
    </div>

</main>



</body>
</html>