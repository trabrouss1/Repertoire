@yield('sidebar')
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="active"> <a href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i>
                        <span>Tableau de bord</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Personne </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-booking.html"> Tous les personnes</a></li>
                        <li><a href="edit-booking.html"> Edit Booking </a></li>
                        <li><a href="add-booking.html"> Add Booking </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Contact </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-customer.html"> Les contact </a></li>
                        <li><a href="edit-customer.html"> Edit Customer </a></li>
                        <li><a href="add-customer.html"> Add Customer </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Type de contact </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-rooms.html">Tous les type de contact </a></li>
                        <li><a href="edit-room.html"> Edit Rooms </a></li>
                        <li><a href="add-room.html"> Add Rooms </a></li>
                    </ul>
                </li>
                @yield('sidebar')
            </ul>
        </div>
    </div>
</div>
