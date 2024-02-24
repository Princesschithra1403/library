
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
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mb-0 bc-title">
                                <b>Library View</b>
                            </h3>
                            <a class="btn btn-primary  btn-sm" href="/admin/library_list">
                                <i class="fas fa-plus"></i> List Of Library</a>
                        </div>
                    </div>
                </div>
                <div class="container bootdey">
                    <section class="col-md-12">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-header-menu">
                                            <i class="fa fa-bars"></i>
                                        </div>
                                        <div class="card-header-headshot"></div>
                                    </div>
                                    <div class="card-content ">
                                        <div class="card-content-member">
                                            <h4 class="m-t-0">Library Name</h4>
                                            <p class="m-0"><i class="pe-7s-map-marker"></i>{{$data->libraryName}} </p>
                                        </div>
                                            <h3 class="text-center pt-4">Library Details</h3>
                                        <div class="row pb-5 ">
                                            <div class="col-md-6 text-end fw-bold">Library Name : </div>
                                            <div class="col-md-6">{{$data->libraryName}}</div>

                                            <div class="col-md-6 text-end fw-bold">Library Type : </div>
                                            <div class="col-md-6">{{$data->libraryType}}</div>

											<div class="col-md-6 text-end fw-bold">Library Type : </div>
                                            <div class="col-md-6">{{$data->libraryType}}</div>

											<div class="col-md-6 text-end fw-bold"> State  : </div>
                                            <div class="col-md-6">{{$data->state}}</div>

											<div class="col-md-6 text-end fw-bold"> District  : </div>
                                            <div class="col-md-6">{{$data->district}}</div>

											<div class="col-md-6 text-end fw-bold"> City  : </div>
                                            <div class="col-md-6">{{$data->city}}</div>

                                            <div class="col-md-6 text-end fw-bold">Village : </div>
                                            <div class="col-md-6">{{$data->Village}}</div>


                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="review-block">
                                    <h3>Contact Person Details</h3>
									<div class="row">
                                        <div class="col-sm-3">
                                            <div class="review-block-name"><a href="#">	Librarian Id  </a></div>
                                        </div>
                                        <div class="col-sm-9 mt-2">
                                            <div class="">{{$data->librarianId}}</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="review-block-name"><a href="#">Librarian Name </a></div>
                                        </div>
                                        <div class="col-sm-9 mt-2">
                                            <div class="">{{$data->librarianName}}</div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="review-block-name"><a href="#">	Librarian Designation </a></div>
                                        </div>
                                        <div class="col-sm-9 mt-2">
                                            <div class="">{{$data->librarianDesignation}}</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="review-block-name"><a href="#">Email Id </a></div>
                                        </div>
                                        <div class="col-sm-9 mt-2">
                                            <div class="">{{$data->email}}</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="review-block-name"><a href="#">Contact Number  </a></div>
                                        </div>
                                        <div class="col-sm-9 mt-2">
                                            <div class="">{{$data->phoneNumber}}</div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-3">
                                            <div class="review-block-name"><a href="#">Contact Number  </a></div>
                                        </div>
                                        <div class="col-sm-9 mt-2">
                                            <div class="">{{$data->phoneNumber}}</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
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
	<style>
		/*** Portfolio page
==============================================================================*/

		.card {
			margin-bottom: 20px;
		}

		.card-header {
			position: relative;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			background-image: url('https://www.shutterstock.com/image-vector/old-book-cover-260nw-1285303255.jpg');
			background-size: cover;
			background-position: center center;
			padding: 30px 15px;
			border-top-left-radius: 4px;
			border-top-right-radius: 4px;
		}

		.card-header-menu {
			position: absolute;
			top: 0;
			right: 0;
			height: 4em;
			width: 4em;
		}

		.card-header-menu:after {
			position: absolute;
			top: 0;
			right: 0;
			content: "";
			border-left: 2em solid transparent;
			border-bottom: 2em solid transparent;
			border-right: 2em solid #37a000;
			border-top: 2em solid #37a000;
			border-top-right-radius: 4px;
		}

		.card-header-menu i {
			position: absolute;
			top: 9px;
			right: 9px;
			color: #fff;
			z-index: 1;
		}

		.card-header-headshot {
			height: 6em;
			width: 6em;
			border-radius: 50%;
			border: 2px solid #37a000;
			background-image: url('https://jlongroadmedia.files.wordpress.com/2013/12/catchingfire.jpg');
			background-size: cover;
			background-position: center center;
			box-shadow: 1px 3px 3px #3E4142;
		}

		.card-content-member {
			position: relative;
			background-color: #fff;
			padding: 1em;
			box-shadow: 0 2px 2px rgba(62, 65, 66, 0.15);
		}

		.card-content-member {
			text-align: center;
		}

		.card-content-member p i {
			font-size: 16px;
			margin-right: 10px;
		}

		.card-content-languages {
			background-color: #fff;
			padding: 15px;
		}

		.card-content-languages .card-content-languages-group {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			padding-bottom: 0.5em;
		}

		.card-content-languages .card-content-languages-group:last-of-type {
			padding-bottom: 0;
		}

		.card-content-languages .card-content-languages-group>div:first-of-type {
			-webkit-box-flex: 0;
			-ms-flex: 0 0 5em;
			flex: 0 0 5em;
		}

		.card-content-languages h4 {
			line-height: 1.5em;
			margin: 0;
			font-size: 15px;
			font-weight: 500;
			letter-spacing: 0.5px;
		}

		.card-content-languages li {
			display: inline-block;
			padding-right: 0.5em;
			font-size: 0.9em;
			line-height: 1.5em;
		}

		.card-content-summary {
			background-color: #fff;
			padding: 15px;
		}

		.card-content-summary p {
			text-align: center;
			font-size: 12px;
			font-weight: 600;
		}

		.card-footer-stats {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			background-color: #2c3136;
		}

		.card-footer-stats div {
			-webkit-box-flex: 1;
			-ms-flex: 1 0 33%;
			flex: 1 0 33%;
			padding: 0.75em;
		}

		.card-footer-stats div:nth-of-type(2) {
			border-left: 1px solid #3E4142;
			border-right: 1px solid #3E4142;
		}

		.card-footer-stats p {
			font-size: 0.8em;
			color: #A6A6A6;
			margin-bottom: 0.4em;
			font-weight: 600;
			text-transform: uppercase;
		}

		.card-footer-stats i {
			color: #ddd;
		}

		.card-footer-stats span {
			color: #ddd;
		}

		.card-footer-stats span.stats-small {
			font-size: 0.9em;
		}

		.card-footer-message {
			background-color: #37a000;
			padding: 15px;
			border-bottom-left-radius: 4px;
			border-bottom-right-radius: 4px;
		}

		.card-footer-message h4 {
			margin: 0;
			text-align: center;
			color: #fff;
			font-weight: 400;
		}

		.review-number {
			float: left;
			width: 35px;
			line-height: 1;
		}

		.review-number div {
			height: 9px;
			margin: 5px 0
		}

		.review-progress {
			float: left;
			width: 230px;
		}

		.review-progress .progress {
			margin: 8px 0;
		}

		.progress-number {
			margin-left: 10px;
			float: left;
		}

		.rating-block,
		.review-block {
			background-color: #fff;
			border: 1px solid #e1e6ef;
			padding: 15px;
			border-radius: 4px;
			margin-bottom: 20px;
		}

		.review-block {
			margin-bottom: 20px;
		}

		.review-block-img img {
			height: 60px;
			width: 60px;
		}

		.review-block-name {
			font-size: 12px;
			margin: 10px 0;
			font-weight: 600;
			text-transform: uppercase;
			letter-spacing: 0.5px;
		}

		.review-block-name a {
			color: #374767;
		}

		.review-block-date {
			font-size: 12px;
		}

		.review-block-rate {
			font-size: 13px;
			margin-bottom: 15px;
		}

		.review-block-title {
			font-size: 15px;
			font-weight: 700;
			margin-bottom: 10px;
		}

		.review-block-description {
			font-size: 13px;
		}



		/* Widgets page
==============================================================================*/


		/*-- Monthly calender --*/

		.monthly_calender {
			width: 100%;
			max-width: 600px;
			display: inline-block;
		}


		/*-- Profile widget --*/

		.profile-widget .panel-heading {
			min-height: 200px;
			background: #fff;
			background-size: cover;
		}

		.profile-widget .media-heading {
			color: #5B5147;
		}

		.profile-widget .panel-body {
			padding: 25px 15px;
		}

		.profile-widget .panel-body .img-circle {
			height: 90px;
			width: 90px;
			padding: 8px;
			border: 1px solid #e2dfdc;
		}

		.profile-widget .panel-footer {
			padding: 0px;
			border: none;
		}

		.profile-widget .panel-footer .btn-group .btn {
			border: none;
			font-size: 1.2em;
			background-color: #F6F1ED;
			color: #BAACA3;
			border-top-left-radius: 0px;
			border-top-right-radius: 0px;
			padding: 15px 0;
		}

		.profile-widget .panel-footer .btn-group .btn:hover {
			color: #F6F1ED;
			background-color: #8F7F70;
		}

		.profile-widget .panel-footer .btn-group>.btn:not(:first-child) {
			border-left: 1px solid #fff;
		}

		.profile-widget .panel-footer .btn-group .highlight {
			color: #E56E4C;
		}

		.circle-image img {

			border: 6px solid #fff;
			border-radius: 100%;
			padding: 0px;
			top: -28px;
			position: relative;
			width: 70px;
			height: 70px;
			border-radius: 100%;
			z-index: 1;
			background: #e7d184;
			cursor: pointer;

		}


		.dot {
			height: 18px;
			width: 18px;
			background-color: blue;
			border-radius: 50%;
			display: inline-block;
			position: relative;
			border: 3px solid #fff;
			top: -48px;
			left: 186px;
			z-index: 1000;
		}

		.name {
			margin-top: -21px;
			font-size: 18px;
		}


		.fw-500 {
			font-weight: 500 !important;
		}


		.start {

			color: green;
		}

		.stop {
			color: red;
		}


		.rate {

			border-bottom-right-radius: 12px;
			border-bottom-left-radius: 12px;

		}



		.rating {
			display: flex;
			flex-direction: row-reverse;
			justify-content: center
		}

		.rating>input {
			display: none
		}

		.rating>label {
			position: relative;
			width: 1em;
			font-size: 30px;
			font-weight: 300;
			color: #FFD600;
			cursor: pointer
		}

		.rating>label::before {
			content: "\2605";
			position: absolute;
			opacity: 0
		}

		.rating>label:hover:before,
		.rating>label:hover~label:before {
			opacity: 1 !important
		}

		.rating>input:checked~label:before {
			opacity: 1
		}

		.rating:hover>input:checked~label:before {
			opacity: 0.4
		}


		.buttons {
			top: 36px;
			position: relative;
		}


		.rating-submit {
			border-radius: 15px;
			color: #fff;
			height: 49px;
		}


		.rating-submit:hover {

			color: #fff;
		}
	</style>
    <?php
        include "admin/plugin/plugin_js.php";
    ?>
</body>

</html>
