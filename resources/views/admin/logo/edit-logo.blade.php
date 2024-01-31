@extends('admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('logo')}}">logo</a></li>
            {{--            <li class="active">Data tables</li>--}}
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        @include("admin.include.messages")
                        <h3 class="box-title">ADD Logo TABLE</h3>
                        <button style="position: relative;left: 700px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                            ADD LOGO
                        </button>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 20px">ID</th>
                                <th style="width: 70px">Image</th>
                                <th style="width: 25px">Publication Status</th>
                                <th style="width: 25px">Acion</th>
                            </tr>
                            @foreach($logos as $logo)
                                <tr>
                                    <td style="width: 20px">{{$logo->id}}</td>
                                    <td style="width: 70px">
                                        <img src="{{asset($logo->image)}}" alt="image" height="50px" width="70px">
                                    </td>
                                    <td style="width: 25px">{{$logo->publication_status==1 ?'published' :'unpublished' }}</td>
                                    <td style="width: 25px">
                                        @if($logo->publication_status==1)
                                            <a href="{{route('publication-logo',['id'=>$logo->id])}}" class="btn btn-warning"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a>
                                        @else
                                            <a href="{{route('unpublication-logo',['id'=>$logo->id])}}" class="btn btn-success"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></a>
                                        @endif
{{--                                        <a href="{{route('edit-logo',['id'=>$logo->id])}}"class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>--}}
                                        <a href="{{route('delete-logo',['id'=>$logo->id])}}" onclick="alert('Are you sure?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div><!-- /.box-body -->
                    {{--                    <div class="box-footer clearfix">--}}
                    {{--                        <ul class="pagination pagination-sm no-margin pull-right">--}}
                    {{--                            <li>{{$categorys->links()}}</li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary"style="position: relative;left: 33px;height: 315px;width: 500px;border: 2px solid #3c8dbc;">
                                <div class="box-header with-border">

                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form style="position: relative; left: 149px" method="post" action="{{route('update.logo')}}" enctype="multipart/form-data" >
                                    @csrf
                                    <h2 style="position: absolute;top: 10px;left: 29px;">ADD LOGO</h2>
                                    <div class="box-body" style="position: relative;top: 40px;right: 150px;">
                                        <div class="form-group" style="position: relative;top: 66px;">
                                            <input type="file" name="image">
                                            <input type="hidden" name="logos_id" value="{{$logo->id}}" />
                                        </div>
                                        <div class="form-group"style="position: relative;top: 82px;">
                                            <label for="exampleFormControlFile1">publication status</label>
                                            <input type="radio" name="publication_status" value="1" checked > published
                                            <input type="radio" name="publication_status" value="0"> unpublished
                                        </div>
                                        <button  type="submit" class="btn btn-primary" style="position: relative;top: 93px;width: 477px;">Submit</button>
                                    </div><!-- /.box-body -->

                                </form>
                            </div><!-- /.box -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
