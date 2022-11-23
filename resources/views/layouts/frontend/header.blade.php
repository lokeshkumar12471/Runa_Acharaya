    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="index.html">
                <img src="assets/images/personal/runa-acharya.png" class="inline-block" alt="" />
                <!-- <img
            src="assets/images/personal/runa-acharya.png"
            class="hidden"
            alt=""
          /> -->
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    <a href=""
                        class="btn btn-icon rounded-full bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i
                            data-feather="settings" class="h-4 w-4"></i></a>
                </li>

                <li class="inline pl-1 mb-0">
                    <a href="https://1.envato.market/techwind" target="_blank"
                        class="btn btn-icon rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                            data-feather="shopping-cart" class="h-4 w-4"></i></a>
                </li>
            </ul>
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="{{ route('index') }}">HOME</a>
                    </li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="{{ route('doctor') }}">DOCTOR</a>

                    </li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="{{ route('services') }}">SERVICES</a>

                    <li class="has-submenu parent-menu-item">
                        <a href="{{ route('blogs') }}">BLOGS</a>
                    </li>
                    <li class="has-submenu parent-menu-item">
                        <a href="{{ route('faqs') }}">FAQ'S</a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" target="_blank" class="sub-menu-item">CONTACT US</a>
                    </li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </nav>
    <!--end header-->
    <!-- End Navbar -->
