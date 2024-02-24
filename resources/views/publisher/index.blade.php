<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Government of Tamil Nadu - Book Procurement</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('publisher/images/favicon.png') }}">

<link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
<link href="{{asset('vendor/swiper/css/swiper-bundle.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css">
<link href="{{asset('vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="{{asset('vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- tagify-css -->
<link href="{{asset('vendor/tagify/dist/tagify.css')}}" rel="stylesheet">

<!-- Style css -->
<link href="{{asset('publisher/css/style.css')}}" rel="stylesheet">


</head>

<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black"
    data-headerbg="color_1">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="text-center">
        <img src="{{ asset('publisher/images/goverment_loader.gif') }}" alt="" width="25%">
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        @include('publisher.navigation')
        <!--**********************************
            Sidebar end
        ***********************************-->



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="any-card">
                                    <div class="c-con">
                                        <h4 class="heading mb-0">Congratulations <strong>Hanu!!</strong><img
                                                src="images/crm/party-popper.png" alt=""></h4>
                                        <span>Best seller of the week</span>
                                        <p class="mt-3">Lorem Ipsum is simply dummy 😎 text of the printing and
                                            typesetting industry.</p>

                                        <a href="#" class="btn btn-primary btn-sm">View Profile</a>
                                    </div>
                                    <img src="images/analytics/developer_male.png" class="harry-img" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary">
                            <div class="card-header border-0">
                                <h4 class="heading mb-0 text-white">Overview Of Sales 😎</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="sales-bx">
                                        <img src="images/analytics/sales.png" alt="">
                                        <h4>$3,651</h4>
                                        <span>Total Sales</span>
                                    </div>
                                    <div class="sales-bx">
                                        <img src="images/analytics/shopping.png" alt="">
                                        <h4>5831</h4>
                                        <span>Total Sales</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-header border-0">
                                <div class="d-flex align-items-center">
                                    <div class="icon-box bg-primary-light">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.3787 1.875H15.625V1.25C15.625 1.08424 15.5592 0.925268 15.4419 0.808058C15.3247 0.690848 15.1658 0.625 15 0.625C14.8342 0.625 14.6753 0.690848 14.5581 0.808058C14.4408 0.925268 14.375 1.08424 14.375 1.25V1.875H10.625V1.25C10.625 1.08424 10.5592 0.925268 10.4419 0.808058C10.3247 0.690848 10.1658 0.625 10 0.625C9.83424 0.625 9.67527 0.690848 9.55806 0.808058C9.44085 0.925268 9.375 1.08424 9.375 1.25V1.875H5.625V1.25C5.625 1.08424 5.55915 0.925268 5.44194 0.808058C5.32473 0.690848 5.16576 0.625 5 0.625C4.83424 0.625 4.67527 0.690848 4.55806 0.808058C4.44085 0.925268 4.375 1.08424 4.375 1.25V1.875H3.62125C2.99266 1.87599 2.3901 2.12614 1.94562 2.57062C1.50114 3.0151 1.25099 3.61766 1.25 4.24625V17.0037C1.25099 17.6323 1.50114 18.2349 1.94562 18.6794C2.3901 19.1239 2.99266 19.374 3.62125 19.375H16.3787C17.0073 19.374 17.6099 19.1239 18.0544 18.6794C18.4989 18.2349 18.749 17.6323 18.75 17.0037V4.24625C18.749 3.61766 18.4989 3.0151 18.0544 2.57062C17.6099 2.12614 17.0073 1.87599 16.3787 1.875ZM17.5 17.0037C17.499 17.3008 17.3806 17.5854 17.1705 17.7955C16.9604 18.0056 16.6758 18.124 16.3787 18.125H3.62125C3.32418 18.124 3.03956 18.0056 2.8295 17.7955C2.61944 17.5854 2.50099 17.3008 2.5 17.0037V4.24625C2.50099 3.94918 2.61944 3.66456 2.8295 3.4545C3.03956 3.24444 3.32418 3.12599 3.62125 3.125H4.375V3.75C4.375 3.91576 4.44085 4.07473 4.55806 4.19194C4.67527 4.30915 4.83424 4.375 5 4.375C5.16576 4.375 5.32473 4.30915 5.44194 4.19194C5.55915 4.07473 5.625 3.91576 5.625 3.75V3.125H9.375V3.75C9.375 3.91576 9.44085 4.07473 9.55806 4.19194C9.67527 4.30915 9.83424 4.375 10 4.375C10.1658 4.375 10.3247 4.30915 10.4419 4.19194C10.5592 4.07473 10.625 3.91576 10.625 3.75V3.125H14.375V3.75C14.375 3.91576 14.4408 4.07473 14.5581 4.19194C14.6753 4.30915 14.8342 4.375 15 4.375C15.1658 4.375 15.3247 4.30915 15.4419 4.19194C15.5592 4.07473 15.625 3.91576 15.625 3.75V3.125H16.3787C16.6758 3.12599 16.9604 3.24444 17.1705 3.4545C17.3806 3.66456 17.499 3.94918 17.5 4.24625V17.0037Z"
                                                fill="var(--primary)"></path>
                                            <path
                                                d="M7.68311 7.05812L6.24999 8.49125L5.44186 7.68312C5.38421 7.62343 5.31524 7.57581 5.23899 7.54306C5.16274 7.5103 5.08073 7.49306 4.99774 7.49234C4.91475 7.49162 4.83245 7.50743 4.75564 7.53886C4.67883 7.57028 4.60905 7.61669 4.55037 7.67537C4.49168 7.73406 4.44528 7.80384 4.41385 7.88065C4.38243 7.95746 4.36661 8.03976 4.36733 8.12275C4.36805 8.20573 4.3853 8.28775 4.41805 8.364C4.45081 8.44025 4.49842 8.50922 4.55811 8.56687L5.80811 9.81687C5.92532 9.93404 6.08426 9.99986 6.24999 9.99986C6.41572 9.99986 6.57466 9.93404 6.69186 9.81687L8.56686 7.94187C8.68071 7.82399 8.74371 7.66612 8.74229 7.50224C8.74086 7.33837 8.67513 7.18161 8.55925 7.06573C8.44337 6.94985 8.28661 6.88412 8.12274 6.8827C7.95887 6.88127 7.80099 6.94427 7.68311 7.05812Z"
                                                fill="var(--primary)"></path>
                                            <path
                                                d="M15 8.125H10.625C10.4592 8.125 10.3003 8.19085 10.1831 8.30806C10.0658 8.42527 10 8.58424 10 8.75C10 8.91576 10.0658 9.07473 10.1831 9.19194C10.3003 9.30915 10.4592 9.375 10.625 9.375H15C15.1658 9.375 15.3247 9.30915 15.4419 9.19194C15.5592 9.07473 15.625 8.91576 15.625 8.75C15.625 8.58424 15.5592 8.42527 15.4419 8.30806C15.3247 8.19085 15.1658 8.125 15 8.125Z"
                                                fill="var(--primary)"></path>
                                            <path
                                                d="M7.68311 12.6831L6.24999 14.1162L5.44186 13.3081C5.38421 13.2484 5.31524 13.2008 5.23899 13.1681C5.16274 13.1353 5.08073 13.1181 4.99774 13.1173C4.91475 13.1166 4.83245 13.1324 4.75564 13.1639C4.67883 13.1953 4.60905 13.2417 4.55037 13.3004C4.49168 13.3591 4.44528 13.4288 4.41385 13.5056C4.38243 13.5825 4.36661 13.6648 4.36733 13.7477C4.36805 13.8307 4.3853 13.9127 4.41805 13.989C4.45081 14.0653 4.49842 14.1342 4.55811 14.1919L5.80811 15.4419C5.92532 15.559 6.08426 15.6249 6.24999 15.6249C6.41572 15.6249 6.57466 15.559 6.69186 15.4419L8.56686 13.5669C8.68071 13.449 8.74371 13.2911 8.74229 13.1272C8.74086 12.9634 8.67513 12.8066 8.55925 12.6907C8.44337 12.5749 8.28661 12.5091 8.12274 12.5077C7.95887 12.5063 7.80099 12.5693 7.68311 12.6831Z"
                                                fill="var(--primary)"></path>
                                            <path
                                                d="M15 13.75H10.625C10.4592 13.75 10.3003 13.8158 10.1831 13.9331C10.0658 14.0503 10 14.2092 10 14.375C10 14.5408 10.0658 14.6997 10.1831 14.8169C10.3003 14.9342 10.4592 15 10.625 15H15C15.1658 15 15.3247 14.9342 15.4419 14.8169C15.5592 14.6997 15.625 14.5408 15.625 14.375C15.625 14.2092 15.5592 14.0503 15.4419 13.9331C15.3247 13.8158 15.1658 13.75 15 13.75Z"
                                                fill="var(--primary)"></path>
                                        </svg>
                                    </div>
                                    <div class="ms-2">
                                        <h6 class="mb-0">Total</h6>
                                        <span>2520</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 custome-tooltip">
                                <div id="SalesChart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card bg-primary-light analytics-card">
                            <div class="card-body mt-4 pb-1">
                                <div class="row align-items-center">
                                    <div class="col-xl-2">
                                        <h3 class="mb-3">Analytics</h3>
                                        <p class="mb-0 text-primary pb-4">Yout statistics for<br> 1 month period.</p>
                                    </div>
                                    <div class="col-xl-10">
                                        <div class="row">
                                            <div class="col-xl-4 col-sm-4 col-6">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-solid fa-basketball text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                <h5>Completed Order List</h5>
                                                                <span>@statistics</span>
                                                                <h3>+23%</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-4 col-6">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-brands fa-facebook-f text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                <h5>Pending Order List</h5>
                                                                <span>@fb</span>
                                                                <h3>-33%</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-sm-4 col-6">
                                                <div class="card ov-card">
                                                    <div class="card-body">
                                                        <div class="ana-box">
                                                            <div class="ic-n-bx">
                                                                <div class="icon-box bg-primary rounded-circle">
                                                                    <i class="fa-brands fa-amazon text-white"></i>
                                                                </div>
                                                            </div>
                                                            <div class="anta-data">
                                                                <h5>Rejected Order List</h5>
                                                                <span>@hemsr</span>
                                                                <h3>-23%</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-xxl-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <h4 class="heading mb-0">Reports Of Earning</h4>
                            </div>
                            <div class="card-body py-0">
                                <div class="row align-items-center">
                                    <div class="col-xl-4 col-sm-4">
                                        <div class="card">
                                            <div class="card-header border-0 p-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-box bg-secondary-light">
                                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z"
                                                                fill="var(--secondary)"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-0">Today</h6>
                                                        <span>$2,256</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 custome-tooltip" style="position: relative;">
                                                <div id="EarningChart" style="min-height: 50px;">
                                                    <div id="apexchartsl0a4fxmo"
                                                        class="apexcharts-canvas apexchartsl0a4fxmo apexcharts-theme-light"
                                                        style="width: 352px; height: 50px;"><svg id="SvgjsSvg2057"
                                                            width="352" height="50" xmlns="http://www.w3.org/2000/svg"
                                                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent;">
                                                            <g id="SvgjsG2059"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(0, 0)">
                                                                <defs id="SvgjsDefs2058">
                                                                    <clipPath id="gridRectMaskl0a4fxmo">
                                                                        <rect id="SvgjsRect2064" width="358" height="52"
                                                                            x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="gridRectMarkerMaskl0a4fxmo">
                                                                        <rect id="SvgjsRect2065" width="356" height="54"
                                                                            x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <line id="SvgjsLine2063" x1="0" y1="0" x2="0" y2="50"
                                                                    stroke="#b6b6b6" stroke-dasharray="3"
                                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                                    height="50" fill="#b1b9c4" filter="none"
                                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                                <g id="SvgjsG2071" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG2072" class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, -4)"></g>
                                                                </g>
                                                                <g id="SvgjsG2084" class="apexcharts-grid">
                                                                    <g id="SvgjsG2085"
                                                                        class="apexcharts-gridlines-horizontal"
                                                                        style="display: none;">
                                                                        <line id="SvgjsLine2087" x1="0" y1="0" x2="352"
                                                                            y2="0" stroke="#eeeeee" stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2088" x1="0"
                                                                            y1="7.142857142857143" x2="352"
                                                                            y2="7.142857142857143" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2089" x1="0"
                                                                            y1="14.285714285714286" x2="352"
                                                                            y2="14.285714285714286" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2090" x1="0"
                                                                            y1="21.42857142857143" x2="352"
                                                                            y2="21.42857142857143" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2091" x1="0"
                                                                            y1="28.571428571428573" x2="352"
                                                                            y2="28.571428571428573" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2092" x1="0"
                                                                            y1="35.714285714285715" x2="352"
                                                                            y2="35.714285714285715" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2093" x1="0"
                                                                            y1="42.85714285714286" x2="352"
                                                                            y2="42.85714285714286" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2094" x1="0"
                                                                            y1="50.00000000000001" x2="352"
                                                                            y2="50.00000000000001" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <g id="SvgjsG2086"
                                                                        class="apexcharts-gridlines-vertical"
                                                                        style="display: none;"></g>
                                                                    <line id="SvgjsLine2096" x1="0" y1="50" x2="352"
                                                                        y2="50" stroke="transparent"
                                                                        stroke-dasharray="0"></line>
                                                                    <line id="SvgjsLine2095" x1="0" y1="1" x2="0"
                                                                        y2="50" stroke="transparent"
                                                                        stroke-dasharray="0"></line>
                                                                </g>
                                                                <g id="SvgjsG2066"
                                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                                    <g id="SvgjsG2067" class="apexcharts-series"
                                                                        seriesName="NetxProfit"
                                                                        data:longestSeries="true" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath2070"
                                                                            d="M 0 35C 13.688888888888886 35 25.42222222222222 43.57142857142857 39.11111111111111 43.57142857142857C 52.8 43.57142857142857 64.53333333333333 24.285714285714285 78.22222222222221 24.285714285714285C 91.9111111111111 24.285714285714285 103.64444444444445 41.42857142857143 117.33333333333333 41.42857142857143C 131.0222222222222 41.42857142857143 142.75555555555553 18.57142857142857 156.44444444444443 18.57142857142857C 170.13333333333333 18.57142857142857 181.86666666666665 32.14285714285714 195.55555555555554 32.14285714285714C 209.24444444444444 32.14285714285714 220.97777777777776 7.857142857142854 234.66666666666666 7.857142857142854C 248.35555555555555 7.857142857142854 260.0888888888889 20.71428571428571 273.77777777777777 20.71428571428571C 287.46666666666664 20.71428571428571 299.2 2.857142857142854 312.88888888888886 2.857142857142854C 326.5777777777778 2.857142857142854 338.3111111111111 32.14285714285714 352 32.14285714285714"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="var(--secondary)" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0" class="apexcharts-line"
                                                                            index="0"
                                                                            clip-path="url(#gridRectMaskl0a4fxmo)"
                                                                            pathTo="M 0 35C 13.688888888888886 35 25.42222222222222 43.57142857142857 39.11111111111111 43.57142857142857C 52.8 43.57142857142857 64.53333333333333 24.285714285714285 78.22222222222221 24.285714285714285C 91.9111111111111 24.285714285714285 103.64444444444445 41.42857142857143 117.33333333333333 41.42857142857143C 131.0222222222222 41.42857142857143 142.75555555555553 18.57142857142857 156.44444444444443 18.57142857142857C 170.13333333333333 18.57142857142857 181.86666666666665 32.14285714285714 195.55555555555554 32.14285714285714C 209.24444444444444 32.14285714285714 220.97777777777776 7.857142857142854 234.66666666666666 7.857142857142854C 248.35555555555555 7.857142857142854 260.0888888888889 20.71428571428571 273.77777777777777 20.71428571428571C 287.46666666666664 20.71428571428571 299.2 2.857142857142854 312.88888888888886 2.857142857142854C 326.5777777777778 2.857142857142854 338.3111111111111 32.14285714285714 352 32.14285714285714"
                                                                            pathFrom="M -1 50L -1 50L 39.11111111111111 50L 78.22222222222221 50L 117.33333333333333 50L 156.44444444444443 50L 195.55555555555554 50L 234.66666666666666 50L 273.77777777777777 50L 312.88888888888886 50L 352 50">
                                                                        </path>
                                                                        <g id="SvgjsG2068"
                                                                            class="apexcharts-series-markers-wrap"
                                                                            data:realIndex="0">
                                                                            <g class="apexcharts-series-markers">
                                                                                <circle id="SvgjsCircle2102" r="0"
                                                                                    cx="0" cy="0"
                                                                                    class="apexcharts-marker wie5ys3ky no-pointer-events"
                                                                                    stroke="#ffffff"
                                                                                    fill="var(--secondary)"
                                                                                    fill-opacity="1" stroke-width="2"
                                                                                    stroke-opacity="0.9"
                                                                                    default-marker-size="0"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG2069" class="apexcharts-datalabels"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <line id="SvgjsLine2097" x1="0" y1="0" x2="352" y2="0"
                                                                    stroke="#b6b6b6" stroke-dasharray="0"
                                                                    stroke-width="1" class="apexcharts-ycrosshairs">
                                                                </line>
                                                                <line id="SvgjsLine2098" x1="0" y1="0" x2="352" y2="0"
                                                                    stroke-dasharray="0" stroke-width="0"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG2099" class="apexcharts-yaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG2100" class="apexcharts-xaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG2101" class="apexcharts-point-annotations">
                                                                </g>
                                                            </g>
                                                            <rect id="SvgjsRect2062" width="0" height="0" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fefefe"></rect>
                                                            <g id="SvgjsG2083" class="apexcharts-yaxis" rel="0"
                                                                transform="translate(-18, 0)"></g>
                                                            <g id="SvgjsG2060" class="apexcharts-annotations"></g>
                                                        </svg>
                                                        <div class="apexcharts-legend" style="max-height: 25px;"></div>
                                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                                            <div class="apexcharts-tooltip-title"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            </div>
                                                            <div class="apexcharts-tooltip-series-group"
                                                                style="order: 1;"><span
                                                                    class="apexcharts-tooltip-marker"
                                                                    style="background-color: var(--secondary);"></span>
                                                                <div class="apexcharts-tooltip-text"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                            class="apexcharts-tooltip-text-label"></span><span
                                                                            class="apexcharts-tooltip-text-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                            <div class="apexcharts-yaxistooltip-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 353px; height: 51px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-4 col-sm-4">
                                        <div class="card">
                                            <div class="card-header border-0 p-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-box bg-primary-light">
                                                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z"
                                                                fill="var(--primary)"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-0">Monthly</h6>
                                                        <span>$3,367</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 custome-tooltip" style="position: relative;">
                                                <div id="ProfitChart" style="min-height: 50px;">
                                                    <div id="apexcharts9m47giia"
                                                        class="apexcharts-canvas apexcharts9m47giia apexcharts-theme-light"
                                                        style="width: 352px; height: 50px;"><svg id="SvgjsSvg2104"
                                                            width="352" height="50" xmlns="http://www.w3.org/2000/svg"
                                                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent;">
                                                            <g id="SvgjsG2106"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(0, 0)">
                                                                <defs id="SvgjsDefs2105">
                                                                    <clipPath id="gridRectMask9m47giia">
                                                                        <rect id="SvgjsRect2111" width="358" height="52"
                                                                            x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="gridRectMarkerMask9m47giia">
                                                                        <rect id="SvgjsRect2112" width="356" height="54"
                                                                            x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <line id="SvgjsLine2110" x1="0" y1="0" x2="0" y2="50"
                                                                    stroke="#b6b6b6" stroke-dasharray="3"
                                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                                    height="50" fill="#b1b9c4" filter="none"
                                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                                <g id="SvgjsG2118" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG2119" class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, -4)"></g>
                                                                </g>
                                                                <g id="SvgjsG2131" class="apexcharts-grid">
                                                                    <g id="SvgjsG2132"
                                                                        class="apexcharts-gridlines-horizontal"
                                                                        style="display: none;">
                                                                        <line id="SvgjsLine2134" x1="0" y1="0" x2="352"
                                                                            y2="0" stroke="#eeeeee" stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2135" x1="0"
                                                                            y1="7.142857142857143" x2="352"
                                                                            y2="7.142857142857143" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2136" x1="0"
                                                                            y1="14.285714285714286" x2="352"
                                                                            y2="14.285714285714286" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2137" x1="0"
                                                                            y1="21.42857142857143" x2="352"
                                                                            y2="21.42857142857143" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2138" x1="0"
                                                                            y1="28.571428571428573" x2="352"
                                                                            y2="28.571428571428573" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2139" x1="0"
                                                                            y1="35.714285714285715" x2="352"
                                                                            y2="35.714285714285715" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2140" x1="0"
                                                                            y1="42.85714285714286" x2="352"
                                                                            y2="42.85714285714286" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2141" x1="0"
                                                                            y1="50.00000000000001" x2="352"
                                                                            y2="50.00000000000001" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <g id="SvgjsG2133"
                                                                        class="apexcharts-gridlines-vertical"
                                                                        style="display: none;"></g>
                                                                    <line id="SvgjsLine2143" x1="0" y1="50" x2="352"
                                                                        y2="50" stroke="transparent"
                                                                        stroke-dasharray="0"></line>
                                                                    <line id="SvgjsLine2142" x1="0" y1="1" x2="0"
                                                                        y2="50" stroke="transparent"
                                                                        stroke-dasharray="0"></line>
                                                                </g>
                                                                <g id="SvgjsG2113"
                                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                                    <g id="SvgjsG2114" class="apexcharts-series"
                                                                        seriesName="NetxProfit"
                                                                        data:longestSeries="true" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath2117"
                                                                            d="M 0 40.714285714285715C 13.688888888888886 40.714285714285715 25.42222222222222 44.28571428571429 39.11111111111111 44.28571428571429C 52.8 44.28571428571429 64.53333333333333 36.42857142857143 78.22222222222221 36.42857142857143C 91.9111111111111 36.42857142857143 103.64444444444445 25 117.33333333333333 25C 131.0222222222222 25 142.75555555555553 35.714285714285715 156.44444444444443 35.714285714285715C 170.13333333333333 35.714285714285715 181.86666666666665 27.857142857142858 195.55555555555554 27.857142857142858C 209.24444444444444 27.857142857142858 220.97777777777776 32.142857142857146 234.66666666666666 32.142857142857146C 248.35555555555555 32.142857142857146 260.0888888888889 17.142857142857146 273.77777777777777 17.142857142857146C 287.46666666666664 17.142857142857146 299.2 26.42857142857143 312.88888888888886 26.42857142857143C 326.5777777777778 26.42857142857143 338.3111111111111 7.142857142857146 352 7.142857142857146"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="var(--primary)" stroke-opacity="1"
                                                                            stroke-linecap="butt" stroke-width="2"
                                                                            stroke-dasharray="0" class="apexcharts-line"
                                                                            index="0"
                                                                            clip-path="url(#gridRectMask9m47giia)"
                                                                            pathTo="M 0 40.714285714285715C 13.688888888888886 40.714285714285715 25.42222222222222 44.28571428571429 39.11111111111111 44.28571428571429C 52.8 44.28571428571429 64.53333333333333 36.42857142857143 78.22222222222221 36.42857142857143C 91.9111111111111 36.42857142857143 103.64444444444445 25 117.33333333333333 25C 131.0222222222222 25 142.75555555555553 35.714285714285715 156.44444444444443 35.714285714285715C 170.13333333333333 35.714285714285715 181.86666666666665 27.857142857142858 195.55555555555554 27.857142857142858C 209.24444444444444 27.857142857142858 220.97777777777776 32.142857142857146 234.66666666666666 32.142857142857146C 248.35555555555555 32.142857142857146 260.0888888888889 17.142857142857146 273.77777777777777 17.142857142857146C 287.46666666666664 17.142857142857146 299.2 26.42857142857143 312.88888888888886 26.42857142857143C 326.5777777777778 26.42857142857143 338.3111111111111 7.142857142857146 352 7.142857142857146"
                                                                            pathFrom="M -1 57.142857142857146L -1 57.142857142857146L 39.11111111111111 57.142857142857146L 78.22222222222221 57.142857142857146L 117.33333333333333 57.142857142857146L 156.44444444444443 57.142857142857146L 195.55555555555554 57.142857142857146L 234.66666666666666 57.142857142857146L 273.77777777777777 57.142857142857146L 312.88888888888886 57.142857142857146L 352 57.142857142857146">
                                                                        </path>
                                                                        <g id="SvgjsG2115"
                                                                            class="apexcharts-series-markers-wrap"
                                                                            data:realIndex="0">
                                                                            <g class="apexcharts-series-markers">
                                                                                <circle id="SvgjsCircle2149" r="0"
                                                                                    cx="0" cy="0"
                                                                                    class="apexcharts-marker w317dallji no-pointer-events"
                                                                                    stroke="#ffffff"
                                                                                    fill="var(--primary)"
                                                                                    fill-opacity="1" stroke-width="2"
                                                                                    stroke-opacity="0.9"
                                                                                    default-marker-size="0"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG2116" class="apexcharts-datalabels"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <line id="SvgjsLine2144" x1="0" y1="0" x2="352" y2="0"
                                                                    stroke="#b6b6b6" stroke-dasharray="0"
                                                                    stroke-width="1" class="apexcharts-ycrosshairs">
                                                                </line>
                                                                <line id="SvgjsLine2145" x1="0" y1="0" x2="352" y2="0"
                                                                    stroke-dasharray="0" stroke-width="0"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG2146" class="apexcharts-yaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG2147" class="apexcharts-xaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG2148" class="apexcharts-point-annotations">
                                                                </g>
                                                            </g>
                                                            <rect id="SvgjsRect2109" width="0" height="0" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fefefe"></rect>
                                                            <g id="SvgjsG2130" class="apexcharts-yaxis" rel="0"
                                                                transform="translate(-18, 0)"></g>
                                                            <g id="SvgjsG2107" class="apexcharts-annotations"></g>
                                                        </svg>
                                                        <div class="apexcharts-legend" style="max-height: 25px;"></div>
                                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                                            <div class="apexcharts-tooltip-title"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            </div>
                                                            <div class="apexcharts-tooltip-series-group"
                                                                style="order: 1;"><span
                                                                    class="apexcharts-tooltip-marker"
                                                                    style="background-color: var(--primary);"></span>
                                                                <div class="apexcharts-tooltip-text"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                            class="apexcharts-tooltip-text-label"></span><span
                                                                            class="apexcharts-tooltip-text-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                            <div class="apexcharts-yaxistooltip-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 353px; height: 51px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-sm-4">
                                        <div class="card">
                                            <div class="card-header border-0 p-2">
                                                <div class="d-flex align-items-center">
                                                    <div class="icon-box bg-info-light">
                                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M16.3787 1.875H15.625V1.25C15.625 1.08424 15.5592 0.925268 15.4419 0.808058C15.3247 0.690848 15.1658 0.625 15 0.625C14.8342 0.625 14.6753 0.690848 14.5581 0.808058C14.4408 0.925268 14.375 1.08424 14.375 1.25V1.875H10.625V1.25C10.625 1.08424 10.5592 0.925268 10.4419 0.808058C10.3247 0.690848 10.1658 0.625 10 0.625C9.83424 0.625 9.67527 0.690848 9.55806 0.808058C9.44085 0.925268 9.375 1.08424 9.375 1.25V1.875H5.625V1.25C5.625 1.08424 5.55915 0.925268 5.44194 0.808058C5.32473 0.690848 5.16576 0.625 5 0.625C4.83424 0.625 4.67527 0.690848 4.55806 0.808058C4.44085 0.925268 4.375 1.08424 4.375 1.25V1.875H3.62125C2.99266 1.87599 2.3901 2.12614 1.94562 2.57062C1.50114 3.0151 1.25099 3.61766 1.25 4.24625V17.0037C1.25099 17.6323 1.50114 18.2349 1.94562 18.6794C2.3901 19.1239 2.99266 19.374 3.62125 19.375H16.3787C17.0073 19.374 17.6099 19.1239 18.0544 18.6794C18.4989 18.2349 18.749 17.6323 18.75 17.0037V4.24625C18.749 3.61766 18.4989 3.0151 18.0544 2.57062C17.6099 2.12614 17.0073 1.87599 16.3787 1.875ZM17.5 17.0037C17.499 17.3008 17.3806 17.5854 17.1705 17.7955C16.9604 18.0056 16.6758 18.124 16.3787 18.125H3.62125C3.32418 18.124 3.03956 18.0056 2.8295 17.7955C2.61944 17.5854 2.50099 17.3008 2.5 17.0037V4.24625C2.50099 3.94918 2.61944 3.66456 2.8295 3.4545C3.03956 3.24444 3.32418 3.12599 3.62125 3.125H4.375V3.75C4.375 3.91576 4.44085 4.07473 4.55806 4.19194C4.67527 4.30915 4.83424 4.375 5 4.375C5.16576 4.375 5.32473 4.30915 5.44194 4.19194C5.55915 4.07473 5.625 3.91576 5.625 3.75V3.125H9.375V3.75C9.375 3.91576 9.44085 4.07473 9.55806 4.19194C9.67527 4.30915 9.83424 4.375 10 4.375C10.1658 4.375 10.3247 4.30915 10.4419 4.19194C10.5592 4.07473 10.625 3.91576 10.625 3.75V3.125H14.375V3.75C14.375 3.91576 14.4408 4.07473 14.5581 4.19194C14.6753 4.30915 14.8342 4.375 15 4.375C15.1658 4.375 15.3247 4.30915 15.4419 4.19194C15.5592 4.07473 15.625 3.91576 15.625 3.75V3.125H16.3787C16.6758 3.12599 16.9604 3.24444 17.1705 3.4545C17.3806 3.66456 17.499 3.94918 17.5 4.24625V17.0037Z"
                                                                fill="#58bad7"></path>
                                                            <path
                                                                d="M7.68311 7.05812L6.24999 8.49125L5.44186 7.68312C5.38421 7.62343 5.31524 7.57581 5.23899 7.54306C5.16274 7.5103 5.08073 7.49306 4.99774 7.49234C4.91475 7.49162 4.83245 7.50743 4.75564 7.53886C4.67883 7.57028 4.60905 7.61669 4.55037 7.67537C4.49168 7.73406 4.44528 7.80384 4.41385 7.88065C4.38243 7.95746 4.36661 8.03976 4.36733 8.12275C4.36805 8.20573 4.3853 8.28775 4.41805 8.364C4.45081 8.44025 4.49842 8.50922 4.55811 8.56687L5.80811 9.81687C5.92532 9.93404 6.08426 9.99986 6.24999 9.99986C6.41572 9.99986 6.57466 9.93404 6.69186 9.81687L8.56686 7.94187C8.68071 7.82399 8.74371 7.66612 8.74229 7.50224C8.74086 7.33837 8.67513 7.18161 8.55925 7.06573C8.44337 6.94985 8.28661 6.88412 8.12274 6.8827C7.95887 6.88127 7.80099 6.94427 7.68311 7.05812Z"
                                                                fill="#58bad7"></path>
                                                            <path
                                                                d="M15 8.125H10.625C10.4592 8.125 10.3003 8.19085 10.1831 8.30806C10.0658 8.42527 10 8.58424 10 8.75C10 8.91576 10.0658 9.07473 10.1831 9.19194C10.3003 9.30915 10.4592 9.375 10.625 9.375H15C15.1658 9.375 15.3247 9.30915 15.4419 9.19194C15.5592 9.07473 15.625 8.91576 15.625 8.75C15.625 8.58424 15.5592 8.42527 15.4419 8.30806C15.3247 8.19085 15.1658 8.125 15 8.125Z"
                                                                fill="#58bad7"></path>
                                                            <path
                                                                d="M7.68311 12.6831L6.24999 14.1162L5.44186 13.3081C5.38421 13.2484 5.31524 13.2008 5.23899 13.1681C5.16274 13.1353 5.08073 13.1181 4.99774 13.1173C4.91475 13.1166 4.83245 13.1324 4.75564 13.1639C4.67883 13.1953 4.60905 13.2417 4.55037 13.3004C4.49168 13.3591 4.44528 13.4288 4.41385 13.5056C4.38243 13.5825 4.36661 13.6648 4.36733 13.7477C4.36805 13.8307 4.3853 13.9127 4.41805 13.989C4.45081 14.0653 4.49842 14.1342 4.55811 14.1919L5.80811 15.4419C5.92532 15.559 6.08426 15.6249 6.24999 15.6249C6.41572 15.6249 6.57466 15.559 6.69186 15.4419L8.56686 13.5669C8.68071 13.449 8.74371 13.2911 8.74229 13.1272C8.74086 12.9634 8.67513 12.8066 8.55925 12.6907C8.44337 12.5749 8.28661 12.5091 8.12274 12.5077C7.95887 12.5063 7.80099 12.5693 7.68311 12.6831Z"
                                                                fill="#58bad7"></path>
                                                            <path
                                                                d="M15 13.75H10.625C10.4592 13.75 10.3003 13.8158 10.1831 13.9331C10.0658 14.0503 10 14.2092 10 14.375C10 14.5408 10.0658 14.6997 10.1831 14.8169C10.3003 14.9342 10.4592 15 10.625 15H15C15.1658 15 15.3247 14.9342 15.4419 14.8169C15.5592 14.6997 15.625 14.5408 15.625 14.375C15.625 14.2092 15.5592 14.0503 15.4419 13.9331C15.3247 13.8158 15.1658 13.75 15 13.75Z"
                                                                fill="#58bad7"></path>
                                                        </svg>

                                                    </div>
                                                    <div class="ms-2">
                                                        <h6 class="mb-0">Year</h6>
                                                        <span>$3,567</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body p-0 custome-tooltip" style="position: relative;">
                                                <div id="ExpenseChart" style="min-height: 50px;">
                                                    <div id="apexchartsbcpqok08"
                                                        class="apexcharts-canvas apexchartsbcpqok08 apexcharts-theme-light"
                                                        style="width: 352px; height: 50px;"><svg id="SvgjsSvg2151"
                                                            width="352" height="50" xmlns="http://www.w3.org/2000/svg"
                                                            version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                            style="background: transparent;">
                                                            <g id="SvgjsG2153"
                                                                class="apexcharts-inner apexcharts-graphical"
                                                                transform="translate(0, 0)">
                                                                <defs id="SvgjsDefs2152">
                                                                    <clipPath id="gridRectMaskbcpqok08">
                                                                        <rect id="SvgjsRect2158" width="358" height="52"
                                                                            x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                    <clipPath id="gridRectMarkerMaskbcpqok08">
                                                                        <rect id="SvgjsRect2159" width="356" height="54"
                                                                            x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                            stroke-width="0" stroke="none"
                                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                                    </clipPath>
                                                                </defs>
                                                                <line id="SvgjsLine2157" x1="0" y1="0" x2="0" y2="50"
                                                                    stroke="#b6b6b6" stroke-dasharray="3"
                                                                    class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                                    height="50" fill="#b1b9c4" filter="none"
                                                                    fill-opacity="0.9" stroke-width="1"></line>
                                                                <g id="SvgjsG2165" class="apexcharts-xaxis"
                                                                    transform="translate(0, 0)">
                                                                    <g id="SvgjsG2166" class="apexcharts-xaxis-texts-g"
                                                                        transform="translate(0, -4)"></g>
                                                                </g>
                                                                <g id="SvgjsG2178" class="apexcharts-grid">
                                                                    <g id="SvgjsG2179"
                                                                        class="apexcharts-gridlines-horizontal"
                                                                        style="display: none;">
                                                                        <line id="SvgjsLine2181" x1="0" y1="0" x2="352"
                                                                            y2="0" stroke="#eeeeee" stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2182" x1="0"
                                                                            y1="7.142857142857143" x2="352"
                                                                            y2="7.142857142857143" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2183" x1="0"
                                                                            y1="14.285714285714286" x2="352"
                                                                            y2="14.285714285714286" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2184" x1="0"
                                                                            y1="21.42857142857143" x2="352"
                                                                            y2="21.42857142857143" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2185" x1="0"
                                                                            y1="28.571428571428573" x2="352"
                                                                            y2="28.571428571428573" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2186" x1="0"
                                                                            y1="35.714285714285715" x2="352"
                                                                            y2="35.714285714285715" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2187" x1="0"
                                                                            y1="42.85714285714286" x2="352"
                                                                            y2="42.85714285714286" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                        <line id="SvgjsLine2188" x1="0"
                                                                            y1="50.00000000000001" x2="352"
                                                                            y2="50.00000000000001" stroke="#eeeeee"
                                                                            stroke-dasharray="0"
                                                                            class="apexcharts-gridline"></line>
                                                                    </g>
                                                                    <g id="SvgjsG2180"
                                                                        class="apexcharts-gridlines-vertical"
                                                                        style="display: none;"></g>
                                                                    <line id="SvgjsLine2190" x1="0" y1="50" x2="352"
                                                                        y2="50" stroke="transparent"
                                                                        stroke-dasharray="0"></line>
                                                                    <line id="SvgjsLine2189" x1="0" y1="1" x2="0"
                                                                        y2="50" stroke="transparent"
                                                                        stroke-dasharray="0"></line>
                                                                </g>
                                                                <g id="SvgjsG2160"
                                                                    class="apexcharts-line-series apexcharts-plot-series">
                                                                    <g id="SvgjsG2161" class="apexcharts-series"
                                                                        seriesName="NetxProfit"
                                                                        data:longestSeries="true" rel="1"
                                                                        data:realIndex="0">
                                                                        <path id="SvgjsPath2164"
                                                                            d="M 0 42.85714285714286C 13.688888888888886 42.85714285714286 25.42222222222222 43.57142857142857 39.11111111111111 43.57142857142857C 52.8 43.57142857142857 64.53333333333333 35.714285714285715 78.22222222222221 35.714285714285715C 91.9111111111111 35.714285714285715 103.64444444444445 24.285714285714285 117.33333333333333 24.285714285714285C 131.0222222222222 24.285714285714285 142.75555555555553 34.28571428571429 156.44444444444443 34.28571428571429C 170.13333333333333 34.28571428571429 181.86666666666665 27.142857142857142 195.55555555555554 27.142857142857142C 209.24444444444444 27.142857142857142 220.97777777777776 30.714285714285715 234.66666666666666 30.714285714285715C 248.35555555555555 30.714285714285715 260.0888888888889 17.142857142857146 273.77777777777777 17.142857142857146C 287.46666666666664 17.142857142857146 299.2 27.142857142857142 312.88888888888886 27.142857142857142C 326.5777777777778 27.142857142857142 338.3111111111111 7.142857142857146 352 7.142857142857146"
                                                                            fill="none" fill-opacity="1"
                                                                            stroke="rgba(88,186,215,0.85)"
                                                                            stroke-opacity="1" stroke-linecap="butt"
                                                                            stroke-width="2" stroke-dasharray="0"
                                                                            class="apexcharts-line" index="0"
                                                                            clip-path="url(#gridRectMaskbcpqok08)"
                                                                            pathTo="M 0 42.85714285714286C 13.688888888888886 42.85714285714286 25.42222222222222 43.57142857142857 39.11111111111111 43.57142857142857C 52.8 43.57142857142857 64.53333333333333 35.714285714285715 78.22222222222221 35.714285714285715C 91.9111111111111 35.714285714285715 103.64444444444445 24.285714285714285 117.33333333333333 24.285714285714285C 131.0222222222222 24.285714285714285 142.75555555555553 34.28571428571429 156.44444444444443 34.28571428571429C 170.13333333333333 34.28571428571429 181.86666666666665 27.142857142857142 195.55555555555554 27.142857142857142C 209.24444444444444 27.142857142857142 220.97777777777776 30.714285714285715 234.66666666666666 30.714285714285715C 248.35555555555555 30.714285714285715 260.0888888888889 17.142857142857146 273.77777777777777 17.142857142857146C 287.46666666666664 17.142857142857146 299.2 27.142857142857142 312.88888888888886 27.142857142857142C 326.5777777777778 27.142857142857142 338.3111111111111 7.142857142857146 352 7.142857142857146"
                                                                            pathFrom="M -1 57.142857142857146L -1 57.142857142857146L 39.11111111111111 57.142857142857146L 78.22222222222221 57.142857142857146L 117.33333333333333 57.142857142857146L 156.44444444444443 57.142857142857146L 195.55555555555554 57.142857142857146L 234.66666666666666 57.142857142857146L 273.77777777777777 57.142857142857146L 312.88888888888886 57.142857142857146L 352 57.142857142857146">
                                                                        </path>
                                                                        <g id="SvgjsG2162"
                                                                            class="apexcharts-series-markers-wrap"
                                                                            data:realIndex="0">
                                                                            <g class="apexcharts-series-markers">
                                                                                <circle id="SvgjsCircle2196" r="0"
                                                                                    cx="0" cy="0"
                                                                                    class="apexcharts-marker w02jmiq44 no-pointer-events"
                                                                                    stroke="#ffffff" fill="#58bad7"
                                                                                    fill-opacity="1" stroke-width="2"
                                                                                    stroke-opacity="0.9"
                                                                                    default-marker-size="0"></circle>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG2163" class="apexcharts-datalabels"
                                                                        data:realIndex="0"></g>
                                                                </g>
                                                                <line id="SvgjsLine2191" x1="0" y1="0" x2="352" y2="0"
                                                                    stroke="#b6b6b6" stroke-dasharray="0"
                                                                    stroke-width="1" class="apexcharts-ycrosshairs">
                                                                </line>
                                                                <line id="SvgjsLine2192" x1="0" y1="0" x2="352" y2="0"
                                                                    stroke-dasharray="0" stroke-width="0"
                                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                                <g id="SvgjsG2193" class="apexcharts-yaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG2194" class="apexcharts-xaxis-annotations">
                                                                </g>
                                                                <g id="SvgjsG2195" class="apexcharts-point-annotations">
                                                                </g>
                                                            </g>
                                                            <rect id="SvgjsRect2156" width="0" height="0" x="0" y="0"
                                                                rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fefefe"></rect>
                                                            <g id="SvgjsG2177" class="apexcharts-yaxis" rel="0"
                                                                transform="translate(-18, 0)"></g>
                                                            <g id="SvgjsG2154" class="apexcharts-annotations"></g>
                                                        </svg>
                                                        <div class="apexcharts-legend" style="max-height: 25px;"></div>
                                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                                            <div class="apexcharts-tooltip-title"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            </div>
                                                            <div class="apexcharts-tooltip-series-group"
                                                                style="order: 1;"><span
                                                                    class="apexcharts-tooltip-marker"
                                                                    style="background-color: rgb(88, 186, 215);"></span>
                                                                <div class="apexcharts-tooltip-text"
                                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                    <div class="apexcharts-tooltip-y-group"><span
                                                                            class="apexcharts-tooltip-text-label"></span><span
                                                                            class="apexcharts-tooltip-text-value"></span>
                                                                    </div>
                                                                    <div class="apexcharts-tooltip-z-group"><span
                                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                            <div class="apexcharts-yaxistooltip-text"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="resize-triggers">
                                                    <div class="expand-trigger">
                                                        <div style="width: 353px; height: 51px;"></div>
                                                    </div>
                                                    <div class="contract-trigger"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    {{-- <div class="col-xl-3 ">
                                        <h3>$5,6641</h3>
                                        <p>Lorem Ipsum is simply dummy text</p>
                                    </div>
                                    <div class="col-xl-9 custome-tooltip" style="position: relative;">
                                        <div id="chartBar" class="chartBar1" style="min-height: 265px;">
                                            <div id="apexcharts81ydi6rx"
                                                class="apexcharts-canvas apexcharts81ydi6rx apexcharts-theme-light"
                                                style="width: 850px; height: 250px;"><svg id="SvgjsSvg2197" width="850"
                                                    height="250" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                    xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <g id="SvgjsG2199" class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(22, 30)">
                                                        <defs id="SvgjsDefs2198">
                                                            <clipPath id="gridRectMask81ydi6rx">
                                                                <rect id="SvgjsRect2202" width="842" height="225"
                                                                    x="-12" y="-10" rx="0" ry="0" opacity="1"
                                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMask81ydi6rx">
                                                                <rect id="SvgjsRect2203" width="822" height="209" x="-2"
                                                                    y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0" fill="#fff">
                                                                </rect>
                                                            </clipPath>
                                                        </defs>
                                                        <g id="SvgjsG2269" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG2270" class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)"></g>
                                                        </g>
                                                        <g id="SvgjsG2278" class="apexcharts-grid">
                                                            <g id="SvgjsG2279" class="apexcharts-gridlines-horizontal"
                                                                style="display: none;"></g>
                                                            <g id="SvgjsG2280" class="apexcharts-gridlines-vertical"
                                                                style="display: none;"></g>
                                                            <line id="SvgjsLine2282" x1="0" y1="205" x2="818" y2="205"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                            <line id="SvgjsLine2281" x1="0" y1="1" x2="0" y2="205"
                                                                stroke="transparent" stroke-dasharray="0"></line>
                                                        </g>
                                                        <g id="SvgjsG2204"
                                                            class="apexcharts-bar-series apexcharts-plot-series">
                                                            <g id="SvgjsG2205" class="apexcharts-series" rel="1"
                                                                seriesName="Earning" data:realIndex="0">
                                                                <path id="SvgjsPath2207"
                                                                    d="M 0 205L 0 16.19999999999999Q 0 8.199999999999989 8 8.199999999999989L 40.16666666666667 8.199999999999989Q 48.16666666666667 8.199999999999989 48.16666666666667 16.19999999999999L 48.16666666666667 16.19999999999999L 48.16666666666667 205L 48.16666666666667 205z"
                                                                    fill="var(--primary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 0 205L 0 16.19999999999999Q 0 8.199999999999989 8 8.199999999999989L 40.16666666666667 8.199999999999989Q 48.16666666666667 8.199999999999989 48.16666666666667 16.19999999999999L 48.16666666666667 16.19999999999999L 48.16666666666667 205L 48.16666666666667 205z"
                                                                    pathFrom="M 0 205L 0 205L 48.16666666666667 205L 48.16666666666667 205L 48.16666666666667 205L 48.16666666666667 205L 48.16666666666667 205L 0 205"
                                                                    cy="8.199999999999989" cx="126.33333333333334" j="0"
                                                                    val="96" barHeight="196.8"
                                                                    barWidth="68.16666666666667"></path>
                                                                <path id="SvgjsPath2212"
                                                                    d="M 136.33333333333334 205L 136.33333333333334 90Q 136.33333333333334 82 144.33333333333334 82L 176.5 82Q 184.5 82 184.5 90L 184.5 90L 184.5 205L 184.5 205z"
                                                                    fill="var(--primary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 136.33333333333334 205L 136.33333333333334 90Q 136.33333333333334 82 144.33333333333334 82L 176.5 82Q 184.5 82 184.5 90L 184.5 90L 184.5 205L 184.5 205z"
                                                                    pathFrom="M 136.33333333333334 205L 136.33333333333334 205L 184.5 205L 184.5 205L 184.5 205L 184.5 205L 184.5 205L 136.33333333333334 205"
                                                                    cy="82" cx="262.6666666666667" j="1" val="60"
                                                                    barHeight="123" barWidth="68.16666666666667"></path>
                                                                <path id="SvgjsPath2217"
                                                                    d="M 272.6666666666667 205L 272.6666666666667 28.5Q 272.6666666666667 20.5 280.6666666666667 20.5L 312.83333333333337 20.5Q 320.83333333333337 20.5 320.83333333333337 28.5L 320.83333333333337 28.5L 320.83333333333337 205L 320.83333333333337 205z"
                                                                    fill="var(--primary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 272.6666666666667 205L 272.6666666666667 28.5Q 272.6666666666667 20.5 280.6666666666667 20.5L 312.83333333333337 20.5Q 320.83333333333337 20.5 320.83333333333337 28.5L 320.83333333333337 28.5L 320.83333333333337 205L 320.83333333333337 205z"
                                                                    pathFrom="M 272.6666666666667 205L 272.6666666666667 205L 320.83333333333337 205L 320.83333333333337 205L 320.83333333333337 205L 320.83333333333337 205L 320.83333333333337 205L 272.6666666666667 205"
                                                                    cy="20.5" cx="399" j="2" val="90" barHeight="184.5"
                                                                    barWidth="68.16666666666667"></path>
                                                                <path id="SvgjsPath2222"
                                                                    d="M 409 205L 409 16.19999999999999Q 409 8.199999999999989 417 8.199999999999989L 449.1666666666667 8.199999999999989Q 457.1666666666667 8.199999999999989 457.1666666666667 16.19999999999999L 457.1666666666667 16.19999999999999L 457.1666666666667 205L 457.1666666666667 205z"
                                                                    fill="var(--primary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 409 205L 409 16.19999999999999Q 409 8.199999999999989 417 8.199999999999989L 449.1666666666667 8.199999999999989Q 457.1666666666667 8.199999999999989 457.1666666666667 16.19999999999999L 457.1666666666667 16.19999999999999L 457.1666666666667 205L 457.1666666666667 205z"
                                                                    pathFrom="M 409 205L 409 205L 457.1666666666667 205L 457.1666666666667 205L 457.1666666666667 205L 457.1666666666667 205L 457.1666666666667 205L 409 205"
                                                                    cy="8.199999999999989" cx="535.3333333333334" j="3"
                                                                    val="96" barHeight="196.8"
                                                                    barWidth="68.16666666666667"></path>
                                                                <path id="SvgjsPath2227"
                                                                    d="M 545.3333333333334 205L 545.3333333333334 90Q 545.3333333333334 82 553.3333333333334 82L 585.5 82Q 593.5 82 593.5 90L 593.5 90L 593.5 205L 593.5 205z"
                                                                    fill="var(--primary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 545.3333333333334 205L 545.3333333333334 90Q 545.3333333333334 82 553.3333333333334 82L 585.5 82Q 593.5 82 593.5 90L 593.5 90L 593.5 205L 593.5 205z"
                                                                    pathFrom="M 545.3333333333334 205L 545.3333333333334 205L 593.5 205L 593.5 205L 593.5 205L 593.5 205L 593.5 205L 545.3333333333334 205"
                                                                    cy="82" cx="671.6666666666667" j="4" val="60"
                                                                    barHeight="123" barWidth="68.16666666666667"></path>
                                                                <path id="SvgjsPath2232"
                                                                    d="M 681.6666666666667 205L 681.6666666666667 28.5Q 681.6666666666667 20.5 689.6666666666667 20.5L 721.8333333333334 20.5Q 729.8333333333334 20.5 729.8333333333334 28.5L 729.8333333333334 28.5L 729.8333333333334 205L 729.8333333333334 205z"
                                                                    fill="var(--primary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="0" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 681.6666666666667 205L 681.6666666666667 28.5Q 681.6666666666667 20.5 689.6666666666667 20.5L 721.8333333333334 20.5Q 729.8333333333334 20.5 729.8333333333334 28.5L 729.8333333333334 28.5L 729.8333333333334 205L 729.8333333333334 205z"
                                                                    pathFrom="M 681.6666666666667 205L 681.6666666666667 205L 729.8333333333334 205L 729.8333333333334 205L 729.8333333333334 205L 729.8333333333334 205L 729.8333333333334 205L 681.6666666666667 205"
                                                                    cy="20.5" cx="808.0000000000001" j="5" val="90"
                                                                    barHeight="184.5" barWidth="68.16666666666667">
                                                                </path>
                                                            </g>
                                                            <g id="SvgjsG2237" class="apexcharts-series" rel="2"
                                                                seriesName="Profit" data:realIndex="1">
                                                                <path id="SvgjsPath2239"
                                                                    d="M 68.16666666666667 205L 68.16666666666667 49Q 68.16666666666667 41 76.16666666666667 41L 108.33333333333334 41Q 116.33333333333334 41 116.33333333333334 49L 116.33333333333334 49L 116.33333333333334 205L 116.33333333333334 205z"
                                                                    fill="var(--secondary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="1" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 68.16666666666667 205L 68.16666666666667 49Q 68.16666666666667 41 76.16666666666667 41L 108.33333333333334 41Q 116.33333333333334 41 116.33333333333334 49L 116.33333333333334 49L 116.33333333333334 205L 116.33333333333334 205z"
                                                                    pathFrom="M 68.16666666666667 205L 68.16666666666667 205L 116.33333333333334 205L 116.33333333333334 205L 116.33333333333334 205L 116.33333333333334 205L 116.33333333333334 205L 68.16666666666667 205"
                                                                    cy="41" cx="194.5" j="0" val="80" barHeight="164"
                                                                    barWidth="68.16666666666667"></path>
                                                                <path id="SvgjsPath2244"
                                                                    d="M 204.5 205L 204.5 131Q 204.5 123 212.5 123L 244.66666666666669 123Q 252.66666666666669 123 252.66666666666669 131L 252.66666666666669 131L 252.66666666666669 205L 252.66666666666669 205z"
                                                                    fill="var(--secondary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="1" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 204.5 205L 204.5 131Q 204.5 123 212.5 123L 244.66666666666669 123Q 252.66666666666669 123 252.66666666666669 131L 252.66666666666669 131L 252.66666666666669 205L 252.66666666666669 205z"
                                                                    pathFrom="M 204.5 205L 204.5 205L 252.66666666666669 205L 252.66666666666669 205L 252.66666666666669 205L 252.66666666666669 205L 252.66666666666669 205L 204.5 205"
                                                                    cy="123" cx="330.83333333333337" j="1" val="40"
                                                                    barHeight="82" barWidth="68.16666666666667"></path>
                                                                <path id="SvgjsPath2249"
                                                                    d="M 340.83333333333337 205L 340.83333333333337 100.25Q 340.83333333333337 92.25 348.83333333333337 92.25L 381.00000000000006 92.25Q 389.00000000000006 92.25 389.00000000000006 100.25L 389.00000000000006 100.25L 389.00000000000006 205L 389.00000000000006 205z"
                                                                    fill="var(--secondary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="1" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 340.83333333333337 205L 340.83333333333337 100.25Q 340.83333333333337 92.25 348.83333333333337 92.25L 381.00000000000006 92.25Q 389.00000000000006 92.25 389.00000000000006 100.25L 389.00000000000006 100.25L 389.00000000000006 205L 389.00000000000006 205z"
                                                                    pathFrom="M 340.83333333333337 205L 340.83333333333337 205L 389.00000000000006 205L 389.00000000000006 205L 389.00000000000006 205L 389.00000000000006 205L 389.00000000000006 205L 340.83333333333337 205"
                                                                    cy="92.25" cx="467.1666666666667" j="2" val="55"
                                                                    barHeight="112.75" barWidth="68.16666666666667">
                                                                </path>
                                                                <path id="SvgjsPath2254"
                                                                    d="M 477.1666666666667 205L 477.1666666666667 49Q 477.1666666666667 41 485.1666666666667 41L 517.3333333333334 41Q 525.3333333333334 41 525.3333333333334 49L 525.3333333333334 49L 525.3333333333334 205L 525.3333333333334 205z"
                                                                    fill="var(--secondary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="1" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 477.1666666666667 205L 477.1666666666667 49Q 477.1666666666667 41 485.1666666666667 41L 517.3333333333334 41Q 525.3333333333334 41 525.3333333333334 49L 525.3333333333334 49L 525.3333333333334 205L 525.3333333333334 205z"
                                                                    pathFrom="M 477.1666666666667 205L 477.1666666666667 205L 525.3333333333334 205L 525.3333333333334 205L 525.3333333333334 205L 525.3333333333334 205L 525.3333333333334 205L 477.1666666666667 205"
                                                                    cy="41" cx="603.5" j="3" val="80" barHeight="164"
                                                                    barWidth="68.16666666666667"></path>
                                                                <path id="SvgjsPath2259"
                                                                    d="M 613.5 205L 613.5 131Q 613.5 123 621.5 123L 653.6666666666666 123Q 661.6666666666666 123 661.6666666666666 131L 661.6666666666666 131L 661.6666666666666 205L 661.6666666666666 205z"
                                                                    fill="var(--secondary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="1" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 613.5 205L 613.5 131Q 613.5 123 621.5 123L 653.6666666666666 123Q 661.6666666666666 123 661.6666666666666 131L 661.6666666666666 131L 661.6666666666666 205L 661.6666666666666 205z"
                                                                    pathFrom="M 613.5 205L 613.5 205L 661.6666666666666 205L 661.6666666666666 205L 661.6666666666666 205L 661.6666666666666 205L 661.6666666666666 205L 613.5 205"
                                                                    cy="123" cx="739.8333333333334" j="4" val="40"
                                                                    barHeight="82" barWidth="68.16666666666667"></path>
                                                                <path id="SvgjsPath2264"
                                                                    d="M 749.8333333333334 205L 749.8333333333334 100.25Q 749.8333333333334 92.25 757.8333333333334 92.25L 790 92.25Q 798 92.25 798 100.25L 798 100.25L 798 205L 798 205z"
                                                                    fill="var(--secondary)" fill-opacity="1"
                                                                    stroke="transparent" stroke-opacity="1"
                                                                    stroke-linecap="round" stroke-width="20"
                                                                    stroke-dasharray="0" class="apexcharts-bar-area"
                                                                    index="1" clip-path="url(#gridRectMask81ydi6rx)"
                                                                    pathTo="M 749.8333333333334 205L 749.8333333333334 100.25Q 749.8333333333334 92.25 757.8333333333334 92.25L 790 92.25Q 798 92.25 798 100.25L 798 100.25L 798 205L 798 205z"
                                                                    pathFrom="M 749.8333333333334 205L 749.8333333333334 205L 798 205L 798 205L 798 205L 798 205L 798 205L 749.8333333333334 205"
                                                                    cy="92.25" cx="876.1666666666667" j="5" val="55"
                                                                    barHeight="112.75" barWidth="68.16666666666667">
                                                                </path>
                                                            </g>
                                                            <g id="SvgjsG2206" class="apexcharts-datalabels"
                                                                data:realIndex="0">
                                                                <g id="SvgjsG2209" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2211"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="24.083333333333336" y="144.6"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="24.083333333333336" cy="144.6"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">96</text>
                                                                </g>
                                                                <g id="SvgjsG2214" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2216"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="160.41666666666669" y="181.5"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="160.41666666666669" cy="181.5"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">60</text>
                                                                </g>
                                                                <g id="SvgjsG2219" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2221"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="296.74999999999994" y="150.75"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="296.74999999999994" cy="150.75"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">90</text>
                                                                </g>
                                                                <g id="SvgjsG2224" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2226"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="433.0833333333333" y="144.6"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="433.0833333333333" cy="144.6"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">96</text>
                                                                </g>
                                                                <g id="SvgjsG2229" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2231"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="569.4166666666667" y="181.5"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="569.4166666666667" cy="181.5"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">60</text>
                                                                </g>
                                                                <g id="SvgjsG2234" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2236"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="705.7500000000001" y="150.75"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="705.7500000000001" cy="150.75"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">90</text>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2238" class="apexcharts-datalabels"
                                                                data:realIndex="1">
                                                                <g id="SvgjsG2241" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2243"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="92.25" y="161" text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="14px"
                                                                        font-weight="600" fill="#ffffff"
                                                                        class="apexcharts-datalabel" cx="92.25" cy="161"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">80</text>
                                                                </g>
                                                                <g id="SvgjsG2246" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2248"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="228.58333333333337" y="185"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="228.58333333333337" cy="185"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">40</text>
                                                                </g>
                                                                <g id="SvgjsG2251" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2253"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="364.9166666666667" y="186.625"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="364.9166666666667" cy="186.625"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">55</text>
                                                                </g>
                                                                <g id="SvgjsG2256" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2258"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="501.24999999999994" y="161"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="501.24999999999994" cy="161"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">80</text>
                                                                </g>
                                                                <g id="SvgjsG2261" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2263"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="637.5833333333334" y="185"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="637.5833333333334" cy="185"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">40</text>
                                                                </g>
                                                                <g id="SvgjsG2266" class="apexcharts-data-labels"
                                                                    transform="rotate(0)"><text id="SvgjsText2268"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="773.9166666666667" y="186.625"
                                                                        text-anchor="middle" dominant-baseline="auto"
                                                                        font-size="14px" font-weight="600"
                                                                        fill="#ffffff" class="apexcharts-datalabel"
                                                                        cx="773.9166666666667" cy="186.625"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">55</text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <line id="SvgjsLine2283" x1="0" y1="0" x2="818" y2="0"
                                                            stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine2284" x1="0" y1="0" x2="818" y2="0"
                                                            stroke-dasharray="0" stroke-width="0"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG2285" class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG2286" class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG2287" class="apexcharts-point-annotations"></g>
                                                    </g>
                                                    <g id="SvgjsG2276" class="apexcharts-yaxis" rel="0"
                                                        transform="translate(-24, 0)">
                                                        <g id="SvgjsG2277" class="apexcharts-yaxis-texts-g"></g>
                                                    </g>
                                                    <g id="SvgjsG2200" class="apexcharts-annotations"></g>
                                                </svg>
                                                <div class="apexcharts-legend" style="max-height: 125px;"></div>
                                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: var(--primary);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                            class="apexcharts-tooltip-marker"
                                                            style="background-color: var(--secondary);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-label"></span><span
                                                                    class="apexcharts-tooltip-text-value"></span></div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="resize-triggers">
                                            <div class="expand-trigger">
                                                <div style="width: 855px; height: 235px;"></div>
                                            </div>
                                            <div class="contract-trigger"></div>
                                        </div>
                                    </div> --}}

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="card-header border-0">
                                <div>
                                    <h4 class="heading mb-0">Most Sales Book List</h4>
                                    <span>Yearly Sales</span>
                                </div>
                            </div>
                            <div class="card-body p-0 pb-3">
                                <ul class="country-sale dz-scroll">
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-primary  border-0 ms-2">25.8%<i
                                                    class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-secondary  border-0 ms-2">18.5%<i
                                                    class="fa-solid fa-chevron-down ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-info  border-0 ms-2">59.5%<i
                                                    class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-success  border-0 ms-2">60.5%<i
                                                    class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-primary  border-0 ms-2">25.8%<i
                                                    class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-secondary  border-0 ms-2">18.5%<i
                                                    class="fa-solid fa-chevron-down ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-info  border-0 ms-2">59.5%<i
                                                    class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-success  border-0 ms-2">60.5%<i
                                                    class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-light  border-0 ms-2">60.5%<i
                                                    class="fa-solid fa-chevron-down ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-primary  border-0 ms-2">25.8%<i
                                                    class="fa-solid fa-chevron-up ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                    <li class="d-flex">
                                        <div class="country-flag">
                                            <img src="images/books.png" alt="">
                                        </div>
                                        <div class="d-flex flex-wrap align-items-center justify-content-between w-100">
                                            <div class="ms-2">
                                                <h6 class="mb-0">Book Name</h6>
                                                <small>Total Book Sales- 6,3665</small>
                                            </div>
                                            <span class="badge badge-secondary  border-0 ms-2">18.5%<i
                                                    class="fa-solid fa-chevron-down ms-2 text-white"></i></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-xxl-6 col-md-6">
                        <div class="card">
                            <div class="card-header border-0">
                                <div>
                                    <h4 class="heading mb-0">All Events</h4>
                                    <span>Update 2 Hours Before</span>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-0">
                                <div class="activity-sale dz-scroll">
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#f93a0b"></circle>
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 71 71">
                                                <g transform="translate(-457 -443)">
                                                    <rect width="71" height="71" rx="12" transform="translate(457 443)"
                                                        fill="#c5c5c5"></rect>
                                                    <g transform="translate(457 443)">
                                                        <rect data-name="placeholder" width="71" height="71" rx="12"
                                                            fill="#2769ee"></rect>
                                                        <circle data-name="Ellipse 12" cx="18" cy="18" r="18"
                                                            transform="translate(15 20)" fill="#fff"></circle>
                                                        <circle data-name="Ellipse 11" cx="11" cy="11" r="11"
                                                            transform="translate(36 15)" fill="#ffe70c"
                                                            style="mix-blend-mode: multiply;isolation: isolate">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="ms-3 active-data">
                                                <h5 class="mb-1">Event name one</h5>
                                                <span>8min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"></circle>
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 71 71">
                                                <g transform="translate(-457 -443)">
                                                    <rect width="71" height="71" rx="12" transform="translate(457 443)"
                                                        fill="#c5c5c5"></rect>
                                                    <g transform="translate(457 443)">
                                                        <rect data-name="placeholder" width="71" height="71" rx="12"
                                                            fill="#eeac27"></rect>
                                                        <circle data-name="Ellipse 12" cx="18" cy="18" r="18"
                                                            transform="translate(15 20)" fill="#fff"></circle>
                                                        <circle data-name="Ellipse 11" cx="11" cy="11" r="11"
                                                            transform="translate(36 15)" fill="#ffe70c"
                                                            style="mix-blend-mode: multiply;isolation: isolate">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="ms-3 active-data">
                                                <h5 class="mb-1">Event name one</h5>
                                                <span>2min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9" />
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 71 71">
                                                <g transform="translate(-457 -443)">
                                                    <rect width="71" height="71" rx="12" transform="translate(457 443)"
                                                        fill="#c5c5c5" />
                                                    <g transform="translate(457 443)">
                                                        <rect data-name="placeholder" width="71" height="71" rx="12"
                                                            fill="#22bc32" />
                                                        <circle data-name="Ellipse 12" cx="18" cy="18" r="18"
                                                            transform="translate(15 20)" fill="#fff" />
                                                        <circle data-name="Ellipse 11" cx="11" cy="11" r="11"
                                                            transform="translate(36 15)" fill="#ffe70c"
                                                            style="mix-blend-mode: multiply;isolation: isolate" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="ms-3 active-data">
                                                <h5 class="mb-1">Event name one</h5>
                                                <span>8min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9" />
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 71 71">
                                                <g transform="translate(-457 -443)">
                                                    <rect width="71" height="71" rx="12" transform="translate(457 443)"
                                                        fill="#c5c5c5" />
                                                    <g transform="translate(457 443)">
                                                        <rect data-name="placeholder" width="71" height="71" rx="12"
                                                            fill="#9933cb" />
                                                        <circle data-name="Ellipse 12" cx="18" cy="18" r="18"
                                                            transform="translate(15 20)" fill="#fff" />
                                                        <circle data-name="Ellipse 11" cx="11" cy="11" r="11"
                                                            transform="translate(36 15)" fill="#ffe70c"
                                                            style="mix-blend-mode: multiply;isolation: isolate" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="ms-3 active-data">
                                                <h5 class="mb-1">Event name one</h5>
                                                <span>6min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9"></circle>
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 71 71">
                                                <g transform="translate(-457 -443)">
                                                    <rect width="71" height="71" rx="12" transform="translate(457 443)"
                                                        fill="#c5c5c5"></rect>
                                                    <g transform="translate(457 443)">
                                                        <rect data-name="placeholder" width="71" height="71" rx="12"
                                                            fill="#eeac27"></rect>
                                                        <circle data-name="Ellipse 12" cx="18" cy="18" r="18"
                                                            transform="translate(15 20)" fill="#fff"></circle>
                                                        <circle data-name="Ellipse 11" cx="11" cy="11" r="11"
                                                            transform="translate(36 15)" fill="#ffe70c"
                                                            style="mix-blend-mode: multiply;isolation: isolate">
                                                        </circle>
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="ms-3 active-data">
                                                <h5 class="mb-1">Event name one</h5>
                                                <span>2min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9" />
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 71 71">
                                                <g transform="translate(-457 -443)">
                                                    <rect width="71" height="71" rx="12" transform="translate(457 443)"
                                                        fill="#c5c5c5" />
                                                    <g transform="translate(457 443)">
                                                        <rect data-name="placeholder" width="71" height="71" rx="12"
                                                            fill="#22bc32" />
                                                        <circle data-name="Ellipse 12" cx="18" cy="18" r="18"
                                                            transform="translate(15 20)" fill="#fff" />
                                                        <circle data-name="Ellipse 11" cx="11" cy="11" r="11"
                                                            transform="translate(36 15)" fill="#ffe70c"
                                                            style="mix-blend-mode: multiply;isolation: isolate" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="ms-3 active-data">
                                                <h5 class="mb-1">Event name one</h5>
                                                <span>8min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex recent-activity">
                                        <span class="me-3 activity">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                                viewBox="0 0 17 17">
                                                <circle cx="8.5" cy="8.5" r="8.5" fill="#d9d9d9" />
                                            </svg>
                                        </span>
                                        <div class="d-flex align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 71 71">
                                                <g transform="translate(-457 -443)">
                                                    <rect width="71" height="71" rx="12" transform="translate(457 443)"
                                                        fill="#c5c5c5" />
                                                    <g transform="translate(457 443)">
                                                        <rect data-name="placeholder" width="71" height="71" rx="12"
                                                            fill="#9933cb" />
                                                        <circle data-name="Ellipse 12" cx="18" cy="18" r="18"
                                                            transform="translate(15 20)" fill="#fff" />
                                                        <circle data-name="Ellipse 11" cx="11" cy="11" r="11"
                                                            transform="translate(36 15)" fill="#ffe70c"
                                                            style="mix-blend-mode: multiply;isolation: isolate" />
                                                    </g>
                                                </g>
                                            </svg>
                                            <div class="ms-3 active-data">
                                                <h5 class="mb-1">Event name one</h5>
                                                <span>6min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div class="icon-box icon-box-md bg-danger-light me-1">
                                                <i class="fa-solid fa-chart-simple text-danger"></i>
                                            </div>
                                            <div class="ms-2">
                                                <h4>5,536</h4>
                                                <p class="mb-0">Total Sales</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)"><i
                                                class="fa-solid fa-chevron-right text-danger"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div class="icon-box icon-box-md bg-primary-light me-1">
                                                <i class="fa-solid fa-user text-primary"></i>
                                            </div>
                                            <div class="ms-2">
                                                <h4>4,613k</h4>
                                                <p class="mb-0">Weekly Sales</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)"><i
                                                class="fa-solid fa-chevron-right text-primary"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div class="icon-box icon-box-md bg-info-light me-1">
                                                <i class="fa-solid fa-box text-info"></i>
                                            </div>
                                            <div class="ms-2">
                                                <h4>1,536k</h4>
                                                <p class="mb-0">Monthly Sales</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)"><i
                                                class="fa-solid fa-chevron-right text-info"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body d-flex justify-content-between align-items-center">
                                        <div class="d-flex">
                                            <div class="icon-box icon-box-md bg-secondary-light me-1">
                                                <i class="fa-solid fa-user text-secondary"></i>
                                            </div>
                                            <div class="ms-2">
                                                <h4>1,536k</h4>
                                                <p class="mb-0">Yearly Sales</p>
                                            </div>
                                        </div>
                                        <a href="javascript:void(0)"><i
                                                class="fa-solid fa-chevron-right text-secondary"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        @include("publisher.footer")
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
     <!-- Required vendors -->
     <script src="{{asset('vendor/global/global.min.js')}}"></script>
    <script src="{{asset('vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('vendor/apexchart/apexchart.js')}}"></script>

    <!-- Dashboard 1 -->
    <script src="{{asset('publisher/js/dashboard/dashboard-1.js')}}"></script>
    <script src="{{asset('vendor/draggable/draggable.js')}}"></script>
    <script src="{{asset('vendor/swiper/js/swiper-bundle.min.js')}}"></script>


    <!-- tagify -->
    <script src="{{asset('vendor/tagify/dist/tagify.js')}}"></script>

    <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/js/jszip.min.js')}}"></script>
    <script src="{{asset('publisher/js/plugins-init/datatables.init.js')}}"></script>

    <!-- Apex Chart -->

    <script src="{{asset('vendor/bootstrap-datetimepicker/js/moment.js')}}"></script>
    <script src="{{asset('vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>

    <!-- Vectormap -->
    <script src="{{asset('vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('vendor/jqvmap/js/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('vendor/jqvmap/js/jquery.vmap.usa.js')}}"></script>
    <script src="{{asset('publisher/js/custom.js')}}"></script>
    <script src="{{asset('publisher/js/deznav-init.js')}}"></script>
    <script src="{{asset('publisher/js/demo.js')}}"></script>
    <script src="{{asset('publisher/js/styleSwitcher.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





</body>

</html>
