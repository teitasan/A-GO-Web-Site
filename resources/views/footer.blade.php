<link rel="stylesheet" href="{{ asset('/css/footer.css')  }}" >
<footer class ="footer">
    <div class="footer_logo">
        <a href="{{ route('index') }}" >A-GO</a>
    </div>
    <nav>
        <ul class="footer_menu">
            <li class="footer_item"><a href="{{ route('index') }}">TOP</a></li>
            <li class="footer_item"><a href="{{ route('profile') }}">Profile</a></li>
            <li class="footer_item"><a href="{{ route('live') }}">Live</a></li>
            <li class="footer_item"><a href="{{ route('movie') }}">Movie</a></li>
        </ul>
    </nav>
</footer>