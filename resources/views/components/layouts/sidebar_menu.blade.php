<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li class="sidebar-item {{ $active == 'product' ? 'active' : '' }} ">
            <a wire:navigate href="/product" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Product</span>
            </a>


        </li>
        <li class="sidebar-item {{ $active == 'hitung-hpp' ? 'active' : '' }} ">
            <a wire:navigate href="/hitung-hpp" class='sidebar-link'>
                <i class="bi bi-cash-stack"></i>
                <span>Hitung HPP</span>
            </a>


        </li>

        {{-- <li class="sidebar-item  has-sub">
            <a href="#" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Components</span>
            </a>

            <ul class="submenu ">

                <li class="submenu-item  ">
                    <a href="component-accordion.html" class="submenu-link">Accordion</a>

                </li>

                <li class="submenu-item  ">
                    <a href="component-alert.html" class="submenu-link">Alert</a>

                </li>

            </ul>
        </li> --}}


    </ul>
</div>
