@extends('layout/main')

@section('container')
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

 <!-- Custom styles for this template -->
 <!-- <link href="css/new-age.css" rel="stylesheet"> -->

<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="col-lg-15 my-auto">
    <div class="device-container">
      <div class="device-mockup iphone6_plus portrait white">
        <div class="device">
          <div class="screen">
              <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else!  -->
            <div class="d-lg-none d-md-none d-xl-none text-center">
              <img src="img/LogoHome.png" class="img-fluid" alt="">
            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Heading -->
  <!-- <h1 class="h3 mb-2 text-gray-800">Post Editor</h1> -->
  <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary text-center">P O S T</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> Entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div></div></div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Full name</th>
            <th scope="col">Image</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
            </tr>
          </thead>
          @foreach($cs as $cs)
          <tbody style="background:white">
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$cs -> name}}</td>
              <td><img src="img/post/{{$cs -> img_url}}"></td>
              <td>{{$cs -> cat_name}}</td>
              <td>{{$cs -> post_description}}</td>
              <td>
              <a href="{{ route('posts.update', $cs->post_id) }}"><button class="btn-accept" style="color:green;font-weight:bold">Edit Post</button>
            </a>
              {{-- <a href="{{ url('/update') }}"><button class="btn-accept" style="color:white;font-weight:bold">Edit Post</button>
                </a> --}}
                <br><br>
                 
                <a href="DeletePost/{{$cs -> post_id}}"><button  class="btn-delete" style="color:red;font-weight:bold">Delete</button></a>
              
              </td>
              </tr>
              @endforeach
          @foreach($design as $design)
          <tbody style="background:white">
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$design -> name}}</td>
              <td><img src="img/post/{{$design -> img_url}}"></td>
              <td>{{$design -> cat_name}}</td>
              <td>{{$design -> post_description}}</td>
              <td>
              <a href="{{ route('posts.update', $design->post_id) }}"><button class="btn-accept" style="color:green;font-weight:bold">Edit Post</button>
            </a>
              {{-- <a href="{{ url('/update') }}"><button class="btn-accept" style="color:white;font-weight:bold">Edit Post</button>
                </a> --}}
                <br><br>
                 
                <a href="DeletePost/{{$cs -> post_id}}"><button  class="btn-delete" style="color:red;font-weight:bold">Delete</button></a>
              
              </td>
              </tr>
              @endforeach
          @foreach($ib as $ib)
          <tbody style="background:white">
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$ib -> name}}</td>
              <td><img src="img/post/{{$ib -> img_url}}"></td>
              <td>{{$ib -> cat_name}}</td>
              <td>{{$ib -> post_description}}</td>
              <td>
              <a href="{{ route('posts.update', $ib->post_id) }}"><button class="btn-accept" style="color:green;font-weight:bold">Edit Post</button>
            </a>
              {{-- <a href="{{ url('/update') }}"><button class="btn-accept" style="color:white;font-weight:bold">Edit Post</button>
                </a> --}}
                <br><br>
                 
                <a href="DeletePost/{{$ib -> post_id}}"><button  class="btn-delete" style="color:red;font-weight:bold">Delete</button></a>
              
              </td>
              </tr>
              @endforeach
          @foreach($bmm as $bmm)
          <tbody style="background:white">
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$bmm -> name}}</td>
              <td><img src="img/post/{{$bmm -> img_url}}"></td>
              <td>{{$bmm -> cat_name}}</td>
              <td>{{$bmm -> post_description}}</td>
              <td>
              <a href="{{ route('posts.update', $bmm->post_id) }}"><button class="btn-accept" style="color:green;font-weight:bold">Edit Post</button>
            </a>
              {{-- <a href="{{ url('/update') }}"><button class="btn-accept" style="color:white;font-weight:bold">Edit Post</button>
                </a> --}}
                <br><br>
                 
                <a href="DeletePost/{{$bmm -> post_id}}"><button  class="btn-delete" style="color:red;font-weight:bold">Delete</button></a>
              
              </td>
              </tr>
              @endforeach
          @foreach($fip as $fip)
          <tbody style="background:white">
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$fip -> name}}</td>
              <td><img src="img/post/{{$fip -> img_url}}"></td>
              <td>{{$fip -> cat_name}}</td>
              <td>{{$fip -> post_description}}</td>
              <td>
              <a href="{{ route('posts.update', $fip->post_id) }}"><button class="btn-accept" style="color:green;font-weight:bold">Edit Post</button>
            </a>
              {{-- <a href="{{ url('/update') }}"><button class="btn-accept" style="color:white;font-weight:bold">Edit Post</button>
                </a> --}}
                <br><br>
                 
                <a href="DeletePost/{{$fip -> post_id}}"><button  class="btn-delete" style="color:red;font-weight:bold">Delete</button></a>
              
              </td>
              </tr>
              @endforeach
          @foreach($bis as $bis)
          <tbody style="background:white">
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$bis -> name}}</td>
              <td><img src="img/post/{{$bis -> img_url}}"></td>
              <td>{{$bis -> cat_name}}</td>
              <td>{{$bis -> post_description}}</td>
              <td>
              <a href="{{ route('posts.update', $bis->post_id) }}"><button class="btn-accept" style="color:green;font-weight:bold">Edit Post</button>
            </a>
              {{-- <a href="{{ url('/update') }}"><button class="btn-accept" style="color:white;font-weight:bold">Edit Post</button>
                </a> --}}
                <br><br>
                 
                <a href="DeletePost/{{$bis -> post_id}}"><button  class="btn-delete" style="color:red;font-weight:bold">Delete</button></a>
              
              </td>
              </tr>
              @endforeach
          @foreach($comm as $comm)
          <tbody style="background:white">
              <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$comm -> name}}</td>
              <td><img src="img/post/{{$comm -> img_url}}"></td>
              <td>{{$comm -> cat_name}}</td>
              <td>{{$comm -> post_description}}</td>
              <td>
              <a href="{{ route('posts.update', $comm->post_id) }}"><button class="btn-accept" style="color:green;font-weight:bold">Edit Post</button>
            </a>
              {{-- <a href="{{ url('/update') }}"><button class="btn-accept" style="color:white;font-weight:bold">Edit Post</button>
                </a> --}}
                <br><br>
                 
                <a href="DeletePost/{{$comm -> post_id}}"><button  class="btn-delete" style="color:red;font-weight:bold">Delete</button></a>
              
              </td>
              </tr>
              @endforeach
       
              <!-- <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td><img src="img/post/PrimaryNumber.png"></td>
              <td>@fat</td>
              <td>@fat</td>
              <td>@fat</td>
              </tr>
              <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td><img src="img/post/OddOrEven.png"></td>
              <td>@twitter</td>
              <td>@twitter</td>
              <td>@twitter</td>
              </tr> -->
          </tbody>
          <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 25 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div></div>
        </table>
      </div>
    </div>
  </div>
</div>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

@endsection