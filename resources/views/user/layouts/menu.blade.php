<div class="search">
    <input type="search" placeholder="Search" />
    <i class="search-close ri-close-large-line"></i>
</div>

<div class="menu">
    <div class="menu-left">
        <a href="{{route('user.project')}}" class="menu-elem menu-elem1">
            <h1 class="elem11">PROJECTS</h1>
            <h1 class="elem12">PROJECTS</h1>
        </a>
        <a href="{{route('user.expertise')}}" class="menu-elem menu-elem2">
            <h1 class="elem21">EXPERTISE</h1>
            <h1 class="elem23">EXPERTISE</h1>
        </a>
        <a href="{{route('user.about')}}" class="menu-elem menu-elem6">
            <h1 class="elem61">ABOUT</h1>
            <h1 class="elem62">ABOUT</h1>
        </a>
        <a href="{{route('user.clientele')}}" class="menu-elem menu-elem3">
            <h1 class="elem31">CLIENTELE</h1>
            <h1 class="elem32">CLIENTELE</h1>
        </a>
        <a href="{{route('user.csr')}}" class="menu-elem menu-elem4">
            <h1 class="elem41">CSR</h1>
            <h1 class="elem42">CSR</h1>
        </a>
        <a href="{{route('user.news')}}" class="menu-elem menu-elem5">
            <h1 class="elem51">NEWS</h1>
            <h1 class="elem52">NEWS</h1>
        </a>
        <a href="{{route('user.awards')}}" class="menu-elem menu-elem7">
            <h1 class="elem71">AWARDS</h1>
            <h1 class="elem72">AWARDS</h1>
        </a>
        <a href="{{route('user.contact')}}" class="menu-elem menu-elem8">
            <h1 class="elem81">CONTACT US</h1>
            <h1 class="elem82">CONTACT US</h1>
        </a>
        <a href="{{route('user.career')}}" class="menu-elem menu-elem9">
            <h1 class="elem91">CAREERS</h1>
            <h1 class="elem92">CAREERS</h1>
        </a>
        <div class="menu-right-socials">
            <div class="media">
                <a target="_blank" href="https://www.facebook.com/padaminteriors/">
                    <i title="Facebook" class="ri-facebook-fill"></i>
                </a>
                <a target="_blank" href="https://x.com/PadamInteriors">
                    <i title="X" class="ri-twitter-x-line"></i>
                </a>
                <a target="_blank" href="https://www.instagram.com/padams_group/?hl=en">
                    <i title="Instagram" class="ri-instagram-line"></i>
                </a>
                <a target="_blank" href="https://www.linkedin.com/company/padam-interiors/?originalSubdomain=in">
                    <i title="Linkedin" class="ri-linkedin-fill"></i>
                </a>
            </div>
            <a target="_blank" href="mailto:queries@padams.in" class="email">
                <i class="ri-mail-fill"></i>
                <p>queries@padams.in</p>
            </a>
        </div>
        <a class="return-home" href="{{route('user.project')}}">Return To Home</a>
    </div>
    <div class="menu-right">
        <i class="menu-close ri-close-large-fill"></i>
    </div>
</div>
<nav>
    <a href="{{route('user.project')}}">
        <img src="{{asset('userassets/images/padam-logo.png')}}" alt="" />
    </a>
    <div class="nav-right">
        @if (strpos(url()->current(), 'project') == true)
        <div class="form-groupp">
            <select id="topic" name="topic" required>
                <option value="" disabled selected>Select unit</option>
                <option value="sqft">Square feet</option>
                <option value="sqm">Square meter</option>
            </select>
        </div>
        @endif
        <i class="search-open ri-search-line"></i>
        <i class="menu-open ri-menu-line"></i>
    </div>
</nav>