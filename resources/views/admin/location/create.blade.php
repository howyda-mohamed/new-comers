@extends('layouts.admin')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Location</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Location</li>
              <li class="breadcrumb-item"><a href="{{route('admin.locations')}}">Location</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    @if (Session::has('status'))
    <div class="alert alert-success">{{ Session::get('status') }}</div>
    @endif
    @if (Session::has('error'))
    <div class="alert alert-danger">{{ Session::get('error') }}</div>
    @endif
    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Location</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route('admin.locations.store')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                        <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Title" name="title">
                        </div>
                        @error("title")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                        <label for="exampleInputPassword1">Sub_Title</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Sub_title" name="sub_title">
                        </div>
                        @error("sub_title")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                        <label for="exampleInputPassword1">Phone</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone" name="phone">
                        </div>
                        @error("phone")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
                        </div>
                        @error("email")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-group">
                        <label>Location</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Location" name="location"></textarea>
                        </div>
                        @error("location")
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                </div>
                @error('image')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </section>
  </div>
@endsection
