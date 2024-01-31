@extends('admin.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <small></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('subcategory')}}">Sub Category</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header with-border">
                        @include("admin.include.messages")
                        <h3 class="box-title">SUB-CATEGORY TABLE</h3>
                        <button style="position: relative;left: 700px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                            ADD SUB-CATEGORY
                        </button>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tr>
                                <th style="width: 20px">ID</th>
                                <th style="width: 70px">Category</th>
                                <th style="width: 70px">sub_cat</th>
                                <th style="width: 70px">image</th>
                                <th style="width: 25px">Publication Status</th>
                                <th style="width: 25px">Acion</th>
                            </tr>
                            @foreach($subcategorys as $subcategory)
                                <tr>
                                    <td style="width: 20px">{{$subcategory->id}}</td>
                                    <td style="width: 70px">{{$subcategory->category_name}}</td>
                                    <td style="width: 70px">{{$subcategory->subcategory_name}}</td>
                                    <td style="width: 70px">
                                        <img src="{{asset($subcategory->image)}}" alt="" height="50" width="70">
                                    </td>
                                    <td style="width: 25px">{{$subcategory->publication_status==1 ?'published' :'unpublished'}}</td>
                                    <td style="width: 25px">
                                        @if($subcategory->publication_status==1)
                                            <a href="{{route('publication-subcategory',['id'=>$subcategory->id])}}" class="btn btn-warning"><i class="fa fa-caret-square-o-down" aria-hidden="true"></i></a>
                                        @else
                                            <a href="{{route('unpublication-subcategory',['id'=>$subcategory->id])}}" class="btn btn-success"><i class="fa fa-caret-square-o-up" aria-hidden="true"></i></a>
                                        @endif
                                        <a href="{{route('edit-subcategory',['id'=>$subcategory->id])}}"class="btn btn-primary"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        <a href="{{route('delete-subcategory',['id'=>$subcategory->id])}}" onclick="alert('Are you sure?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                    </div><!-- /.box-body -->
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <li><a href="#">&laquo;</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div><!-- /.box -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary"style="position: relative;left: 33px;height: 367px;width: 500px;border: 2px solid #3c8dbc;">
                                <div class="box-header with-border">

                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form style="position: relative; left: 151px" method="post" action="{{route('add-subcat')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="box-body" style="position: relative;top: 40px;right: 150px;">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" style="position: relative;bottom: 20px;">Category</label>
                                            <select name="category_id" class="form-control"style="position: relative;bottom: 13px;">
                                                @foreach($categorys as $category)
                                                    <option  value="{{ $category->id }}"style="font-size: medium;">{{$category->category_name}}</option>
                                                @endforeach
                                            </select>

                                            <label for="exampleInputEmail1">Sub Category</label>
                                            <input name="subcategory_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sub Cat" style="height: 45px;width: 476px;">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="image">
                                        </div>
                                        <div class="form-group"style="position: relative;top: 10px;">
                                            <label for="exampleFormControlFile1">publication status</label>
                                            <input type="radio" name="publication_status" value="1" checked > published
                                            <input type="radio" name="publication_status" value="0"> unpublished
                                        </div>
                                        <button  type="submit" class="btn btn-primary" style="position: relative;top: 10px;width: 477px;">Submit</button>
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
