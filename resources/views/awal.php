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

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/slick/slick.css">
        <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.css">

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
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
                <!-- Side Header -->
                
                <!-- END Side Header -->

                <!-- Side Content -->
                <!-- END Side Content -->
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar" style >
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <div class="float-left mr-5 mb-5">
                                    <img style="height: 48px; width: 45px;" class="img-avatar" src="assets/media/photos/logo-its-biru-transparan.png" alt=""> 
                                </div>
                                <div class="content-header-item">
                                    <a class=" font-w700" href="index">
                                        <span style= "font-size: 200%; line-height: 125%;" class=" text-dual-primary mr-10">UNDUH</span>
                                    </a>
                                    <a class="font-w300" href="index">
                                        <p style="line-height: 0%;" class="font-size-sm mt-5 text-dual-primary-dark">Software Lisensi ITS</p>
                                    </a>
                                </div>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a class="active" href="be_pages_dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Page Kits</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Dashboards</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_dashboard2.html"><span class="sidebar-mini-hide">Dashboard 2</span></a>
                                            </li>
                                            <li>
                                                <a href="be_pages_dashboard3.html"><span class="sidebar-mini-hide">Dashboard 3</span></a>
                                            </li>
                                            <li>
                                                <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Dashboard 4</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Hosting</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_hosting_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_hosting_emails.html">Emails</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_hosting_account.html">Account</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_hosting_support.html">Support</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Real Estate</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_real_estate_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_real_estate_listing.html">Listing</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_real_estate_listing_new.html">Add New Listing</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Crypto</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_crypto_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_crypto_buy_sell.html">Buy/Sell</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_crypto_wallets.html">Wallets</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_crypto_settings.html">Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Commerce</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_ecom_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_orders.html">Orders</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_order.html">Order</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_products.html">Products</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_product_edit.html">Product Edit</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_customer.html">Customer</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Learning</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_elearning_courses.html">Courses</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_elearning_course.html">Course</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_elearning_lesson.html">Lesson</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Forum</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_forum_categories.html">Categories</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_forum_topics.html">Topics</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_forum_discussion.html">Discussion</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Alternative Dashboards</span></a>
                                        <ul>
                                            <li>
                                                <a href="db_classic.html"><span class="sidebar-mini-hide">Classic</span></a>
                                            </li>
                                            <li>
                                                <a href="db_clean.html"><span class="sidebar-mini-hide">Clean</span></a>
                                            </li>
                                            <li>
                                                <a href="db_social.html"><span class="sidebar-mini-hide">Social</span></a>
                                            </li>
                                            <li>
                                                <a href="db_corporate.html"><span class="sidebar-mini-hide">Corporate</span></a>
                                            </li>
                                            <li>
                                                <a href="db_minimal.html"><span class="sidebar-mini-hide">Minimal</span></a>
                                            </li>
                                            <li>
                                                <a href="db_pop.html"><span class="sidebar-mini-hide">Pop</span></a>
                                            </li>
                                            <li>
                                                <a href="db_dark.html"><span class="sidebar-mini-hide">Dark</span></a>
                                            </li>
                                            <li>
                                                <a href="db_medical.html"><span class="sidebar-mini-hide">Medical</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Boxed Backend</span></a>
                                        <ul>
                                            <li>
                                                <a href="bd_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="bd_search.html">Search</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Blocks</span></a>
                                <ul>
                                    <li>
                                        <a href="be_blocks.html">Styles</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_draggable.html">Draggable</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_api.html">API</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-moustache"></i><span class="sidebar-mini-hide">Widgets</span></a>
                                <ul>
                                    <li>
                                        <a href="be_widgets_tiles.html">Tiles</a>
                                    </li>
                                    <li>
                                        <a href="be_widgets_users.html">Users</a>
                                    </li>
                                    <li>
                                        <a href="be_widgets_stats.html">Statistics</a>
                                    </li>
                                    <li>
                                        <a href="be_widgets_media.html">Media</a>
                                    </li>
                                    <li>
                                        <a href="be_widgets_blog.html">Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Elements</span></a>
                                <ul>
                                    <li>
                                        <a href="be_ui_grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_icons.html">Icons</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_activity.html">Activity</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_navigation.html">Navigation</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_tabs.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_modals_tooltips.html">Modals &amp; Tooltips</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_images.html">Images</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_animations.html">Animations</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_ribbons.html">Ribbons</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_timeline.html">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_accordion.html">Accordion</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_color_themes.html">Color Themes</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Tables</span></a>
                                <ul>
                                    <li>
                                        <a href="be_tables_styles.html">Styles</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_responsive.html">Responsive</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_helpers.html">Helpers</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_datatables.html">DataTables</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
                                <ul>
                                    <li>
                                        <a href="be_forms_elements_bootstrap.html">Bootstrap Elements</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_elements_material.html">Material Elements</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_css_inputs.html">CSS Inputs</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_plugins.html">Plugins</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_editors.html">Editors</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_validation.html">Validation</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_wizard.html">Wizard</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_premade.html">Pre-made</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Build</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_default.html">Default</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_flipped.html">Flipped</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_native_scrolling.html">Native Scrolling</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                                        <ul>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                                                <ul>
                                                    <li>
                                                        <a href="be_layout_header_modern.html">Modern</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_classic.html">Classic</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_classic_inverse.html">Classic Inverse</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_glass.html">Glass</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_glass_inverse.html">Glass Inverse</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                                                <ul>
                                                    <li>
                                                        <a href="be_layout_header_fixed_modern.html">Modern</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_classic.html">Classic</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_classic_inverse.html">Classic Inverse</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_glass.html">Glass</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_glass_inverse.html">Glass Inverse</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_sidebar_inverse.html">Inverse</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_sidebar_hidden.html">Hidden</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_sidebar_mini.html">Mini</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_side_overlay_visible.html">Visible</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_side_overlay_hoverable.html">Hoverable</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_side_overlay_no_page_overlay.html">No Page Overlay</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_content_boxed.html">Boxed</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_content_narrow.html">Narrow</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_content_full_width.html">Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_hero_color.html">Color</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_hero_bubbles.html">Bubbles</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_hero_image.html">Image</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_hero_video.html">Video</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="be_layout_api.html">API</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">Components</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Main Menu</span></a>
                                        <ul>
                                            <li>
                                                <a href="#">Link 1-1</a>
                                            </li>
                                            <li>
                                                <a href="#">Link 1-2</a>
                                            </li>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Link 2-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Link 2-2</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Link 3-1</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Link 3-2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Chat</a>
                                        <ul>
                                            <li>
                                                <a href="be_comp_chat_multiple.html">Multiple</a>
                                            </li>
                                            <li>
                                                <a href="be_comp_chat_multiple_alt.html">Multiple Alt</a>
                                            </li>
                                            <li>
                                                <a href="be_comp_chat_single.html">Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="be_comp_charts.html">Charts</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_nestable.html">Nestable</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_gallery.html">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_sliders.html">Sliders</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_scrolling.html">Scrolling</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_rating.html">Rating</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_filtering.html">Filtering</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_appear.html">Appear</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_countto.html">CountTo</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_calendar.html">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_image_cropper.html">Image Cropper</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_maps_google.html">Google Maps</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_maps_vector.html">Vector Maps</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-globe-alt"></i><span class="sidebar-mini-hide">Generic</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_generic_blank.html">Blank</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blank_block.html">Blank (Block)</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blank_breadcrumb.html">Blank (Breadcrumb)</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_scrumboard.html">Scrum Board</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_search.html">Search</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile_edit.html">Profile Edit</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_story.html">Story</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_project_list.html">Project List</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_project.html">Project</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_upgrade_plan.html">Upgrade Plan</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_team.html">Team</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_contact.html">Contact</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_todo.html">Todo</a>
                                    </li>
                                    <li>
                                        <a href="op_coming_soon.html">Coming Soon</a>
                                    </li>
                                    <li>
                                        <a href="op_maintenance.html">Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="op_status.html">Status</a>
                                    </li>
                                    <li>
                                        <a href="op_installation.html">Installation</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-lock"></i><span class="sidebar-mini-hide">Authentication</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_auth_all.html">All</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signin.html">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signin2.html">Sign In 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signin3.html">Sign In 3</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signup.html">Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signup2.html">Sign Up 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signup3.html">Sign Up 3</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_lock.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_lock2.html">Lock Screen 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_lock3.html">Lock Screen 3</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_reminder.html">Pass Reminder</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_reminder2.html">Pass Reminder 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_reminder3.html">Pass Reminder 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-flag"></i><span class="sidebar-mini-hide">Error</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_error_all.html">All</a>
                                    </li>
                                    <li>
                                        <a href="op_error_400.html">400</a>
                                    </li>
                                    <li>
                                        <a href="op_error_401.html">401</a>
                                    </li>
                                    <li>
                                        <a href="op_error_403.html">403</a>
                                    </li>
                                    <li>
                                        <a href="op_error_404.html">404</a>
                                    </li>
                                    <li>
                                        <a href="op_error_500.html">500</a>
                                    </li>
                                    <li>
                                        <a href="op_error_503.html">503</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        
                        <!-- END Open Search Section -->

                        <!-- Layout Options (used just for demonstration) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        
                        <!-- END Layout Options -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">J. Smithhhh</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                                <a class="dropdown-item" href="be_pages_generic_profile.html">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                    <i class="si si-note mr-5"></i> Invoices
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications -->
                        
                        <!-- END Notifications -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #1 -->
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-bag fa-3x text-body-bg-dark"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="1500">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-wallet fa-3x text-body-bg-dark"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600">$<span data-toggle="countTo" data-speed="1000" data-to="780">0</span></div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-envelope-open fa-3x text-body-bg-dark"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="15">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Messages</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-link-shadow text-right" href="javascript:void(0)">
                                <div class="block-content block-content-full clearfix">
                                    <div class="float-left mt-10 d-none d-sm-block">
                                        <i class="si si-users fa-3x text-body-bg-dark"></i>
                                    </div>
                                    <div class="font-size-h3 font-w600" data-toggle="countTo" data-speed="1000" data-to="4252">0</div>
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Online</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #1 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #2 -->
                        <div class="col-md-6">
                            <div class="block">
                                <div class="block-header">
                                    <h3 class="block-title">
                                        Sales <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="pull-all">
                                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                        <canvas class="js-chartjs-dashboard-lines"></canvas>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <div class="row items-push">
                                        <div class="col-6 col-sm-4 text-center text-sm-left">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                            <div class="font-size-h4 font-w600">720</div>
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +16%
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 text-center text-sm-left">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                            <div class="font-size-h4 font-w600">160</div>
                                            <div class="font-w600 text-danger">
                                                <i class="fa fa-caret-down"></i> -3%
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 text-center text-sm-left">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Average</div>
                                            <div class="font-size-h4 font-w600">24.3</div>
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +9%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block">
                                <div class="block-header">
                                    <h3 class="block-title">
                                        Earnings <small>This week</small>
                                    </h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="pull-all">
                                        <!-- Lines Chart Container functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
                                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                        <canvas class="js-chartjs-dashboard-lines2"></canvas>
                                    </div>
                                </div>
                                <div class="block-content bg-white">
                                    <div class="row items-push">
                                        <div class="col-6 col-sm-4 text-center text-sm-left">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Month</div>
                                            <div class="font-size-h4 font-w600">$ 6,540</div>
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +4%
                                            </div>
                                        </div>
                                        <div class="col-6 col-sm-4 text-center text-sm-left">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">This Week</div>
                                            <div class="font-size-h4 font-w600">$ 1,525</div>
                                            <div class="font-w600 text-danger">
                                                <i class="fa fa-caret-down"></i> -7%
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 text-center text-sm-left">
                                            <div class="font-size-sm font-w600 text-uppercase text-muted">Balance</div>
                                            <div class="font-size-h4 font-w600">$ 9,352</div>
                                            <div class="font-w600 text-success">
                                                <i class="fa fa-caret-up"></i> +35%
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #2 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #3 -->
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-envelope-open fa-4x text-primary"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">9.25k Subscribers</div>
                                        <div class="text-muted">Your main list is growing!</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                                <i class="fa fa-cog mr-5"></i> Manage list
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-twitter fa-4x text-info"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">+36 followers</div>
                                        <div class="text-muted">You are doing great!</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">
                                                <i class="fa fa-users mr-5"></i> Check them out
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-check fa-4x text-success"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">Business Plan</div>
                                        <div class="text-muted">This is your current active plan</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                                                <i class="fa fa-arrow-up mr-5"></i> Upgrade to VIP
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Row #3 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #4 -->
                        <div class="col-md-6">
                            <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <i class="si si-briefcase fa-2x text-body-bg-dark"></i>
                                    <div class="row py-20">
                                        <div class="col-6 text-right border-r">
                                            <div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
                                                <div class="font-size-h3 font-w600">16</div>
                                                <div class="font-size-sm font-w600 text-uppercase text-muted">Projects</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
                                                <div class="font-size-h3 font-w600">2</div>
                                                <div class="font-size-sm font-w600 text-uppercase text-muted">Active</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="block block-link-shadow overflow-hidden" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="text-right">
                                        <i class="si si-users fa-2x text-body-bg-dark"></i>
                                    </div>
                                    <div class="row py-20">
                                        <div class="col-6 text-right border-r">
                                            <div class="invisible" data-toggle="appear" data-class="animated fadeInLeft">
                                                <div class="font-size-h3 font-w600 text-info">63250</div>
                                                <div class="font-size-sm font-w600 text-uppercase text-muted">Accounts</div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="invisible" data-toggle="appear" data-class="animated fadeInRight">
                                                <div class="font-size-h3 font-w600 text-success">97%</div>
                                                <div class="font-size-sm font-w600 text-uppercase text-muted">Active</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #4 -->
                    </div>
                    <div class="row invisible" data-toggle="appear">
                        <!-- Row #5 -->
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-link-shadow text-center" href="be_pages_generic_inbox.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-success ribbon-left">
                                    <div class="ribbon-box">15</div>
                                    <p class="mt-5">
                                        <i class="si si-envelope-letter fa-3x"></i>
                                    </p>
                                    <p class="font-w600">Inbox</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-link-shadow text-center" href="be_pages_generic_profile.html">
                                <div class="block-content">
                                    <p class="mt-5">
                                        <i class="si si-user fa-3x"></i>
                                    </p>
                                    <p class="font-w600">Profile</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-link-shadow text-center" href="be_pages_forum_categories.html">
                                <div class="block-content ribbon ribbon-bookmark ribbon-primary ribbon-left">
                                    <div class="ribbon-box">3</div>
                                    <p class="mt-5">
                                        <i class="si si-bubbles fa-3x"></i>
                                    </p>
                                    <p class="font-w600">Forum</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-link-shadow text-center" href="be_pages_generic_search.html">
                                <div class="block-content">
                                    <p class="mt-5">
                                        <i class="si si-magnifier fa-3x"></i>
                                    </p>
                                    <p class="font-w600">Search</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-link-shadow text-center" href="be_comp_charts.html">
                                <div class="block-content">
                                    <p class="mt-5">
                                        <i class="si si-bar-chart fa-3x"></i>
                                    </p>
                                    <p class="font-w600">Live Stats</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-xl-2">
                            <a class="block block-link-shadow text-center" href="javascript:void(0)">
                                <div class="block-content">
                                    <p class="mt-5">
                                        <i class="si si-settings fa-3x"></i>
                                    </p>
                                    <p class="font-w600">Settings</p>
                                </div>
                            </a>
                        </div>
                        <!-- END Row #5 -->
                    </div>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-sm clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.3</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!-- Onboarding Modal functionality is initialized in js/pages/be_pages_dashboard.min.js which was auto compiled from _es6/pages/be_pages_dashboard.js -->
        <!-- END Onboarding Modal -->


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

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>
        <script src="assets/js/plugins/slick/slick.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_pages_dashboard.min.js"></script>
    </body>
</html>