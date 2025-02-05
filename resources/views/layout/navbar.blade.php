<header>
    <div class="header js-header js-dropdown">
        <div class="container">
            <!-- Logo Section -->
            <div class="header__logo">
                <h1>
                    <img src="{{ asset('fonts/icons/main/Logo_Forum.svg') }}" alt="logo">
                </h1>
                <div class="header__logo-btn" data-dropdown-btn="logo">
                    Unity<i class="icon-Arrow_Below"></i>
                </div>
                <nav class="dropdown dropdown--design-01" data-dropdown-list="logo">
                    <ul class="dropdown__catalog">
                        <li><a href="{{ url('/') }}">Home Page</a></li>
                        <li><a href="{{ url('/topics') }}">Single Topic Page</a></li>
                        <li><a href="{{ url('/signup') }}">Sign up Page</a></li>
                        <li><a href="{{ url('/create-topic') }}">Create Topic Page</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Search Section -->
            <div class="header__search">
                <form action="#" method="GET">
                    <label>
                        <i class="icon-Search js-header-search-btn-open"></i>
                        <input type="search" placeholder="Search all forums" class="form-control">
                    </label>
                </form>
                <div class="header__search-close js-header-search-btn-close"><i class="icon-Cancel"></i></div>
                <div class="header__search-btn" data-dropdown-btn="search">
                    Topics<i class="icon-Arrow_Below"></i>
                </div>
                <div class="dropdown dropdown--design-01" data-dropdown-list="search">
                    <ul>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox" checked>
                                <i></i>Search Titles Only
                            </label>
                        </li>
                        <li>
                            <label class="custom-checkbox">
                                <input type="checkbox">
                                <i></i>Show Results as Posts
                            </label>
                        </li>
                        <li>
                            <a href="#"><i class="icon-Advanced_Search"></i>Advanced Search</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Menu Section -->
            <div class="header__menu">
                <div class="header__menu-btn" data-dropdown-btn="menu">
                    Latest Topics<i class="icon-Menu_Icon"></i>
                </div>
                <nav class="dropdown dropdown--design-01" data-dropdown-list="menu">
                    <div>
                        <ul class="dropdown__catalog row">
                            <li class="col-xs-6"><a href="#">New</a></li>
                            <li class="col-xs-6"><a href="#">Unread</a></li>
                            <li class="col-xs-6"><a href="#">Groups</a></li>
                            <li class="col-xs-6"><a href="#">Users</a></li>
                            <li class="col-xs-6"><a href="#">Tags</a></li>
                            <li class="col-xs-6"><a href="#">Shortcuts</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>Categories</h3>
                        <ul class="dropdown__catalog row">
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-f9bc64"></i>Hobbies</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-348aa7"></i>Social</a></li>
                            <li class="col-xs-6"><a href="#" class="category"><i class="bg-4436f8"></i>Video</a></li>
                            <!-- Add more categories as needed -->
                        </ul>
                    </div>
                </nav>
            </div>

            <!-- Notifications -->
            <div class="header__notification">
                <div class="header__notification-btn" data-dropdown-btn="notification">
                    <i class="icon-Notification"></i>
                    <span>6</span>
                </div>
                <div class="dropdown dropdown--design-01" data-dropdown-list="notification">
                    <div>
                        <a href="#">
                            <i class="icon-Favorite_Topic"></i>
                            <p>Roswell<span>Which movie have you watched recently?</span></p>
                        </a>
                        <a href="#">
                            <i class="icon-Reply_Empty"></i>
                            <p>Callis<span>I got an amazon thingie!</span></p>
                        </a>
                        <!-- Add more notifications here -->
                    </div>
                </div>
            </div>

            <!-- User Profile -->
            <div class="header__user">
                <div class="header__user-btn" data-dropdown-btn="user">
                    <img src="{{ asset('fonts/icons/avatars/A.svg') }}" alt="avatar">
                    azyrusmax<i class="icon-Arrow_Below"></i>
                </div>
                <nav class="dropdown dropdown--design-01" data-dropdown-list="user">
                    <div>
                        <div class="dropdown__icons">
                            <a href="#"><i class="icon-Bookmark"></i></a>
                            <a href="#"><i class="icon-Message"></i></a>
                            <a href="#"><i class="icon-Preferences"></i></a>
                            <a href="#"><i class="icon-Logout"></i></a>
                        </div>
                    </div>
                    <div>
                        <ul class="dropdown__catalog">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Badges</a></li>
                            <li><a href="#">My Groups</a></li>
                            <!-- Add more user links -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Offset Button -->
        <div class="header__offset-btn">
            <a href="#"><img src="{{ asset('fonts/icons/main/New_Topic.svg') }}" alt="New Topic"></a>
        </div>
    </div>
</header>
