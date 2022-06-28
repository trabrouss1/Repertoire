<div class="header">
    <div class="header-left">
        <a href="index.html" class="logo"> <img src="{{ asset('img/hotel_logo.png') }}" width="50" height="70"
                alt="logo">
            <span class="logoclass">{{ config('app.name') }}</span> </a>
        <a href="index.html" class="logo logo-small"> <img src="{{ asset('img/hotel_logo.png') }}" alt="Logo" width="30"
                height="30"> </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
    <a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
    <ul class="nav user-menu">
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img
                        class="rounded-circle" src="{{ asset('img/profiles/avatar-01.jpg') }}" width="31" alt="Soeng Souy"></span> </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm"> <img src="{{ asset('img/profiles/avatar-01.jpg') }}" alt="User Image"
                            class="avatar-img rounded-circle"> </div>
                    <div class="user-text">
                        <h6>{{ auth()->user()->name }}</h6>
                    </div>
                </div> <a class="dropdown-item" href="profile.html">My Profile</a> <a class="dropdown-item"
                    href="settings.html">Account Settings</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" class="dropdown-item"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Me deconnecter') }}
                    </x-dropdown-link>
                </form>
            </div>
        </li>
    </ul>
    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
</div>
