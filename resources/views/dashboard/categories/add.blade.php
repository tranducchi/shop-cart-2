@extends('dashboard/master')
@section('title', 'Add Categories')
@section('category', 'Add Category')
@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Categories</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" method="post" action="/dashboard/categories">
          @csrf
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Categories Name</label>
              <input type="text" class="form-control" name="categories_name" id="exampleInputEmail1" placeholder="Enter category name">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </form>
      </div>
@endsection