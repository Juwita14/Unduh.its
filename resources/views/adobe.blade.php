<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">

            <!-- Sidebar -->
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Logo -->
                        <div class="float-left mr-5 mb-5">
                            <img style="height: 48px; width: 45px;" class="img-avatar" src="assets/media/photos/logo-its-biru-transparan.png" alt=""> 
                        </div>
                        <div class="content-header-item">
                            <a class=" font-w700" href="index">
                                <span href="javascript:void(0)" style= "font-size: 200%; line-height: 125%;" class=" text-dual-primary">UNDUH</span>
                            </a>
                            <a class="font-w300" href="index">
                                <p style="line-height: 0%;" class="font-size-sm mt-5 text-dual-primary-dark">Software Lisensi ITS</p>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Middle Section -->
                    <div class="content-header-section d-none d-lg-block">
                        <!-- Header Navigation -->
                        <!--
                        Desktop Navigation, mobile navigation can be found in #sidebar

                        If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                        If your sidebar menu includes headings, they won't be visible in your header navigation by default
                        If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                        -->
                        <!-- END Header Navigation -->
                    </div>
                    <!-- END Middle Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- Color Themes + A few of the many header options (used just for demonstration) -->
                        <!-- Themes functionality initialized in Template._uiHandleTheme() -->
                        <!-- END Color Themes + A few of the many header options -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img style="height: 30px; width:30px;" class="img-avatar" src="assets/media/avatars/avatar5.jpg" alt="">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">Juwita Kartika Rani</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                                <a class="dropdown-item" href="logout">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END Open Search Section -->

                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="bd_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary px-15">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <!-- Search -->
                    <form class="push" action="bd_search.html" method="post">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Cari produk lisensi..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- END Search -->
                    
                    <div style="background-color:#F0F2F5;" class="block shadow-none">
                            <a href="produk">Produk Lisensi </a>
                            <i class="fa fa-angle-right "></i>
                            <a > Adobe</a>
                    </div>
                    <!-- Results -->
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="block">
                                <div class="block-content py-5">
                                        <a class="block-rounded" >
                                            <img style= "width: 200px; height: 200px;"  class="img-responsive center-block d-block mx-auto mt-15 mb-15" src="assets/media/photos/adobe-logo-492427.png" alt="">
                                        </a>
                                        <div class="ml-20">
                                            <div class="border-b">
                                                <p class="font-size-lg font-w700  mb-0">
                                                    Adobe
                                                </p>
                                                <p class="font-size-sm  font-w600 text-op  mb-0">
                                                    Adobe Inc.
                                                </p>
                                            </div>
                                            <br>
                                            <div class="ml-15 mb-20">
                                                <a href="https://www.adobe.com/id_en/creativecloud.html?sdid=WKRCJ9VF&mv=search&ef_id=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE:G:s&s_kwcid=AL!3085!3!447025602704!e!!g!!adobe!636853869!31669464044&gclid=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE" target="_blank"> 
                                                    <button style="" type="button" class="btn btn-success shadow min-width-150 ">
                                                    <i class="fa fa-globe mr-5"></i>Visit Website
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="block">
                                <div class="block-content">
                                    <div class="block">
                                        <ul style="border-width: 2px !important; border-color: #26C6DA !important;" class="nav nav-pills nav-justified border-b" data-toggle="tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active " href="#search-ringkasan">Ringkasan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#search-filedownload">File Download</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#search-spesifikasi">Spesifikasi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#search-preview">Preview</a>
                                            </li>
                                        </ul>
                                        <div class="block-content block-content-full tab-content overflow-hidden">
                                            <!-- Ringkasan-->
                                            <div class="tab-pane fade show active" id="search-ringkasan" role="tabpanel">
                                                <div class="row items-push">
                                                    <div class="col-lg-12 border-b">
                                                        <h4 class="h5 mb-5">
                                                            <a class="font-size-md  font-w700">Adobe</a>
                                                        </h4>
                                                        @foreach($ringkasan as $r)
                                                            <p> {!! html_entity_decode($r->ringkasan) !!}</p>
                                                        @endforeach
                                                        <p>Informasi tentang Adobe, silakan kunjungi <a href="https://www.adobe.com/id_en/creativecloud.html?sdid=WKRCJ9VF&mv=search&ef_id=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE:G:s&s_kwcid=AL!3085!3!447025602704!e!!g!!adobe!636853869!31669464044&gclid=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE" target="_blank">Offical Adobe.</a></p>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Classic -->

                                            <!-- Photos -->
                                            <div class="tab-pane fade" id="search-filedownload" role="tabpanel">
                                                <div class="row items-push">
                                                    <div class="col-lg-12 border-b">
                                                        <h4 class="h5 mb-5">
                                                            <a class="font-size-md  font-w700">File Panduan</a>
                                                        </h4>
                                                        @foreach($file_panduan as $pd)
                                                        <a href="/download/{{$pd->id}}">
                                                            <i class="fa fa-file-pdf-o" style="color:red"></i>
                                                            <div style="display:inline-block;" class="text">
                                                                <p>{{$pd->nama_file_panduan}}</p>
                                                            </div>
                                                        </a>
                                                        <br>
                                                        @endforeach
                                                    </div>
                                                    <div class="col-lg-12 border-b">
                                                        <h4 class="h5 mb-5">
                                                            <a class="font-size-md  font-w700">File Installer</a>
                                                        </h4>
                                                        <p>Informasi tentang file download Adobe, silakan kunjungi <a href="https://www.adobe.com/id_en/creativecloud.html?sdid=WKRCJ9VF&mv=search&ef_id=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE:G:s&s_kwcid=AL!3085!3!447025602704!e!!g!!adobe!636853869!31669464044&gclid=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE" target="_blank">Offical Adobe.</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Photos -->

                                            <!-- Spesifikasi -->
                                            <div class="tab-pane fade" id="search-spesifikasi" role="tabpanel">
                                                <div class="row items-push">
                                                    <div class="col-lg-12 border-b">
                                                        <p>Informasi tentang fitur dan spesifikasi produk Adbe Creative Cloud , silakan kunjungi <a href="https://www.adobe.com/id_en/creativecloud.html?sdid=WKRCJ9VF&mv=search&ef_id=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE:G:s&s_kwcid=AL!3085!3!447025602704!e!!g!!adobe!636853869!31669464044&gclid=CjwKCAjwtcCVBhA0EiwAT1fY74TX1e_0hDiKnJ73yDTW4ZaNo6t-v0_kOgK5KKx6GKw_y6h8H2G0ABoCthcQAvD_BwE" target="_blank">Offical Adobe.</a></p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <!-- END Users -->

                                            <!-- Preview -->
                                            <div class="tab-pane fade" id="search-preview" role="tabpanel">
                                                <div style="background-color:#F0F2F5;" class="content">
                                                    <a class="block-rounded" >
                                                        <img style= ""  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" alt="">
                                                    </a>
                                                    <br>
                                                </div>
                                                <div style="background-color:#F0F2F5;" class="well text-center">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <a href="#"><img style= "height: 95px; width: 150px;"  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" alt="" class="img-fluid"></a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#"><img style= "height: 95px; width: 150px;"  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" class="img-fluid"></a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#"><img style= "height: 95px; width: 150px;"  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" alt="" class="img-fluid"></a>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <a href="#"><img style= "height: 95px; width: 150px;"  class="img-responsive center-block d-block mx-auto"src="assets/media/photos/11.png" class="img-fluid"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Projects -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    
                    <!-- END Results -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-10">
                <div class="content py-20 font-size-sm clearfix">
                    <div class="float-right">
                    Dibuat dengan <i class="fa fa-heart text-pulse"></i>  oleh Tim KP untuk <a class="font-w600" href="https://www.its.ac.id/" target="_blank">ITS</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="index" target="_blank">Unduh.its.ac.id</a> &copy; <span class="js-year-copy">2022</span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>
    </body>
</html>