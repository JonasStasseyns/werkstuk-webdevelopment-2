<nav class="nav">
    <div class="nav-wrapper">
        <div class="links">
            <div class="logo"><a href="{{route('root')}}"><img src="{{asset('images/logo.png')}}" alt="logo.png"></a>
            </div>
            <div class="link-container">
                <a href="{{route('root')}}" class="link">home</a>
            </div>
            <div class="link-container">
                <a href="{{route('blog.index')}}" class="link">news</a>
            </div>
            <div class="link-container">
                <a href="{{route('about')}}" class="link">about</a>
            </div>
            <div class="link-container">
                <a href="{{route('contact')}}" class="link">contact</a>
            </div>
            <div class="link-container">
                <a href="{{route('donate.index')}}" class="link">donations</a>
            </div>
        </div>
        <div class="links auth-links">
            @if(Auth::user())
                <div class="link-container">
                    <a href="" class="link">{{Auth::user()->email}}</a>
                </div>
                <div class="link-container">
                    <a href="{{route('logout')}}" class="link">Logout</a>
                </div>
            @else
                <div class="link-container">
                    <a href="{{route('login')}}" class="link">sign in</a>
                </div>
                <div class="link-container">
                    <a href="{{route('register')}}" class="link">sign up</a>
                </div>
            @endif
            <div class="lang-container">
                <form action="{{route('lingo')}}" method="post" class="lang-form">
                    @csrf
                    <input type="hidden" name="lingo" value="nl">
                    <input type="submit" value="nl" class="lang-form-btn">
                </form>

                <form action="{{route('lingo')}}" method="post" class="lang-form">
                    @csrf
                    <input type="hidden" name="lingo" value="en">
                    <input type="submit" value="en" class="lang-form-btn">
                </form>
            </div>
        </div>
    </div>
</nav>
