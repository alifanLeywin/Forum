<header>
    <div class="header js-header js-dropdown">
        <div class="container">
           
            
            <!-- Menu Section -->
           


            <!-- User Profile -->
            <div class="header__user">
                
                <div class="header__user-btn" data-dropdown-btn="user">          
                {{ Auth::user()->name }}<i class="icon-Arrow_Below"></i>
                </div>
                <nav class="dropdown dropdown--design-01" data-dropdown-list="user">
                    <div>
                    <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                            
                        </form>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <!-- BUAT CREATE POST -->
            <div class="header__offset-btn">
                <a href="#"><img src="{{ asset('fonts/icons/main/New_Topic.svg') }}" alt="New Topic"></a>
            </div>
        </div>

        <!-- Offset Button -->
        
    </div>
</header>
