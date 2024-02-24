
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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- PAGE TITLE HERE -->
    <title>Government of Tamil Nadu - Book Procurement</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('admin/images/fevi.svg') }}">
    <?php
        include "admin/plugin/plugin_css.php";
    ?>
</head>

<body>

    <!--*******
        Preloader start
    ********-->
    <div id="preloader">
        <div class="text-center">
            <img src="images/goverment_loader.gif" alt="" width="25%">
        </div>
    </div>
    <!--*******
        Preloader end
    ********-->

    <!--************
        Main wrapper start
    *************-->
    <div id="main-wrapper">
        <!--************
            Nav header start
        *************-->
        @include ('admin.navigation')
        <!--************
            Sidebar end
        *************-->
        <!--************
            Content body start
        *************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class="mb-0 bc-title">
                                <b>Create Member</b>
                            </h3>
                            <div>
                                <a class="btn btn-primary  btn-sm" href="/admin/member_list">
                                    <i class="fas fa-chevron-left"></i> List Of Reviewer </a>
                                    <a class="btn btn-primary  btn-sm" href="/admin/library_list">
                                        <i class="fas fa-chevron-left"></i> List Of Library  </a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="">Select The Role </h3>
                                <hr>
                                <div class="row mb-4">
                                    <div class="col-12">
                                        <label class="form-label">Select the Role<span
                                 class="text-danger maditory">*</span></label>
                                        <select name="role" id="role" class="form-control">
                                            <option value="2">Select Role</option>
                                            <option value="0">Reviewer</option>
                                            <option value="1">library</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="reviewer">
                                    <form form class="profile-form" id="formId">
                                        @csrf
                                    <div class="form-validation">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Select Reviewer Type<span
                                                               class="text-danger maditory">*</span></label>
                                                            <select name="reviewer_type" id="reviewerType" class="form-select" Required>
                                                            <option></option>
                                                                <option value="internal">Internal</option>
                                                                <option value="external">External</option>

                                                            </select>
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Name<span
                                                             class="text-danger maditory">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Name" id="name" Required>
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Subject<span
                                                              class="text-danger maditory">*</span></label>
                                                            <!-- <input type="text" class="form-control" placeholder="Enter Subject" id="subject" Required> -->
                                                            <select class="form-select" id="subject"
                                                        name="subject" required>
                                                        <option value="">Select One<span
                                 class="text-danger maditory">*</span></option>
                                                        @php
                                                          $categori = DB::table('book_subject')->where('status','=','1')->get();
                                                          @endphp
                                                          @foreach($categori as $val)
                                                            <option value="{{$val->name}}">{{$val->name}}</option>

                                                            @endforeach
                                                    </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Designation<span
                                                              class="text-danger maditory">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter designation" id="designation" Required>
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Organisation Details <span
                                                             class="text-danger maditory">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter OrganisationDetails" id="organisationDetails"Required>
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Phone number<span
                                                               class="text-danger maditory">*</span></label>
                                                            <input type="number" class="form-control" placeholder="Enter  Phonenumber" id="phoneNumber" Required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4">
                                                <div class="clearfix">
                                                    <div class="card card-bx profile-card author-profile m-b30">
                                                        <div class="card-body">
                                                            <div class="p-5">
                                                                <div class="author-profile">
                                                                    <div class="author-media">
                                                                        <img src="images/user.jpg" alt="" id="output" >
                                                                        <div class="upload-link" title="" data-toggle="tooltip" data-placement="right" data-original-title="update">
                                                                            <input type="file" class="update-flie" id="profileImage" onchange="loadFile(event)" Required>
                                                                            <i class="fa fa-camera"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="author-info">
                                                                        <h6 class="title">Add Profile</h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row" >
                                            <div class="col-md-12" id="bankDetailsFields" style="display: block;">
                                                 <h3 class="">Bank Details </h3>
                                                   <hr>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Bank Name<span
                                                             class="text-danger maditory">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Bank Name"  id= "bankName" Required>
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Account Number<span
                                                               class="text-danger maditory">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Account Number" id="accountNumber" Required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">Branch<span
                                                                class="text-danger maditory">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter Branch" id="branch" Required>
                                                        </div>
                                                        <div class="col-sm-12 mb-3">
                                                            <label class="form-label">IFSC Number<span
                                                               class="text-danger maditory">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Enter IFSC Number" id="ifscNumber" Required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="">Login Details</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="form-label">Email<span
                                                         class="text-danger maditory">*</span></label>
                                                        <input type="text" class="form-control" placeholder="Enter Email" id="email" Required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-sm-12 mb-3">
                                                        <label class="form-label">Password<span
                                                          class="text-danger maditory">*</span></label>
                                                        <input type="password" class="form-control" placeholder="Enter Password" id="password" Required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 text-end">
                                                    <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    </form>
                                </div>
                                <div class="library">
                                    <form form class="profile-form" id="formId1">
                                         @csrf
                                        <div class="form-validation">
                                        <h3 class="">Library Details </h3>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-sm-6 mb-3">
                                                        <label class="form-label">Library Type<span
                                 class="text-danger maditory">*</span></label>
                                                        <select name="library_type" id="libraryType" class="form-select" Required>
                                                        <option value="">Select One<span
                                 class="text-danger maditory">*</span></option>
                                                        @php
                                                          $categori = DB::table('library_types')->where('status','=','1')->get();
                                                          @endphp
                                                          @foreach($categori as $val)
                                                            <option value="{{$val->name}}">{{$val->name}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-6 mb-3">
                                                        <label class="form-label">Library Name<span
                                 class="text-danger maditory">*</span></label>
                                                        <input type="text" class="form-control" placeholder="Enter Library Name" id="libraryName" Required>
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                     <label class="form-label">State<span
                                 class="text-danger maditory">*</span></label>
                                                        <select name="library_type" class="form-select" id="state" Required>
                                                           <option value="">Select State</option>

                                                          @php
                                                             $states = DB::table('states')->where('status', '=', 1)->get();
                                                           @endphp

                                                          @foreach($states as $state)
                                                            <option value="{{ $state->name }}">{{ $state->name }}</option>
                                                            @endforeach
                                                            </select>
                                                    </div>

                                                    <div class="col-sm-6 mb-3">
                                                        <label class="form-label">District<span
                                                     class="text-danger maditory">*</span></label>
                                                        <select name="library_type" class="form-select" id="district" Required>
                                                        <option value="">Select District</option>

                                                               @php
                                                                $districts = DB::table('districts')->where('status', '=', 1)->get();
                                                                @endphp

                                                            @foreach($districts as $state)
                                                             <option value="{{ $state->name }}">{{ $state->name }}</option>
                                                             @endforeach
                                                        </select>

                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label class="form-label">City<span
                                 class="text-danger maditory">*</span></label>
                                                        <input type="text" class="form-control" placeholder="Enter City" id="city" Required>
                                                    </div>
                                                    <div class="col-sm-6 mb-3">
                                                        <label class="form-label">Village<span
                                 class="text-danger maditory">*</span></label>
                                                        <input type="text" class="form-control" placeholder="Enter Village" id="Village" Required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h3 class="">Contact Person Details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-sm-12 mb-3">
                                                    <label class="form-label">librarian Name<span
                                 class="text-danger maditory">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Enter librarian Name" id="librarianName" Required>
                                                </div>
                                                <div class="col-sm-6 mb-3">
                                                            <label class="form-label">Are You Meta Checker<span
                                 class="text-danger maditory">*</span></label>
                                                            <select name="" id="metaChecker" class="form-select" Required>
                                                            <option value="">Select One</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>

                                            </div>
                                            <div class="col-md-6">
                                            <div class="col-sm-12 mb-3">
                                                    <label class="form-label">librarian Designation<span
                                 class="text-danger maditory">*</span></label>
                                                    <input type="text" class="form-control" placeholder="Enter librarian Designation" id="librarianDesignation" Required>
                                                </div>
                                                <div class="col-sm-12 mb-3">
                                                    <label class="form-label">Phone number<span
                                 class="text-danger maditory">*</span></label>
                                                    <input type="number" class="form-control" placeholder="Enter Phone number" id="mobileNumber" Required>
                                                </div>

                                            </div>
                                        </div>
                                        <h3 class="">Login Details</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="col-sm-12 mb-3">
                                                    <label class="form-label">Email<span
                                 class="text-danger maditory">*</span></label>
                                                    <input type="email" class="form-control" placeholder="Enter Emaile" id="email1" Required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="col-sm-12 mb-3">
                                                    <label class="form-label">Password<span
                                 class="text-danger maditory">*</span></label>
                                                    <input type="password" class="form-control" placeholder="Enter Password" id="password1" Required>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-end">
                                               <button type="submit" class="btn btn-primary " id="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--************
            Content body end
        *************-->
        <!--************
            Footer start
        *************-->
        @include ("admin.footer")
        <!--************
            Footer end
        *************-->

        <!--************
           Support ticket button start
        *************-->

        <!--************
           Support ticket button end
        *************-->


    </div>
    <!--************
        Main wrapper end
    *************-->
    <?php
        include "admin/plugin/plugin_js.php";
    ?>

</body>

<script>
       $(document).on('click','#submitButton',function(e){
        e.preventDefault();
         var password=$('#password').val();
         var ifscNumber=$('#ifscNumber').val();
         var branch=$('#branch').val();
         var accountNumber=$('#accountNumber').val();
         var bankName=$('#bankName').val();
         var email=$('#email').val();
         var phoneNumber=$('#phoneNumber').val();
         var organisationDetails=$('#organisationDetails').val();
         var designation=$('#designation').val();
         var subject=$('#subject').val();
         var name=$('#name').val();
         var reviewerType=$('#reviewerType').val();
         var profileImage = $('#profileImage')[0].files;
         let fd = new FormData();
        fd.append('password',password);
        fd.append('ifscNumber',ifscNumber);
        fd.append('branch',branch);
        fd.append('accountNumber',accountNumber);
        fd.append('bankName',bankName);
        fd.append('email',email);
        fd.append('organisationDetails',organisationDetails);
        fd.append('phoneNumber',phoneNumber);
        fd.append('designation',designation);
        fd.append('subject',subject);
        fd.append('name',name);
        fd.append('reviewerType',reviewerType);
        fd.append('profileImage',profileImage[0])

          $.ajaxSetup({
             headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
             }
          });
          $.ajax({
             type:"post",
             url:"/admin/addreviewer",
             data:fd,
             processData: false,
             contentType: false,

             success: function(response) {
                if(response.success){
                    toastr.success(response.success,{timeout:2000});
                    $('#formId')[0].reset();

                $('#ProfileImage').val('images/user.jpg');
                $('#output').attr('src', 'images/user.jpg');
                }else{
                    toastr.error(response.error,{timeout:2000});
                }


            }
          });

       });

    </script>
    <script>

