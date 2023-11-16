<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="{{ asset('backend') }}/assets/imgs/theme/logo.svg" class="logo" alt="Evara Dashboard">
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item active">
                <a class="menu-link" href="index.html"> <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-products-list.html"> <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Category</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('category.index') }}">Category List</a>
                    <a href="{{ route('category.create') }}">Create Category</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-orders-1.html"> <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Banner</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('banner.index') }}">Banner List</a>
                    <a href="{{ route('banner.create') }}">Create Banner</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                    <span class="text">Campaign</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('campaign.index') }}">Campaign List</a>
                    <a href="{{ route('campaign.create') }}">Create Campaign</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                    <span class="text">Campaign Product</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('campaign-product.index') }}">Campaign Product List</a>
                    <a href="{{ route('campaign-product.create') }}">Create Campaign Product</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                    <span class="text">Variation</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('variation.index') }}">Variation List</a>
                    <a href="{{ route('variation.create') }}">Create Variation</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-sellers-cards.html"> <i class="icon material-icons md-store"></i>
                    <span class="text">Variation Option</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('variation_option.index') }}">Variation List</a>
                    <a href="{{ route('variation_option.create') }}">Create Variation</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>
                    <span class="text">product</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('product.index') }}">Product List</a>
                    <a href="{{ route('product.create') }}">Add product</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-form-product-1.html"> <i class="icon material-icons md-add_box"></i>
                    <span class="text">Product Item</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('product-item.index') }}">Product Item List</a>
                    <a href="{{ route('product-item.create') }}">Add product Item</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-transactions-1.html"> <i class="icon material-icons md-monetization_on"></i>
                    <span class="text">Shipping Methods</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('shipping-methods.index') }}">Shipping Methods List</a>
                    <a href="{{ route('shipping-methods.create') }}">Create Shipping Methods</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#"> <i class="icon material-icons md-person"></i>
                    <span class="text">Account</span>
                </a>
                <div class="submenu">
                    <a href="{{ route('create.admin') }}">Create Admin</a>
                    <a href="page-account-register.html">User registration</a>
                    <a href="page-error-404.html">Error 404</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-reviews.html"> <i class="icon material-icons md-comment"></i>
                    <span class="text">Reviews</span>
                </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-brands.html"> <i class="icon material-icons md-stars"></i>
                    <span class="text">Brands</span> </a>
            </li>
            <li class="menu-item">
                <a class="menu-link" disabled href="#"> <i class="icon material-icons md-pie_chart"></i>
                    <span class="text">Statistics</span>
                </a>
            </li>
        </ul>
        <hr>
        <ul class="menu-aside">
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#"> <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                </a>
                <div class="submenu">
                    <a href="page-settings-1.html">Setting sample 1</a>
                    <a href="page-settings-2.html">Setting sample 2</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-blank.html"> <i class="icon material-icons md-local_offer"></i>
                    <span class="text"> Starter page </span>
                </a>
            </li>
        </ul>
        <br>
        <br>
    </nav>
</aside>