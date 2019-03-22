@extends('dashboard/master')
@section('title', 'Update Categories')
@section('category', 'Update Category')
@section('content')
<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Categories</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        @foreach($cat as $c)
        <form role="form" method="POST" action="{{route('categories.update', ['slug'=>$c->slug])}}">
          @csrf
          {{ method_field('PUT') }}
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Categories Name</label>
            <input type="text" class="form-control" name="categories_name" id="exampleInputEmail1" placeholder="Enter category name" value="{{$c->name}}">
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
        @endforeach
      </div>
@endsection