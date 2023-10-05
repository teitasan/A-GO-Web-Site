<link rel="stylesheet" href="{{ asset('/css/footer.css')}}" >
<footer class ="footer">
    <div class="footer_logo">
        <a href="{{ route('index') }}" >A-GO</a>
    </div>
    <a href="https://twitter.com/AGO31094445?ref_src=twsrc%5Etfw" target="_blank" class ="twitter_logo"><img src="{{ asset('/image/logo-white.png')}}"></a>
    <a href="https://youtube.com/@a-go9368?si=Jnq8gqvc2EbFlV0Q" target="_blank" class ="youtube_logo"><img src="{{ asset('/image/yt_icon_mono_light.png')}}"></a>
    <nav>
        <ul class="footer_menu">
            <li class="footer_item"><a href="{{ route('index') }}">TOP</a></li>
            <li class="footer_item"><a href="{{ route('profile') }}">Profile</a></li>
            <li class="footer_item"><a href="{{ route('live') }}">Live</a></li>
            <li class="footer_item"><a href="{{ route('movie') }}">Movie</a></li>
        </ul>
    </nav>
</footer>