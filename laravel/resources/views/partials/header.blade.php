<nav class="nav">
    <div class="nav-wrapper">
        <div class="links">
            <div class="logo"><img src="{{asset('images/logo.png')}}" alt="logo.png"></div>
            <div class="link-container">
                <a href="{{route('home')}}" class="link">home</a>
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
                <a href="{{route('donate.index')}}" class="link">donate</a>
            </div>
        </div>
        <div class="links auth-links">
            <div class="link-container">
                <a href="" class="link">sign in</a>
            </div>
            <div class="link-container">
                <a href="" class="link">sign up</a>
            </div>
        </div>
    </div>
</nav>
