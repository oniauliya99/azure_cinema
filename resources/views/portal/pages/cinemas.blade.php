@extends('portal.master.home')

@section('title', 'Manage Cinemas')

@section('content')

<div class="content-wrapper">
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cinemas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item">Items</li>
                <li class="breadcrumb-item active">Cinemas</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Cinema Lists</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <ul class="nav">
                    <li class="nav-item mr-2">
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#create-cinemas">
                        <i class="fas fa-plus mr-1 mr-2"></i>
                        Create New
                      </button>
                    </li>
                    <!-- /.nav-item -->
                    <li class="nav-item">
                      <form action="#" target="_blank">
                        <button type="button" class="btn btn-sm btn-success">
                          <i class="fas fa-print mr-2"></i>
                          Print Documents
                        </button>
                      </form>
                    </li>
                    <!-- /.nav-item -->
                  </ul>
                  <!-- /.nav -->
                </div>
                <!-- /.col -->

                <div class="col">
                  <div class="input-group input-group-sm float-right" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.input-group -->
                </div>
                <!-- /.col -->
                <div class="col">
                  <select class="form-control form-control-sm select2">
                    <option selected="selected">Name</option>
                    <option>Recently added</option>
                  </select>
                </div>
                <!-- /.col -->
              </div>

              <table class="table table-bordered mt-2">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Cinema Image</th>
                    <th>Cinema Name</th>
                    <th>Location</th>
                    <th>Seats</th>
                    <th class="text-center" style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1.</td>
                    <td>
                        <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="" class="img-sm elevation-2">
                    </td>
                    <td>Cinema 1</td>
                    <td>Malang Kota</td>
                    <td class="text-center">
                        <a href="/cinema_seats" class="btn btn-outline-primary btn-sm">
                            Seats - 0
                        </a>
                    </td>
                    <td class="text-center">
                      <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#view-cinemas">View</button>
                          <button type="button" class="btn btn-sm btn-warning ml-1 mr-1" data-toggle="modal" data-target="#change-cinemas">Change</button>
                          <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#remove-cinemas">Remove</button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>
                        <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="" class="img-sm elevation-2">
                    </td>
                    <td>Cinema 2</td>
                    <td>Malang Kota</td>
                    <td class="text-center">
                        <a href="/cinema_seats" class="btn btn-outline-primary btn-sm">
                            Seats - 0
                        </a>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#view-cinemas">View</button>
                            <button type="button" class="btn btn-sm btn-warning ml-1 mr-1" data-toggle="modal" data-target="#change-cinemas">Change</button>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#remove-cinemas">Remove</button>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <td>3.</td>
                    <td>
                        <img src="{{ asset('dist/img/user1-128x128.jpg') }}" alt="" class="img-sm elevation-2">
                    </td>
                    <td>Cinema 3</td>
                    <td>Malang Kota</td>
                    <td class="text-center">
                        <a href="/cinema_seats" class="btn btn-outline-primary btn-sm">
                            Seats - 0
                        </a>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#view-cinemas">View</button>
                            <button type="button" class="btn btn-sm btn-warning ml-1 mr-1" data-toggle="modal" data-target="#change-cinemas">Change</button>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#remove-cinemas">Remove</button>
                        </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <ul class="pagination pagination-sm m-0 float-right">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
              </ul>
            </div>
          </div>
          <!-- /.card -->

          <!-- Modal For View Item -->
          <div class="modal fade" id="view-cinemas">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Cinema 1</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Modal Body Start Here -->
                  <div class="row">
                    <!-- Item image -->
                    <div class="col">
                      <div class="position-relative" style="width: 350px;">
                        <img src="dist/img/photo1.png" alt="Photo 1" class="img-thumbnail img-fluid">
                      </div>
                    </div>
                    <!-- /.col -->

                    <div class="col">
                      <table class="table table-borderless">
                        <tr>
                          <th>Cinema</th>
                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                        </tr>
                        <tr>
                          <th>Details</th>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro tempora quo, consequuntur velit aliquam molestias!</td>
                        </tr>
                        <tr>
                          <th>Location</th>
                          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro tempora quo, consequuntur velit aliquam molestias!</td>
                        </tr>
                      </table>
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.Modal Body -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Done</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

          <!-- Modal For Create -->
          <div class="modal fade" id="create-cinemas">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Create New Cinema</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Modal Body Start Here -->
                  <form>

                    <div class="form-group">
                      <label class="col-form-label" for="emailInput">Cinema Name</label>
                      <input type="text" class="form-control" id="emailInput" placeholder="Enter ...">
                    </div>
                      <!-- /.form-group -->

                    <div class="form-group">
                      <label class="col-form-label" for="emailInput">Location</label>
                      <input type="text" class="form-control" id="emailInput" placeholder="Enter ...">
                    </div>
                      <!-- /.form-group -->

                    <div class="form-group">
                      <label class="col-form-label" for="emailInput">Cinema Details</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                      <label class="d-block">Item Background</label>
                      <img src="dist/img/default-150x150.png" id="previewImage_create" class="img-thumbnail" alt="#" style="width: 150px;">

                      <div class="custom-file mt-3">
                        <input type="file" class="custom-file-input" id="imgInput_create" required>
                        <label class="custom-file-label" id="fileName_create" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                      </div>
                    </div>
                    <!-- /.form-group -->

                  <!-- /.Modal Body -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>

                    <div class="row">
                      <div class="col">
                        <button type="reset" class="btn btn-default">Reset</button>
                      </div>
                      <div class="col">
                        <button type="submit" class="btn btn-primary">Create</button>
                      </div>
                    </div>
                    <!-- /.row -->
                </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

          <!-- Modal For Edit -->
          <div class="modal fade" id="change-cinemas">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Change Cinema Details</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Modal Body Start Here -->
                  <form>
                      <!-- input states -->
                    <div class="form-group">
                        <label class="col-form-label" for="cinemaInput">Cinema Name</label>
                        <input type="text" class="form-control" id="cinemaInput" placeholder="Enter ...">
                    </div>
                      <!-- /.form-group -->

                    <div class="form-group">
                      <label class="col-form-label" for="locationInput">Location</label>
                      <input type="text" class="form-control" id="locationInput" placeholder="Enter ...">
                    </div>
                      <!-- /.form-group -->

                    <div class="form-group">
                        <label class="col-form-label" for="emailInput">Cinema Details</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                      <label class="d-block">Item Background</label>
                      <img src="dist/img/default-150x150.png" id="previewImage_update" class="img-thumbnail" alt="#" style="width: 150px;">

                      <div class="custom-file mt-3">
                        <input type="file" class="custom-file-input" id="imgInput_update" required>
                        <label class="custom-file-label" id="fileName_update" for="validatedCustomFile">Choose file...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                      </div>
                    </div>
                    <!-- /.form-group -->

                  <!-- /.Modal Body -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>

                    <div class="row">
                      <div class="col">
                        <button type="reset" class="btn btn-default">Reset</button>
                      </div>
                      <div class="col">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </div>

                </div>
                </form>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

          <!-- Modal For Delete -->
          <div class="modal fade" id="remove-cinemas">
            <div class="modal-dialog">
              <div class="modal-content bg-danger">
                <div class="modal-header">
                  <h4 class="modal-title">Remove "Member 1001"</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure want to remove "Member 1001" ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-outline-light">Remove</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
