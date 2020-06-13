@extends('layout/main')

@section('container')
<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

 <!-- Custom styles for this template -->
 <link href="css/new-age.css" rel="stylesheet">

<header class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <!-- Material form subscription -->
            <div class="card">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>P O S T</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5">

                    <!-- Form -->
                    <!-- <form class="text-center" style="color: #757575;" action="" method="post"> -->
                    <form class="text-center" style="color: #757575;" method="post" id="formImgInp" action="postnote" enctype="multipart/form-data">
                        @csrf
                        <p>Thank you for your contribution by helping others in their studies.</p>

                        <p>
                            <a href="/post" target="_blank">Want to update or delete you POST?</a>
                        </p>

                        <!-- Name -->
                        <div class="md-form mt-3">
                            <input required name="name" type="name" id="materialSubscriptionFormPasswords" class="form-control">
                            <label for="materialSubscriptionFormPasswords">Full Name</label>
                        </div>

                        <!-- Title -->
                        <div class="md-form">
                            <input required name="title" type="title" id="materialSubscriptionFormEmail" class="form-control">
                            <label for="materialSubscriptionFormEmail">Title</label>
                        </div>
                        <!-- Tag -->
                        <select required name="major" class="custom-select">
                            <option value="" disabled selected>Select the Major for your Topic</option>
                            <option value="1">CS</option>
                            <option value="2">Design</option>
                            <option value="3">IB</option>
                            <option value="4">BMM</option>
                            <option value="5">FIP</option>
                            <option value="6">BIS</option>
                            <option value="7">Comm</option>
                        </select>
                        <br>

                        <div class="file-field">
                            <div class="btn btn-rounded purple-gradient btn-sm float-left">
                                <span>Choose file</span>
                                <input required accept="image/*" id="upload" type="file" name="image" onchange="readURL(this);" class="form-control">
                            </div>
                            <!-- <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload your file">
                            </div> -->
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Explanation</label>
                            <textarea required name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Publish</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form subscription -->
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            <div class="device-mockup iphone6_plus portrait white">
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <div class="d-none d-xl-block">
                    <img src="img/LogoHome.png" class="img-fluid" alt="">
                  </div>  
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</header>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/new-age.min.js"></script>
@endsection