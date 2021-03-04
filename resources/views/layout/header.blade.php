
        <div class="tm-site-header">
            <div class="row">
                <div class="col-12 tm-site-header-col">
                    <div class="tm-site-header-left">
                        <i class="far fa-2x fa-eye tm-site-icon"></i>
                        <h1 class="tm-site-name">Laravel CMS</h1>
                   

                    </div>
                    <div class="tm-site-header-right tm-menu-container-outer">

                        <!--Navbar-->
                        <nav class="navbar navbar-expand-lg">

                            <!-- Collapse button -->
                            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                        class="fas fa-bars fa-1x"></i></span></button>

                            <!-- Collapsible content -->
                            <div class="collapse navbar-collapse tm-nav" id="navbarSupportedContent1">

                                <!-- Links -->
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item ">
                                        <a class="nav-link tm-nav-link" href="{{asset('/')}}">Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="{{ asset('company')}}">Company</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="{{asset('services')}}">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="{{asset('contact')}}">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link tm-nav-link" href="{{asset('AdminLogin')}}">Admin</a>
                                    </li>

                                </ul>
                                <!-- Links -->

                            </div>
                            <!-- Collapsible content -->

                        </nav>
                        <!--/.Navbar-->
                    </div>
                </div>
            </div>
        </div>