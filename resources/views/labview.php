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
                        <div class="block-content block-content-full clearfix">
                            <div class="float-left">
                                <img style="height: 45px; width:45px;" class="img-avatar" src="assets/media/avatars/avatar5.jpg" alt="">
                            </div>
                            <div class="float-left mt-10">
                                <div class="font-w600 mb-5 ml-10">Juwita Kartika Rani</div>
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
                            <a href="index">Produk Lisensi </a>
                            <i class="fa fa-angle-right "></i>
                            <a > LabView</a>
                    </div>
                    <!-- Results -->
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="block">
                                <div class="block-content py-5">
                                        <a class="block-rounded" >
                                            <img style= "width: 194px; height: 191px;"  class="img-responsive center-block d-block mx-auto mt-15 mb-15"src="assets/media/photos/labvuewww-removebg-preview.png" alt="">
                                        </a>
                                        <div class="ml-20">
                                            <div class="border-b">
                                                <p class="font-size-lg font-w700  mb-0">
                                                    LabVIEW
                                                </p>
                                                <p class="font-size-sm  font-w600 text-op  mb-0">
                                                NI
                                                </p>
                                            </div>
                                            <br>
                                            <div class="ml-15 mb-20">
                                                <button style="" type="button" class="btn btn-success shadow min-width-150 ">
                                                    <i class="fa fa-globe mr-5"></i>Visit Website
                                                </button>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="block">
                                <div class="block-content">
                                    <div class="block">
                                        <ul style="border-width: 2px !important; border-color: #4EB5BA !important;" class="nav nav-pills nav-justified border-b" data-toggle="tabs" role="tablist">
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
                                                            <a class="font-size-md  font-w700">LabVIEW</a>
                                                        </h4>
                                                        <p class="font-sm text-muted">
                                                            LabVIEW menawarkan pendekatan pemrograman grafis yang membantu Anda memvisualisasikan setiap aspek aplikasi Anda, termasuk konfigurasi perangkat keras, data pengukuran, dan debugging. Visualisasi ini memudahkan untuk mengintegrasikan perangkat keras pengukuran dari vendor mana pun, mewakili logika kompleks pada diagram, mengembangkan algoritme analisis data, dan merancang antarmuka pengguna rekayasa kustom. Dengan perangkat keras LabVIEW dan NI DAQ, Anda dapat membuat solusi pengukuran khusus untuk memvisualisasikan dan menganalisis sinyal dunia nyata untuk membuat keputusan berdasarkan data. 
                                                        </p>
                                                        <p class="font-sm text-muted">
                                                            Menggunakan LabVIEW dan NI atau perangkat keras pihak ketiga, Anda dapat mengotomatiskan validasi produk Anda untuk memenuhi persyaratan kinerja dan waktu-ke-pasar yang menantang. Bekerja dengan LabVIEW, Anda dapat membuat aplikasi pengujian fleksibel yang mengontrol beberapa instrumen dan merancang antarmuka pengguna untuk mengoptimalkan hasil pengujian manufaktur dan biaya operasional. Anda dapat membuat peralatan industri dan mesin pintar lebih cepat dengan LabVIEW.
                                                        </p>
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
                                                        <i class="fa fa-file-pdf-o" style="color:red"></i>
                                                            <div style="display:inline-block;" class="text">
                                                            <p> Pdf</p>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-12 border-b">
                                                        <h4 class="h5 mb-5">
                                                            <a class="font-size-md  font-w700">File Installer</a>
                                                        </h4>
                                                        <table class="table table-borderless table-hover table-vcenter">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th>Name</th>
                                                                    <th class="d-none d-sm-table-cell">Tanggal Liris</th>
                                                                    <th class="text-center" style="width: 80px; ">Download</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="font-w600">
                                                                        <a href="javascript:void(0)">Windows</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>   
                                                                    <td class="text-center">
                                                                    </td>
                                                                </tr>
                                                                    <td class="font-w600">
                                                                        <a>LabVIEW 2021</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        Agustus 2021
                                                                    </td>   
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                                <i class="fa fa-download"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tr>
                                                                    <td class="font-w600">
                                                                        <a >LabVIEW 2020</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        Mei 2020
                                                                    </td>   
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                                <i class="fa fa-download"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tr>
                                                                    <td class="font-w600">
                                                                        <a>LabVIEW 2019</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        Mei 2019
                                                                    </td>   
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                                <i class="fa fa-download"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-w600">
                                                                        <a href="javascript:void(0)">Mac</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>   
                                                                    <td class="text-center">
                                                                    </td>
                                                                </tr>
                                                                    <td class="font-w600">
                                                                        <a>LabVIEW 2021</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        Agustus 2021
                                                                    </td>   
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                                <i class="fa fa-download"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tr>
                                                                    <td class="font-w600">
                                                                        <a >LabVIEW 2020</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        Mei 2020
                                                                    </td>   
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                                <i class="fa fa-download"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tr>
                                                                    <td class="font-w600">
                                                                        <a>LabVIEW 2019</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        Mei 2019
                                                                    </td>   
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                                <i class="fa fa-download"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="font-w600">
                                                                        <a href="javascript:void(0)">Linux</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                    </td>   
                                                                    <td class="text-center">
                                                                    </td>
                                                                </tr>
                                                                    <td class="font-w600">
                                                                        <a>LabVIEW 2021</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        Agustus 2021
                                                                    </td>   
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                                <i class="fa fa-download"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tr>
                                                                    <td class="font-w600">
                                                                        <a >LabVIEW 2020</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        Mei 2020
                                                                    </td>   
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                                <i class="fa fa-download"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                </tr>
                                                                    <td class="font-w600">
                                                                        <a>LabVIEW 2019</a>
                                                                    </td>
                                                                    <td class="d-none d-sm-table-cell">
                                                                        Mei 2019
                                                                    </td>   
                                                                    <td class="text-center">
                                                                        <div class="btn-group">
                                                                            <button style="color:#3F9CE8" type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Download">
                                                                                <i class="fa fa-download"></i>
                                                                            </button>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END File Download -->

                                            <!-- Spesifikasi -->
                                            <div class="tab-pane fade" id="search-spesifikasi" role="tabpanel">
                                                <div class="row items-push">
                                                    <div class="col-lg-12 border-b">
                                                        <h4 class="h5 mb-5">
                                                            <a class="font-size-md  font-w700">Fitur</a>
                                                        </h4>
                                                        <ul class="font-sm text-muted">
                                                            <li>Meningkatkan Fleksibilitas Kode Menggunakan Antarmuka LabVIEW</li>
                                                            <li>Penyempurnaan Layanan Web LabVIEW</li>
                                                            <li>Peningkatan Pembuat Aplikasi</li>
                                                            <li>Peningkatan Lingkungan</li>
                                                            <li>Penyempurnaan pada Wisaya Impor Pustaka Bersama</li>
                                                            <li>Peningkatan Diagram Blok</li>
                                                            <li>VI dan Fungsi Baru dan yang Diubah</li>
                                                            <li>Properti, Metode, dan Peristiwa Baru dan yang Diubah</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-12 border-b">
                                                        <h4 class="h5 mb-5">
                                                            <a class="font-size-md  font-w700">Persyaratan Sistem</a>
                                                        </h4>
                                                        <ul class="font-sm text-muted">
                                                            <li>Processor Pentium 4M (or equivalent) or later (32-bit)
                                                            , Pentium 4 G1 (or equivalent) or later (64-bit)</li>
                                                            <li>RAM 1 GB</li>
                                                            <li>Screen Resolution 	1024 x 768 pixels</li>
                                                            <li>Operating System Windows 10, Windows Server 2016</li>
                                                            <li>Disk Space 5 GB</li>
                                                            <li> Color Palette LabVIEW dan LabVIEW Help berisi grafik warna 16-bit. LabVIEW membutuhkan pengaturan palet warna minimal 16-bit warna.</li>
                                                            <li>Adobe Reader harus menginstal Adobe Reader 7.0 atau yang lebih baru untuk mencari versi PDF dari semua manual LabVIEW.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END Spesifikasi -->
                                            
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