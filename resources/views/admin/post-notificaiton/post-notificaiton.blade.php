@extends('admin.master')
@section('content')

    <style>
        .ck-editor__editable {
            min-height: 250px;
        }
    </style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="">Add-Post Notificaiton</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">

                    </div><!-- /.box-header -->
                    <h4 class="text-center"></h4>
                    <!-- form start -->
                    <form class="form-horizontal" action="{{route('add-post-notificaiton')}}" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
{{--                            <div class="row">--}}
                                @include("admin.include.messages")
                                <div class="col-sm-12 text-center"><h4>ADD POST NOTIFICATION</h4> <hr/></div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">title</label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control" placeholder="title" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Post Description</label>
                                <div class="col-sm-10">
                                    <textarea name="description"  id="ckeditor" rows="3" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Video Link</label>
                                <div class="col-sm-10">
                                    <input type="text" name="video_link" class="form-control" placeholder="Video link" required/>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="reset" class="btn btn-default">Reset</button>
                                <button type="submit" name="btn" class="btn btn-info pull-right" onclick="validate();">Submit</button>
                            </div><!-- /.box-footer -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
