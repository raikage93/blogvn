@extends('admin.layouts.app')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      @if (count($errors)>0)
          <div class="alert alert-danger">
            @foreach ($errors->all() as $err)
                {{$err}} <br>
            @endforeach
          </div>
      @endif
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tags</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="{{route('tag.store')}}">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tag Title</label>
                  <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tag Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tag Slug</label>
                  <input name="slug" type="text" class="form-control" id="exampleInputEmail1" placeholder="Tag Slug">
                </div>
                
                
                
             
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection