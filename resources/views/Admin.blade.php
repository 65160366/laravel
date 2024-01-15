@extends('layouts.default')

@section('title', 'Login')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>General Form</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">General Form</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <section class="content">
        <div class="col-md">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Adminlte</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputFname">First name</label>
                    <input type="fname" class="form-control" id="exampleInputFname" placeholder="Enter first name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputLname">Last name</label>
                    <input type="lname" class="form-control" id="exampleInputLname" placeholder="Enter last name">
                  </div>

                  <div class="form-group">
                    <label>Birthday</label>
                    <input type="date" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputAge">Age</label>
                    <input type="age" class="form-control" id="exampleInputAge" placeholder="Enter age">
                  </div>

                   <label >Gender</label>
                  <div class="form-group">
                    <div class="form-check">
                        <input type="radio" name="Gender" class="form-check-input" id="Male">
                        <label class="form-check-label" for="Male">Male</label>
                        &emsp;&emsp;&emsp;
                        <input type="radio" name="Gender" class="form-check-input" id="Female">
                        <label class="form-check-label" for="Female">Female</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Picture</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" rows="3" placeholder="Enter address"></textarea>
                    </div>
                  </div>

                  <div>
                    <div class="form-group">
                      <label>Color</label>
                      <select class="form-control">
                        <option>Red</option>
                        <option>Yellow</option>
                        <option>Blue</option>
                        <option>white</option>
                        <option>Black</option>
                      </select>
                    </div>

                    <div>
                        <div class="form-group">
                            <label>Music</label>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Hip-Hop</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" >
                            <label class="form-check-label">Jazz</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" >
                            <label class="form-check-label">Pop</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">Classic</label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">K-Pop</label>
                          </div>
                        </div>
                    </div>

                  </div>
                  <label >Confirm</label>
                  <div class="form-check">

                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Confirm</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

          </div>
      </section>

@endsection
