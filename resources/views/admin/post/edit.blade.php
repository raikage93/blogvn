@extends('admin.layouts.app')
@section('css')
<link rel="stylesheet" href="admin/plugins/select2/select2.min.css">
@endsection
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
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('post.update',$post->id)}}" method="post">
            {{ csrf_field() }}
            @method('PUT')
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Post Title</label>
                  <input value="{{$post->title}}" name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Post Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Post Sub Title</label>
                  <input value="{{$post->subtitle}}" name="sub_title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sub Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Post Slug</label>
                  <input value="{{$post->slug}}" name="slug" type="text" class="form-control" id="exampleInputEmail1" placeholder="Slug">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input name="image" type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input @if ($post->status==1)
                        {{'checked'}}
                    @endif type="checkbox" name="publish"> Publish
                  </label>
                </div>
                <div class="form-group">
                  <label>Select Tags</label>
                  <select name="tags[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    @foreach ($tags as $tag)
                        <option value="{{$tag->id}}" @foreach ($post->tags as $postTag)
                          @if ($postTag->id==$tag->id)
                              selected
                          @endif
                      @endforeach>{{$tag->name}} </option>
                    @endforeach
                    
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Categories</label>
                  <select name="categories[]" class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true">
                    @foreach ($cats as $cat)
                    <option value="{{$cat->id}}" @foreach ($post->categories as $postCat)
                      @if ($postCat->id==$cat->id)
                          selected
                      @endif 
                   @endforeach>{{$cat->name}} </option>
                @endforeach
                  </select>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Bootstrap WYSIHTML5
                    <small>Simple and fast</small>
                  </h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove">
                      <i class="fa fa-times"></i></button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body pad">
                  
                    <textarea name="body" id="editor1" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$post->body}}</textarea>
               
                </div>
              </div>
              <div class="box-footer">
                <input type="submit" value="Submit" class="btn btn-primary"/>
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
@section('script')

<script src="admin/plugins/select2/select2.full.min.js"></script>
<script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1');
      $(".select2").select2();
    
    });
  </script>
@endsection