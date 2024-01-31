@extends('admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('admins')}}">Add-Admin</a></li>
{{--            <li class="active">Data tables</li>--}}
        </ol>
    </section>
    <section class="content">

        <div class="row">
            <div class="col-md-12 ">
                <!-- Horizontal Form -->
                <div class="box box-info " style="border-top-color: #3c8dbc">
                    <div class="box-header with-border">

                    </div><!-- /.box-header -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif

                <!-- form start -->
                    <form action="{{route('add-admins')}}" method="POST">
                        @csrf
                        <div class="box-header with-border">
                            <h3 class="box-title" style="margin-left: 467px">ADD-ADMINS</h3>
                            {{--                        <button style="position: relative;left: 700px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">--}}
                            {{--                            ADD SUPPLIER--}}
                            {{--                        </button>--}}
                        </div><!-- /.box-header -->
                        <div class="box-body">
                            <div class="form-group">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="name">admin Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="email">admin Email</label>
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password_confirmation">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="password">Assign Roles</label>
                                    <select name="roles[]" id="roles" class="form-control js-example-basic-multiple" multiple="multiple">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="email">admin username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save admin</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
    <!-- Main content -->


@endsection
