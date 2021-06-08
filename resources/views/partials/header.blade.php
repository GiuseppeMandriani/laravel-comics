<header class="">
    <div class="container header-content">
        <a href="{{ route('home')}}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="Logo DC">
        </a>
        <nav>
            <ul class="header-nav">
                <li><a  href="{{ route('home')}}">Home</a></li>
                <li><a class="active" href="{{ route('comics')}}">Comics</a></li>
                <li><a href="{{ route('news')}}">News</a></li>
            </ul>
        </nav>
    </div>
</header>