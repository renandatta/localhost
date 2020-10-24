<?php
    $dirs = array_filter(glob('*'), 'is_dir');
    $hostname = $_SERVER['SERVER_ADDR'];
    if($hostname == "::1"){
        $hostname = "localhost";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="" />
        <meta charset="utf-8" />
        <title>Lemon Dashboard</title>
        <meta name="description" content="Updates and statistics" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

        <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/custom/leaflet/leaflet.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />

        <link href="assets/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />

        <style>
            body.bg-dark {
                background-color: #1C1B21!important;
                color: #EBEBEB!important;
            }
            .aside.bg-dark, .header-mobile.bg-dark {
                background-color: #292930!important;
            }
            .card-dark {
                background-color: #26262D!important;
                border-radius: 5px;
            }
            .border-radius-2 {
                border-radius: 2px;
            }
            input.bg-dark {
                background-color: #292930!important;
                border: 0;
                color: #EBEBEB!important;
                height: calc(2rem + 1.3rem + 2px);
            }
            .card-dark .card-body {
                min-height: 250px;
            }
            .border-left-bold {
                border-left: 2.5px solid #eeff41;
            }
            .border-left-bold-dark {
                border-left: 3px solid #2A2A31;
            }
            a{
                text-decoration: none!important;
                color: #EBEBEB!important;
            }
            .img-project {
                position: absolute;
                bottom: 20px;
                right: 20px;
                height:75px;
                width:auto;
            }
            @media (max-width: 991.98px) {
                .container, .container-fluid, .container-sm, .container-md, .container-lg, .container-xl, .container-xxl {
                    padding: 30px 15px!important;
                }
            }
        </style>

        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    </head>

    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading bg-dark">
        <div id="kt_header_mobile" class="header-mobile header-mobile-fixed bg-dark">
            <a href="index.html">
                <img alt="Logo" src="assets/default.png" class="logo-default max-h-30px" />
            </a>

            <div class="d-flex align-items-center">
                <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                    <span></span>
                </button>

            </div>
        </div>

        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-row flex-column-fluid page">
                <div class="aside aside-left d-flex flex-column bg-dark" id="kt_aside">
                    <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-7">
                        <ul class="nav flex-column my-auto">
                            <li class="nav-item mb-5" data-toggle="tooltip" data-placement="right" data-container="body" data-boundary="window" title="All Project">
                                <a href="#" class="nav-link btn btn-icon btn-clean btn-icon-white btn-lg">
                                    <i class="flaticon-menu-button icon-lg"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="container-fluid px-md-30">
                            <div class="row mb-10">
                                <div class="col-md-6 mb-5">
                                    <h1>All Project</h1>
                                    <h7><?php echo count($dirs) ?> projects</h7>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control bg-dark border-radius-2" placeholder="Search ..." id="search_project" autofocus>
                                </div>
                            </div>
                            <div class="row">
                                <?php
                                    foreach($dirs as $value){
                                        if($value != "assets"){

                                            if (is_dir($value.'/public') ) $url = $value.'/public';
                                            else $url = $value;

                                            if (file_exists($value.'/favicon.png')) $icon = $value.'/favicon.png';
                                            elseif (file_exists($value.'/public/favicon.png')) $icon = $value.'/public/favicon.png';
                                            else $icon = "assets/default.png";
                                            
                                ?>
                                    <div class="col-md-3 col-6 item-project" id="<?php echo $value; ?>">
                                        <a href="<?php echo $url; ?>">
                                            <div class="card card-dark card-custom shadow-none mb-7">
                                                <div class="card-body p-0 border-left-bold-dark">
                                                    <h6 class="px-5 my-5 border-left-bold"><?php echo ucwords(str_replace(['_','-']," ",$value)); ?></h6>
                                                    <img class="img-project" src="<?php echo $icon ?>" />
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--begin::Scrolltop-->
        <div id="kt_scrolltop" class="scrolltop">
            <span class="svg-icon">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                        <path
                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                            fill="#000000"
                            fill-rule="nonzero"
                        />
                    </g>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </div>
        <!--end::Scrolltop-->

        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
                breakpoints: {
                    sm: 576,
                    md: 768,
                    lg: 992,
                    xl: 1200,
                    xxl: 1200,
                },
                colors: {
                    theme: {
                        base: {
                            white: "#ffffff",
                            primary: "#8950FC",
                            secondary: "#E5EAEE",
                            success: "#1BC5BD",
                            info: "#8950FC",
                            warning: "#FFA800",
                            danger: "#F64E60",
                            light: "#F3F6F9",
                            dark: "#212121",
                        },
                        light: {
                            white: "#ffffff",
                            primary: "#E1E9FF",
                            secondary: "#ECF0F3",
                            success: "#C9F7F5",
                            info: "#EEE5FF",
                            warning: "#FFF4DE",
                            danger: "#FFE2E5",
                            light: "#F3F6F9",
                            dark: "#D6D6E0",
                        },
                        inverse: {
                            white: "#ffffff",
                            primary: "#ffffff",
                            secondary: "#212121",
                            success: "#ffffff",
                            info: "#ffffff",
                            warning: "#ffffff",
                            danger: "#ffffff",
                            light: "#464E5F",
                            dark: "#ffffff",
                        },
                    },
                    gray: {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#ECF0F3",
                        "gray-300": "#E5EAEE",
                        "gray-400": "#D6D6E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#80808F",
                        "gray-700": "#464E5F",
                        "gray-800": "#1B283F",
                        "gray-900": "#212121",
                    },
                },
                "font-family": "Poppins",
            };
        </script>
        <script src="assets/plugins/global/plugins.bundle.js?v=7.0.6"></script>
        <script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
        <script src="assets/js/scripts.bundle.js?v=7.0.6"></script>

        <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>
        <script src="assets/plugins/custom/leaflet/leaflet.bundle.js?v=7.0.6"></script>

        <script>
            let listItem = [];
            <?php
                foreach($dirs as $value){
                    if($value != "assets"){
            ?>
                listItem.push("<?php echo $value; ?>");
            <?php
                    }
                }
            ?>

            $('#search_project').keyup(function(){
                $('.item-project').show();
                if($('#search_project').val() != ""){
                    let search = $('#search_project').val().toLowerCase();
                    $('.item-project').hide();
                    
                    $.each(listItem,function(i, value){
                        let project_name = clean_name(value);
                        if (project_name.toLowerCase().indexOf(search) >= 0){
                            $('#'+value).show();
                        }
                    });
                }
            });

            function clean_name(nStr) {
                if (nStr !== '') nStr = nStr.replace(/\_/g,' ');
                return nStr;
            }

        </script>

    </body>
</html>
