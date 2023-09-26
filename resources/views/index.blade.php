<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-GOのホームページ</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/slick.css')}}" >
    <link rel="stylesheet" href="{{ asset('/css/slick_cfg.css')}}" >
</head>
<body>
    <div>
        @include('header') 
    </div>
    <div>
        <main>
            <div>
                <ul class="slider">
                    <li><img src="{{ asset('/image/himg1-2.jpg')}}"></li>
                    <li><img src="{{ asset('/image/himg1-2.jpg')}}"></li>
                    <li><img src="{{ asset('/image/himg1-2.jpg')}}"></li>
                </ul>
            </div>
            <a href="https://twitter.com/syuradowa?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @syuradowa</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </main>
    </div>
    <div>
        @include('footer')
    </div>
    <script src="{{ asset('/js/slick.min.js')}}"></script>
    <script src="{{ asset('/js/slick_cfg.js')}}"></script>
</body>
</html>