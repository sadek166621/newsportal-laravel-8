@extends('admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('manage-roles')}}">Manage-Roles</a></li>
        </ol>
    </section>

    <section class="content">
        @if ($errors->any())
            <div class="alert alert-danger">
                <div>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            </div>
        @endif

        @if (Session::has('success'))
            <div class="alert alert-success">
                <div>
                    <p>{{ Session::get('success') }}</p>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title" style="margin-left: 467px">Manage-Roles</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr >
                                <th width="100px">Sl</th>
                                <th width="200px" >Name</th>
                                <th width="400px" >Permission</th>
                                <th width="200px">Action</th>
                            </tr>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $loop->index+1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            @foreach ($role->permissions as $perm)
                                                <span class="badge badge-info mr-1">
                                                {{ $perm->name }}
                                            </span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <a class="btn btn-primary text-white" href="{{url('/edit-roles',['id'=>$role->id])}}"><i class="fa fa-edit" aria-hidden="true"></i></a>

                                            <a class="btn btn-danger text-white" href="{{route('delete-roles',['id'=>$role->id])}}"onclick="alert('Are you sure?')"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                            @endforeach
                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
    <!-- Main content -->

@endsection