$(document).on('click','#submit',function(e){
   e.preventDefault();
   var data={
      'libraryType':$('#libraryType').val(),
      'metaChecker':$('#metaChecker').val(),
      'libraryName':$('#libraryName').val(),
      'state':$('#state').val(),
      'district':$('#district').val(),
      'city':$('#city').val(),
      'Village':$('#Village').val(),
      'librarianName':$('#librarianName').val(),
      'librarianDesignation':$('#librarianDesignation').val(),
      'phoneNumber':$('#mobileNumber').val(),
      'email':$('#email1').val(),
      'password':$('#password1').val(),

   }
   console.log(data);
   $.ajaxSetup({
      headers:{
         'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
      }
   });
   $.ajax({
      type:"post",
      url:"/admin/librarian",
      data:data,
      dataType:"json",
      success: function(response) {
         if(response.success){
             toastr.success(response.success,{timeout:25000});
             $('#formId1')[0].reset();
         }else{
             toastr.error(response.error,{timeout:25000});
         }

     }
   })

})

</script>
    <script>
        $(document).ready(function() {
            $('.library').css('display','none');
            $('.reviewer').css('display','none');
            var value;
            $('#role').on('change', function() {

                value = $(this).find(":selected").val();


                if (value == 0) {
                    $('.library').css('display','none');
                    $('.reviewer').css('display','block');
                } else if (value == 1) {
                    $('.reviewer').css('display','none');
                    $('.library').css('display','block');
                }
            });
        });
    </script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<script>
    document.getElementById('reviewerType').addEventListener('change', function () {
        var bankDetailsFields = document.getElementById('bankDetailsFields');
       console.log(this.value );
        if (this.value === 'internal') {
            bankDetailsFields.style.display = 'none';
        } else {
            bankDetailsFields.style.display = 'block';
        }
    });

    function loadFile(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    }
</script>

</html>
<style>

</style>
