<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-GOのホームページ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/index.css')}}" >
    <link rel="stylesheet" href="{{ asset('/css/slick.css')}}" >
    <link rel="stylesheet" href="{{ asset('/css/slick_cfg.css')}}" >
</head>
<body>
    <div>
        @include('header') 
    </div>
    <div class ="index_global">
        <main>
            <div>
                <ul class="slider index_slider">
                    <li class="index_img"><img src="{{ asset('/image/himg1-2.jpg')}}"></li>
                    <li class="index_img"><img src="{{ asset('/image/himg1-2.jpg')}}"></li>
                    <li class="index_img"><img src="{{ asset('/image/himg1-2.jpg')}}"></li>
                </ul>
                <ul class="thumbnail">
                    <li class="thumbnail_img"><div><img src="{{ asset('/image/himg1-2.jpg')}}"></div></li>
                    <li class="thumbnail_img"><div><img src="{{ asset('/image/himg1-2.jpg')}}"></div></li>
                    <li class="thumbnail_img"><div><img src="{{ asset('/image/himg1-2.jpg')}}"></div></li>
                </ul>
            </div>
            
            <div class ="index_movie">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/H85exzh9vo8?si=qAIkzFGGkMKvjtom?&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </main>
    </div>
    <div>
        @include('footer')
    </div>
    <script src="{{ asset('/js/slick.min.js')}}"></script>
    <script src="{{ asset('/js/slick_cfg.js')}}"></script>
</body>
</html>