
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
            <div class="content">
                    <div class="page-inner">

                        <div class="container-fluid">

                            <!-- Page Heading -->
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <h3 class="mb-0 bc-title"><b>Banner Change</b> </h3>
                                        <a class="btn btn-primary btn-sm"
                                            href="/admin/index"><i
                                                class="fas fa-chevron-left"></i> Back</a>
                                    </div>
                                </div>
                            </div>

                            <!-- Form -->
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12">

                                    <div class="card o-hidden border-0 shadow-lg">
                                        <div class="card-body ">
                                            <!-- Nested Row within Card Body -->
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12">
                                                    <form class="admin-form"
                                                        action="#"
                                                        method="POST" enctype="multipart/form-data">

                                                        <input type="hidden" name="_token"
                                                            value="">

                                                        <!-- banner 2 -->

                                                        <div class="form-group">
                                                            <label for="name">Set Image1  <span class="text-danger">*</span></label>
                                                            <br>
                                                            <img class="admin-img"
                                                                src="images\avatar\11.png"
                                                                alt="No Image Found">
                                                            <br>
                                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                                        </div>

                                                        <div class="mb-3 file">
                                                            <input class="form-control" type="file" id="formFile">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="slug">Title  <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Title " value="">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="slug">Subtitle  <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Subtitle" value="">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="slug">URL 1  <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter URL 1" value="">
                                                        </div>

                                                        <!-- banner 2 -->

                                                        <div class="form-group">
                                                            <label class="mt-5" for="name">Set Image2  <span class="text-danger">*</span></label>
                                                            <br>
                                                            <img class="admin-img"
                                                                src="images\avatar\11.png"
                                                                alt="No Image Found">
                                                            <br>
                                                            <span class="mt-1">Image Size Should Be 496 x 204.</span>
                                                        </div>

                                                        <div class="mb-3 file">
                                                            <input class="form-control" type="file" id="formFile">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="slug">Title  <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Title " value="">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="slug">Subtitle  <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Subtitle" value="">
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="slug">URL 1  <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter URL 1" value="">
                                                        </div>


                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="btn btn-secondary ">Submit</button>
                                                        </div>

                                                        <div>

                                                        </div>
                                                    </form>
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
<style>
    .admin-form span {
    color: #777;
}
.file {
    max-width: 350px;
    display: block;
}
</style>
