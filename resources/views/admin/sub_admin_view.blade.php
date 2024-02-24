
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
    <title>Government of Tamil Nadu - Book Procurement </title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/fevi.svg') }}">
    <?php
        include "admin/plugin/plugin_css.php";
    ?>
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="text-center">
            <img src="images/goverment_loader.gif" alt="" width="25%">
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
        @include ('admin.navigation')
        <!--**********************************
            Sidebar end
        ***********************************-->
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="card-header flex-wrap bg-white mb-5">
                    <div class="d-flex align-items-center justify-content-between py-3">
                        <h5 class=" mb-0 text-gray-800 pl-3">Create Sub Admin</h5>

                    </div>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <ol class="breadcrumb py-0 m-0">
                            <li class="breadcrumb-item"><a href="/admin/sub_admin_list">Sub Admin List</a>
                            </li>

                            <li class="breadcrumb-item"><a href="#">Update Sub Admin
                                </a></li>
                        </ol>
                    </ul>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-3 col-lg-4">
                        <div class="clearfix">
                            <div class="card card-bx profile-card author-profile m-b30">
                                <div class="card-body">
                                    <div class="p-5">
                                        <div class="author-profile">
                                            <div class="author-media">
                                                <img src="{{asset("sub_admin/SubAdminImage/".$data->subadminImage)}}" alt="">

                                            </div>
                                            <div class="author-info">
                                                <h4 class="title">{{$data->name}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="card profile-card card-bx m-b30">
                            <form class="profile-form">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-sm-12">
                                                <label class="form-label"> <b class="text-primary">Name  :</b>  {{$data->name}}</label>

                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label"><b class="text-primary">User Name  :</b>   {{$data->userName}}</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label"><b class="text-primary">Designation  :</b>   {{$data->designation}}</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label"><b class="text-primary">Email  : </b>  {{$data->email}}</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label"><b class="text-primary">Phone  : </b>  +91{{$data->mobileNumber}}</label>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-sm-12">
                                                <label class="form-label"><b class="text-primary">Address  : </b>  {{$data->address}}</label>
                                            </div>
                                            <!-- <div class="col-sm-12">
                                                <label class="form-label">City</label>
                                            </div> -->
                                            <div class="col-sm-12">
                                                <label class="form-label"><b class="text-primary">District :</b>    {{$data->district}}</label>
                                            </div>
                                            <div class="col-sm-12">
                                                <label class="form-label"><b class="text-primary">Postal Code  :</b>   {{$data->postalCode}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
        @include ("admin.footer")
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
    <?php
        include "admin/plugin/plugin_js.php";
    ?>
</body>

</html>
