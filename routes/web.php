<?php

use Illuminate\Support\Facades\Route;
include(base_path('routes/auth.php'));
include(base_path('routes/adminauth.php'));
include(base_path('routes/admin.php'));
include(base_path('routes/sub_admin.php'));
include(base_path('routes/publisher.php'));
include(base_path('routes/distributor.php'));
include(base_path('routes/publisher_and_distributor.php'));
include(base_path('routes/reviewer.php'));
include(base_path('routes/memberauth.php'));
include(base_path('routes/librarian.php'));


Route::get('/', function () {return view('index');});



