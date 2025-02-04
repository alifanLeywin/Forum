@extends('layout.app')

@section('content')
<main>
    <div class="container">
        <div class="nav">
            <div class="nav__menu js-dropdown">
                <div class="nav__select">
                    <div class="btn-select" data-dropdown-btn="menu">Latest</div>
                    <div class="dropdown dropdown--design-01" data-dropdown-list="menu">
                        <ul class="dropdown__catalog">
                            <li><a href="#">Latest</a></li>
                            <li><a href="#">Unread</a></li>
                            <li><a href="#">Rising</a></li>
                            <li><a href="#">Most Liked</a></li>
                            <li><a href="#">Follow Feed</a></li>
                        </ul>
                    </div>
                </div>
                <ul>
                    <li class="active"><a href="#">Latest</a></li>
                    <li><a href="#">Unread</a></li>
                    <li><a href="#">Rising</a></li>
                    <li><a href="#">Most Liked</a></li>
                    <li><a href="#">Follow Feed</a></li>
                </ul>
            </div>
        </div>
        <div class="posts">
            <div class="posts__head">
                <div class="posts__topic">Topic</div>
                <div class="posts__category">Category</div>
                <div class="posts__users">Users</div>
                <div class="posts__replies">Replies</div>
                <div class="posts__views">Views</div>
                <div class="posts__activity">Activity</div>
            </div>
            <div class="posts__body">
                <div class="posts__item bg-fef2e0">
                    <div class="posts__section-left">
                        <div class="posts__topic">
                            <div class="posts__content">
                                <a href="#">
                                    <h3><i><img src="fonts/icons/main/Pinned.svg" alt="Pinned"></i>Welcome New Users! Please read this before posting!</h3>
                                </a>
                                <p>Congratulations, you have found the Community! Before you make a new topic or post, please read community guidelines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="posts__section-right">
                        <div class="posts__users js-dropdown">
                            <div>
                                <a href="#" class="avatar"><img src="fonts/icons/avatars/B.svg" alt="avatar" data-dropdown-btn="user-b"></a>
                                <div class="posts__users-dropdown dropdown dropdown--user dropdown--reverse-y" data-dropdown-list="user-b">
                                    <div class="dropdown__user">
                                        <a href="#" class="dropdown__user-label bg-218380">B</a>
                                        <div class="dropdown__user-nav">
                                            <a href="#"><i class="icon-Add_User"></i></a>
                                            <a href="#"><i class="icon-Message"></i></a>
                                        </div>
                                        <div class="dropdown__user-info">
                                            <a href="#">Tesla Motors</a>
                                            <p>Last post 4 hours ago. Joined Jun 1, 16</p>
                                        </div>
                                        <div class="dropdown__user-icons">
                                            <a href="#"><img src="fonts/icons/badges/Intermediate.svg" alt="user-icon"></a>
                                            <a href="#"><img src="fonts/icons/badges/Bot.svg" alt="user-icon"></a>
                                            <a href="#"><img src="fonts/icons/badges/Animal_Lover.svg" alt="user-icon"></a>
                                        </div>
                                        <div class="dropdown__user-statistic">
                                            <div>Threads - <span>1184</span></div>
                                            <div>Posts - <span>5,863</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a href="#" class="avatar"><img src="fonts/icons/avatars/K.svg" alt="avatar"></a>
                            </div>
                            <div>
                                <a href="#" class="avatar"><img src="fonts/icons/avatars/O.svg" alt="avatar"></a>
                            </div>
                        </div>
                        <div class="posts__replies">100k</div>
                        <div class="posts__views">800m</div>
                        <div class="posts__activity">11d</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main> 
@endsection
