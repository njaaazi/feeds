<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <img width="50px" src="{{$profile_picture}}" alt="">
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
                        <div class="news" style="background: url('{{ $article->image }}') center / cover;">

                            @if($article->type_name == "GraphVideo")
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
</main>

</body>
</html>