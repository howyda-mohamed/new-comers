@extends('layouts.admin')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Locations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline scroll-horizontal" role="grid" aria-describedby="example2_info">
              <thead>
              <tr role="row">
                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Title</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Email</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Image</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Location</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Action</th>
              </thead>
              <tbody>
                @isset($locations)
                @foreach ($locations as $loc)
                    <tr class="odd">
                        <td>{{$loc->title}}</td>
                        <td>{{$loc->email}}</td>
                        <td><img  width="100" height="100" src="{{$loc->image}}"></td>
                        <td>{{$loc->location}}</td>
                        <td><a href="{{route('admin.locations.delete',$loc->id)}}" class="btn btn-block btn-danger">Delete</a></td>
                    </tr>
                @endforeach
                @endisset
              </tbody>
              <div class="card-footer clearfix">
                <a href="{{route('admin.locations.create')}}" class="btn btn-success">Add Location</a>
                <ul class="pagination pagination-sm m-0 float-right">
                    {{$locations->links()}}
                </ul>
              </div>
              </table>
              </div>
          </div>
    </section>
  </div>
@endsection
