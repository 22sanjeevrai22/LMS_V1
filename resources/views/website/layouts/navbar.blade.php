<div
    class="mediz-navigation-bar-wrap  mediz-style-solid mediz-sticky-navigation mediz-sticky-navigation-height mediz-style-left  mediz-style-fixed">
    <div class="mediz-navigation-background"></div>
    <div class="mediz-navigation-container clearfix  mediz-container">
        <div class="mediz-navigation mediz-item-pdlr clearfix ">
            <div class="mediz-main-menu" id="mediz-main-menu">
                <ul id="menu-main-navigation-1" class="sf-menu">
                    <li
                        class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                        <a href="">Home</a></li>
                    <li
                        class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                        <a href="">Our Services</a></li>
                    <li
                        class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                        <a href="">Our Doctor</a></li>
                    <li
                        class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                        <a href="">Gallery</a></li>
                    <li
                        class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                        <a href="">About Us</a></li>
                    <li
                        class="menu-item menu-item-home current-menu-item page_item page-item-7684 current_page_item mediz-normal-menu">
                        <a href="">Blog</a></li>

                </ul>
                <div class="mediz-navigation-slide-bar  mediz-navigation-slide-bar-style-2" data-size-offset="0"
                    id="mediz-navigation-slide-bar"></div>
            </div>
            <div class="mediz-main-menu-right-wrap clearfix ">

                @if (Route::has('login'))
                    @auth

                    <form method="POST" class=" " action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="mediz-main-menu-right-button mediz-style-round mediz-button-1" target="_self">
                            Logout
                        </button>
                    </form>
                    @else
                        <a href="{{ route('login') }}" class="mediz-main-menu-right-button mediz-button-1 mediz-style-round"
                            target="_self">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="mediz-main-menu-right-button mediz-button-1 mediz-style-round"
                                target="_self">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
        <!-- mediz-navigation -->

    </div>
    <!-- mediz-header-container -->
</div>
