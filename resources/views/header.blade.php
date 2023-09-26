<link rel="stylesheet" href="{{ asset('/css/header.css')}}" >
<header>
    <a href="{{ route('index') }}" class="logo"><img src="{{ asset('/image/A-GO_logo.png')}}"></a>
    <nav>
        <ul class="header_menu delete-marker-fix">
            <li class="header_item"><a href="{{ route('index') }}">TOP</a></li>
            <li class="header_item"><a href="{{ route('profile') }}">Profile</a></li>
            <li class="header_item"><a href="{{ route('live') }}">Live</a></li>
            <li class="header_item"><a href="{{ route('movie') }}">Movie</a></li>
        </ul>
    </nav>
</header>