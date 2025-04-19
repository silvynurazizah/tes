<nav class="main-nav--bg">
    <div class="container main-nav ">
        <div class="main-nav-start">
        </div>
        <div class="main-nav-end">
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle--gray" aria-hidden="true"></span>
            </button>
            <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                <span class="sr-only">Switch theme</span>
                <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
            </button>

            <div class="nav-user-wrapper">
                <button class="nav-user-btn dropdown-btn" title="My profile" type="button">
                    <span class="sr-only">My profile</span>
                    <span class="nav-user-img">
                        <div class="icon setting mx-auto"></div>
                    </span>
                </button>
                <ul class="users-item-dropdown nav-user-dropdown dropdown">
                    <p class="logo-title stat-cards-info__num">{{ auth()->User()->nama_petugas }}</p>
                    <p class="logo-subtitle bg-primary"
                        style="color: #ffffff; display: inline-block; padding-right: 5px; padding-left: 5px; border-radius: 15px; ">
                        {{ auth()->User()->level }}</p>
                        <div class=" border border-3 logo-subtitle my-3"></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <li><a class="danger signature"
                            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                            <i data-feather="log-out" aria-hidden="true"></i>
                            <span>Log out</span>
                        </a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
