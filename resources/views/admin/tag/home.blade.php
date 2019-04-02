@extends('admin.layouts.app')
@section('css')
<link rel="stylesheet" href="admin/plugins/datatables/dataTables.bootstrap.css">
@endsection
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      TAGS
      <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
              <a href="{{route('tag.create')}}" class="btn btn-primary col-lg-offset-5">New Tag</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Name</th>
                
                  <th>Slug</th>
                  
                  <th>Edit</th>
                  <td>Delete</td>
                </tr>
                </thead>
                <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->slug}}</td>
                        <td><a href="{{route('tag.edit',$tag->id)}}"><span class="glyphicon glyphicon-pencil"></span> Edit</a></td>
                        <td>
                                <form action="{{route('tag.destroy',$tag->id)}}" id="form-delete-{{$tag->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
              
              
                                      </form>
                            <a href="" onclick="event.preventDefault();if(confirm('Are you sure')){document.getElementById('form-delete-{{$tag->id}}').submit();}"><span class="glyphicon glyphicon-erase"></span> Delete</a></td>
                    </tr>                    
                @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                        <th>S.No</th>
                  <th>Name</th>
                
                  <th>Slug</th>
                  
                  <th>Edit</th>
                  <td>Delete</td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
    <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
@endsection
@section('script')
<script src="admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script>
        $(document).ready(function(){
            $("#example1").DataTable();
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
              });
          })
      </script>
@endsection