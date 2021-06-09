<header class="">
    <div class="container header-content">
        <a href="{{ route('home')}}">
            <img src="{{ asset('images/dc-logo.png') }}" alt="Logo DC">
        </a>
        <nav>
            <ul class="header-nav">
                <li>
                    <a class="{{ Request::is('/') ? 'active' : '' }}"  
                        href="{{ route('home')}}">Home
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is('comics') ? 'active' : '' }}"  
                        href="{{ route('comics')}}">Comics
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is('news') ? 'active' : '' }}"  
                        href="{{ route('news')}}">News
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>