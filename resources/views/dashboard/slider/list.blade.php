@extends('/dashboard/master')
@section('title', 'List Categories')
@section('category', 'List Category')
@section('content')
<div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"></div></div><div class="col-sm-6"></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
            <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">STT
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 225px;">ID
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Name
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Slug
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 113px;">Edit
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 113px;">Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                    {{-- 
                @if(count($cat) > 0)
                    @foreach($cat as $c) --}}
                    <tr role="row" class="odd">
                        <td class="sorting_1"></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href="/dashboard/categories/edit"><i class="fa fa-fw fa-pencil-square-o"></i></a></td>
                        <td>
                        <form method="post" action="">
                            @csrf
                            {{ method_field('DELETE') }}
                           
                            <button type="submit" class="border-0" style="padding: 0;
                            border: none;
                            background: none;" onclick="return confirm('Delete this categories ?')"><i class="fa fa-fw fa-close text-danger"></i></button>
                        </form>
                                
                           
                
                        </td>
                    </tr>
                       
                    {{-- @endforeach
                @else
                {!!"<a class='alert alert-warning'>Not found categories !</a>"!!}
                @endif --}}
                
            </tbody>
          </table>
        </div>
        {{-- Pagination --}}
        <!-- /.box-body -->
      </div>
@endsection