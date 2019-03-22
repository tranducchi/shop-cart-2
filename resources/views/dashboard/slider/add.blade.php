@extends('dashboard/master')
@section('title', 'Slider')
@section('category', 'Slider')
@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Slider</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="/dashboard/categories">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter category name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <input type="text" class="form-control" name="description" id="exampleInputEmail1" placeholder="Enter category name">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Select Image</label>
              <input type="file" id="exampleInputFile" name="img">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
@endsection