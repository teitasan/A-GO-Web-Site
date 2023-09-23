<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-GOのホームページ</title>
</head>
<body>
    <div>
        @include('header') 
    </div>
    <div>
        <main>
            ↓馬（メンバー代理）。twitter埋め込めなくなってるっぽくてトップに表示したいものがない。<br>
            <img src="{{ asset('/image/himg1-2.jpg')}}"><br>
            <a href="https://twitter.com/syuradowa?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @syuradowa</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

        </main>
    </div>
    <div>
        <!-- @i nclude('footer')　未作成 -->
    </div>
</body>
</html>