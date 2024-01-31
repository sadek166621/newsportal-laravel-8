@extends('admin.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>

            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
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
                    <form action="{{route('update-users')}}" method="POST">
                        @csrf
                        <input type="hidden" name="users_id" value="{{$user->id}}">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="name">User Name</label>
                                    <input type="text" value="{{$user->name}}" class="form-control" id="name" name="name" placeholder="Enter Name">
                                </div>
                                <div class="form-group col-md-6 col-sm-12">
                                    <label for="email">User Email</label>
                                    <input type="text" value="{{$user->email}}" class="form-control" id="email" name="email" placeholder="Enter Email">
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
                                            <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-group col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save User</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
    <!-- Main content -->
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

@endsection
